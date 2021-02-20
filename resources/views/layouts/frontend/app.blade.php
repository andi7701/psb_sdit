<!DOCTYPE html>
<html lang="en">
@include('layouts.frontend.head')
<body>
    <div id="app">
        @include('layouts.frontend.sidebar')
        <div id="main" class='layout-navbar'>
           @include('layouts.frontend.navbar')
            <div id="main-content">
                @yield('content')
                
                @include('layouts.frontend.footer')
            </div>
        </div>
    </div>
   
    @include('layouts.frontend.js')
</body>

</html>