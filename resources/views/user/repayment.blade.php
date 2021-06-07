@extends('layouts.frontend.app')

@section('title')
   Re-Payment - PPDB Sekolah Darma Bangsa
@endsection

@section('content')
   <div class="card">
       <div class="card-header">
           <h4 class="card-title">Re-Payment</h4>
           <p>Berikut ini Rincian Biaya Daftar Ulang Siswa Baru Sekolah Darma Bangsa</p>
       </div>

       @if ($user->data_siswas->jenjang === "SMA")
                 <div class=" d-flex justify-content-center">
                  <img src="{{ asset('img/image_daftarulang/SMA.jpeg') }}" width="90%" alt="">
               </div>
        @elseif($user->data_siswas->jenjang === "SMP")
               <div class=" d-flex justify-content-center">
                  <img src="{{ asset('img/image_daftarulang/SMP.jpeg') }}" width="90%" alt="">
               </div>
        @elseif ($user->data_siswas->jenjang === "SD")
               <div class=" d-flex justify-content-center">
                  <img src="{{ asset('img/image_daftarulang/SMP.jpeg') }}" width="90%" alt="">
               </div>
        @elseif ($user->data_siswas->jenjang == "TNTK")
                <div class=" d-flex justify-content-center">
                  <img src="{{ asset('img/image_daftarulang/SMP.jpeg') }}" width="90%" alt="">
               </div>
       @endif
       
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
      
      @if ($repayment != NULL)
            @if ($repayment->jenis_pembayaran != "Credit")
               <form action="{{ route('updaterepayment', $repayment->id) }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="col-md-10 offset-1">
                        <div class="mb-3">
                              Bukti Pembayaran Cash Sudah di Kirim
                           <input name="repayment" class="form-control @error('repayment') is-invalid @enderror" type="file" id="repayment">
                           <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG. Jika Terjadi Kesalahan Dapat Di Update</span>
                           @error('repayment')
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
               <form action="{{ route('storerepayment') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('PUT')
                     <div class="col-md-10 offset-1">
                        <div class="mb-3">
                              <span class="bg-danger text-white mb-3">Bukti Pembayaran Credit Pertama Sudah di Kirim</span>
                           <input name="repayment" class="form-control mt-3 @error('repayment') is-invalid @enderror" type="file" id="repayment">
                           <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG. Jika Terjadi Kesalahan Dapat Di Update</span>
                           @error('repayment')
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
      @else
      <form action="{{ route('storerepayment') }}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="col-md-10 offset-1">
            <div class="mb-3">
                <input name="repayment" class="form-control @error('repayment') is-invalid @enderror" type="file" id="repayment">
                <span class="badge bg-primary">Max:2 MB. Format : JPG,JPEG</span>
                @error('repayment')
                   <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
            <div class="mb-3">
               <label for="" >Pilih Pembayaran</label>
                  <select name="jenis_pembayaran" id="" class="form-select">
                     <option value="Cash">Pembayaran Cash</option>
                     <option value="Credit">Pembayaran Cicilan</option>
                  </select>
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