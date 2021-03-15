@extends('layouts.frontend.app')

@section('title')
    Kontak Kami - PPDB Sekolah Darma Bangsa
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Kontak Kami</h4>
    </div>
   @if ($contact != NULL)
   <div class="card-content pb-4">
    <div class="recent-message d-flex px-4 py-3">
        <div class="avatar avatar-lg">
            <img src="{{ asset('assets/images/faces/4.jpg') }}">
        </div>
        <div class="name ms-4">
            <h5 class="mb-1">Email</h5>
            <h6 class="text-muted mb-0">{{ $contact->email }}</h6>
        </div>
    </div>
    <div class="recent-message d-flex px-4 py-3">
        <div class="avatar avatar-lg">
            <img src="{{ asset('assets/images/faces/5.jpg') }}">
        </div>
        <div class="name ms-4">
            <h5 class="mb-1">No. Telephone</h5>
            <h6 class="text-muted mb-0">{{ $contact->phone }}</h6>
        </div>
    </div>
    <div class="recent-message d-flex px-4 py-3">
        <div class="avatar avatar-lg">
            <img src="{{ asset('assets/images/faces/1.jpg') }}">
        </div>
        <div class="name ms-4">
            <h5 class="mb-1">Whatsapp/Telephone Admin 1</h5>
            <h6 class="text-muted mb-0">{{ $contact->phone2 }}</h6>
        </div>
    </div>
        @if ($contact->phone3 != NULL)
        <div class="recent-message d-flex px-4 py-3">
            <div class="avatar avatar-lg">
                <img src="{{ asset('assets/images/faces/1.jpg') }}">
            </div>
            <div class="name ms-4">
                <h5 class="mb-1">Whatsapp/Telephone Admin 2</h5>
                <h6 class="text-muted mb-0">{{ $contact->phone3 }}</h6>
            </div>
        </div>
        @endif
    </div>
</div>
   @else
   <div class="card-content pb-4">
    <div class="recent-message d-flex px-4 py-3">
        <div class="avatar avatar-lg">
            <img src="{{ asset('assets/images/faces/4.jpg') }}">
        </div>
        <div class="name ms-4">
            <h5 class="mb-1">Email</h5>
            <h6 class="text-muted mb-0">-</h6>
        </div>
    </div>
    <div class="recent-message d-flex px-4 py-3">
        <div class="avatar avatar-lg">
            <img src="{{ asset('assets/images/faces/5.jpg') }}">
        </div>
        <div class="name ms-4">
            <h5 class="mb-1">No. Telephone</h5>
            <h6 class="text-muted mb-0">-</h6>
        </div>
    </div>
    <div class="recent-message d-flex px-4 py-3">
        <div class="avatar avatar-lg">
            <img src="{{ asset('assets/images/faces/1.jpg') }}">
        </div>
        <div class="name ms-4">
            <h5 class="mb-1">Whatsapp/Telephone</h5>
            <h6 class="text-muted mb-0">-</h6>
        </div>
    </div>
</div>
   @endif
</div>
@endsection