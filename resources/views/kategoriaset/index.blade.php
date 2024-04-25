<table border="1">
    <tr>
        <th>Id Aset</th>
        <th>Nama Kategori</th>
        <th>AKSI</th>
    </tr>
    @foreach($kategoriaset as $kataset)
    <tr>
        <td>{{$kataset->IDKategori}}</td>
        <td>{{$kataset->NamaKategori}}</td>
        <td>
            <a href="/kategoriaset/{{$kataset->IDKategori}}/edit">Edit</a>
            <form action="/kategoriaset/{{$kataset->IDKategori}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
        </td>
    </tr>
    @endforeach
</table>
<a href="/kategoriaset/create">Tambahkan Kategori Aset</a>