<table border="1">
    <tr>
        <th>Id Aset</th>
        <th>Nama Kategori</th>
    </tr>
    @foreach($kategoriaset as $kataset)
    <tr>
        <td>{{$kataset->IDKategori}}</td>
        <td>{{$kataset->NamaKategori}}</td>
    </tr>
    @endforeach
</table>