<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.head')
<body>
    <div id="app">
        @include('layouts.frontend.sidebar')
        <div id="main" class='layout-navbar'>
           @include('layouts.frontend.navbar')
           <div id="main-content">
               <div class="page-heading">
                   <div class="page-title">
                       @yield('breadcrumb')
                       @if (Auth::user()->status == 'Payment' && Auth::user()->foto == NULL)
                            <div class="alert alert-success alert-dismissible show fade">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>Update Foto Profile, Gunakan Foto Formal Ukuran 3x4 Background (Merah/Biru).  <a href="{{ route('myprofile') }}">Klik Disini</a></strong>
                                </div>
                            </div>
                       @endif
                <section class="section">
                    @yield('content')
                </section>
               </div>
                
                @include('layouts.frontend.footer')
            </div>
        </div>
    </div>
   
    @include('layouts.frontend.js')
</body>

</html>