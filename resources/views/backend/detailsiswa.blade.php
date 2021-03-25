@extends('layouts.backend.app')

@section('title')
    Detail Calon Siswa  - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Calon Siswa</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Payment
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tntk"
                        role="tab" aria-controls="home" aria-selected="true">Data Siswa</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sd"
                        role="tab" aria-controls="profile" aria-selected="false">Data Orang Tua</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#smp"
                        role="tab" aria-controls="contact" aria-selected="false">Data Pendukung</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#sma"
                      role="tab" aria-controls="contact" aria-selected="false">File Pendukung</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tntk" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="alert alert-secondary mt-3">
                     <h4 class="alert-heading">TNTK</h4>
                     <p>Biaya Pendaftaran = Rp. 150.000  <br>Nomor Rekening    = <b>8239003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="sd" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <div class="alert alert-secondary mt-3">
                     <h4 class="alert-heading">SD</h4>
                     <p>Biaya Pendaftaran = Rp. 150.000 <br>Nomor Rekening    = <b>1539003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="smp" role="tabpanel"
                    aria-labelledby="contact-tab">
                    <div class="alert alert-secondary mt-3">
                     <h4 class="alert-heading">SMP</h4>
                     <p>Biaya Pendaftaran = Rp. 150.000 <br>Nomor Rekening    = <b>2639003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
                  </div>
                </div>
                <div class="tab-pane fade" id="sma" role="tabpanel"
                    aria-labelledby="contact-tab">
                    <div class="alert alert-secondary mt-3">
                     <h4 class="alert-heading">SMA</h4>
                     <p>Biaya Pendaftaran = Rp. 150.000 <br> Nomor Rekening    = <b>7739003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection