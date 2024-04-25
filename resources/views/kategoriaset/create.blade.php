<h1>Tambahkan Kategori Aset</h1>

<form action="/kategoriaset/store" method="post">
    @csrf
    <input type="text" name="IDKategori" placeholder="ID Kategori"><br>
    <input type="text" name="NamaKategori" placeholder="Nama Kategori"><br>
    <input type="submit" name="submit" value="Tambahkan">
</form>