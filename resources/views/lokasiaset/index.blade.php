<table border="1">
    <tr>
        <th>Id Lokasi</th>
        <th>Nama Lokasi</th>
        <th>Deskripsi</th>
        <th>KunKer</th>
    </tr>
    @foreach($lokasiaset as $lokaset)
    <tr>
        <td>{{$lokaset->IDLokasi}}</td>
        <td>{{$lokaset->NamaLokasi}}</td>
        <td>{{$lokaset->Deskripsi}}</td>
        <td>{{$lokaset->KunKer}}</td>
    </tr>
    @endforeach
</table>