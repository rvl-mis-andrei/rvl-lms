<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
        <!--begin::Scroll wrapper-->
        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">MAIN</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" data-menu="main-menu" href="#dashboard" id="dashboard" data-url="dashboard">
                        <span class="menu-icon">
                            <i class="bi bi-bar-chart-line-fill fs-3"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-camera-video-fill fs-3"></i>
                        </span>
                        <span class="menu-title">Training Videos</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link" data-menu="main-menu" href="#training-videos" id="training-videos" data-url="training-videos">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Video List</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" data-menu="main-menu" href="#videos-categories" id="videos-categories" data-url="videos-categories">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Video Categories</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" data-menu="main-menu" href="#activity-logs" id="activity-logs" data-url="activity-logs">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Activity Logs</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">SYSTEM</span>
                    </div>
                </div>
                <!--end:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="bi bi-person-fill-gear fs-2"></i>
                        </span>
                        <span class="menu-title">User Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link active" href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">User List</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">System Roles</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Access Log</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="">
                        <span class="menu-icon">
                            <i class="bi bi-pc-display-horizontal fs-3"></i>
                        </span>
                        <span class="menu-title">System URL</span>
                    </a>
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--begin::Footer-->
<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
    <a href="../../html/metronic/docs/index.html"
        class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
        title="200+ in-house components and 3rd-party plugins">

        <span class="btn-label">
            Docs & Components
        </span>

        <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span
                class="path2"></span></i> </a>
</div>
<!--end::Footer-->
