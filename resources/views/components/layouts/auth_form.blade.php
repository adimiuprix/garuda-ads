<!doctype html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('public/') }}user/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title }}</title>

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

    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('public/user/vendor/css/pages/page-auth.css') }}" />

    <!-- Helpers -->
    <script src="{{ asset('public/user/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('public/user/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-6 mx-4">
          <!-- Login -->
          <div class="card p-7">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="{{ route('home') }}" class="app-brand-link gap-3">
                <span class="app-brand-logo demo">
                  <span style="color: #9055fd">
                    <i class="ri-advertisement-fill ri-2x"></i>
                  </span>
                </span>
                <span class="app-brand-text demo text-heading fw-semibold">Garuda Ads</span>
              </a>
            </div>
            <!-- /Logo -->

            {{ $slot }}

          </div>
          <!-- /Login -->
          <img
            src="{{ asset('public/user/img/illustrations/tree-3.png') }}"
            alt="auth-tree"
            class="authentication-image-object-left d-none d-lg-block" />
          <img
            src="{{ asset('public/user/img/illustrations/auth-basic-mask-light.png') }}"
            class="authentication-image d-none d-lg-block"
            height="172"
            alt="triangle-bg"
            data-app-light-img="illustrations/auth-basic-mask-light.png"
            data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
          <img
            src="{{ asset('public/user/img/illustrations/tree.png') }}"
            alt="auth-tree"
            class="authentication-image-object-right d-none d-lg-block" />
        </div>
      </div>
    </div>

    <script src="{{ asset('public/user/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/user/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('public/user/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/user/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ asset('public/user/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/user/vendor/js/menu.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('public/user/js/main.js') }}"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
