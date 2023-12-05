<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebclasstwo | {{ $title }}</title>
    {{-- icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components.navbar')
    @yield('content')
    @include('components.footer')


    {{-- Icons --}}
    <script>
        feather.replace()

        function goBack() {
            window.history.back();
        }
    </script>
    {{-- Script --}}
    <script src="/js/script.js"></script>
</body>

</html>
