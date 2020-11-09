<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body data-spy="scroll" data-target=".fixed-top">
        @include('layouts.preloader')
        @include('layouts.navbar')
       
        @yield('content')


        @include('layouts.footer')
        @include('layouts.js_includes')
    </body>
    </html>