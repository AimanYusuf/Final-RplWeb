<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rebclasstwo | {{ $title }}</title>
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
    {{-- Style --}}
    <style type="text/tailwindcss">
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        .hamburger-line {
            @apply w-[27px] h-[3px] my-1.5 rounded-md block bg-black;
        }

        .navbar-fixed {
            @apply z-[9999] bg-white bg-opacity-80 fixed;
            backdrop-filter: blur(5px);
            box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);
        }

        .navbar-active {
            @apply right-0;
        }

        .active>span:nth-child(1) {
            @apply rotate-45 bg-red-500;
        }

        .active>span:nth-child(2) {
            @apply scale-0;
        }

        .active>span:nth-child(3) {
            @apply -rotate-45 bg-red-500;
        }
    </style>
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
    {{-- flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
