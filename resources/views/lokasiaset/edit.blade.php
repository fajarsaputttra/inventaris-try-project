<h1>Edit Lokasi Aset</h1>
<form action="/lokasiaset/{{$lokasiaset->IDLokasi}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="IDLokasi" placeholder="ID Lokasi" value="{{$lokasiaset->IDLokasi}}" readonly><br>
    <input type="text" name="NamaLokasi" placeholder="Nama Lokasi" value="{{$lokasiaset->NamaLokasi}}"><br>
    <textarea name="Deskripsi" placeholder="Deskripsi" cols="30" rows="10">{{$lokasiaset->Deskripsi}}</textarea><br>
    <input type="text" name="KunKer" placeholder="KunKer" value="{{$lokasiaset->KunKer}}"><br>
    <input type="submit" name="submit" value="Update">
</form>