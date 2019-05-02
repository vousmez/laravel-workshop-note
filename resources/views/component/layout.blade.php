<!doctype html>
<html lang="en">
    @include('component.head')
    @include('component.style')
    <body>
        @include('component.navbar')
        @yield('body')
    </body>
    @include('component.script')
    </html>
