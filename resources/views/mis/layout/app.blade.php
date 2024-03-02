<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>RVLMC - iLearn</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RVL Movers Corporation - E-Inventory Management" />
    <meta property="og:url" content="https://rvlmisapp.com" />
    <meta property="og:site_name" content="E-Inventory Management" />
    <meta content="{{ csrf_token() }}" name="csrf-token" id="csrf-token">

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/mis/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mis/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mis/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/mis/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-media-preview/dist/filepond-plugin-media-preview.css" rel="stylesheet">
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <!--begin::Header-->
            @include('mis.layout.header')
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


                    <!--begin::Logo-->
                    <div class="app-sidebar-logo px-8" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="javascript:;" class="text-white fs-1">
                           <h1 class="text-white">iLearn</h1>
                        </a>
                        <!--end::Logo image-->

                        <!--begin::Sidebar toggle-->
                    <div id="kt_app_sidebar_toggle"
                        class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
                        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                        data-kt-toggle-name="app-sidebar-minimize">
                        <i class="ki-duotone bi bi-arrow-bar-right fs-4 rotate-180"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Sidebar toggle-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::sidebar menu-->
                    @include('mis.layout.sidebar')
                    <!--end::sidebar menu-->
                </div>
                <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">



                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">

                        </div>
                        <!--end::Content wrapper-->

                        <!--begin::Footer-->
                        @include('mis.layout.footer')
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="bi bi-arrow-up text-white"></i>
        </div>
        <!--end::Scrolltop-->

        <!--begin::Javascript-->
        <script> var hostUrl = "assets/index.html"; </script>
        <script src="{{ asset('assets/mis/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/mis/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/mis/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script>
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            var assetUrl = "{{ asset('') }}", b = new KTBlockUI(document.body);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-beta.0/dist/quill.min.js"></script>
        <script src="https://unpkg.com/filepond-plugin-media-preview@1.0.2/dist/filepond-plugin-media-preview.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        <script src="{{ asset('js/mis/main.js') }}" type="module"></script>

</body>
</html>
