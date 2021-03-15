<!DOCTYPE html>
<html lang="en">
@include('layouts.backend.head')
<body>
    <div id="app">
        @include('layouts.backend.sidebar')
        <div id="main" class='layout-navbar'>
           @include('layouts.backend.navbar')
           <div id="main-content">
               <div class="page-heading">
                   <div class="page-title">
                       @yield('breadcrumb')
                <section class="section">
                    @yield('content')
                </section>
               </div>
                
                @include('layouts.backend.footer')
            </div>
        </div>
    </div>
   
    @include('layouts.backend.js')
</body>

</html>