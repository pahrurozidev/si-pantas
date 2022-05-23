<!DOCTYPE html>
<html lang="en" id="beranda">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Si Pantas - Sistem Informasi Pelaporan Bantuan Sosial</title>
</head>

<body>
    @include('components.header')

    @yield('content')

    @include('components.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
