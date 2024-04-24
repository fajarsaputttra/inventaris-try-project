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
    </tr>
    @foreach($aset as $aset)
    <tr>
        <td>{{$aset->IDAset}}</td>
        <td>{{$aset->NamaAset}}</td>
        <td>{{$aset->JenisAset}}</td>
        <td>{{$aset->Deskripsi}}</td>
        <td>{{$aset->IDLokasi}}</td>
        <td>{{$aset->IDKategori}}</td>
        <td>{{$aset->Kondisi}}</td>
        <td>{{$aset->TanggalPembelian}}</td>
        <td>{{$aset->NilaiAset}}</td>
        <td>{{$aset->Catatan}}</td>
    </tr>
    @endforeach
</table>