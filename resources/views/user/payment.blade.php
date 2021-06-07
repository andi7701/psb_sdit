@extends('layouts.frontend.app')

@section('title')
   Payment - PPDB Sekolah Darma Bangsa
@endsection

@section('content')
   <div class="card">
       <div class="card-header">
           <h4 class="card-title">Payment</h4>
           <p>Berikut ini Rincian Biaya Pendaftaran Siswa Baru Sekolah Darma Bangsa</p>
       </div>

       <div class="card-body col-10 offset-1">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item" role="presentation">
                 <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tntk"
                     role="tab" aria-controls="home" aria-selected="true">TNTK</a>
             </li>
             <li class="nav-item" role="presentation">
                 <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#sd"
                     role="tab" aria-controls="profile" aria-selected="false">SD</a>
             </li>
             <li class="nav-item" role="presentation">
                 <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#smp"
                     role="tab" aria-controls="contact" aria-selected="false">SMP</a>
             </li>
             <li class="nav-item" role="presentation">
               <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#sma"
                   role="tab" aria-controls="contact" aria-selected="false">SMA</a>
           </li>
         </ul>
         <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="tntk" role="tabpanel"
                 aria-labelledby="home-tab">
                 <div class="alert alert-secondary mt-3">
                  <h4 class="alert-heading">TNTK</h4>
                  <p>Biaya Pendaftaran = Rp. 150.000  <br>Nomor Rekening    = <b>8239003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
               </div>
             </div>
             <div class="tab-pane fade" id="sd" role="tabpanel"
                 aria-labelledby="profile-tab">
                 <div class="alert alert-secondary mt-3">
                  <h4 class="alert-heading">SD</h4>
                  <p>Biaya Pendaftaran = Rp. 150.000 <br>Nomor Rekening    = <b>1539003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
               </div>
             </div>
             <div class="tab-pane fade" id="smp" role="tabpanel"
                 aria-labelledby="contact-tab">
                 <div class="alert alert-secondary mt-3">
                  <h4 class="alert-heading">SMP</h4>
                  <p>Biaya Pendaftaran = Rp. 150.000 <br>Nomor Rekening    = <b>2639003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
               </div>
             </div>
             <div class="tab-pane fade" id="sma" role="tabpanel"
                 aria-labelledby="contact-tab">
                 <div class="alert alert-secondary mt-3">
                  <h4 class="alert-heading">SMA</h4>
                  <p>Biaya Pendaftaran = Rp. 150.000 <br> Nomor Rekening    = <b>7739003900 (BNI) an Yayasan Darma Bangsa Edukasi</b></p>
               </div>
             </div>
         </div>
     </div>
   </div>
   <div class="card">
      <div class="card-header">
         <h4 class="card-title">Upload Bukti Transfer</h4>
      </div>
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible show fade col-10 offset-1">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{ $message }}</strong>
      </div>
      @elseif($message = Session::get('error'))
      <div class="alert alert-danger alert-dismissible show fade">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <strong>{{ $message }}</strong>
      </div>
      @endif
      
      @if ($payment != NULL)
      <form action="{{ route('updatepayment', $payment->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
         <div class="col-md-10 offset-1">
            <div class="mb-3">
               @if ($payment->payment != NULL)
                   Bukti Transfer Sudah di Kirim
               @endif
                <input name="payment" class="form-control @error('payment') is-invalid @enderror" type="file" id="payment">
                <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG, PDF</span>
                @error('payment')
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="col-sm-12 d-flex justify-content-start mb-2">
               <button type="submit"
                   class="btn btn-primary me-1 mb-1">Upload</button>
           </div>
        </div>
      </form>
      @else
      <form action="{{ route('storepayment') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="col-md-10 offset-1">
            <div class="mb-3">
                <input name="payment" class="form-control @error('payment') is-invalid @enderror" type="file" id="payment">
                <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG</span>
                @error('payment')
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="col-sm-12 d-flex justify-content-start mb-2">
               <button type="submit"
                   class="btn btn-primary me-1 mb-1">Upload</button>
           </div>
        </div>
      </form>
      @endif
   </div>
@endsection