@extends('layouts.backend.app')

@section('title')
    Contact Admin - PPDB Sekolah Darma Bangsa
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
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Manage Kontak</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            @if ($contact != NULL)
                            <form class="form form-horizontal" action="{{ route('updatecontact', $contact->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Email Admin</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ $contact->email }}" placeholder="Masukan Email Admin">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Telephone Sekolah</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="phone" class="form-control @error('phone') is-invalid @enderror"
                                                name="phone" value="{{ $contact->phone }}" placeholder="Masukan Telephone Sekolah">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Whatsapp/Hp Admin 1</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="phone2" class="form-control @error('phone2') is-invalid @enderror"
                                                name="phone2" value="{{ $contact->phone2 }}" placeholder="Masukan Whatsapp Admin 1">
                                                @error('phone2')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        @if ($contact->phone3 !=NULL)
                                        <div class="col-md-4">
                                            <label>Whatsapp/Hp Admin 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="phone3" class="form-control @error('phone3') is-invalid @enderror"
                                                name="phone3" value="{{ $contact->phone3 }}" placeholder="Masukan Whatsapp Admin 2">
                                                @error('phone3')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                                </p>
                                        </div>
                                        @else
                                        <div class="col-md-4">
                                            <label>Whatsapp/Hp Admin 2</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="phone3" class="form-control @error('phone3') is-invalid @enderror"
                                                name="phone3" placeholder="Masukan Whatsapp Admin 2">
                                                @error('phone3')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <p><small class="badge bg-danger"><b>Jika Tidak Ada Dapat Di kosongkan</b></small>
                                                </p>
                                        </div>
                                        @endif
                                        
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @else
                                Tidak Ada
                            @endif
                        </div>
                    </div>
                </div>
            </div>
@endsection