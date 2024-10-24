<!DOCTYPE html>
<html lang="EN">

<head>
    {{-- Includes head --}}
    @include('included.head')
</head>

<body>
    {{-- Includes navigation bar --}}
    @include('included.nav')
    <div class="container py-4">
        {{-- Includes content --}}
        @yield('content')
    </div>
    {{-- Includes footer --}}
    include('included.footer')
</body>

</html>
