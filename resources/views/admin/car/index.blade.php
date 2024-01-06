@extends('layouts.master')
@section('title', 'Data Mobil')
@section('content')
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Data Mobil
                    <small>Daftar Mobil</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="blog-dashboard.html">Dashboard</a></li> --}}
                    <li class="breadcrumb-item active">Daftar Mobil</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid my-3"><a href="{{ route('vAddMobil') }}" class="btn btn-primary btn-xl">Tambah
            Data Mobil</a>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Merk</th>
                            <th>Model</th>
                            <th>Plat Nomer</th>
                            <th>Harga Per Hari</th>
                            <th>Status</th>
                            <th>aksi</th>
                        </tr>
                        @foreach ($car as $car)
                            <tr>

                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->license_plate }}</td>
                                <td>{{ $car->rental_rate_per_day }}</td>
                                <td> {!! $car->availability == 1
                                    ? '<span class="badge badge-success">Tersedia</span>'
                                    : '<span class="badge badge-danger">Tidak Tersedia</span>' !!}</td>
                                <td>
                                    <a href="{{ route('editMobil', ['id' => $car->id]) }}" class="btn btn-warning btn-sm"
                                        role="button">Edit</a>
                                    {{-- <a href="{{ route('hapusjurusan', ['id' => $jurusan->id]) }}"
                                        class="btn btn-danger btn-sm" role="button">Hapus</a> --}}
                                    <a onclick="" class="btn btn-danger btn-sm" role="button">Hapus</a>

                                </td>
                            </tr>
                        @endforeach
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if (session('tambah'))
        <script>
            alert('{{ session('tambah') }}')
        </script>
    @endif
@endsection
