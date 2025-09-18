<!doctype html>
<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-template="vertical-menu-template-free"
    data-style="light">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>{{ $title }}</title>
        <meta name="description" content="" />
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('public/user/img/favicon/favicon.ico') }}" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('public/user/vendor/fonts/remixicon/remixicon.css') }}" />
        <!-- Menu waves for no-customizer fix -->
        <link rel="stylesheet" href="{{ asset('public/user/vendor/libs/node-waves/node-waves.css') }}" />
        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('public/user/vendor/css/core.css') }}" class="template-customizer-core-css" />
        <link rel="stylesheet" href="{{ asset('public/user/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="{{ asset('public/user/css/demo.css') }}" />
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('public/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
        <!-- Page CSS -->
        <link rel="stylesheet" href="{{ asset('public/user/vendor/css/pages/app-invoice.css') }}" />
        <!-- Helpers -->
        <script src="{{ asset('public/user/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('public/user/js/config.js') }}"></script>
    </head>
    <body>
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <x-aside />
                <!-- Layout container -->
                <div class="layout-page">
                    <x-navbar />
                    <!-- Content wrapper -->
                    <div class="content-wrapper">

                        {{ $slot }}

                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme">
                            <div class="container-xxl">
                                <div class="footer-container d-flex align-items-center justify-content-center">
                                    <div class="text-body">
                                        © <script>document.write(new Date().getFullYear());</script>, made with
                                        <span class="text-danger">
                                            <i class="tf-icons ri-heart-fill"></i>
                                        </span> 
                                        by <a href="https://themeselection.com" target="_blank" class="footer-link">ThemeSelection</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <!-- / Footer -->

                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>
        </div>
        <!-- Core JS -->
        <script src="{{ asset('public/user/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('public/user/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('public/user/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('public/user/vendor/libs/node-waves/node-waves.js') }}"></script>
        <script src="{{ asset('public/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('public/user/vendor/js/menu.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('public/user/js/main.js') }}"></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>
    </body>
</html>