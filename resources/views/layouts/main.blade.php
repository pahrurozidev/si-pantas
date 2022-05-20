<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">

    <title>Si Pantas - Sistem Informasi Pelaporan Bantuan Sosial</title>
</head>

<body>
    @include('components.header')

    @yield('content')

    @include('components.footer')
</body>

</html>
