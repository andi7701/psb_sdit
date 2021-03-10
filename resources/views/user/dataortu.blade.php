@extends('layouts.frontend.app')

@section('title')
   Data Orang Tua - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Orang Tua</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item" aria-current="page">Biodata
                    <li class="breadcrumb-item active" aria-current="page">Data  Orang Tua
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
                @if ($dataortu != NULL)
                <form action="{{ route('updateortu', $dataortu->id) }}" method="POST" class="form form-vertical">
                    @csrf
                    @method('PUT')
                    <h4 class="card-title">Data Ayah</h4>
                    {{-- Data Ayah --}}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="namaayah">Nama Ayah</label>
                            <input type="text" name="nama_ayah" value="{{ $dataortu->nama_ayah }}" id="namaayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Masukan Nama Lengkap Ayah" autocomplete="disabled">
                            @error('nama_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="tahunlahir">Tahun Lahir Ayah</label>
                            <input type="number" name="tahun_lahir" value="{{ $dataortu->tahun_lahir }}" id="tahunlahir" class="form-control @error('tahun_lahir') is-invalid @enderror" placeholder="Masukan Tahun Lahir" autocomplete="disabled">
                            @error('tahun_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="alamatayah">Alamat Ayah</label>
                            <div class="position-relative">
                                <textarea name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" id="alamatayah"
                                    rows="3">{{ $dataortu->alamat_ayah }}</textarea>
                                    @error('alamat_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="pendidikanayah">Pendidikan Ayah</label>
                            <div class="position-relative">
                                <fieldset class="form-group">
                                    <select name="pendidikan_ayah" class="form-select @error('pendidikan_ayah') is-invalid @enderror" id="pendidikanayah">
                                        <option value="">--Pilih--</option>
                                        <option value="SD" {{ $dataortu->pendidikan_ayah == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ $dataortu->pendidikan_ayah == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ $dataortu->pendidikan_ayah == 'SMA' ? 'selected' : '' }}>SMA/SMK</option>
                                        <option value="sarjana" {{ $dataortu->pendidikan_ayah == 'sarjana' ? 'selected' : '' }}>S1 (Sarjana)</option>
                                        <option value="magister" {{ $dataortu->pendidikan_ayah == 'magister' ? 'selected' : '' }}>S2 (Magister)</option>
                                        <option value="doktoral" {{ $dataortu->pendidikan_ayah == 'doktoral' ? 'selected' : '' }}>S3 (Doktoral)</option>
                                    </select>
                                    @error('pendidikan_ayah')
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
                            <label for="pekerjaanayah">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaan_ayah" value="{{ $dataortu->pekerjaan_ayah }}" id="pekerjaanayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" placeholder="PNS/BUMN/Wirusaha/Pegawai Swasta/dll" autocomplete="disabled">
                            @error('pekerjaan_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="penghasilanayah">Penghasilan Ayah</label>
                            <input type="number" name="penghasilan_ayah" value="{{ $dataortu->penghasilan_ayah }}" id="penghasilanayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror" placeholder="Rp. 4.***.***" autocomplete="disabled">
                            @error('penghasilan_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="gelarayah">Gelar Ayah</label>
                            <input type="text" name="gelar_ayah" id="gelarayah" value="{{ $dataortu->gelar_ayah }}" class="form-control @error('gelar_ayah') is-invalid @enderror" placeholder="Masukan Gelar Ayah : S.H/S.Kom/S.PD/dll" autocomplete="disabled">
                            @error('gelar_ayah')
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
                            <label for="emailayah">Email Ayah</label>
                            <input type="email" name="email_ayah" id="emailayah" value="{{ $dataortu->email_ayah }}" class="form-control @error('email_ayah') is-invalid @enderror" placeholder="Masukan Email Ayah" autocomplete="disabled">
                            @error('email_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="form-group">
                            <label for="nohpayah">Nomor Handphone Ayah</label>
                            <input type="number" name="no_hp_ayah" value="{{ $dataortu->no_hp_ayah }}" id="nohpayah" class="form-control @error('no_hp_ayah') is-invalid @enderror" placeholder="Masukan Nomor Handphone Ayah" autocomplete="disabled">
                            @error('gelar_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>
                    {{-- batas data ayah --}}

                    <hr>
                    <h4 class="card-title">Data Ibu</h4>
                    {{-- Data Ibu --}}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="namaibu">Nama Ibu</label>
                            <input type="text" name="nama_ibu" value="{{ $dataortu->nama_ibu }}" id="namaibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Masukan Nama Lengkap Ibu" autocomplete="disabled">
                            @error('nama_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="tahunlahiribu">Tahun Lahir Ibu</label>
                            <input type="number" name="tahun_lahir_ibu" value="{{ $dataortu->tahun_lahir_ibu }}" id="tahunlahiribu" class="form-control @error('tahun_lahir_ibu') is-invalid @enderror" placeholder="Masukan Tahun Lahir Ibu" autocomplete="disabled">
                            @error('tahun_lahir_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="alamatibu">Alamat Ibu</label>
                            <div class="position-relative">
                                <textarea name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" id="alamatibu"
                                    rows="3">{{ $dataortu->alamat_ibu }}</textarea>
                                    @error('alamat_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="pendidikanibu">Pendidikan Ibu</label>
                            <div class="position-relative">
                                <fieldset class="form-group">
                                    <select name="pendidikan_ibu" class="form-select @error('pendidikan_ibu') is-invalid @enderror" id="pendidikanibu">
                                        <option value="">--Pilih--</option>
                                        <option value="SD" {{ $dataortu->pendidikan_ibu == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ $dataortu->pendidikan_ibu == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ $dataortu->pendidikan_ibu == 'SMA' ? 'selected' : '' }}>SMA/SMK</option>
                                        <option value="sarjana" {{ $dataortu->pendidikan_ibu == 'sarjana' ? 'selected' : '' }}>S1 (Sarjana)</option>
                                        <option value="magister" {{ $dataortu->pendidikan_ibu == 'magister' ? 'selected' : '' }}>S2 (Magister)</option>
                                        <option value="doktoral" {{ $dataortu->pendidikan_ibu == 'doktoral' ? 'selected' : '' }}>S3 (Doktoral)</option>
                                    </select>
                                    @error('pendidikan_ibu')
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
                            <label for="pekerjaanibu">Pekerjaan Ibu</label>
                            <input type="text" name="pekerjaan_ibu" value="{{ $dataortu->pekerjaan_ibu }}" id="pekerjaanibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" placeholder="PNS/BUMN/Wirusaha/Pegawai Swasta/dll" autocomplete="disabled">
                            @error('pekerjaan_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="penghasilanibu">Penghasilan Ibu</label>
                            <input type="number" name="penghasilan_ibu" value="{{ $dataortu->penghasilan_ibu }}" id="penghasilanibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror" placeholder="Rp. 4.***.***" autocomplete="disabled">
                            @error('penghasilan_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="gelaribu">Gelar Ibu</label>
                            <input type="text" name="gelar_ibu" id="gelaribu" value="{{ $dataortu->gelar_ibu }}" class="form-control @error('gelar_ibu') is-invalid @enderror" placeholder="Masukan Gelar Ibu : S.H/S.Kom/S.PD/dll" autocomplete="disabled">
                            @error('gelar_ibu')
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
                            <label for="emailibu">Email Ibu</label>
                            <input type="email" name="email_ibu" value="{{ $dataortu->email_ibu }}" id="emailibu" class="form-control @error('email_ibu') is-invalid @enderror" placeholder="Masukan Email Ibu" autocomplete="disabled">
                            @error('email_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="form-group">
                            <label for="nohpibu">Nomor Handphone Ibu</label>
                            <input type="number" name="no_hp_ibu" value="{{ $dataortu->no_hp_ibu }}" id="nohpibu" class="form-control @error('no_hp_ibu') is-invalid @enderror" placeholder="Masukan Nomor Handphone Ayah" autocomplete="disabled">
                            @error('no_hp_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>
                    {{-- batas data ibu --}}

                    {{-- data wali  --}}
                    <hr>
                    <h4 class="card-title">Data Wali Murid</h4>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="namawali">Nama Wali</label>
                            <input type="text" name="nama_wali" value="{{ $dataortu->nama_wali }}" id="namawali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Masukan Nama Lengkap Wali" autocomplete="disabled">
                            @error('nama_wali')
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
                            <label for="tahunlahirwali">Tahun Lahir Wali</label>
                            <input type="number" name="tahun_lahir_wali" value="{{ $dataortu->tahun_lahir_wali }}" id="tahunlahirwali" class="form-control @error('tahun_lahir_wali') is-invalid @enderror" placeholder="Masukan Tahun Lahir Wali" autocomplete="disabled">
                            @error('tahun_lahir_wali')
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
                            <label for="pekerjaanwali">Pekerjaan Wali</label>
                            <input type="text" name="pekerjaan_wali" value="{{ $dataortu->pekerjaan_wali }}" id="pekerjaanwali" class="form-control @error('pekerjaan_wali') is-invalid @enderror" placeholder="Masukan Pekerjaan Wali" autocomplete="disabled">
                            @error('pekerjaan_wali')
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
                            <label for="alamatwali">Alamat Wali</label>
                            <div class="position-relative">
                                <textarea name="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" id="alamatwali"
                                    rows="3">{{ $dataortu->alamat_wali }}</textarea>
                                    @error('alamat_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="pendidikanwali">Pendidikan Wali</label>
                            <div class="position-relative">
                                <fieldset class="form-group">
                                    <select name="pendidikan_wali" class="form-select @error('pendidikan_wali') is-invalid @enderror" id="pendidikanwali">
                                        <option value="">--Pilih--</option>
                                        <option value="SD" {{ $dataortu->pendidikan_wali == 'SD' ? 'selected' : '' }}>SD</option>
                                        <option value="SMP" {{ $dataortu->pendidikan_wali == 'SMP' ? 'selected' : '' }}>SMP</option>
                                        <option value="SMA" {{ $dataortu->pendidikan_wali == 'SMA' ? 'selected' : '' }}>SMA/SMK</option>
                                        <option value="sarjana" {{ $dataortu->pendidikan_wali == 'sarjana' ? 'selected' : '' }}>S1 (Sarjana)</option>
                                        <option value="magister" {{ $dataortu->pendidikan_wali == 'magister' ? 'selected' : '' }}>S2 (Magister)</option>
                                        <option value="doktoral" {{ $dataortu->pendidikan_wali == 'doktoral' ? 'selected' : '' }}>S3 (Doktoral)</option>
                                    </select>
                                    <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="penghasilan_wali">Penghasilan Wali</label>
                            <input type="number" name="penghasilan_wali" value="{{ $dataortu->penghasilan_wali }}" id="tahunlahirwali" class="form-control @error('penghasilan_walli') is-invalid @enderror" placeholder="Penghasilan Wali" autocomplete="disabled">
                            @error('penghasilan_wali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>
                    
                            <a href="{{ route('datasiswa') }}" class="btn btn-primary col-md-4 offset-md-2">Kembali</a>
                        
                            <button type="submit" class="btn btn-success col-md-4 ml-2">Selanjutnya</button>
                </form>
                @else
                <form action="{{ route('storeortu') }}" method="POST" class="form form-vertical">
                    @csrf
                    <h4 class="card-title">Data Ayah</h4>
                    {{-- Data Ayah --}}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="namaayah">Nama Ayah</label>
                            <input type="text" name="nama_ayah" id="namaayah" class="form-control @error('nama_ayah') is-invalid @enderror" placeholder="Masukan Nama Lengkap Ayah" autocomplete="disabled">
                            @error('nama_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="tahunlahir">Tahun Lahir Ayah</label>
                            <input type="number" name="tahun_lahir" id="tahunlahir" class="form-control @error('tahun_lahir') is-invalid @enderror" placeholder="Masukan Tahun Lahir" autocomplete="disabled">
                            @error('tahun_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="alamatayah">Alamat Ayah</label>
                            <div class="position-relative">
                                <textarea name="alamat_ayah" class="form-control @error('alamat_ayah') is-invalid @enderror" id="alamatayah"
                                    rows="3"></textarea>
                                    @error('alamat_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="pendidikanayah">Pendidikan Ayah</label>
                            <div class="position-relative">
                                <fieldset class="form-group">
                                    <select name="pendidikan_ayah" class="form-select @error('pendidikan_ayah') is-invalid @enderror" id="pendidikanayah">
                                        <option value="">--Pilih--</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA/SMK</option>
                                        <option value="sarjana">S1 (Sarjana)</option>
                                        <option value="magister">S2 (Magister)</option>
                                        <option value="doktoral">S3 (Doktoral)</option>
                                    </select>
                                    @error('pendidikan_ayah')
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
                            <label for="pekerjaanayah">Pekerjaan Ayah</label>
                            <input type="text" name="pekerjaan_ayah" id="pekerjaanayah" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" placeholder="PNS/BUMN/Wirusaha/Pegawai Swasta/dll" autocomplete="disabled">
                            @error('pekerjaan_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="penghasilanayah">Penghasilan Ayah</label>
                            <input type="number" name="penghasilan_ayah" id="penghasilanayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror" placeholder="Rp. 4.***.***" autocomplete="disabled">
                            @error('penghasilan_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="gelarayah">Gelar Ayah</label>
                            <input type="text" name="gelar_ayah" id="gelarayah" class="form-control @error('gelar_ayah') is-invalid @enderror" placeholder="Masukan Gelar Ayah : S.H/S.Kom/S.PD/dll" autocomplete="disabled">
                            @error('gelar_ayah')
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
                            <label for="emailayah">Email Ayah</label>
                            <input type="email" name="email_ayah" id="emailayah" class="form-control @error('email_ayah') is-invalid @enderror" placeholder="Masukan Email Ayah" autocomplete="disabled">
                            @error('email_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="form-group">
                            <label for="nohpayah">Nomor Handphone Ayah</label>
                            <input type="number" name="no_hp_ayah" id="nohpayah" class="form-control @error('no_hp_ayah') is-invalid @enderror" placeholder="Masukan Nomor Handphone Ayah" autocomplete="disabled">
                            @error('gelar_ayah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>
                    {{-- batas data ayah --}}

                    <hr>
                    <h4 class="card-title">Data Ibu</h4>
                    {{-- Data Ibu --}}
                    <div class="col-12">
                        <div class="form-group">
                            <label for="namaibu">Nama Ibu</label>
                            <input type="text" name="nama_ibu" id="namaibu" class="form-control @error('nama_ibu') is-invalid @enderror" placeholder="Masukan Nama Lengkap Ibu" autocomplete="disabled">
                            @error('nama_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="tahunlahiribu">Tahun Lahir Ibu</label>
                            <input type="number" name="tahun_lahir_ibu" id="tahunlahiribu" class="form-control @error('tahun_lahir_ibu') is-invalid @enderror" placeholder="Masukan Tahun Lahir Ibu" autocomplete="disabled">
                            @error('tahun_lahir_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="alamatibu">Alamat Ibu</label>
                            <div class="position-relative">
                                <textarea name="alamat_ibu" class="form-control @error('alamat_ibu') is-invalid @enderror" id="alamatibu"
                                    rows="3"></textarea>
                                    @error('alamat_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="pendidikanibu">Pendidikan Ibu</label>
                            <div class="position-relative">
                                <fieldset class="form-group">
                                    <select name="pendidikan_ibu" class="form-select @error('pendidikan_ibu') is-invalid @enderror" id="pendidikanibu">
                                        <option value="">--Pilih--</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA/SMK</option>
                                        <option value="sarjana">S1 (Sarjana)</option>
                                        <option value="magister">S2 (Magister)</option>
                                        <option value="doktoral">S3 (Doktoral)</option>
                                    </select>
                                    @error('pendidikan_ibu')
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
                            <label for="pekerjaanibu">Pekerjaan Ibu</label>
                            <input type="text" name="pekerjaan_ibu" id="pekerjaanibu" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" placeholder="PNS/BUMN/Wirusaha/Pegawai Swasta/dll" autocomplete="disabled">
                            @error('pekerjaan_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="penghasilanibu">Penghasilan Ibu</label>
                            <input type="number" name="penghasilan_ibu" id="penghasilanibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror" placeholder="Rp. 4.***.***" autocomplete="disabled">
                            @error('penghasilan_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="gelaribu">Gelar Ibu</label>
                            <input type="text" name="gelar_ibu" id="gelaribu" class="form-control @error('gelar_ibu') is-invalid @enderror" placeholder="Masukan Gelar Ibu : S.H/S.Kom/S.PD/dll" autocomplete="disabled">
                            @error('gelar_ibu')
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
                            <label for="emailibu">Email Ibu</label>
                            <input type="email" name="email_ibu" id="emailibu" class="form-control @error('email_ibu') is-invalid @enderror" placeholder="Masukan Email Ibu" autocomplete="disabled">
                            @error('email_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="form-group">
                            <label for="nohpibu">Nomor Handphone Ibu</label>
                            <input type="number" name="no_hp_ibu" id="nohpibu" class="form-control @error('no_hp_ibu') is-invalid @enderror" placeholder="Masukan Nomor Handphone Ayah" autocomplete="disabled">
                            @error('no_hp_ibu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>
                    {{-- batas data ibu --}}

                    {{-- data wali  --}}
                    <hr>
                    <h4 class="card-title">Data Wali Murid</h4>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="namawali">Nama Wali</label>
                            <input type="text" name="nama_wali" id="namawali" class="form-control @error('nama_wali') is-invalid @enderror" placeholder="Masukan Nama Lengkap Wali" autocomplete="disabled">
                            @error('nama_wali')
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
                            <label for="tahunlahirwali">Tahun Lahir Wali</label>
                            <input type="number" name="tahun_lahir_wali" id="tahunlahirwali" class="form-control @error('tahun_lahir_wali') is-invalid @enderror" placeholder="Masukan Tahun Lahir Wali" autocomplete="disabled">
                            @error('tahun_lahir_wali')
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
                            <label for="pekerjaanwali">Pekerjaan Wali</label>
                            <input type="text" name="pekerjaan_wali" id="pekerjaanwali" class="form-control @error('pekerjaan_wali') is-invalid @enderror" placeholder="Masukan Pekerjaan Wali" autocomplete="disabled">
                            @error('pekerjaan_wali')
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
                            <label for="alamatwali">Alamat Wali</label>
                            <div class="position-relative">
                                <textarea name="alamat_wali" class="form-control @error('alamat_wali') is-invalid @enderror" id="alamatwali"
                                    rows="3"></textarea>
                                    @error('alamat_wali')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="pendidikanwali">Pendidikan Wali</label>
                            <div class="position-relative">
                                <fieldset class="form-group">
                                    <select name="pendidikan_wali" class="form-select @error('pendidikan_wali') is-invalid @enderror" id="pendidikanwali">
                                        <option value="">--Pilih--</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA/SMK</option>
                                        <option value="sarjana">S1 (Sarjana)</option>
                                        <option value="magister">S2 (Magister)</option>
                                        <option value="doktoral">S3 (Doktoral)</option>
                                    </select>
                                    <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                    </p>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="penghasilan_wali">Penghasilan Wali</label>
                            <input type="number" name="penghasilan_wali" id="tahunlahirwali" class="form-control @error('penghasilan_walli') is-invalid @enderror" placeholder="Penghasilan Dason" autocomplete="disabled">
                            @error('penghasilan_wali')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                            </p>
                        </div>
                    </div>
                    
                            <a href="{{ route('datasiswa') }}" class="btn btn-primary col-md-4 offset-md-2">Kembali</a>
                        
                            <button type="submit" class="btn btn-success col-md-4 ml-2">Selanjutnya</button>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection