@extends('layouts.backend.app')

@section('title')
    Profile Admin - PPDB Sekolah Darma Bangsa
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
            <h4 class="card-title">Profile Pribadi</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="{{ route('updateadmin', $admin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @if ($admin->foto)
                        <img src="{{ url('/fotoprofile/'.$admin->foto) }}" alt="" width="120px">
                    @else
                        
                    @endif
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Foto Profil</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="file" id="foto" class="form-control @error('foto') is-invalid @enderror"
                                    name="foto">
                                    <span class="badge bg-danger">Max File : 1 MB</span>
                                    @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                            <div class="col-md-4">
                                <label>Nama Lengkap</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="text" id="name" value="{{ $admin->name }}" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Nama Lengkap">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                            <div class="col-md-4">
                                <label>Email</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="email" value="{{ $admin->email }}" id="email-id" class="form-control"
                                    name="email-id" placeholder="Email" disabled>
                            </div>

                            <div class="col-sm-12 d-flex justify-content-end">
                                <button type="submit"
                                    class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection