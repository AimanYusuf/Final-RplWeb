<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REBCLASSTWO | {{ $title }}</title>
    {{-- icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    {{-- Tailwind css cdn --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- FLowbite Cdn --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    {{-- Config --}}
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: "20px",
                },
                extend: {
                    colors: {
                        primary: "#0ea5e9",
                        dark: "#0f172a",
                        secondary: "#64748b",
                        dangger: "#ef4444",
                    },
                    screens: {
                        "2xl": "1320px",
                    },
                },
            },
        }
    </script>
    <script src="/js/script.js"></script>
    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>

<body>
    @include('dashboard.components.navbar')
    @include('dashboard.components.sidebar')
    @yield('content')
    <script>
        feather.replace()
    </script>
    <script src="/js/script.js"></script>
    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
