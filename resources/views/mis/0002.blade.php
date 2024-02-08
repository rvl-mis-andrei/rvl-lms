<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  pt-7 pt-lg-10 ">

    <!--begin::Toolbar wrapper-->
    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                 <!--begin::Item-->
                 <li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
                    <i class="bi bi-house-door text-gray-700 fs-6"></i>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <i class="bi bi-chevron-right fs-8 text-gray-700"></i>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
                    Device Inventory
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <i class="bi bi-chevron-right fs-8 text-gray-700"></i>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted fw-bold lh-1 mx-n1">
                    Device List </li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
            <!--begin::Title-->
            <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-3 m-0">
                Device List
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <i class="bi bi-sort-down-alt fs-2"></i> Filter
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->

                        <!--begin::Content-->
                        <div class="px-7 py-5" data-kt-user-table-filter="form">
                            <!--begin::Input group-->
                            <div class="mb-5">
                                <label class="form-label fs-6 fw-semibold">Type of Device:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-kt-user-table-filter="role" data-hide-search="true">
                                    <option></option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Analyst">Analyst</option>
                                    <option value="Developer">Developer</option>
                                    <option value="Support">Support</option>
                                    <option value="Trial">Trial</option>
                                </select>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Device Status:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-kt-user-table-filter="two-step" data-hide-search="true">
                                    <option></option>
                                    <option value="Enabled">Enabled</option>
                                </select>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                    data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                <button type="submit" class="btn btn-primary fw-semibold px-6 btn-0002-0003">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Filter-->

                    <!--begin::Export-->
                    <button type="button" class="btn btn-light-primary me-3 btn-0002-0002">
                        <i class="bi bi-box-arrow-down fs-3"></i> Export
                    </button>
                    <!--end::Export-->

                    <!--begin::Add user-->
                    <button type="button" class="btn btn-primary btn-0002-0001">
                        <i class="bi bi-plus fs-2"></i> Add Device
                    </button>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-user-table-select="selected_count"></span> Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar wrapper-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="bi bi-search fs-3 position-absolute ms-5"></i>
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13 search-0002-0001" placeholder="Search ..." />
                </div>
                <!--end::Search-->
            </div>
        </div>
        <div class="card-body py-4">

            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-125px">ITEM TAG</th>
                        <th class="min-w-125px">ITEM</th>
                        <th class="min-w-125px">SERIAL NUMBER</th>
                        <th class="min-w-125px">MANUFACTURER</th>
                        <th class="min-w-125px">ITEM DETAILS</th>
                        <th class="min-w-125px">STATUS</th>
                        <th class="text-end min-w-100px">ACTIONS</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Content-->
