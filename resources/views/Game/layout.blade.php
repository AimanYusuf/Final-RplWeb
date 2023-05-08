<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rebcalsstwo | {{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

    @yield('content')

    <script>
        feather.replace();
    </script>
</body>

</html>
