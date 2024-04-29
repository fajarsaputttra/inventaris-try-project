@extends('layout.master')
@section('title','Kategori Aset')

@section('content-head')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kategori Aset</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">kategori aset</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <div class="card-body">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama Kategori</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kategoriaset as $kataset)
                                        <tr>
                                            <td>{{$kataset->NamaKategori}}</td>
                                            <td>
                                                <a href="/kategoriaset/{{$kataset->id}}/edit" class="btn btn-primary"><i class="fas fa-pen">Edit</i></a>
                                                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if (confirm('Apakah Anda yakin ingin menghapus aset ini?')) { document.getElementById('delete-form-{{ $kataset->id }}').submit(); }">
                                                    <i class="fas fa-trash-alt"></i> Hapus
                                                </a>
                                                <form id="delete-form-{{ $kataset->id }}" action="/kategoriaset/{{ $kataset->id }}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>                                               
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <a href="/kategoriaset/create" class="btn btn-primary"><i class="">Add Data</i></a>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection