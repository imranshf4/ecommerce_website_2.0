<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontend.partials.header.head')
<body>
    @include('frontend.partials.header.header')
    <h1 class="red">Frontend</h1>
    @include('frontend.partials.js')
</body>
</html>