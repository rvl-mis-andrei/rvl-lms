<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>RVLMC - iLearn</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="rvl, rvl movers corporation, rvl lms" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="RVLMC - Learning Management System" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="RVLMC" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta content="{{ csrf_token() }}" name="csrf-token" id="csrf-token">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
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

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
</head>

<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" class="app-default">
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header ">

                <!--begin::Header primary-->
                <div class="app-header-primary " data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky"
                    data-kt-sticky-offset="{default: 'false', lg: '300px'}">

                    <!--begin::Header primary container-->
                    <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between "
                        id="kt_app_header_primary_container">
                        <!--begin::Logo and search-->
                        <div class="d-flex flex-grow-1 flex-lg-grow-0">
                            <!--begin::Logo wrapper-->
                            <div class="d-flex align-items-center me-7" id="kt_app_header_logo_wrapper">
                                <!--begin::Header toggle-->
                                <button
                                    class="d-lg-none btn btn-icon btn-flex btn-color-gray-600 btn-active-color-primary w-35px h-35px ms-n2 me-2"
                                    id="kt_app_header_menu_toggle">
                                    <i class="ki-outline ki-abstract-14 fs-2"></i> </button>
                                <!--end::Header toggle-->

                                <!--begin::Logo-->
                                <a href="{{ route('guest.home') }}" class="d-flex align-items-center me-lg-20 me-5">
                                    <h1>iLEARN</h1>
                                </a>
                                <!--end::Logo-->
                            </div>
                            <!--end::Logo wrapper-->


                            <!--begin::Menu wrapper-->
                            {{-- <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                                data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                                <!--begin::Menu-->
                                <div class=" menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0 " id="kt_app_header_menu" data-kt-menu="true">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Dashboards</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                                            <!--begin:Dashboards menu-->
                                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible"
                                                data-kt-menu-dismiss="true">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="index.html" class="menu-link active">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-element-11 text-primary fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-6 fw-bold text-gray-800">Default</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Reports
                                                                                & statistics</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="dashboards/ecommerce.html"
                                                                        class="menu-link ">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-basket text-danger fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Sales
                                                                                reports</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="dashboards/projects.html"
                                                                        class="menu-link ">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-abstract-44 text-info fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-6 fw-bold text-gray-800">Projects</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Tasts,
                                                                                graphs & charts</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="dashboards/online-courses.html"
                                                                        class="menu-link ">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-color-swatch text-success fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-6 fw-bold text-gray-800">Online
                                                                                Courses</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Student
                                                                                progress</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="dashboards/marketing.html"
                                                                        class="menu-link ">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-chart-simple text-dark fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-6 fw-bold text-gray-800">Marketing</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Campaings
                                                                                & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="dashboards/bidding.html"
                                                                        class="menu-link ">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-switch text-warning fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-6 fw-bold text-gray-800">Bidding</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Campaings
                                                                                & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="dashboards/pos.html" class="menu-link ">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-abstract-42 text-danger fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">POS
                                                                                System</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Campaings
                                                                                & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="dashboards/call-center.html"
                                                                        class="menu-link ">
                                                                        <span
                                                                            class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i
                                                                                class="ki-outline ki-call text-primary fs-1"></i>
                                                                        </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span
                                                                                class="fs-6 fw-bold text-gray-800">Call
                                                                                Center</span>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-muted">Campaings
                                                                                & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->

                                                        <div class="separator separator-dashed mx-5 my-5"></div>

                                                        <!--begin:Landing-->
                                                        <div
                                                            class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                                            <div class="d-flex flex-column me-5">
                                                                <div class="fs-6 fw-bold text-gray-800">
                                                                    Landing Page Template
                                                                </div>
                                                                <div class="fs-7 fw-semibold text-muted">
                                                                    Onpe page landing template with pricing & others
                                                                </div>
                                                            </div>

                                                            <a href="landing.html"
                                                                class="btn btn-sm btn-primary fw-bold">
                                                                Explore
                                                            </a>
                                                        </div>
                                                        <!--end:Landing-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div
                                                        class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                                        <!--begin:Heading-->
                                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">
                                                            More Dashboards</h4>
                                                        <!--end:Heading-->


                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/logistics.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Logistics </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/website-analytics.html"
                                                                class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Website Analytics </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/finance-performance.html"
                                                                class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Finance Performance </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/store-analytics.html"
                                                                class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Store Analytics </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/social.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Social </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/delivery.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Delivery </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/crypto.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Crypto </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/school.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    School </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="dashboards/podcast.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Podcast </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Dashboards menu-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start" data-kt-menu-offset="-200,0"
                                        class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Pages</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                            <!--begin:Pages menu-->
                                            <div class="menu-active-bg px-4 px-lg-0">
                                                <!--begin:Tabs nav-->
                                                <div class="d-flex w-100 overflow-auto">
                                                    <ul
                                                        class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6 active text-active-primary"
                                                                href="#" data-bs-toggle="tab"
                                                                data-bs-target="#kt_app_header_menu_pages_pages">
                                                                General </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary"
                                                                href="#" data-bs-toggle="tab"
                                                                data-bs-target="#kt_app_header_menu_pages_account">
                                                                Account </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary"
                                                                href="#" data-bs-toggle="tab"
                                                                data-bs-target="#kt_app_header_menu_pages_authentication">
                                                                Authentication </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary"
                                                                href="#" data-bs-toggle="tab"
                                                                data-bs-target="#kt_app_header_menu_pages_utilities">
                                                                Utilities </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary"
                                                                href="#" data-bs-toggle="tab"
                                                                data-bs-target="#kt_app_header_menu_pages_widgets">
                                                                Widgets </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                    </ul>
                                                </div>
                                                <!--end:Tabs nav-->

                                                <!--begin:Tab content-->
                                                <div class="tab-content py-4 py-lg-8 px-lg-7">
                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane active w-lg-1000px"
                                                        id="kt_app_header_menu_pages_pages">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-8">
                                                                <!--begin:Row-->
                                                                <div class="row">
                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User
                                                                            Profile</h4>
                                                                        <!--end:Menu heading-->

                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/user-profile/overview.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Overview</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/user-profile/projects.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Projects</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/user-profile/campaigns.html"
                                                                                class="menu-link ">
                                                                                <span
                                                                                    class="menu-title">Campaigns</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/user-profile/documents.html"
                                                                                class="menu-link ">
                                                                                <span
                                                                                    class="menu-title">Documents</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/user-profile/followers.html"
                                                                                class="menu-link ">
                                                                                <span
                                                                                    class="menu-title">Followers</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="pages/user-profile/activity.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Activity</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Corporate</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/about.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">About</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/team.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Our
                                                                                        Team</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/contact.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Contact
                                                                                        Us</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/licenses.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Licenses</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/sitemap.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Sitemap</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Careers</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/careers/list.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Careers
                                                                                        List</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/careers/apply.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Careers
                                                                                        Apply</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                FAQ</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/faq/classic.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">FAQ
                                                                                        Classic</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/faq/extended.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">FAQ
                                                                                        Extended</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Blog</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/blog/home.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Blog
                                                                                        Home</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/blog/post.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Blog
                                                                                        Post</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Pricing</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/pricing.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Column
                                                                                        Pricing</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/pricing/table.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Table
                                                                                        Pricing</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Social</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/social/feeds.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Feeds</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/social/activity.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Activty</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/social/followers.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Followers</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="pages/social/settings.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Settings</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->
                                                                </div>
                                                                <!--end:Row-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-4">
                                                                <img src="assets/media/stock/600x600/img-82.jpg"
                                                                    class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-600px"
                                                        id="kt_app_header_menu_pages_account">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-5 mb-6 mb-lg-0">
                                                                <!--begin:Row-->
                                                                <div class="row">
                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-6">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/overview.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Overview</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/settings.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Settings</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/security.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Security</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/activity.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Activity</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/billing.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Billing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-6">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/statements.html"
                                                                                class="menu-link ">
                                                                                <span
                                                                                    class="menu-title">Statements</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/referrals.html"
                                                                                class="menu-link ">
                                                                                <span
                                                                                    class="menu-title">Referrals</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/api-keys.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">API Keys</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="account/logs.html"
                                                                                class="menu-link ">
                                                                                <span class="menu-title">Logs</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Col-->
                                                                </div>
                                                                <!--end:Row-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-7">
                                                                <img src="assets/media/stock/900x600/46.jpg"
                                                                    class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-1000px"
                                                        id="kt_app_header_menu_pages_authentication">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate
                                                                        Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/corporate/sign-in.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-In</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/corporate/sign-up.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/corporate/two-factor.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/corporate/reset-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Reset
                                                                                Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/corporate/new-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay
                                                                        Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/overlay/sign-in.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-In</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/overlay/sign-up.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/overlay/two-factor.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/overlay/reset-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Reset
                                                                                Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/overlay/new-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative
                                                                        Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/creative/sign-in.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-in</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/creative/sign-up.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/creative/two-factor.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/creative/reset-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Reset
                                                                                Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/creative/new-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy
                                                                        Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/fancy/sign-in.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-In</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/fancy/sign-up.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/fancy/two-factor.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/fancy/reset-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Reset
                                                                                Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/layouts/fancy/new-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General
                                                                    </h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/extended/multi-steps-sign-up.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Multi-Steps
                                                                                Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/general/welcome.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Welcome
                                                                                Message</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/general/verify-email.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Verify Email</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/general/coming-soon.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Coming Soon</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/general/password-confirmation.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Password
                                                                                Confirmation</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/general/account-deactivated.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Account
                                                                                Deactivation</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/general/error-404.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Error 404</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/general/error-500.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Error 500</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email
                                                                        Templates</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/email/welcome-message.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Welcome
                                                                                Message</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/email/reset-password.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Reset
                                                                                Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/email/subscription-confirmed.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Subscription
                                                                                Confirmed</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/email/card-declined.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Credit Card
                                                                                Declined</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/email/promo-1.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Promo 1</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/email/promo-2.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Promo 2</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="authentication/email/promo-3.html"
                                                                            class="menu-link ">
                                                                            <span class="menu-title">Promo 3</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-1000px"
                                                        id="kt_app_header_menu_pages_utilities">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-7">
                                                                <!--begin:Row-->
                                                                <div class="row">
                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                General Modals</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/general/invite-friends.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Invite
                                                                                        Friends</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/general/view-users.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">View
                                                                                        Users</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/general/select-users.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Select
                                                                                        Users</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/general/upgrade-plan.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Upgrade
                                                                                        Plan</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/general/share-earn.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Share &
                                                                                        Earn</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/forms/new-target.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">New
                                                                                        Target</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/forms/new-card.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">New
                                                                                        Card</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/forms/new-address.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">New
                                                                                        Address</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/forms/create-api-key.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create API
                                                                                        Key</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/forms/bidding.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Bidding</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Advanced Modals</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/create-app.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        App</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/create-campaign.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        Campaign</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/create-account.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        Business Acc</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/create-project.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        Project</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Top Up
                                                                                        Wallet</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/offer-a-deal.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Offer a
                                                                                        Deal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/two-factor-authentication.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Two Factor
                                                                                        Auth</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Search</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/search/horizontal.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Horizontal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/search/vertical.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Vertical</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/search/users.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Users</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/search/select-location.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Select
                                                                                        Location</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                Wizards</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/horizontal.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Horizontal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/vertical.html"
                                                                                    class="menu-link ">
                                                                                    <span
                                                                                        class="menu-title">Vertical</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/two-factor-authentication.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Two Factor
                                                                                        Auth</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/create-app.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        App</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/create-campaign.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        Campaign</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/create-account.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        Account</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/create-project.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Create
                                                                                        Project</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/modals/wizards/top-up-wallet.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Top Up
                                                                                        Wallet</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="utilities/wizards/offer-a-deal.html"
                                                                                    class="menu-link ">
                                                                                    <span class="menu-title">Offer a
                                                                                        Deal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->
                                                                </div>
                                                                <!--end:Row-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-5 pe-lg-5">
                                                                <img src="assets/media/stock/600x600/img-84.jpg"
                                                                    class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-500px"
                                                        id="kt_app_header_menu_pages_widgets">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="widgets/lists.html" class="menu-link ">
                                                                        <span class="menu-title">Lists</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="widgets/statistics.html"
                                                                        class="menu-link ">
                                                                        <span class="menu-title">Statistics</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="widgets/charts.html" class="menu-link ">
                                                                        <span class="menu-title">Charts</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="widgets/mixed.html" class="menu-link ">
                                                                        <span class="menu-title">Mixed</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="widgets/tables.html" class="menu-link ">
                                                                        <span class="menu-title">Tables</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="widgets/feeds.html" class="menu-link ">
                                                                        <span class="menu-title">Feeds</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-8">
                                                                <img src="assets/media/stock/900x600/44.jpg"
                                                                    class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->
                                                </div>
                                                <!--end:Tab content-->
                                            </div>
                                            <!--end:Pages menu-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Apps</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-rocket fs-2"></i></span><span
                                                        class="menu-title">Projects</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/list.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">My Projects</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/project.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View Project</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/targets.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Targets</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/budget.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Budget</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/users.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Users</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/files.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Files</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/activity.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Activity</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/projects/settings.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Settings</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-handcart fs-2"></i></span><span
                                                        class="menu-title">eCommerce</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                        data-kt-menu-placement="right-start"
                                                        class="menu-item menu-lg-down-accordion">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Catalog</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div
                                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/catalog/products.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Products</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/catalog/categories.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Categories</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/catalog/add-product.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Add Product</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/catalog/edit-product.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Edit Product</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/catalog/add-category.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Add Category</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/catalog/edit-category.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Edit Category</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="click"
                                                        class="menu-item menu-accordion menu-sub-indention">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Sales</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/sales/listing.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Orders Listing</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/sales/details.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Order Details</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/sales/add-order.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Add Order</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/sales/edit-order.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Edit Order</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="click"
                                                        class="menu-item menu-accordion menu-sub-indention">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Customers</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/customers/listing.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Customers Listing</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/customers/details.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Customers Details</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="click"
                                                        class="menu-item menu-accordion menu-sub-indention">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Reports</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/reports/view.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Products Viewed</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/reports/sales.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Sales</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/reports/returns.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Returns</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/reports/customer-orders.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Customer Orders</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/ecommerce/reports/shipping.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Shipping</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/ecommerce/settings.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Settings</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-chart fs-2"></i></span><span
                                                        class="menu-title">Support Center</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/support-center/overview.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Overview</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                        data-kt-menu-placement="right-start"
                                                        class="menu-item menu-lg-down-accordion">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Tickets</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div
                                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/support-center/tickets/list.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Ticket List</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/support-center/tickets/view.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Ticket View</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                        data-kt-menu-placement="right-start"
                                                        class="menu-item menu-lg-down-accordion">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Tutorials</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div
                                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/support-center/tutorials/list.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Tutorials List</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/support-center/tutorials/post.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Tutorials Post</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/support-center/faq.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">FAQ</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/support-center/licenses.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Licenses</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/support-center/contact.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Contact Us</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-shield-tick fs-2"></i></span><span
                                                        class="menu-title">User Management</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                        data-kt-menu-placement="right-start"
                                                        class="menu-item menu-lg-down-accordion">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Users</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div
                                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/user-management/users/list.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Users List</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/user-management/users/view.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">View User</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                        data-kt-menu-placement="right-start"
                                                        class="menu-item menu-lg-down-accordion">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Roles</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div
                                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/user-management/roles/list.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Roles List</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/user-management/roles/view.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">View Roles</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/user-management/permissions.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Permissions</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-phone fs-2"></i></span><span
                                                        class="menu-title">Contacts</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/contacts/getting-started.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Getting Started</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/contacts/add-contact.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Add Contact</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/contacts/edit-contact.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Edit Contact</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/contacts/view-contact.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View Contact</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-basket fs-2"></i></span><span
                                                        class="menu-title">Subscriptions</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/subscriptions/getting-started.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Getting Started</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/subscriptions/list.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Subscription List</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/subscriptions/add.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Add Subscription</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/subscriptions/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View Subscription</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-briefcase fs-2"></i></span><span
                                                        class="menu-title">Customers</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/customers/getting-started.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Getting Started</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/customers/list.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Customer Listing</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/customers/view.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Customer Details</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-credit-cart fs-2"></i></span><span
                                                        class="menu-title">Invoice Management</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                        data-kt-menu-placement="right-start"
                                                        class="menu-item menu-lg-down-accordion">
                                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Profile</span><span
                                                                class="menu-arrow"></span></span>
                                                        <!--end:Menu link-->
                                                        <!--begin:Menu sub-->
                                                        <div
                                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/invoices/view/invoice-1.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Invoice 1</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/invoices/view/invoice-2.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Invoice 2</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                            <!--begin:Menu item-->
                                                            <div class="menu-item">
                                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                                    href="apps/invoices/view/invoice-3.html"><span
                                                                        class="menu-bullet"><span
                                                                            class="bullet bullet-dot"></span></span><span
                                                                        class="menu-title">Invoice 3</span></a>
                                                                <!--end:Menu link-->
                                                            </div>
                                                            <!--end:Menu item-->
                                                        </div>
                                                        <!--end:Menu sub-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/invoices/create.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Create Invoice</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-file-added fs-2"></i></span><span
                                                        class="menu-title">File Manager</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/file-manager/folders.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Folders</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/file-manager/files.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Files</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/file-manager/blank.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Blank Directory</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/file-manager/settings.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Settings</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-sms fs-2"></i></span><span
                                                        class="menu-title">Inbox</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/inbox/listing.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Messages</span><span
                                                                class="menu-badge"><span
                                                                    class="badge badge-light-success">3</span></span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/inbox/compose.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Compose</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/inbox/reply.html"><span class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">View & Reply</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                data-kt-menu-placement="right-start"
                                                class="menu-item menu-lg-down-accordion">
                                                <!--begin:Menu link--><span class="menu-link py-3"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-message-text-2 fs-2"></i></span><span
                                                        class="menu-title">Chat</span><span
                                                        class="menu-arrow"></span></span>
                                                <!--end:Menu link-->
                                                <!--begin:Menu sub-->
                                                <div
                                                    class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/chat/private.html"><span
                                                                class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Private Chat</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/chat/group.html"><span class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Group Chat</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                    <!--begin:Menu item-->
                                                    <div class="menu-item">
                                                        <!--begin:Menu link--><a class="menu-link py-3"
                                                            href="apps/chat/drawer.html"><span class="menu-bullet"><span
                                                                    class="bullet bullet-dot"></span></span><span
                                                                class="menu-title">Drawer Chat</span></a>
                                                        <!--end:Menu link-->
                                                    </div>
                                                    <!--end:Menu item-->
                                                </div>
                                                <!--end:Menu sub-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                    href="apps/calendar.html"><span class="menu-icon"><i
                                                            class="ki-outline ki-calendar-8 fs-2"></i></span><span
                                                        class="menu-title">Calendar</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="bottom-start"
                                        class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <!--begin:Menu link--><span class="menu-link py-3"><span
                                                class="menu-title">Help</span><span
                                                class="menu-arrow d-lg-none"></span></span>
                                        <!--end:Menu link-->
                                        <!--begin:Menu sub-->
                                        <div
                                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                    href="../../html/metronic/docs/base/utilities.html" target="_blank"
                                                    title="Check out over 200 in-house components, plugins and ready for use solutions"
                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-dismiss="click" data-bs-placement="right"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-rocket fs-2"></i></span><span
                                                        class="menu-title">Components</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                    href="../../html/metronic/docs/index.html" target="_blank"
                                                    title="Check out the complete documentation"
                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-dismiss="click" data-bs-placement="right"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-abstract-26 fs-2"></i></span><span
                                                        class="menu-title">Documentation</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                    href="layout-builder.html"
                                                    title="Build your layout and export HTML for server side integration"
                                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                                    data-bs-dismiss="click" data-bs-placement="right"><span
                                                        class="menu-icon"><i
                                                            class="ki-outline ki-switch fs-2"></i></span><span
                                                        class="menu-title">Layout Builder</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link--><a class="menu-link py-3"
                                                    href="../../html/metronic/docs/getting-started/changelog.html"
                                                    target="_blank"><span class="menu-icon"><i
                                                            class="ki-outline ki-code fs-2"></i></span><span
                                                        class="menu-title">Changelog v8.2.0</span></a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <!--end:Menu sub-->
                                    </div>
                                    <!--end:Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div> --}}
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Logo and search-->


                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">

                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-3 ms-lg-9" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="d-flex align-items-center"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <!--begin:Info-->
                                    <div class="text-end d-none d-sm-flex flex-column justify-content-center me-3">
                                        <span class="text-gray-500 fs-8 fw-bold">Hello</span>
                                        <a href="javascript:;"
                                            class="text-gray-800 text-hover-primary fs-7 fw-bold d-block">{{ Auth::user()->employee_info->fullname}}</a>
                                    </div>
                                    <!--end:Info-->

                                    <!--begin::User-->
                                    <div class="cursor-pointer symbol symbol symbol-35px symbol-md-40px">
                                        <span class="symbol-label fs-5 fw-bold text-primary bg-light-primary">
                                            {{ Auth::user()->employee_info->fname[0]}}
                                        </span>
                                        <div
                                            class="position-absolute translate-middle bottom-0 mb-1 start-100 ms-n1 bg-success rounded-circle h-8px w-8px">
                                        </div>
                                    </div>
                                    <!--end::User-->
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label fs-5 fw-bold text-primary bg-light-primary">
                                                    {{ Auth::user()->employee_info->fname[0]}}
                                                </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    {{ Auth::user()->employee_info->fullname}}
                                                </div>

                                                <a href="javascript:;" class="fw-semibold text-muted text-hover-primary fs-8">
                                                    {{ Auth::user()->c_email}} </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="javascript:;" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="javascript:;" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Mode

                                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                    <i class="ki-outline bi bi-brightness-high-fill theme-light-show fs-3"></i> <i
                                                        class="ki-outline bi bi-moon-fill theme-dark-show fs-4"></i> </span>
                                            </span>
                                        </a>

                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="javascript:;" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline bi bi-brightness-high-fill fs-3"></i> </span>
                                                    <span class="menu-title">
                                                        Light
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="javascript:;" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline bi bi-moon-fill fs-4"></i> </span>
                                                    <span class="menu-title">
                                                        Dark
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="javascript:;" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="system">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline bi bi-display-fill fs-4"></i> </span>
                                                    <span class="menu-title">
                                                        System
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->

                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="javascript:;" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a target="_blank" class="menu-link px-5" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                            Sign Out
                                        </a>
                                        <form id="logout" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->

                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->

                            <!--begin::Header menu toggle-->
                            <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                                <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px"
                                    id="kt_app_header_menu_toggle">
                                    <i class="ki-outline ki-text-align-left fs-1"></i>
                                </div>
                            </div>
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header primary container-->
                </div>
                <!--end::Header primary-->

                <!--begin::Header secondary-->
                <div class="app-header-secondary ">

                    <!--begin::Header secondary container-->
                    <div class="app-container  container-xxl " id="kt_app_header_secondary_container">

                        <!--begin::Wrapper slider-->
                        <div class="app-header-slider d-flex flex-stack h-100">
                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary ms-xxl-n18"
                                id="kt_app_header_slider_prev">
                                <i class="ki-outline bi bi-arrow-left-square fs-2x"></i> </button>
                            <!--end::Slider button-->

                            <!--begin::Header slider-->
                            <div class="tns tns-fit w-100">
                                <!--begin::Slider-->
                                <div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false"
                                    data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="10000"
                                    data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-gutter="0"
                                    data-tns-responsive="{470: {items: 2}, 670: {items: 3, gutter: 15}, 992: {items: 5, gutter: 20}, 1300: {items: 6, gutter: 40}}"
                                    data-tns-center="false" data-tns-dots="false"
                                    data-tns-prev-button="#kt_app_header_slider_prev"
                                    data-tns-next-button="#kt_app_header_slider_next">



                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #6441A5">
                                                <img src="assets/media/svg/brand-logos/twitch-2.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Twitch
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">4 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/activity.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #E34984">
                                                <img src="assets/media/svg/brand-logos/dribbble-2.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Dribbble
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">1 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #00BF6D">
                                                <img src="assets/media/svg/brand-logos/gab.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Gab
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">no active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/followers.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #001935">
                                                <img src="assets/media/svg/brand-logos/tumblr.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Tumblr
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">3 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #E60000">
                                                <img src="assets/media/svg/brand-logos/youtube-2.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Youtube
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">28 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/settings.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #0B66C3">
                                                <img src="assets/media/svg/brand-logos/linkedin-3.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">LinkedIn
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">no active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #001935">
                                                <img src="assets/media/svg/brand-logos/tumblr.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Tumblr
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">3 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #00BF6D">
                                                <img src="assets/media/svg/brand-logos/gab.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Gab
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">no active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/followers.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #001935">
                                                <img src="assets/media/svg/brand-logos/tumblr.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Tumblr
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">3 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #E60000">
                                                <img src="assets/media/svg/brand-logos/youtube-2.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Youtube
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">28 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/activity.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #E34984">
                                                <img src="assets/media/svg/brand-logos/dribbble-2.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Dribbble
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">1 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #2682ff">
                                                <img src="assets/media/svg/brand-logos/eolic-energy.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Eolic
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">no active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/followers.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #cfe2ff">
                                                <img src="assets/media/svg/brand-logos/vimeo.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Vimeo
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">3 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <a href="pages/social/feeds.html"
                                        class="parent-hover cursor-pointer d-flex align-items-center flex-md-row-fluid py-lg-2 px-0">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-35px symbol-lg-40px me-3">
                                            <span class="symbol-label rounded-4" style="background-color: #f1aeb5">
                                                <img src="assets/media/svg/brand-logos/foursquare.svg" class="mw-25px"
                                                    alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->

                                        <!--begin::Info-->
                                        <div class="d-flex justify-content-center flex-column">
                                            <span
                                                class="fw-bold text-gray-800 parent-hover-primary fs-5 mb-1">Foursquare
                                                Ads</span>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">5 active
                                                campaings</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::Item-->

                                </div>
                                <!--end::Slider-->
                            </div>
                            <!--end::Header slider-->

                            <!--begin::Slider button-->
                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-xxl-n18"
                                id="kt_app_header_slider_next">
                                <i class="ki-outline bi bi-arrow-right-square fs-2x"></i> </button>
                            <!--end::Slider button-->
                        </div>
                        <!--end::Wrapper slider-->
                    </div>
                    <!--end::Header secondary container-->
                </div>
                <!--end::Header secondary-->

            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                <!--begin::Wrapper container-->
                <div class="app-container  container-xxl d-flex flex-row flex-column-fluid ">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                                {{-- CONTENT HERE --}}
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Content wrapper-->

                        <!--begin::Footer-->
                        <div id="kt_app_footer"
                            class="app-footer  align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6 ">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com/" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                        class="menu-link px-2">Home</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                        class="menu-link px-2">Contact</a></li>

                                <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                                        class="menu-link px-2">About Us</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->


                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="bi bi-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->

    <!--start::Global Javascript Bundle-->
    <script> var hostUrl = "assets/index.html"; </script>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script type="text/javascript">$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});</script>
    <script>var assetUrl = "{{ asset('') }}";</script>
    <script type="text/javascript">var b = new KTBlockUI(document.body);</script>
    <script src="{{ asset('js/guest/main.js') }}" type="module"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    {{-- <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/index.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/map.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="../../../cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script> --}}
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    {{-- <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script> --}}
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
</html>
