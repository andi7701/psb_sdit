@extends('layouts.frontend.app')

@section('title')
   Pengumuman - SDIT INSAN QUR'ANI SUMBAWA
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
            @if ($pengumuman != NULL)
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
                                <li>Tanggal Ujian : {{Carbon\Carbon::parse($pengumuman->tgl_ujian)->locale('id')->isoFormat('LL')}}</li>
                                <li>Username : {{ $pengumuman->username }}</li>
                                <li>Password : {{ $pengumuman->password }}</li>
                                <li>Token : {{ $pengumuman->token }}</li>
                                <li>Alamat Test : <a target="_blank" href="{{ url('http://'. $pengumuman->url . ":8072") }}">{{ $pengumuman->url }}</a></li>
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
                                <li>Soal Benar : {{ $pengumuman->soal_benar }}</li>
                                <li>Soal Salah : {{ $pengumuman->soal_salah }}</li>
                                <li>Nilai :  {{ $pengumuman->nilai }}</li>
                                @if ($pengumuman->soal_benar >= 10 && $pengumuman->soal_benar <= 50)
                                            <span class="badge bg-success">{{ $pengumuman->hasil }}</span>
                                @else
                                            <span class="badge bg-danger">{{ $pengumuman->hasil }}</span>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @else    
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
                                <li>Tanggal Ujian : -</li>
                                <li>Username : -</li>
                                <li>Password : -</li>
                                <li>Token : -</li>
                                <li>Alamat Test : <a target="_blank" href="{{ url('http://darmabangsa.sch.id') }}">-</a></li>
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
                                <li>Soal Benar : -</li>
                                <li>Soal Salah : -</li>
                                <li>Nilai : -</li>
                                <span class="badge bg-success">Belum Ada Nilai</span>
                            </ul>
                        </div>
                    </div>
                </div>

                
            </div>
            @endif
        </div>
    </div>
</div>
@endsection