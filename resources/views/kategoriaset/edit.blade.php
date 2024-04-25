<h1>Edit Kategori Aset</h1>

<form action="/kategoriaset/{{$kategoriaset->IDKategori}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="IDKategori" placeholder="ID Kategori" value="{{$kategoriaset->IDKategori}}" readonly><br>
    <input type="text" name="NamaKategori" placeholder="Nama Kategori" value="{{$kategoriaset->NamaKategori}}"><br>
    <input type="submit" name="submit" value="Update">
</form>