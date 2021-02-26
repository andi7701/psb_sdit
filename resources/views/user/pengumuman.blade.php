@extends('layouts.frontend.app')

@section('title')
   Pengumuman - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Pengumuman</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengumuman
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="card collapse-icon accordion-icon-rotate">
    <div class="card-content">
        <div class="card-body">
            <div class="accordion" id="cardAccordion">
                
                <div class="card">
                    <div class="card-header" id="headingFour" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour" role="button">
                        <span class="collapsed  collapse-title"><strong>Informasi Ujian Online (CBT)</strong> <i class="bi bi-arrow-down-square-fill"></i></span>
                    </div>
                    <div id="collapseFour" class="collapse pt-1"
                        aria-labelledby="headingFour" data-parent="#cardAccordion">
                        <div class="card-body">
                            <ul>
                                <li>Username : sdb</li>
                                <li>Password : sdb123</li>
                                <li>Token : sdfsdf</li>
                                <li>Alamat Test : <a target="_blank" href="{{ url('http://darmabangsa.sch.id') }}">cbt.darmabangsa.sch.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingOne" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne" role="button">
                        <span class="collapsed collapse-title"><strong>Hasil Ujian</strong> <i class="bi bi-arrow-down-square-fill"></i></span>
                    </div>
                    <div id="collapseOne" class="collapse pt-1" aria-labelledby="headingOne"
                        data-parent="#cardAccordion">
                        <div class="card-body">
                            <ul>
                                <li>Soal Benar : 34</li>
                                <li>Soal Salah : 20</li>
                                <li>Nilai : 80</li>
                                <span class="badge bg-success">Selamat Kamu Lulus!!</span>
                            </ul>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection