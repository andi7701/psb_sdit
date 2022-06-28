@extends('layouts.backend.app')

@section('title')
    Reset Password Admin - SDIT INSAN QUR'ANI SUMBAWA
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
            <h4 class="card-title">Reset Password Admin</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal" action="{{ route('updatepasswordadmin', $resetpass->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Current Password</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" id="oldpassword" class="form-control @error('oldpassword') is-invalid @enderror"
                                    name="oldpassword" placeholder="Enter Current Password">
                                    @error('oldpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                            <div class="col-md-4">
                                <label>New Password</label>
                            </div>
                            <div class="col-md-8 form-group">
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" placeholder="Enter New Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Confirm Password</label>
                            </div>
                            <div class="col-md-8 form-group">  
                                <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" placeholder="Confirm Password" >
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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