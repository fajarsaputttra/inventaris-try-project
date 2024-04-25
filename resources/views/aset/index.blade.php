<table border="1">
    <tr>
        <th>Id Aset</th>
        <th>Nama Aset</th>
        <th>Jenis Aset</th>
        <th>Deskripsi</th>
        <th>ID Lokasi</th>
        <th>ID Kategori</th>
        <th>Kondisi</th>
        <th>Tanggal Pembelian</th>
        <th>Nilai Aset</th>
        <th>Catatan</th>
        <th>AKSI</th>
    </tr>
    @foreach($aset as $as)
    <tr>
        <td>{{$as->IDAset}}</td>
        <td>{{$as->NamaAset}}</td>
        <td>{{$as->JenisAset}}</td>
        <td>{{$as->Deskripsi}}</td>
        <td>{{$as->IDLokasi}}</td>
        <td>{{$as->IDKategori}}</td>
        <td>{{$as->Kondisi}}</td>
        <td>{{$as->TanggalPembelian}}</td>
        <td>{{$as->NilaiAset}}</td>
        <td>{{$as->Catatan}}</td>
        <td>
            <a href="/aset/{{$as->IDAset}}/edit">Edit</a>
            <form action="/aset/{{$as->IDAset}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
<a href="/aset/create">Tambahkan Aset</a>