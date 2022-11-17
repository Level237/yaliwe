<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="admin/imgs/theme/favicon.svg" />
        <!-- Template CSS -->
        <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="screen-overlay"></div>
        @include('layouts.backend.nav-bar')
        <main class="main-wrap">
        @include('layouts.backend.header')

        @yield('content')

        @include('layouts.backend.footer')
        </main>
        <script src="admin/js/vendors/jquery-3.6.0.min.js"></script>
        <script src="admin/js/vendors/bootstrap.bundle.min.js"></script>
        <script src="admin/js/vendors/select2.min.js"></script>
        <script src="admin/js/vendors/perfect-scrollbar.js"></script>
        <script src="admin/js/vendors/jquery.fullscreen.min.js"></script>
        <script src="admin/js/vendors/chart.js"></script>
        <!-- Main Script -->
        <script src="admin/js/main.js?v=1.1" type="text/javascript"></script>
        <script src="admin/js/custom-chart.js" type="text/javascript"></script>
    </body>
</html>
