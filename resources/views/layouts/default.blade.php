<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="container">
        @yield('content')
    </div>

    @include('includes.footer')
</body>
</html>
