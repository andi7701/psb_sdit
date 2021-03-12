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

<div class="col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                @if ($datapendukung != NULL)
                <form class="form form-vertical" action="{{ route('updatependukung', $datapendukung->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-6">

                                <div class="form-group">
                                    <label for="tinggibadan">Tinggi Badan</label>
                                    <div class="position-relative">
                                        <input type="number" name="tinggi_badan" value="{{ $datapendukung->tinggi_badan }}" id="tinggibadan" class="form-control @error('tinggi_badan') is-invalid @enderror" placeholder="Masukan Tinggi Badan (Cm)" autocomplete="disabled">
                                        @error('tinggi_badan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                                        
                                <div class="form-group">
                                    <label for="beratbadan">Berat Badan</label>
                                    <div class="position-relative">
                                        <input type="number" name="berat_badan" value="{{ $datapendukung->berat_badan }}" id="beratbadan" class="form-control @error('berat_badan') is-invalid @enderror" placeholder="Masukan Berat Badan (Kg)" autocomplete="disabled">
                                        @error('berat_badan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="jarakrumah">Jarak Rumah</label>
                                    <div class="position-relative">
                                        <input type="number" name="jarak_rumah" value="{{ $datapendukung->jarak_rumah }}" id="jarakrumah" class="form-control @error('jarak_rumah') is-invalid @enderror" placeholder="Masukan Jarak Rumah (Km)" autocomplete="disabled">
                                        @error('jarak_rumah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="waktutempuh">Waktu Tempuh</label>
                                    <div class="position-relative">
                                        <input type="number" name="waktu_tempuh" value="{{ $datapendukung->waktu_tempuh }}" id="waktutempuh" class="form-control @error('waktu_tempuh') is-invalid @enderror" placeholder="Masukan Waktu Tempuh (Menit)" autocomplete="disabled">
                                        @error('waktu_tempuh')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="jumlahsaudara">Jumlah Saudara</label>
                                    <div class="position-relative">
                                        <input type="number" name="jumlah_saudara" value="{{ $datapendukung->jumlah_saudara }}" id="jumlahsaudara" class="form-control @error('jumlah_saudara') is-invalid @enderror" placeholder="Masukan Jumlah Saudara" autocomplete="disabled">
                                        @error('jumlah_saudara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                        </div>

                            {{-- prestasi --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="jenisprestasi">Jenis Prestasi</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="jenis_prestasi" class="form-select" id="jenisprestasi">
                                                <option value="">--Pilih Status--</option>
                                                <option value="akademik" {{ $datapendukung->jenis_prestasi == 'akademik' ? 'selected' : '' }}>Akademik</option>
                                                <option value="nonakademik" {{ $datapendukung->jenis_prestasi == 'nonakademik' ? 'selected' : '' }}>Non Akademik</option>
                                            </select>
                                            @error('jenis_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </fieldset>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            

                            
                                <div class="form-group ">
                                    <label for="tingkatprestasi">Tingkat Prestasi</label>
                                    <div class="position-relative">
                                        <input type="text" name="tingkat" value="{{ $datapendukung->tingkat }}" id="tingkatprestasi" class="form-control @error('tingkat') is-invalid @enderror" placeholder="Masukan Tingkat Prestasi (Kota/Kabupaten/Provinsi)" autocomplete="disabled">
                                        @error('tingkat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            
                                <div class="form-group">
                                    <label for="namaprestasi">Nama Prestasi</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_prestasi" value="{{ $datapendukung->nama_prestasi }}" id="namaprestasi" class="form-control @error('nama_prestasi') is-invalid @enderror" placeholder="Masukan Nama Prestasi" autocomplete="disabled">
                                        @error('nama_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tahunprestasi">Tahun Prestasi</label>
                                    <div class="position-relative">
                                        <input type="number" name="tahun_prestasi" value="{{ $datapendukung->tahun_prestasi }}" id="tahunprestasi" class="form-control @error('tahun_prestasi') is-invalid @enderror" placeholder="Masukan Tahun Prestasi" autocomplete="disabled">
                                        @error('tahun_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            

                            
                                <div class="form-group">
                                    <label for="penyelenggara">Pihak Penyelenggara</label>
                                    <div class="position-relative">
                                        <input type="text" name="penyelenggara" value="{{ $datapendukung->penyelenggara }}" id="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror" placeholder="Masukan Nama Pihak Penyelenggara" autocomplete="disabled">
                                        @error('penyelenggara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                        
                            <button type="submit" class="btn btn-success mb-2">Simpan</button>
                            <a href="{{ route('dataortu') }}" class="btn btn-primary col-md-4 offset-md-2 px-2">Kembali</a>
                        
                            <a href="" class="btn btn-warning col-md-4 ml-2">Cetak</a>
                        </div>
                    </div>
                </form>
                @else
                <form class="form form-vertical" action="{{ route('storependukung') }}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-6">

                                <div class="form-group">
                                    <label for="tinggibadan">Tinggi Badan</label>
                                    <div class="position-relative">
                                        <input type="number" name="tinggi_badan" id="tinggibadan" class="form-control @error('tinggi_badan') is-invalid @enderror" placeholder="Masukan Tinggi Badan (Cm)" autocomplete="disabled">
                                        @error('tinggi_badan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                                        
                                <div class="form-group">
                                    <label for="beratbadan">Berat Badan</label>
                                    <div class="position-relative">
                                        <input type="number" name="berat_badan" id="beratbadan" class="form-control @error('berat_badan') is-invalid @enderror" placeholder="Masukan Berat Badan (Kg)" autocomplete="disabled">
                                        @error('berat_badan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="jarakrumah">Jarak Rumah</label>
                                    <div class="position-relative">
                                        <input type="number" name="jarak_rumah" id="jarakrumah" class="form-control @error('jarak_rumah') is-invalid @enderror" placeholder="Masukan Jarak Rumah (Km)" autocomplete="disabled">
                                        @error('jarak_rumah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="waktutempuh">Waktu Tempuh</label>
                                    <div class="position-relative">
                                        <input type="number" name="waktu_tempuh" id="waktutempuh" class="form-control @error('waktu_tempuh') is-invalid @enderror" placeholder="Masukan Waktu Tempuh (Menit)" autocomplete="disabled">
                                        @error('waktu_tempuh')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="jumlahsaudara">Jumlah Saudara</label>
                                    <div class="position-relative">
                                        <input type="number" name="jumlah_saudara" id="jumlahsaudara" class="form-control @error('jumlah_saudara') is-invalid @enderror" placeholder="Masukan Jumlah Saudara" autocomplete="disabled">
                                        @error('jumlah_saudara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                        </div>

                            {{-- prestasi --}}
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="jenisprestasi">Jenis Prestasi</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="jenis_prestasi" class="form-select" id="jenisprestasi">
                                                <option value="">--Pilih Status--</option>
                                                <option value="akademik">Akademik</option>
                                                <option value="nonakademik">Non Akademik</option>
                                            </select>
                                            @error('jenis_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </fieldset>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            

                            
                                <div class="form-group ">
                                    <label for="tingkatprestasi">Tingkat Prestasi</label>
                                    <div class="position-relative">
                                        <input type="text" name="tingkat" id="tingkatprestasi" class="form-control @error('tingkat') is-invalid @enderror" placeholder="Masukan Tingkat Prestasi (Kota/Kabupaten/Provinsi)" autocomplete="disabled">
                                        @error('tingkat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            
                                <div class="form-group">
                                    <label for="namaprestasi">Nama Prestasi</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_prestasi" id="namaprestasi" class="form-control @error('nama_prestasi') is-invalid @enderror" placeholder="Masukan Nama Prestasi" autocomplete="disabled">
                                        @error('nama_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="tahunprestasi">Tahun Prestasi</label>
                                    <div class="position-relative">
                                        <input type="number" name="tahun_prestasi" id="tahunprestasi" class="form-control @error('tahun_prestasi') is-invalid @enderror" placeholder="Masukan Tahun Prestasi" autocomplete="disabled">
                                        @error('tahun_prestasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            

                            
                                <div class="form-group">
                                    <label for="penyelenggara">Pihak Penyelenggara</label>
                                    <div class="position-relative">
                                        <input type="text" name="penyelenggara" id="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror" placeholder="Masukan Nama Pihak Penyelenggara" autocomplete="disabled">
                                        @error('penyelenggara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                        
                            <a href="{{ route('dataortu') }}" class="btn btn-primary col-md-4  offset-md-2 px-2">Kembali</a>
                        
                            <button type="submit" class="btn btn-success col-md-4 ml-2">Simpan</button>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection