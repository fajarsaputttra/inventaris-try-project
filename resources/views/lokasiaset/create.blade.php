<h1>Tambahkan Lokasi Aset</h1>
<form action="/lokasiaset/store" method="post">
    @csrf
    <input type="text" name="IDLokasi" placeholder="ID Lokasi"><br>
    <input type="text" name="NamaLokasi" placeholder="Nama Lokasi"><br>
    <textarea name="Deskripsi" placeholder="Deskripsi" cols="30" rows="10"></textarea><br>
    <input type="text" name="KunKer" placeholder="KunKer"><br>
    <input type="submit" name="submit" value="Tambahkan">
</form>