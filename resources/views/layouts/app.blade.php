<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

@include('layouts/head')

</head>
<body>
@include('layouts/header')

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

@include('layouts/footer')

</body>
</html>
