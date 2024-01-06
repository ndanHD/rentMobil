@extends('layouts.master')
@section('title', 'Data Mobil')
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Data Customer
                    <small>Data Customer</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="blog-dashboard.html">Dashboard</a></li> --}}
                    <li class="breadcrumb-item active">Data Customer</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid my-3"><a href="" class="btn btn-primary btn-xl">Tambah
            Mata Pelajaran</a>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jurusan</th>
                            <th>Nama Mat Pelajaran</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}
@endsection
