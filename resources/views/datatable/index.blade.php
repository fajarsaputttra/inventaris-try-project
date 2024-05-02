@extends('layout.master')
<!-- Content Wrapper. Contains page content -->
@section('title','DataTable')
@push('script')
  <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
  <script>
    $(function(){
      $('#datatable').DataTable();
    });
  </script>
@endpush

@push('style')
  <link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush
@section('content-head')
<table id="datatable" class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Aset</th>
      <th scope="col">Jenis Aset</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">ID Lokasi</th>
      <th scope="col">ID Kategori</th>
      <th scope="col">Kondisi</th>
      <th scope="col">Tanggal Pembelian</th>
      <th scope="col">Nilai Aset</th>
      <th scope="col">Catatan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Otto</td>
      <td>Jacob</td>
      <td>kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Otto</td>
      <td>Jacob</td>
      <td>kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">21</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">23</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">24</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">25</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">26</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">27</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">28</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">29</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
    <tr>
      <th scope="row">30</th>
      <td>Obligasi</td>
      <td>Otto</td>
      <td>Kas</td>
      <td>Kas</td>
      <td>Pesawaran</td>
      <td>Obligasi</td>
      <td>Bagus</td>
      <td>20-05-2024</td>
      <td>Baik Sekali</td>
      <td>Kas</td>
    </tr>
  </tbody>
</table>
@endsection