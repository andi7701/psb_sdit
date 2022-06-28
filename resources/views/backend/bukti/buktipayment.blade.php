@extends('layouts.backend.buktiapp')

@section('title')
    Bukti Payment  - SDIT INSAN QUR'ANI SUMBAWA
@endsection

@section('content')
<div class="card justify-content-center">
    <div class="card-content">
        <div class="card-body">
            <h4 class="card-title">Bukti Pembayaran Registrasi {{ $user->name }}</h4>
        </div>
        {{-- @dd($user->payment) --}}
        <img class="img-fluid w-100" src="{{ asset('Payment/' . $user->payments->payment) }}"
            alt="Card image cap">
    </div>
</div>
@endsection