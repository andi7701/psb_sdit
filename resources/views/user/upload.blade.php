@extends('layouts.frontend.app')

@section('title')
    Upload File - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Upload File</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Upload File
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
    <form action="">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="formFile" class="form-label">Kartu Keluarga</label>
            <input class="form-control" type="file" id="formFile">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="formFile" class="form-label">Akte Kelahiran</label>
            <input class="form-control" type="file" id="formFile">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="formFile" class="form-label">KTP Ayah</label>
            <input class="form-control" type="file" id="formFile">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="formFile" class="form-label">KTP Ibu</label>
            <input class="form-control" type="file" id="formFile">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="formFile" class="form-label">Ijazah / FC Raport Terakhir</label>
            <input class="form-control" type="file" id="formFile">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF. *Khusus Siswa Pindahan</span>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Upload File</button>
</form>
@endsection