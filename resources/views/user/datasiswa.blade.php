@extends('layouts.frontend.app')

@section('title')
   Data Siswa - PPDB Sekolah Darma Bangsa
@endsection

@section('breadcrumb')
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Siswa</h3>
            <p class="text-subtitle text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
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
<div class="col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical">
                    <div class="form-body">
                        <div class="row">
                            <form action="" method="POST">
                                @csrf
                            
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="statusmember">Status Member</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="status_member" class="form-select" id="statusmember">
                                                <option value="">--Pilih Status--</option>
                                                <option value="member">Member (Asal Sekolah Darma Bangsa)</option>
                                                <option value="nonmember">Non Member (Luar Sekolah Darma Bangsa)</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="jenjangsiswa">Jenjang Siswa</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="jenjang" class="form-select" id="jenjangsiswa">
                                                <option value="">--Pilih Jenjang--</option>
                                                <option value="toodler">Toodler (Usia 2 Tahun)</option>
                                                <option value="nursery">Nursery (Usia 3 Tahun)</option>
                                                <option value="tka">TK A (Usia 4 Tahun)</option>
                                                <option value="tkb">TK B (Usia 5 Tahun)</option>
                                                <option value="sd">SD</option>
                                                <option value="smp">SMP</option>
                                                <option value="sma">SMA</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="jenis_kelamin" class="form-select" id="jeniskelamin">
                                                <option value="">--Pilih Status--</option>
                                                <option value="lakilaki">Laki-Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="nisn">NISN</label>
                                    <div class="position-relative">
                                        <input type="number" name="nisn" class="form-control"
                                            placeholder="Nomor Induk Siswa Nasional"
                                            id="nisn" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="nis">NIS (Nomor Induk Siswa)</label>
                                    <div class="position-relative">
                                        <input type="number" name="nis" class="form-control"
                                            placeholder="Nomor Induk Siswa"
                                            id="nis" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="nik">NIK</label>
                                    <div class="position-relative">
                                        <input type="number" name="nik" class="form-control"
                                            placeholder="Nomor Induk Keluarga"
                                            id="nik" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="npsn">NPSN</label>
                                    <div class="position-relative">
                                        <input type="number" name="npsn" class="form-control"
                                            placeholder="Nomor Pokok Sekolah Nasional"
                                            id="npsn" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Di kosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="asalsekolah">Asal Sekolah</label>
                                    <div class="position-relative">
                                        <input type="text" name="asal_sekolah" class="form-control"
                                            placeholder="Asal Sekolah"
                                            id="asalsekolah" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="tempatlahir">Tempat Lahir</label>
                                    <div class="position-relative">
                                        <input type="text" name="tempat_lahir" class="form-control"
                                            placeholder="Provinsi/Kota/Kabupaten"
                                            id="tempatlahir" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <div class="position-relative">
                                        <input type="date" name="ttl" class="form-control"
                                            id="tanggallahir">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="agama">Agama</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="agama" class="form-select" id="agama">
                                                <option value="">--Pilih Status--</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristenprotestan">Kristen Protestan</option>
                                                <option value="kristenkatolik">Kristen Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="budha">Budha</option>
                                                <option value="konghuchu">Konghuchu</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="khusus">Berkebutuhan Khusus</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="berkhusus" class="form-select" id="khusus">
                                                <option value="">--Pilih Status--</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <div class="position-relative">
                                        <textarea name="alamat" class="form-control" id="alamat"
                                            rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="transportasi">Kendaraan Transportasi</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="alat_transport" class="form-select" id="transportasi">
                                                <option value="">--Pilih Status--</option>
                                                <option value="motor">Motor</option>
                                                <option value="mobil">Mobil</option>
                                                <option value="bus">Bus Abudemen</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="tempattinggal">Tempat Tinggal Siswa</label>
                                    <div class="position-relative">
                                        <fieldset class="form-group">
                                            <select name="tempat_tinggal" class="form-select" id="tempattinggal">
                                                <option value="">--Pilih Status--</option>
                                                <option value="rumah">Rumah</option>
                                                <option value="kost">Kost</option>
                                                <option value="apartemen">Apartemen</option>
                                                <option value="kontrakan">Kontrakan</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="hp">No Handphone Siswa</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control"
                                            placeholder="Ex : 0812-7766-8849"
                                            id="hp" name="hp">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Dikosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="email">Email Siswa</label>
                                    <div class="position-relative">
                                        <input type="email" name="email_siswa" class="form-control"
                                            placeholder="Email"
                                            id="email" autocomplete="none">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <span class="badge bg-danger">Jika Tidak Ada Dapat Dikosongkan</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="noakta">Nomor Akta Kelahihran</label>
                                    <div class="position-relative">
                                        <input type="text" name="no_akta" class="form-control"
                                            placeholder="Nomor Akta"
                                            id="noakta">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Selanjutnya</button>
                        </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection