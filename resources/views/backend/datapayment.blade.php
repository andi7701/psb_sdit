@extends('layouts.backend.app')

@section('title')
    Data Siswa Payment  - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Siswa Payment</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Data Pendaftar
                    <li class="breadcrumb-item active" aria-current="page">Data  Payment
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Tahun Daftar</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datapayment as $dp)     
                <tr>
                    <td>{{ $dp->name }}</td>
                    <td>{{ $dp->email }}</td>
                    <td>{{ $dp->tahun_ajarans }}</td>
                    <td><span class="badge bg-success">{{ $dp->status }}</span></td>
                    <td>
                        <a href="{{ route('showdatapayment', $dp->id) }}" target="_blank" class="btn btn-sm btn-info rounded-pill">Lihat Detail</a>
                        <a href="#" class="btn btn-sm btn-primary rounded-pill">Terima</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
@endsection