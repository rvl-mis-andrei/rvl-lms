<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>ID Card Management | MIS</title>
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
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script>
        var defaultThemeMode = "light",themeMode;
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
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="false" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->

    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

            <!--begin::Header-->
            <div id="kt_app_header" class="app-header shadow-sm" data-kt-sticky="true"
                data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky"
                data-kt-sticky-offset="{default: false, lg: '300px'}">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
                    id="kt_app_header_container">
                    <!--begin::Header logo-->
                    <div class="app-header-logo d-flex align-items-center me-lg-9">
                        <!--begin::Mobile toggle-->
                        <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px ms-n2 me-2 d-flex d-lg-none" id="kt_app_header_menu_toggle">
                            <i class="bi bi-list fs-1"></i>
                        </div>
                        <!--end::Mobile toggle-->

                        <!--begin::Logo image-->
                        <a href="javascript:;">
                            <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-3 m-0">
                                iLEARN
                            </h1>
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Header logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                        <!--begin::Menu wrapper-->
                        <div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
                            <!--begin::Menu holder-->
                            <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                                data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                                <!--begin::Menu-->
                                <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-600 menu-state-dark menu-arrow-gray-400 fw-semibold fw-semibold
                                fs-6 align-items-stretch my-5 my-lg-0 px-2 px-lg-0" id="#kt_app_header_menu" data-kt-menu="true">

                                    <div class="menu-item me-0 me-lg-2">
                                        <a class="menu-link" href="javascript:;" data-menu="sub-menu" data-url="dashboard">
                                            <span class="menu-title">Dashboard</span>
                                        </a>
                                    </div>

                                    <div class="menu-item me-0 me-lg-2">
                                        <a class="menu-link" href="javascript:;" data-menu="sub-menu" data-url="training-videos">
                                            <span class="menu-title">Training Videos</span>
                                        </a>
                                    </div>

                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"  data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                        <span class="menu-link">
                                            <span class="menu-title">System Management</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                            <div class="menu-item">
                                                <a class="menu-link" href="javascript:;" data-menu="sub-menu" data-url="users">
                                                    <span class="menu-icon">
                                                        <i class="ki-outline ki-rocket fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">User Access</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="javascript:;" data-menu="sub-menu" data-url="roles">
                                                    <span class="menu-icon">
                                                        <i class="ki-outline ki-rocket fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">User Roles</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="javascript:;" data-menu="sub-menu" data-url="roles">
                                                    <span class="menu-icon">
                                                        <i class="ki-outline ki-rocket fs-2"></i>
                                                    </span>
                                                    <span class="menu-title">Active URL's</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu holder-->
                        </div>
                        <!--end::Menu wrapper-->

                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <div class="app-navbar-item ms-1 ms-lg-4">
                                <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-bell-fill fs-2"></i>
                                </div>

                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"  data-kt-menu="true" id="kt_menu_notifications">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                        style="background-image:url('{{ asset('assets/media/misc/menu-header-bg.jpg') }}')">
                                        <!--begin::Title-->
                                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                            Notifications
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Tabs-->
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                    data-bs-toggle="tab" href="#kt_topbar_notifications_1">All</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                    data-bs-toggle="tab" href="#kt_topbar_notifications_3">Unread</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade active show" id="kt_topbar_notifications_1" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                Alice</a>
                                                            <div class="text-gray-400 fs-7">Phase 1 development</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">1 hr</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i
                                                                    class="ki-outline ki-information fs-2 text-danger"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                                Confidential</a>
                                                            <div class="text-gray-400 fs-7">Confidential staff documents
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i
                                                                    class="ki-outline ki-briefcase fs-2 text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                                HR</a>
                                                            <div class="text-gray-400 fs-7">Corporeate staff profiles
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-success">
                                                                <i
                                                                    class="ki-outline ki-abstract-12 fs-2 text-success"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                Redux</a>
                                                            <div class="text-gray-400 fs-7">New frontend admin theme
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i
                                                                    class="ki-outline ki-colors-square fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                Breafing</a>
                                                            <div class="text-gray-400 fs-7">Product launch status update
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">21 Jan</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-outline ki-picture fs-2 text-info"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                                Assets</a>
                                                            <div class="text-gray-400 fs-7">Collection of banner images
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">21 Jan</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i
                                                                    class="ki-outline ki-color-swatch fs-2 text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#"
                                                                class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                                Assets</a>
                                                            <div class="text-gray-400 fs-7">Collection of SVG icons
                                                            </div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">20 March</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Items-->

                                            <!--begin::View more-->
                                            <div class="py-3 text-center border-top">
                                                <a href="pages/user-profile/activity.html"
                                                    class="btn btn-color-gray-600 btn-active-color-primary">
                                                    View All
                                                    <i class="bi bi-arrow-right fs-5"></i> </a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->

                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade " id="kt_topbar_notifications_3" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">New
                                                            order</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Just now</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">New
                                                            customer</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                            process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Search
                                                            query</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">API
                                                            connection</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">1 week</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200
                                                            OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Database
                                                            restore</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Mar 5</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">System
                                                            update</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">May 15</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Server
                                                            OS update</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Apr 3</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300
                                                            WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">API
                                                            rollback</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Jun 30</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                            process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Jul 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                            process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Sep 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500
                                                            ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#"
                                                            class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                            tasks</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Dec 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Items-->

                                            <!--begin::View more-->
                                            <div class="py-3 text-center border-top">
                                                <a href="pages/user-profile/activity.html"
                                                    class="btn btn-color-gray-600 btn-active-color-primary">
                                                    View All
                                                    <i class="bi bi-arrow-right fs-5"></i> </a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                            </div>

                            <div class="app-navbar-item ms-1 ms-lg-4" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <img class="symbol symbol-35px symbol-md-40px" src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="user" />
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Max Smith <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                    max@kt.com </a>
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
                                        <a href="account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                <span
                                                    class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                            </span>
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
                                                    <i class="bi bi-sun-fill theme-light-show fs-4"></i>
                                                    <i class="bi bi-moon-fill theme-dark-show fs--4"></i>
                                                </span>
                                            </span>
                                        </a>

                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                            data-kt-menu="true" data-kt-element="theme-mode-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="bi bi-sun-fill fs-4"></i>
                                                    </span>
                                                    <span class="menu-title">
                                                        Light
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="bi bi-moon-fill fs-4"></i>
                                                    </span>
                                                    <span class="menu-title">
                                                        Dark
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                                    data-kt-value="system">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="bi bi-display-fill fs-4"></i>
                                                    </span>
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
                                        <a href="account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="javascript:;" class="menu-link px-5 text-danger">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper d-flex" id="kt_app_wrapper">
                <!--begin::Wrapper container-->
                <div class="app-container  container-fluid d-flex ">
                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">
                            <div id="page-content"></div>
                            <!--begin::Footer-->
                            @include('mis.layout.footer')
                            <!--end::Footer-->
                        </div>
                        <!--end:::Main-->
                    </div>
                </div>
            </div>
        </div>

        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="bi bi-arrow-up text-white"></i>
        </div>

        <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            var assetUrl = "{{ asset('') }}", b = new KTBlockUI(document.body);
        </script>
        <script src="{{ asset('js/mis/main.js') }}" type="module"></script>

</body>
</html>
