@extends('layouts.frontend.app')

@section('title')
   Data Pendukung - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Pendukung</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Biodata
                    <li class="breadcrumb-item active" aria-current="page">Data  Pendukung
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <form action="" method="POST">
                                @csrf
                            
                            <div class="col-6">
                                <div class="form-group has-icon-left">
                                    <label for="tinggibadan">Tinggi Badan</label>
                                    <div class="position-relative">
                                        <input type="number" name="tinggi_badan" class="form-control"
                                            placeholder="Satuan Cm"
                                            id="tinggibadan" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            

                            
                                <div class="form-group has-icon-left">
                                    <label for="beratbadan">Berat Badan</label>
                                    <div class="position-relative">
                                        <input type="number" name="berat_badan" class="form-control"
                                            placeholder="Satuan Kg"
                                            id="beratbadan" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            

                            
                                <div class="form-group has-icon-left">
                                    <label for="jarakrumah">Jarak Rumah</label>
                                    <div class="position-relative">
                                        <input type="number" name="jarak_rumah" class="form-control"
                                            placeholder="Satuan Km"
                                            id="jarakrumah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group has-icon-left">
                                    <label for="waktutempuh">Waktu Tempuh</label>
                                    <div class="position-relative">
                                        <input type="number" name="waktu_tempuh" class="form-control"
                                            placeholder="Satuan Menit"
                                            id="waktutempuh" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            

                            
                                <div class="form-group has-icon-left">
                                    <label for="jumlahsaudara">Jumlah Saudara</label>
                                    <div class="position-relative">
                                        <input type="number" name="jumlah_saudara" class="form-control"
                                            placeholder="Jumlah Saudara"
                                            id="waktutempuh" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            {{-- prestasi --}}
                            <div class="col-6">
                                <div class="form-group has-icon-left">
                                    <label for="jenisprestasi">Jenis Prestasi</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="jenis_prestasi" class="form-select" id="jenisprestasi">
                                                <option value="">--Pilih Status--</option>
                                                <option value="akademik">Akademik</option>
                                                <option value="nonakademik">Non Akademik</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            

                            
                                <div class="form-group has-icon-left">
                                    <label for="tingkatprestasi">Tingkat Prestasi</label>
                                    <div class="position-relative">
                                        <input type="text" name="tingkat" class="form-control"
                                            placeholder="Kota/Kabupaten/Provinsi/Nasional/dll"
                                            id="tingkatprestasi" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            

                            
                                <div class="form-group has-icon-left">
                                    <label for="namaprestasi">Nama Prestasi</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_prestasi" class="form-control"
                                            placeholder="Satuan Km"
                                            id="namaprestasi" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group has-icon-left">
                                    <label for="tahunprestasi">Tahun Prestasi</label>
                                    <div class="position-relative">
                                        <input type="number" name="tahun_prestasi" class="form-control"
                                            placeholder="Ex : 2009"
                                            id="tahunprestasi" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            

                            
                                <div class="form-group has-icon-left">
                                    <label for="penyelenggara">Pihak Penyelenggara</label>
                                    <div class="position-relative">
                                        <input type="text" name="penyelenggara" class="form-control"
                                            placeholder="Nama Pihak Penyelenggara"
                                            id="penyelenggara" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                        
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection