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
<div class="col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <form action="" method="POST">
                                @csrf

                            <h4 class="card-title">Data Ayah</h4>
                            {{-- Data Ayah --}}
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="namaayah">Nama Ayah</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_ayah" class="form-control"
                                            placeholder="Nama Lengkap"
                                            id="namaayah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="tahunlahir">Tahun Lahir Ayah</label>
                                    <div class="position-relative">
                                        <input type="number" name="tahun_lahir" class="form-control"
                                            placeholder="Tahun Lahir"
                                            id="tahunlahir" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamatayah">Alamat Ayah</label>
                                    <div class="position-relative">
                                        <textarea name="alamat_ayah" class="form-control" id="alamatayah"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="pendidikanayah">Pendidikan Ayah</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="pendidikan_ayah" class="form-select" id="pendidikanayah">
                                                <option value="">--Pilih--</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA/SMK</option>
                                                <option value="sarjana">S1 (Sarjana)</option>
                                                <option value="magister">S2 (Magister)</option>
                                                <option value="doktoral">S3 (Doktoral)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="pekerjaanayah">Pekerjaan Ayah</label>
                                    <div class="position-relative">
                                        <input type="text" name="pekerjaan_ayah" class="form-control"
                                            placeholder="PNS/BUMN/Wirausaha/Pegawai Swasta/dll"
                                            id="pekerjaanayah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="penghasilanayah">Penghasilan Ayah</label>
                                    <div class="position-relative">
                                        <input type="number" name="penghasilan_ayah" class="form-control"
                                            placeholder="Rp. 4.***.***"
                                            id="penghasilanayah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="gelarayah">Gelar Ayah</label>
                                    <div class="position-relative">
                                        <input type="text" name="gelar_ayah" class="form-control"
                                            placeholder="Gelar Ayah"
                                            id="gelarayah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="emailayah">Email Ayah</label>
                                    <div class="position-relative">
                                        <input type="email" name="email_ayah" class="form-control"
                                            placeholder="Email"
                                            id="emailayah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form-group has-icon-left">
                                    <label for="nohpayah">No Handphone Ayah</label>
                                    <div class="position-relative">
                                        <input type="number" name="no_hp_ayah" class="form-control"
                                            placeholder="Nomor Handphone Ayah"
                                            id="nphpayah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                            {{-- batas data ayah --}}

                            <hr>
                            <h4 class="card-title">Data Ibu</h4>
                            {{-- Data Ibu --}}
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="namaibu">Nama Ibu</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_ibu" class="form-control"
                                            placeholder="Nama Lengkap"
                                            id="namaibu" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="tahunlahiribu">Tahun Lahir Ibu</label>
                                    <div class="position-relative">
                                        <input type="number" name="tahun_lahir_ibu" class="form-control"
                                            placeholder="Tahun Lahir"
                                            id="tahunlahiribu" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamatibu">Alamat Ibu</label>
                                    <div class="position-relative">
                                        <textarea name="alamat_ibu" class="form-control" id="alamatibu"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="pendidikanibu">Pendidikan Ibu</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="pendidikan_ibu" class="form-select" id="pendidikanibu">
                                                <option value="">--Pilih--</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA/SMK</option>
                                                <option value="sarjana">S1 (Sarjana)</option>
                                                <option value="magister">S2 (Magister)</option>
                                                <option value="doktoral">S3 (Doktoral)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="pekerjaanibu">Pekerjaan Ibu</label>
                                    <div class="position-relative">
                                        <input type="text" name="pekerjaan_ibu" class="form-control"
                                            placeholder="PNS/BUMN/Wirausaha/Pegawai Swasta/dll"
                                            id="pekerjaanibu" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="penghasilanibu">Penghasilan Ibu</label>
                                    <div class="position-relative">
                                        <input type="number" name="penghasilan_ibu" class="form-control"
                                            placeholder="Rp. 4.***.***"
                                            id="penghasilanibu" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="gelaribu">Gelar Ibu</label>
                                    <div class="position-relative">
                                        <input type="text" name="gelar_ibu" class="form-control"
                                            placeholder="Gelar Ibu"
                                            id="gelaribu" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="emailibu">Email Ibu</label>
                                    <div class="position-relative">
                                        <input type="email" name="email_ibu" class="form-control"
                                            placeholder="Email"
                                            id="emailibu" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12 mb-4">
                                <div class="form-group has-icon-left">
                                    <label for="nohpibu">No Handphone Ibu</label>
                                    <div class="position-relative">
                                        <input type="number" name="no_hp_ibu" class="form-control"
                                            placeholder="Nomor Handphone Ibu"
                                            id="nphpibu" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                            {{-- batas data ibu --}}

                            {{-- data wali  --}}
                            <hr>
                            <h4 class="card-title">Data Wali Murid</h4>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="namawali">Nama Wali</label>
                                    <div class="position-relative">
                                        <input type="text" name="nama_wali" class="form-control"
                                            placeholder="Nama Lengkap"
                                            id="namawali" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="tahunlahirwali">Tahun Lahir Wali</label>
                                    <div class="position-relative">
                                        <input type="number" name="tahun_lahir_wali" class="form-control"
                                            placeholder="Tahun Lahir"
                                            id="tahunlahirwali" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="pekerjaanwali">Pekerjaan Wali</label>
                                    <div class="position-relative">
                                        <input type="text" name="pekerjaan_wali" class="form-control"
                                            placeholder="PNS/BUMN/Wirausaha/Pegawai Swasta/dll"
                                            id="pekerjaanwali" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamatwali">Alamat Wali</label>
                                    <div class="position-relative">
                                        <textarea name="alamat_wali" class="form-control" id="alamatwali"
                                            rows="3"></textarea>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="pendidikanwali">Pendidikan Wali</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="pendidikan_wali" class="form-select" id="pendidikanwali">
                                                <option value="">--Pilih--</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
                                                <option value="SMA">SMA/SMK</option>
                                                <option value="sarjana">S1 (Sarjana)</option>
                                                <option value="magister">S2 (Magister)</option>
                                                <option value="doktoral">S3 (Doktoral)</option>
                                            </select>
                                            <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="penghasilanwali">Penghasilan Wali</label>
                                    <div class="position-relative">
                                        <input type="number" name="penghasilan_wali" class="form-control"
                                            placeholder="Rp. 4.***.***"
                                            id="penghasilanwali" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>
                            
                                    <a href="{{ route('datasiswa') }}" class="btn btn-primary col-md-4 offset-md-2">Kembali</a>
                                
                                    <button type="submit" class="btn btn-success col-md-4 ml-2">Selanjutnya</button>
                                
                        </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection