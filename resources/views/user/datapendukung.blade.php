@extends('layouts.frontend.app')

@section('title')
   Data Pendukung - SDIT INSAN QUR'ANI SUMBAWA
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Pendukung</h3>
            <p class="text-subtitle text-muted">Berikut ini formulir untuk data pendukung</p>
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
@if ($dataortu == NULL)
    <div class="alert alert-danger alert-dismissible show fade">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Mohon Lengkapi Data Orang Tua. <a href="{{ route('dataortu') }}">Klik Disini</a></strong>
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

                            <div class="col-sm-12 d-flex justify-content-end">
                                <a href="{{ route('dataortu') }}"
                                    class="btn btn-primary me-1 mb-1"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                                    <button type="submit"
                                    class="btn btn-light-secondary me-1 mb-1">Update <i class="bi bi-arrow-counterclockwise"></i></button>
                                    @if ($datapendukung != NULL && $dataortu != NULL && $datasiswa != NULL)
                                        <a href="{{ route('createpdfuser', $datapendukung->user_id) }}"
                                        class="btn btn-info me-1 mb-1"><i class="bi bi-printer"></i> Cetak</a>
                                    @endif
                            </div>
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
                                        <input type="number" name="tinggi_badan" value="{{old('tinggi_badan')}}" id="tinggibadan" class="form-control @error('tinggi_badan') is-invalid @enderror" placeholder="Masukan Tinggi Badan (Cm)" autocomplete="disabled">
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
                                        <input type="number" name="berat_badan" value="{{old('berat_badan')}} id="beratbadan" class="form-control @error('berat_badan') is-invalid @enderror" placeholder="Masukan Berat Badan (Kg)" autocomplete="disabled">
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
                                        <input type="number" name="jarak_rumah" value="{{old('jarak_rumah')}} id="jarakrumah" class="form-control @error('jarak_rumah') is-invalid @enderror" placeholder="Masukan Jarak Rumah (Km)" autocomplete="disabled">
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
                                        <input type="number" name="waktu_tempuh" value="{{old('waktu_tempuh')}} id="waktutempuh" class="form-control @error('waktu_tempuh') is-invalid @enderror" placeholder="Masukan Waktu Tempuh (Menit)" autocomplete="disabled">
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
                                        <input type="number" name="jumlah_saudara" value="{{old('jumlah_saudara')}} id="jumlahsaudara" class="form-control @error('jumlah_saudara') is-invalid @enderror" placeholder="Masukan Jumlah Saudara" autocomplete="disabled">
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
                                                <option value="akademik" {{old('jenis_prestasi' == 'akademik' ? 'selected' : '')}} >Akademik</option>
                                                <option value="nonakademik" {{old('jenis_prestasi' == 'nonakademik' ? 'selected' : '')}}>Non Akademik</option>
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
                                        <input type="text" name="tingkat" value="{{old('tingkat')}}" id="tingkatprestasi" class="form-control @error('tingkat') is-invalid @enderror" placeholder="Masukan Tingkat Prestasi (Kota/Kabupaten/Provinsi)" autocomplete="disabled">
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
                                        <input type="text" name="nama_prestasi" value="{{old('nama_prestasi')}}" id="namaprestasi" class="form-control @error('nama_prestasi') is-invalid @enderror" placeholder="Masukan Nama Prestasi" autocomplete="disabled">
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
                                        <input type="number" name="tahun_prestasi" value="{{old('tahun_prestasi')}}" id="tahunprestasi" class="form-control @error('tahun_prestasi') is-invalid @enderror" placeholder="Masukan Tahun Prestasi" autocomplete="disabled">
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
                                        <input type="text" name="penyelenggara" value="{{old('penyelenggara')}}" id="penyelenggara" class="form-control @error('penyelenggara') is-invalid @enderror" placeholder="Masukan Nama Pihak Penyelenggara" autocomplete="disabled">
                                        @error('penyelenggara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit"
                                    class="btn btn-primary me-1 mb-1">Simpan  <i class="bi bi-save2"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection