<!DOCTYPE html>

<html lang="en">

<head>
    @include('backend.includes.header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('backend.includes.head')


        @include('backend.includes.aside_main')

        @yield('content')


        @include('backend.includes.aside_control')


        @include('backend.includes.footer1')
    </div>

    @include('backend.includes.footer')
</body>

</html>
