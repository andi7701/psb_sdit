@extends('layouts.backend.app')

@section('title')
    {{ $user->name }}  - PPDB Sekolah Darma Bangsa
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

@section('css')

@endsection

@section('content')
    <div class="card">
        <div class="card-body col-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#datasiswa"
                        role="tab" aria-controls="home" aria-selected="true">Data Siswa</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#dataortu"
                        role="tab" aria-controls="profile" aria-selected="false">Data Orang Tua</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#datapendukung"
                        role="tab" aria-controls="contact" aria-selected="false">Data Pendukung</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#filependukung"
                      role="tab" aria-controls="contact" aria-selected="false">File Pendukung</a>
              </li>
            </ul>

            
            <div class="tab-content" id="myTabContent">

              {{-- Data Siswa --}}
                <div class="tab-pane fade show active" id="datasiswa" role="tabpanel"
                    aria-labelledby="home-tab">
                    @if ($user->foto)
                        <img src="{{ url('/fotoprofile/'.$user->foto) }}" class="mt-4" alt="" width="150px">
                    @endif
                    <div class="mb-1 mt-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->name }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Status Member </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->status_member }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenjang Sekolah</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->jenjang }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"value=": {{ $user->data_siswas->jenis_kelamin }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            @if ($user->data_siswas->nisn != NULL)    
                                <input type="text" readonly class="form-control-plaintext disabled" value=": {{ $user->data_siswas->nisn }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled" value=":">
                            @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            @if ($user->data_siswas->nis != NULL)    
                                <input type="text" readonly class="form-control-plaintext disabled"  value="{{ $user->data_siswas->nis }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled"  value=":">
                            @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">NPSN</label>
                        <div class="col-sm-10">
                            @if ($user->data_siswas->npsn != NULL)    
                                <input type="text" readonly class="form-control-plaintext disabled"  value="{{ $user->data_siswas->npsn }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled"  value=":">
                            @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-10">
                            @if ($user->data_siswas->asal_sekolah != NULL)    
                                <input type="text" readonly class="form-control-plaintext disabled"  value="{{ $user->data_siswas->asal_sekolah }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled"  value=":">
                            @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->tempat_lahir }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{Carbon\Carbon::parse($user->data_siswas->ttl)->locale('id')->isoFormat('LL')}}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->agama }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->berkhusus }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->alamat }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kendaraan Transportasi</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->alat_transport }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tempat Tinggal</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->tempat_tinggal }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No. Handphone</label>
                        <div class="col-sm-10">
                            @if ($user->data_siswas->hp != NULL)    
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->hp }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                            @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email Siswa</label>
                        <div class="col-sm-10">
                            @if ($user->data_siswas->email_siswa != NULL)    
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->email_siswa }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                            @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No. Akta Kelahiran</label>
                        <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_siswas->no_akta }}">
                        </div>
                      </div>


                </div>
                {{-- END --}}

                {{-- Data Ortu --}}
                <div class="tab-pane fade" id="dataortu" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <h3 class="mt-4">Data Ayah</h3>
                    <div class="mb-1 mt-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->nama_ayah }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Lahir </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->tahun_lahir }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Ayah </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->alamat_ayah }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pendidikan Ayah </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->pendidikan_ayah }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan Ayah </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->pekerjaan_ayah }}">
                        </div>
                      </div>
                      
                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Penghasilan Ayah </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": @currency($user->data_ortus->penghasilan_ayah)">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Gelar Ayah </label>
                        <div class="col-sm-10">
                          @if ($user->data_ortus->gelar_ayah != NULL)
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->gelar_ayah }}">
                          @else
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                          @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email Ayah </label>
                        <div class="col-sm-10">
                          @if ($user->data_ortus->email_ayah != NULL)
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->email_ayah }}">
                          @else
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                          @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No. HP Ayah </label>
                        <div class="col-sm-10">
                          @if ($user->data_ortus->np_hp_ayah != NULL)
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->no_hp_ayah }}">
                          @else
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                          @endif
                        </div>
                      </div>

                      {{-- Data Ibu --}}
                      <h3 class="mt-4">Data Ibu</h3>
                      <div class="mb-1 mt-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama Lengkap </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->nama_ibu }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Lahir </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->tahun_lahir_ibu }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Ibu </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->alamat_ibu }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pendidikan Ibu </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->pendidikan_ibu }}">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan Ibu </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->pekerjaan_ibu }}">
                        </div>
                      </div>
                      
                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Penghasilan Ayah </label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": @currency($user->data_ortus->penghasilan_ibu)">
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Gelar Ibu </label>
                        <div class="col-sm-10">
                          @if ($user->data_ortus->gelar_ibu != NULL)
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->gelar_ibu }}">
                          @else
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                          @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email Ibu </label>
                        <div class="col-sm-10">
                          @if ($user->data_ortus->email_ayah != NULL)
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->email_ibu }}">
                          @else
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                          @endif
                        </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No. HP Ibu </label>
                        <div class="col-sm-10">
                          @if ($user->data_ortus->np_hp_ibu != NULL)
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->no_hp_ibu }}">
                          @else
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                          @endif
                        </div>
                      </div>
                      {{-- end data ibu --}}

                      {{-- Data Wali --}}
                      <h3 class="mt-4">Data Wali</h3>
                        <div class="mb-1 row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Nama Wali </label>
                          <div class="col-sm-10">
                            @if ($user->data_ortus->nama_wali != NULL)
                            <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->nama_wali }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                            @endif
                          </div>
                      </div>

                      <div class="mb-1 row">
                          <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Lahir Wali </label>
                          <div class="col-sm-10">
                            @if ($user->data_ortus->tahun_lahir_wali != NULL)
                            <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->tahun_lahir_wali }}">
                            @else
                            <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                            @endif
                          </div>
                      </div>

                      <div class="mb-1 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat Wali </label>
                        <div class="col-sm-10">
                          @if ($user->data_ortus->alamat_wali != NULL)
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->alamat_wali }}">
                          @else
                          <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                          @endif
                        </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Pekerjaan Wali </label>
                      <div class="col-sm-10">
                        @if ($user->data_ortus->pekerjaan_wali != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->pekerjaan_wali }}">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                  </div>

                  <div class="mb-1 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Pendidikan Wali </label>
                    <div class="col-sm-10">
                      @if ($user->data_ortus->pendidikan_wali != NULL)
                      <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_ortus->pendidikan_wali }}">
                      @else
                      <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                      @endif
                    </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Penghasilan Wali </label>
                      <div class="col-sm-10">
                        @if ($user->data_ortus->penghasilan_wali != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": @currency($user->data_ortus->penghasilan_wali)">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                  </div>
                </div>
                {{-- END --}}

                {{-- Data Pendukung --}}
                <div class="tab-pane fade" id="datapendukung" role="tabpanel"
                    aria-labelledby="contact-tab">
                    
                    <div class="mb-1 mt-3 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Tinggi Badan </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->tinggi_badan != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->tinggi_badan }} cm">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Berat Badan </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->berat_badan != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->berat_badan }} kg">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>
                    
                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Jarak Rumah </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->jarak_rumah != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->jarak_rumah }} km">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Waktu Tempuh </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->waktu_tempuh != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->waktu_tempuh }} menit">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Jumlah Saudara </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->jumlah_saudara != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->jumlah_saudara }} bersaudara">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Prestasi </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->jenis_prestasi != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->jenis_prestasi }}">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Tingkat </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->tingkat != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->tingkat }}">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Nama Prestasi </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->nama_prestasi != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->nama_prestasi }}">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Tahun Prestasi </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->tahun_prestasi != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->tahun_prestasi }}">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                    <div class="mb-1 row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Penyelenggara </label>
                      <div class="col-sm-10">
                        @if ($user->data_pendukung->penyelenggara != NULL)
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": {{ $user->data_pendukung->penyelenggara }}">
                        @else
                        <input type="text" readonly class="form-control-plaintext disabled"  value=": ">
                        @endif
                      </div>
                    </div>

                </div>
                {{-- end Data Pendukung --}}

                {{-- File Pendukung --}}
                <div class="tab-pane fade" id="filependukung" role="tabpanel"
                    aria-labelledby="contact-tab">
                    <div class="row">

                          <div class="col-xl-4 col-md-6 col-sm-12 mt-5">
                            <div class="card">
                              <div class="card-content">
                                  <img src="{{ asset('assets/images/bg/SDB.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                                  <div class="card-body">
                                      <h5 class="card-title">Kartu Keluarga</h5>
                                      <a href="" class="btn btn-primary">Download</a>
                                  </div>
                              </div>
                             </div>

                             <div class="card">
                              <div class="card-content">
                                  <img src="{{ asset('assets/images/bg/SDB.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                                  <div class="card-body">
                                      <h5 class="card-title">KTP Ibu</h5>
                                      <a href="" class="btn btn-primary">Download</a>
                                  </div>
                              </div>
                             </div>

                        </div>
                        {{-- end card --}}
      
                        <div class="col-xl-4 col-md-6 col-sm-12 mt-5">
                          <div class="card">
                            <div class="card-content">
                                <img src="{{ asset('assets/images/bg/SDB.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                                <div class="card-body">
                                    <h5 class="card-title">Akte Kelahiran</h5>
                                    <a href="" class="btn btn-primary">Download</a>
                                </div>
                            </div>
                          </div>

                          <div class="card">
                            <div class="card-content">
                                <img src="{{ asset('assets/images/bg/SDB.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                                <div class="card-body">
                                    <h5 class="card-title">Raport Terakhir</h5>
                                    <a href="" class="btn btn-primary">Download</a>
                                </div>
                            </div>
                           </div>

                      </div>
                      {{-- end card --}}

                      <div class="col-xl-4 col-md-6 col-sm-12 mt-5">
                        <div class="card">
                          <div class="card-content">
                              <img src="{{ asset('assets/images/bg/SDB.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                              <div class="card-body">
                                  <h5 class="card-title">KTP Ayah</h5>
                                  <a href="" class="btn btn-primary">Download</a>
                              </div>
                          </div>
                      </div>
                    </div>
                    {{-- end card --}}
                      
                    </div>

                </div>
                {{-- end file pendukung --}}

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection