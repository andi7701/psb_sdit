@extends('layouts.backend.app')

@section('title')
    Data Siswa Register  - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Siswa Register</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Data Pendaftar
                    <li class="breadcrumb-item active" aria-current="page">Data  Register
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
                @foreach ($dataregister as $dr)     
                {{-- @dd($dr->payment) --}}
                    <tr>
                        <td>{{ $dr->name }}</td>
                        <td>{{ $dr->email }}</td>
                        <td>{{ $dr->tahun_ajarans }}</td>
                        <td><span class="badge bg-success">{{ $dr->status }}</span></td>
                        <td>
                            @if ($dr->payments != NULL)
                                <a href="{{ route('showbuktipayment', $dr->id) }}" target="_blank" class="btn btn-sm btn-info rounded-pill">Lihat Bukti</a>
                                <a href="#" class="btn btn-sm btn-primary rounded-pill">Terima</a>
                            @else
                                <a href="#" target="_blank" class="disabled btn btn-sm btn-info rounded-pill">Lihat Bukti</a>
                                <a href="#" class="disabled btn btn-sm btn-primary rounded-pill">Terima</a>
                            @endif
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