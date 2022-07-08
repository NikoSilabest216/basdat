
<!DOCTYPE html>

<html>

<head>
    @include('layouts.public.head')
</head>

<body style="height:1500px;  background-color:rgb(33,32,32);">

    @include('layouts.public.sidebar')


    @include('layouts.public.navbar')

    @yield('content')

    @include('layouts.public.footer')

</body>
@include('layouts.public.script')
</html>
