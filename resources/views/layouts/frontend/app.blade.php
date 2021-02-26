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
                    </div>
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