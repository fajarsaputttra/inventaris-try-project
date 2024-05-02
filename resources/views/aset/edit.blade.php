@extends('layout.master')

<!-- Content Wrapper. Contains page content -->
@section('content-head')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Aset</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="/aset">Aset</a></li>
                        <li class="breadcrumb-item active">Edit Aset</li>
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
                            <h3 class="card-title">Edit Aset</h3>

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
                            <form action="/aset/{{$aset->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="NamaAset">Nama Aset</label>
                                    <input type="text" class="form-control" name="NamaAset" value="{{$aset->NamaAset}}">
                                </div>
                                <div class="form-group">
                                    <label for="JenisAset">Jenis Aset</label>
                                    <input type="text" class="form-control" name="JenisAset" value="{{$aset->JenisAset}}">
                                </div>
                                <div class="form-group">
                                    <label for="Deskripsi">Deskripsi</label>
                                    <textarea class="form-control" name="Deskripsi" rows="3">{{$aset->Deskripsi}}</textarea>
                                </div>
                                <div class="form-group">
                                        <label for="IDLokasi">ID Lokasi</label>
                                        <select class="form-control" name="IDLokasi" placeholder="Masukkan ID Lokasi">
                                            <option value="">- Pilih Lokasi -</option>
                                            @foreach ($laset as $item)
                                                <option value="{{ $item -> id }}">{{ $item->NamaLokasi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="IDKategori">ID Kategori</label>
                                        <select class="form-control" name="IDKategori" placeholder="Masukkan ID Kategori">
                                        <option value="">- Pilih Kategori -</option>
                                            @foreach ($kaset as $item)
                                                <option value="{{ $item -> id }}">{{ $item->NamaKategori }}</option>
                                            @endforeach
                                        </select>
                                <div class="form-group">
                                    <label for="Kondisi">Kondisi</label>
                                    <select class="form-control" name="Kondisi">
                                        <option value="">Pilih Kondisi</option>
                                        <option value="Good" @if($aset->Kondisi == "Good") selected @endif>Good</option>
                                        <option value="Bad" @if($aset->Kondisi == "Bad") selected @endif>Bad</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="TanggalPembelian">Tanggal Pembelian</label>
                                    <input type="date" class="form-control" name="TanggalPembelian" value="{{ $aset->TanggalPembelian ?? '' }}">
                                </div>
                                <div class="form-group">
                                    <label for="NilaiAset">Nilai Aset</label>
                                    <input type="text" class="form-control" name="NilaiAset" value="{{$aset->NilaiAset}}">
                                </div>
                                <div class="form-group">
                                    <label for="Catatan">Catatan</label>
                                    <textarea class="form-control" name="Catatan" rows="3">{{$aset->Catatan}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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