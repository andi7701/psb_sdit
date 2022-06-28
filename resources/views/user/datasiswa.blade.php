@extends('layouts.frontend.app')

@section('title')
   Data Siswa - SDIT INSAN QUR'ANI SUMBAWA
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Siswa</h3>
            <p class="text-subtitle text-muted">Berikut ini Formulir untuk data siswa</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Biodata
                    <li class="breadcrumb-item active" aria-current="page">Data  Siswa
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
                @if ($datasiswa != NULL)
                {{-- jika data sudah ada tidak kosong --}}
                <form action="{{ route('updatesiswa', $datasiswa->id) }}" method="POST" class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="statusmember">Status Member</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="status_member" class="form-select @error('status_member') is-invalid @enderror" id="statusmember">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Member" {{ $datasiswa->status_member == 'Member' ? 'selected' : '' }}>Member (Asal Sekolah Darma Bangsa)</option>
                                                    <option value="Non Member" {{ $datasiswa->status_member == 'Non Member' ? 'selected' : '' }}>Non Member (Luar Sekolah Darma Bangsa)</option>
                                                </select>
                                                @error('status_member')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="jenjangsiswa">Jenjang Siswa</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="jenjang" class="form-select @error('jenjang') is-invalid @enderror" id="jenjangsiswa">
                                                    <option value="">--Pilih Jenjang--</option>
                                                    <option value="Toodler" {{ $datasiswa->jenjang == 'Toodler' ? 'selected' : '' }}>Toodler (Usia 2 Tahun)</option>
                                                    <option value="Nursery" {{ $datasiswa->jenjang == 'Nursery' ? 'selected' : '' }}>Nursery (Usia 3 Tahun)</option>
                                                    <option value="TK A" {{ $datasiswa->jenjang == 'TK A' ? 'selected' : '' }}>TK A (Usia 4 Tahun)</option>
                                                    <option value="TK B" {{ $datasiswa->jenjang == 'TK B' ? 'selected' : '' }}>TK B (Usia 5 Tahun)</option>
                                                    <option value="SD" {{ $datasiswa->jenjang == 'SD' ? 'selected' : '' }}>SD</option>
                                                    <option value="SMP" {{ $datasiswa->jenjang == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                    <option value="SMA" {{ $datasiswa->jenjang == 'SMA' ? 'selected' : '' }}>SMA</option>
                                                </select>
                                                @error('jenjang')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="jeniskelamin">Jenis Kelamin</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jeniskelamin">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Laki-Laki" {{ $datasiswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                                    <option value="Perempuan" {{ $datasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nisn">NISN (Nomor Induk Siswa Nasional)</label>
                                        <input type="number" value="{{ $datasiswa->nisn }}" name="nisn" id="nisn" class="form-control @error('nisn') is-invalid @enderror" placeholder="Masukan NISN" autocomplete="disabled">
                                        @error('nisn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class=" badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nis">NIS (Nomor Induk Siswa)</label>
                                        <input type="number" name="nis" value="{{ $datasiswa->nis }}" id="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="Masukan NIS" autocomplete="disabled">
                                        @error('nis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="npsn">NPSN (Nomor Pokok Sekolah Nasional)</label>
                                        <input type="number" name="npsn" value="{{ $datasiswa->npsn }}" id="npsn" class="form-control @error('npsn') is-invalid @enderror" placeholder="Masukan NPSN" autocomplete="disabled">
                                        @error('npsn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="asalsekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" value="{{ $datasiswa->asal_sekolah }}" id="asalsekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="Masukan Asal Sekolah" autocomplete="disabled">
                                        @error('asal_sekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tempatlahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" value="{{ $datasiswa->tempat_lahir }}" id="tempatlahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukan Tempat Lahir" autocomplete="disabled">
                                        @error('tempat_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tanggallahir">Tanggal Lahir</label>
                                        <input type="date" name="ttl" value="{{ $datasiswa->ttl }}" id="tanggallahir" class="form-control @error('ttl') is-invalid @enderror">
                                        @error('ttl')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="agama">Agama</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="agama" class="form-select @error('agama') is-invalid @enderror" id="agama">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Islam" {{ $datasiswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="Kristen Protestan" {{ $datasiswa->agama == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                                                    <option value="Kristen Katolik" {{ $datasiswa->agama == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik</option>
                                                    <option value="Hindu" {{ $datasiswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="Budha" {{ $datasiswa->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                                    <option value="Konghuchu" {{ $datasiswa->agama == 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                                                </select>
                                                @error('agama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="khusus">Berkebutuhan Khusus</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="berkhusus" class="form-select @error('berkhusus') is-invalid @enderror" id="khusus">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Ya" {{ $datasiswa->berkhusus == 'Ya' ? 'selected' : '' }}>Ya</option>
                                                    <option value="Tidak" {{ $datasiswa->berkhusus == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                                </select>
                                                @error('berkhusus')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <div class="position-relative">
                                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                                rows="3">{{ $datasiswa->alamat }}</textarea>
                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="transportasi">Kendaraan Transportasi</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="alat_transport" class="form-select @error('alat_transport') is-invalid @enderror" id="transportasi">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Motor" {{ $datasiswa->alat_transport == 'Motor' ? 'selected' : '' }}>Motor</option>
                                                    <option value="Mobil" {{ $datasiswa->alat_transport == 'Mobil' ? 'selected' : '' }}>Mobil</option>
                                                    <option value="Bus" {{ $datasiswa->alat_transport == 'Bus' ? 'selected' : '' }}>Bus Abudemen</option>
                                                </select>
                                                @error('alat_transport')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="tempattinggal">Tempat Tinggal Siswa</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="tempat_tinggal" class="form-select @error('tempat_tinggal') is-invalid @enderror" id="tempattinggal">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Rumah" {{ $datasiswa->tempat_tinggal == 'Rumah' ? 'selected' : '' }}>Rumah</option>
                                                    <option value="Kost" {{ $datasiswa->tempat_tinggal == 'Kost' ? 'selected' : '' }}>Kost</option>
                                                    <option value="Apartemen" {{ $datasiswa->tempat_tinggal == 'Apartemen' ? 'selected' : '' }}>Apartemen</option>
                                                    <option value="Kontrakan" {{ $datasiswa->tempat_tinggal == 'Kontrakan' ? 'selected' : '' }}>Kontrakan</option>
                                                </select>
                                                @error('tempat_tinggal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="hp">No. Handphone Siswa</label>
                                        <input type="number" name="hp" value="{{ $datasiswa->hp }}" id="hp" class="form-control @error('hp') is-invalid @enderror" placeholder="Masukan Nomor HP Siswa" autocomplete="disabled">
                                        @error('hp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class=" badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="emailsiswa">Email Siswa</label>
                                        <input type="email" name="email_siswa" value="{{ $datasiswa->email_siswa }}" id="emailsiswa" class="form-control @error('email_siswa') is-invalid @enderror" placeholder="Masukan Email Siswa" autocomplete="disabled">
                                        @error('email_siswa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class=" badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="noakta">Nomor Akta</label>
                                        <input type="string" name="no_akta" value="{{ $datasiswa->no_akta }}" id="noakta" class="form-control @error('no_akta') is-invalid @enderror" placeholder="Masukan Nomor Akta" autocomplete="disabled">
                                        @error('no_akta')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">Update  <i class="bi bi-arrow-right-square"></i></button>
                                </div>
                            </div>
                        </div>
                </form>
                @else
                <form action="{{ route('storesiswa') }}" method="POST" class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                                @csrf
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="statusmember">Status Member</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="status_member" class="form-select @error('status_member') is-invalid @enderror" id="statusmember">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Member" {{old('status_member') == 'Member' ? 'selected' : ''}} >Member (Asal Sekolah Darma Bangsa)</option>
                                                    <option value="NonMember" {{old('status_member') == 'NonMember' ? 'selected' : ''}}>Non Member (Luar Sekolah Darma Bangsa)</option>
                                                </select>
                                                @error('status_member')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="jenjangsiswa">Jenjang Siswa</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="jenjang" class="form-select @error('jenjang') is-invalid @enderror" id="jenjangsiswa">
                                                    <option value="">--Pilih Jenjang--</option>
                                                    <option value="Toodler" {{old('jenjang') == 'Toodler' ? 'selected' : ''}}>Toodler (Usia 2 Tahun)</option>
                                                    <option value="Nursery" {{old('jenjang') == 'Nursery' ? 'selected' : ''}}>Nursery (Usia 3 Tahun)</option>
                                                    <option value="TK A" {{old('jenjang') == 'TK A' ? 'selected' : ''}}>TK A (Usia 4 Tahun)</option>
                                                    <option value="TK B" {{old('jenjang') == 'TK B' ? 'selected' : ''}}>TK B (Usia 5 Tahun)</option>
                                                    <option value="SD" {{old('jenjang') == 'SD' ? 'selected' : ''}}>SD</option>
                                                    <option value="SMP" {{old('jenjang') == 'SMP' ? 'selected' : ''}}>SMP</option>
                                                    <option value="SMA" {{old('jenjang') == 'SMA' ? 'selected' : ''}}>SMA</option>
                                                </select>
                                                @error('jenjang')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="jeniskelamin">Jenis Kelamin</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" id="jeniskelamin">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Laki Laki" {{old('jenis_kelamin') == 'Laki Laki' ? 'selected' : ''}}>Laki-Laki</option>
                                                    <option value="Perempuan" {{old('jenis_kelamin') == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nisn">NISN (Nomor Induk Siswa Nasional)</label>
                                        <input type="number" name="nisn" value="{{old('nisn')}}" id="nisn" class="form-control @error('nisn') is-invalid @enderror" placeholder="Masukan NISN" autocomplete="disabled">
                                        @error('nisn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class=" badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="nis">NIS (Nomor Induk Siswa)</label>
                                        <input type="number" name="nis" value="{{old('nis')}}" id="nis" class="form-control @error('nis') is-invalid @enderror" placeholder="Masukan NIS" autocomplete="disabled">
                                        @error('nis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="npsn">NPSN (Nomor Pokok Sekolah Nasional)</label>
                                        <input type="number" name="npsn" value="{{old('npsn')}}" id="npsn" class="form-control @error('npsn') is-invalid @enderror" placeholder="Masukan NPSN" autocomplete="disabled">
                                        @error('npsn')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="asalsekolah">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" value="{{old('asal_sekolah')}}" id="asalsekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" placeholder="Masukan Asal Sekolah" autocomplete="disabled">
                                        @error('asal_sekolah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tempatlahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" value="{{old('tempat_lahir')}}" id="tempatlahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukan Tempat Lahir" autocomplete="disabled">
                                        @error('tempat_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="tanggallahir">Tanggal Lahir</label>
                                        <input type="date" name="ttl" value="{{old('ttl')}}" id="tanggallahir" class="form-control @error('ttl') is-invalid @enderror">
                                        @error('ttl')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="agama">Agama</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="agama" class="form-select @error('agama') is-invalid @enderror" id="agama">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Islam" {{old('agama') == 'Islam' ? 'selected' : ''}}>Islam</option>
                                                    <option value="Kristen Protestan" {{old('agama') == 'Kristen Protestan' ? 'selected' : ''}}>Kristen Protestan</option>
                                                    <option value="Kristen Katolik" {{old('agama') == 'Kristen Katolik' ? 'selected' : ''}}>Kristen Katolik</option>
                                                    <option value="Hindu" {{old('agama') == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                                                    <option value="Budha" {{old('agama') == 'Budha' ? 'selected' : ''}}>Budha</option>
                                                    <option value="Konghuchu" {{old('agama') == 'Konghuchu' ? 'selected' : ''}}>Konghuchu</option>
                                                </select>
                                                @error('agama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="khusus">Berkebutuhan Khusus</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="berkhusus" class="form-select @error('berkhusus') is-invalid @enderror" id="khusus">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Ya" {{old('berkhusus') == 'Ya' ? 'selected' : ''}}>Ya</option>
                                                    <option value="Tidak" {{old('berkhusus') == 'Tidak' ? 'selected' : ''}}>Tidak</option>
                                                </select>
                                                @error('berkhusus')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <div class="position-relative">
                                            <textarea name="alamat" value="{{old('alamat')}}" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                                rows="3"></textarea>
                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="transportasi">Kendaraan Transportasi</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="alat_transport" class="form-select @error('alat_transport') is-invalid @enderror" id="transportasi">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Motor" {{old('alat_transport') == 'Motor' ? 'selected' : ''}}>Motor</option>
                                                    <option value="Mobil" {{old('alat_transport') == 'Mobil' ? 'selected' : ''}}>Mobil</option>
                                                    <option value="Bus" {{old('alat_transport') == 'Bus' ? 'selected' : ''}}>Bus Abudemen</option>
                                                </select>
                                                @error('alat_transport')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="tempattinggal">Tempat Tinggal Siswa</label>
                                        <div class="position-relative">
                                            <fieldset class="form-group">
                                                <select name="tempat_tinggal" class="form-select @error('tempat_tinggal') is-invalid @enderror" id="tempattinggal">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Rumah" {{old('tempat_tinggal') == 'Rumah' ? 'selected' : ''}}>Rumah</option>
                                                    <option value="Kost" {{old('tempat_tinggal') == 'Kost' ? 'selected' : ''}}>Kost</option>
                                                    <option value="Apartemen" {{old('tempat_tinggal') == 'Apartemen' ? 'selected' : ''}}>Apartemen</option>
                                                    <option value="Kontrakan" {{old('tempat_tinggal') == 'Kontrakan' ? 'selected' : ''}}>Kontrakan</option>
                                                </select>
                                                @error('tempat_tinggal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="hp">No. Handphone Siswa</label>
                                        <input type="number" name="hp" value="{{old('hp')}}" id="hp" class="form-control @error('hp') is-invalid @enderror" placeholder="Masukan Nomor HP Siswa" autocomplete="disabled">
                                        @error('hp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class=" badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="emailsiswa">Email Siswa</label>
                                        <input type="email" name="email_siswa" value="{{old('email')}}" id="emailsiswa" class="form-control @error('email_siswa') is-invalid @enderror" placeholder="Masukan Email Siswa" autocomplete="disabled">
                                        @error('email_siswa')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <p><small class=" badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="noakta">Nomor Akta</label>
                                        <input type="string" name="no_akta" value="{{old('no_akta')}}" id="noakta" class="form-control @error('no_akta') is-invalid @enderror" placeholder="Masukan Nomor Akta" autocomplete="disabled">
                                        @error('no_akta')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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