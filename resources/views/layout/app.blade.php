<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Meta and CSS File --}}
    @include('layout.head')

</head>
<body>
    {{-- Navbar Content --}}
    @include('layout.navbar')

    {{-- Main Content --}}
    <main class="main">
        @yield('content')
    </main>

    {{-- Footer Content --}}
    @include('layout.footer')

</body>
</html>