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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');

        * {
            scroll-behavior: smooth;
        }

        h1,
        h4,
        .navbar-brand,
        .nav-link,
        .username,
        .card-title,
        small.d-block,
        button.w-100,
        div.keluar,
        .list-group-item h5,
        .list-group-item small,
        .beranda,
        .carousel-caption h5,
        label {
            font-family: 'Quicksand', sans-serif;
        }

        small {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
        }

        /* navbar */
        .navbar-brand {
            letter-spacing: 1px;
        }

        .navbar-nav:hover {
            margin-top: 1px !important;
        }

        .navbar-nav:hover .username {
            margin-top: -1px !important;
        }

        .nav-link:hover::after {
            content: "";
            display: block;
            width: 100%;
            height: 3px;
            background: #0D6EFD;
        }

        .registration:hover::after {
            height: 0;
        }

        .registration:hover {
            transform: scale(1.05);
            transition: all .3s;
        }

        .navbar-nav .username {
            margin-left: 48px !important;
        }

        /* fitur kami */
        div.feature {
            display: grid;
            gap: 20px;
        }

        .feature img {
            width: 300px;
        }

        /* bantuan sosial */
        .articles {
            display: grid;
            gap: 10px;
        }

        /* footer */
        .text-decoration-none:hover {
            text-decoration: underline !important;
        }

        .social-media .nav-link:hover::after,
        .dashboard .nav-link:hover::after {
            height: 0;
            visibility: hidden;
        }

        /* dashboard */
        .navbar.dashboard {
            background: red;
            position: relative;
            z-index: 3 !important;
        }

        .nav-item .text-dark:hover {
            margin-top: -1px !important;
        }

        .dashboard nav {
            position: relative;
            z-index: 2;
            margin-top: -60px !important;
        }

        .dashboard main {
            position: relative;
            z-index: 1;
        }

        div.keluar {
            display: none !important;
        }

        .keluar:hover {
            background: #F8F9FA !important;
        }

        .beranda:hover {
            text-decoration: none !important;
        }

        .edit:hover,
        .detail:hover,
        .hapus:hover {
            color: white;
        }

        .penerima:hover {
            text-decoration: none !important;
        }

        /* pelaporan */
        .jumlah_bantuan_laporan {
            display: none;
        }

        /* dashboard-temp */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }

        @media screen and (min-width: 600px) {

            .feature img {
                width: 200px;
            }

            /* footer */
            .social-media {
                width: 400px !important;
            }
        }

        @media screen and (min-width: 1500px) {

            /* bantuan sosial */
            .articles {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media screen and (min-width: 1000px) {

            /* fitur kami */
            div.feature {
                grid-template-columns: repeat(3, 1fr);
            }

            /* bantuan sosial */
            .articles {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media screen and (max-width: 991px) {

            /* navbar */
            .navbar-nav .nav-item {
                margin: 5px 0 !important;
            }

            .navbar-nav:hover {
                margin-top: 0 !important;
            }

            .nav-link:hover::after {
                height: 0;
                visibility: hidden;
            }

            .authentication {
                display: flex;
                flex-direction: column;
                margin-left: 0 !important;
            }

            .navbar-nav .username {
                display: block;
                margin-left: 0 !important;
            }

            .list-group.ms-2 {
                margin: 15px 0 0 !important;
            }

            /* bantuan sosial */
            .articles {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 800px) {

            /* bantuan sosial */
            .articles {
                grid-template-columns: repeat(1, 1fr);
            }

            .welcome {
                font-size: 30px !important;
                line-height: 40px !important;
            }

            .welcome-body {
                font-size: 18px !important;
            }
        }

        @media screen and (max-width: 767px) {

            /* footer */
            footer .description {
                flex-direction: column;
            }

            .social-media {
                width: 350px !important;
            }

            .description section {
                margin-bottom: 20px !important;
            }

            #tentang,
            .login,
            .register,
            .contact {
                padding: 40px !important;
            }

            /* dashboard */
            .dashboard .keluar {
                display: none;
            }

            div.keluar {
                display: block !important;
            }

            .dashboard nav {
                margin: -150px auto 100px !important;
            }
        }

        @media screen and (max-width: 480px) {

            #tentang,
            .login,
            .register,
            .contact {
                padding: 20px !important;
            }

            .welcome {
                font-size: 25px !important;
                line-height: 30px !important;
            }

            .welcome-body {
                font-size: 15px !important;
            }
        }

        .input-style-1 {
            position: relative;
            margin-bottom: 30px;
        }

        .input-style-1 label {
            font-size: 14px;
            font-weight: 500;
            color: #262d3f;
            display: block;
            margin-bottom: 10px;
        }

        .input-style-1 input,
        .input-style-1 textarea {
            width: 100%;
            background: rgba(239, 239, 239, 0.5);
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            padding: 16px;
            color: #5d657b;
            resize: none;
        }

        .input-style-1 input:focus,
        .input-style-1 textarea:focus {
            border-color: #2f80ed;
        }

        .input-style-1 input[type="date"],
        .input-style-1 input[type="time"],
        .input-style-1 textarea[type="date"],
        .input-style-1 textarea[type="time"] {
            background: transparent;
        }
    </style>
</head>

<body>
    @include('components.header')

    @yield('content')

    @include('components.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
