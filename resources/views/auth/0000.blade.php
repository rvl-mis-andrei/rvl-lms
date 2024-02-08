<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta content="{{ csrf_token() }}" name="csrf-token" id="csrf-token">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if ( document.documentElement ) {
            if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if ( localStorage.getItem("data-bs-theme") !== null ) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme",themeMode);
        }
    </script>
    <!--begin::Page bg image-->
    <style>
        body {
            background-image: url('../../../assets/media/auth/bg4.jpg');
        }
        [data-bs-theme="dark"] body {
            background-image: url('../../../assets/media/auth/bg4-dark.jpg');
        }
    </style>
    <!--end::Page bg image-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="auth-bg bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="javascript:;" class="mb-5 fw-bolder display-5 text-white">
                        iLEARN
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h2 class="fs-3 m-0 text-white">
                        RVLMC - LEARNING MANAGEMENT SYSTEM
                    </h2>
                    <!--end::Title-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                <!--begin::Card-->

                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                        <!--begin::Form-->
                        @yield('login-form')
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <script>
        var hostUrl = "../../../assets/index.html";
    </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
	<script src="{{ asset('js/auth/login.js') }}" type="module"></script>


</body>
<!--end::Body-->
</html>
