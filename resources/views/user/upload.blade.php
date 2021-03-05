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
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible show fade">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>{{ $message }}</strong>
</div>
@elseif($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible show fade">
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <strong>{{ $message }}</strong>
</div>
@endif
@if ($filependukung != NULL)
<form action="{{ route('uploadfileupdate', $filependukung->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-md-12">
        <div class="mb-3">
            <label for="kartukeluarga" class="form-label">Kartu Keluarga</label>
            @if($filependukung->kartu_keluarga)
                <img src="{{ url('/image_KK/'. $filependukung->kartu_keluarga) }}" width="120px" alt="">
            @else
                Kartu keluarga Tidak Ada
            @endif
            <input name="kartu_keluarga" class="form-control @error('kartu_keluarga') is-invalid @enderror" type="file" id="kartukeluarga">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('kartu_keluarga')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="aktekelahiran" class="form-label">Akte Kelahiran</label>
            @if($filependukung->akte_kelahiran)
                <img src="{{ url('/image_Akte/'. $filependukung->akte_kelahiran) }}" width="120px" alt="">
            @else
                Akte Kelahiran Tidak Ada
            @endif
            <input name="akte_kelahiran" class="form-control @error('akte_kelahiran') is-invalid @enderror" type="file" id="aktekelahiran">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('akte_kelahiran')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="ktpayah" class="form-label">KTP Ayah</label>
            @if($filependukung->ktp_ayah)
                <img src="{{ url('/image_KTPAyah/'. $filependukung->ktp_ayah) }}" width="120px" alt="">
            @else
                KTP Ayah Tidak Ada
            @endif
            <input name="ktp_ayah" class="form-control @error('ktp_ayah') is-invalid @enderror" type="file" id="ktpayah">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('ktp_ayah')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="ktpibu" class="form-label">KTP Ibu</label>
            @if($filependukung->ktp_ibu)
                <img src="{{ url('/image_KTPIbu/'. $filependukung->ktp_ibu) }}" width="120px" alt="">
            @else
                KTP Ibu Tidak Ada
            @endif
            <input name="ktp_ibu" class="form-control @error('ktp_ibu') is-invalid @enderror" type="file" id="formFile">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('ktp_ibu')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="raport_terakhir" class="form-label">Ijazah / FC Raport Terakhir</label>
            @if($filependukung->raport_terakhir)
                <img src="{{ url('/image_Raport/'. $filependukung->raport_terakhir) }}" width="120px" alt="">
            @else
                Raport Terakhir Tidak Ada
            @endif
            <input name="raport_terakhir" class="form-control @error('raport_terakhir') is-invalid @enderror" type="file" id="raport_terakhir">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF. <b>*Khusus Siswa Pindahan</b></span>
            @error('raport_terakhir')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-success"><i class="bi bi-cloud-upload-fill"> </i> Upload File</button>
</form>
@else  
<form action="{{ route('storefile') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-12">
        <div class="mb-3">
            <label for="kartukeluarga" class="form-label">Kartu Keluarga</label>
            <input name="kartu_keluarga" class="form-control @error('kartu_keluarga') is-invalid @enderror" type="file" id="kartukeluarga">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('kartu_keluarga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="aktekelahiran" class="form-label">Akte Kelahiran</label>
            <input name="akte_kelahiran" class="form-control @error('akte_kelahiran') is-invalid @enderror" type="file" id="aktekelahiran">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('akte_kelahiran')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="ktpayah" class="form-label">KTP Ayah</label>
            <input name="ktp_ayah" class="form-control @error('ktp_ayah') is-invalid @enderror" type="file" id="ktpayah">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('ktp_ayah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="ktpibu" class="form-label">KTP Ibu</label>
            <input name="ktp_ibu" class="form-control @error('ktp_ibu') is-invalid @enderror" type="file" id="formFile">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
            @error('ktp_ibu')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
            @enderror
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="raport_terakhir" class="form-label">Ijazah / FC Raport Terakhir</label>
            <input name="raport_terakhir" class="form-control @error('raport_terakhir') is-invalid @enderror" type="file" id="raport_terakhir">
            <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF. <b>*Khusus Siswa Pindahan</b></span>
            @error('raport_terakhir')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-success"><i class="bi bi-cloud-upload-fill"> </i> Upload File</button>
</form>
@endif

@endsection