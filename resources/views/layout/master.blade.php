<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.css')
    </head>
    <body class="sb-nav-fixed">
        @include('layout.top')
        <div id="layoutSidenav">
            @include('layout.sidebar')
            <div id="layoutSidenav_content">   
                @yield('content')    
            </div>
        </div>
        @include('layout.js')
    </body>
</html>
