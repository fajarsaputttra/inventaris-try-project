<table border="1">
    <tr>
        <th>Id Lokasi</th>
        <th>Nama Lokasi</th>
        <th>Deskripsi</th>
        <th>KunKer</th>
        <th>AKSI</th>
    </tr>
    @foreach($lokasiaset as $lokaset)
    <tr>
        <td>{{$lokaset->IDLokasi}}</td>
        <td>{{$lokaset->NamaLokasi}}</td>
        <td>{{$lokaset->Deskripsi}}</td>
        <td>{{$lokaset->KunKer}}</td>
        <td>
            <a href="/lokasiaset/{{$lokaset->IDLokasi}}/edit">Edit</a>
            <form action="/lokasiaset/{{$lokaset->IDLokasi}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
<a href="/lokasiaset/create">Tambahkan Kategori Aset</a>