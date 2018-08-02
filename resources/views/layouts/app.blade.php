<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('layouts/head')

@include('layouts/header')

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

@include('layouts/footer')

</body>
</html>
