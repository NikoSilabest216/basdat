<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.components.head')
</head>

<body>
    <div class="wrapper sidebar_minimize">
        {{-- navbar --}}
        @include('layouts.admin.components.navbar')

        <!-- Sidebar -->
        @include('layouts.admin.components.sidebar')


        <div class="main-panel">
            {{-- content --}}
            @yield('content')
        </div>
        @include('layouts.admin.components.footer')
    </div>

</body>
@include('layouts.admin.components.script')
<script>
    @yield('another-script')
</script>

</html>
