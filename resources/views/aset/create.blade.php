<h1>Tambahkan Aset</h1>

<form action="/aset/store" method="POST">
    @csrf
    <input type="text" name="IDAset" placeholder="ID Aset"><br>
    <input type="text" name="NamaAset" placeholder="Nama Aset"><br>
    <input type="text" name="JenisAset" placeholder="Jenis Aset"><br>
    <textarea name="Deskripsi" placeholder="Deskripsi" cols="30" rows="10"></textarea><br>
    <input type="text" name="IDLokasi" placeholder="ID Lokasi"><br>
    <input type="text" name="IDKategori" placeholder="ID Kategori"><br>
    <select name="Kondisi">
        <option value="">Kondisi</option>
        <option value="Good">Good</option>
        <option value="Bad">Bad</option>
    </select><br>
    <input type="date" name="TanggalPembelian"><br>
    <input type="text" name="NilaiAset" placeholder="Nilai Aset"><br>
    <textarea name="Catatan" placeholder="Catatan" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Tambahkan">
</form>