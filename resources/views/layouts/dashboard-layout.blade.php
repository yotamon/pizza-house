<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body>
        @include('layouts.preloader')
        @include('layouts.navbar')
        @include('layouts.header')
        <div class="content">
        @yield('content')
        </div>

        @include('layouts.footer')
        @include('layouts.js_includes')
    </body>
    </html>