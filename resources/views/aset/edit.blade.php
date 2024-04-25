<h1>Edit Aset</h1>

<form action="/aset/{{$aset->IDAset}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="IDAset" placeholder="ID Aset" value="{{$aset->IDAset}}" readonly><br>
    <input type="text" name="NamaAset" placeholder="Nama Aset" value="{{$aset->NamaAset}}"><br>
    <input type="text" name="JenisAset" placeholder="Jenis Aset" value="{{$aset->JenisAset}}"><br>
    <textarea name="Deskripsi" placeholder="Deskripsi" cols="30" rows="10">{{$aset->Deskripsi}}</textarea><br>
    <input type="text" name="IDLokasi" placeholder="ID Lokasi" value="{{$aset->IDLokasi}}"><br>
    <input type="text" name="IDKategori" placeholder="ID Kategori" value="{{$aset->IDKategori}}"><br>
    <select name="Kondisi">
        <option value="">Kondisi</option>
        <option value="Good" @if($aset->Kondisi == "Good")selected @endif>Good</option>
        <option value="Bad" @if($aset->Kondisi == "Bad")selected @endif>Bad</option>
    </select><br>
    <input type="date" name="TanggalPembelian" value="{{ $aset->TanggalPembelian ?? '' }}"><br>
    <input type="text" name="NilaiAset" placeholder="Nilai Aset" value="{{$aset->NilaiAset}}"><br>
    <textarea name="Catatan" placeholder="Catatan" cols="30" rows="10">{{$aset->Catatan}}</textarea><br>
    <input type="submit" name="submit" value="Update">
</form>