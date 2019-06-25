<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>I 4You News</title>

        <!-- Favicon -->
        <link rel="icon" href="assets/frontend/img/core-img/favicon.png" />

        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/frontend/style.css" />
    </head>

    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        @include('layouts.frontend.nav')

        @yield('content')

        @include('layouts.frontend.footer')
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="assets/frontend/js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="assets/frontend/js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="assets/frontend/js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="assets/frontend/js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="assets/frontend/js/active.js"></script>
    </body>
</html>
