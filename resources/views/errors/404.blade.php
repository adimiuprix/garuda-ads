<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
        <title>Halaman error</title>
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
        <!-- Page -->
        <link rel="stylesheet" href="{{ asset('public/user/vendor/css/pages/page-misc.css') }}" />
        <!-- Helpers -->
        <script src="{{ asset('public/user/vendor/js/helpers.js') }}"></script>
        <script src="{{ asset('public/user/js/config.js') }}"></script>
    </head>
    <body>
        <!-- Content -->
        <!-- Error -->
        <div class="misc-wrapper">
            <h1 class="mb-2 mx-2" style="font-size: 6rem; line-height: 6rem">404</h1>
            <h4 class="mb-2">Halaman tidak di temukan 🙄</h4>
            <p class="mb-10 mx-2">Sistem tidak dapat menemukan halaman yang anda cari...</p>
            <div class="d-flex justify-content-center mt-5">
                <img
                    src="{{ asset('public/user/img/illustrations/tree-3.png') }}"
                    alt="misc-tree"
                    class="img-fluid misc-object d-none d-lg-inline-block" />
                <img
                    src="{{ asset('public/user/img/illustrations/misc-mask-light.png') }}"
                    alt="misc-error"
                    class="misc-bg d-none d-lg-inline-block"
                    height="172"
                    data-app-light-img="illustrations/misc-mask-light.png"
                    data-app-dark-img="illustrations/misc-mask-dark.png" />
                <div class="d-flex flex-column align-items-center">
                    <img
                        src="{{ asset('public/user/img/illustrations/404.png') }}"
                        alt="misc-error"
                        class="misc-model img-fluid z-1"
                        width="780" />
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-primary text-center my-6">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Error -->
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('public/user/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('public/user/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('public/user/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('public/user/vendor/libs/node-waves/node-waves.js') }}"></script>
        <script src="{{ asset('public/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('public/user/vendor/js/menu.js') }}"></script>
        <script src="{{ asset('public/user/js/main.js') }}"></script>
    </body>
</html>