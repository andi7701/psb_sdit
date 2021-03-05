@extends('auth.layout.app')

@section('title')
    Verify Email - Sekolah Darma Bangsa
@endsection

@section('content')    
<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h1 class="auth-title">Verification Email</h1>
                <p class="auth-subtitle mb-5">Verification your email from the link we sent in the email.</p>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
                <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            {{-- <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button> --}}
                            <a class="btn btn-primary" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i> Cancel</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <img src="{{ asset('assets/images/bg/SDB.jpg') }}"  width="100%" height="100%" alt="">
            </div>
        </div>
    </div>

</div>
@endsection