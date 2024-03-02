<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                New Training Videos
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="javascript:;" class="text-muted text-hover-primary">
                        Dashboard </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    Training Videos </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    New Training Videos </li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Form-->
        <form action="{{ route('mis.create') }}" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row form-0021-0001">
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <!--begin::Thumbnail settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Thumbnail</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <!--begin::Image input placeholder-->
                        <style>
                            .image-input-placeholder {
                                background-image: url('../../../assets/media/svg/files/blank-image.svg');
                            }

                            [data-bs-theme="dark"] .image-input-placeholder {
                                background-image: url('../../../assets/media/svg/files/blank-image-dark.svg');
                            }
                        </style>
                        <!--end::Image input placeholder-->

                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil fs-7"><span class="path1"></span><span
                                        class="path2"></span></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="bi bi-x fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="bi bi-x-lg fs-2"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the training thumbnail image. Only
                            *.png, *.jpg and *.jpeg image files are accepted</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Thumbnail settings-->
                <!--begin::Status-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Status</h2>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status">
                            </div>
                        </div>
                        <!--begin::Card toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0 fv-row">
                        <!--begin::Select2-->
                        <select class="form-select form-select2" data-control="select2" data-hide-search="true"
                        data-placeholder="Select an option" data-allow-clear="true" name="status">
                            <option></option>
                            <option value="published" selected>Published</option>
                            <option value="draft">Archive</option>
                        </select>
                        <!--end::Select2-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the product status.</div>
                        <!--end::Description-->

                        <!--begin::Datepicker-->
                        <div class="d-none mt-10">
                            <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing
                                date and time</label>
                            <input class="form-control" id="kt_ecommerce_add_product_status_datepicker"
                                placeholder="Pick date & time" />
                        </div>
                        <!--end::Datepicker-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Status-->
            </div>
            <!--end::Aside column-->

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::Tab content-->
                <div class="d-flex flex-column gap-7 gap-lg-10">

                    <!--begin::General options-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>General</h2>
                            </div>
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required form-label">Training Title</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="title" class="form-control mb-2"
                                    placeholder="Product name" value="" />
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">A training title is required
                                    and recommended to be unique.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->

                            <div class="mb-10 fv-row">
                                <label class="required form-label">Department</label>
                                <select class="form-select form-select2" data-control="select2" data-hide-search="true"
                                    data-placeholder="Select an option" data-allow-clear="true" name="department">
                                    <option></option>
                                    <option value="published">Publish</option>
                                    <option value="draft">Archive</option>
                                </select>
                            </div>

                            <!--begin::Input group-->
                            <div>
                                <!--begin::Label-->
                                <label class="form-label">Description</label>
                                <!--end::Label-->

                                <!--begin::Editor-->
                                <div id="description" name="description" class="min-h-200px mb-2"></div>
                                <!--end::Editor-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set a description to the
                                    training for better visibility.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::General options-->
                    <!--begin::Media-->
                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Training Videos</h2>
                            </div>
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="fv-row mb-2">
                                <input type="file" multiple="true" class="filepond" name="filepond"  accept="video/*"/>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Description-->
                            <div class="text-muted fs-7">Upload up to 10 files.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Media-->
                </div>
                <!--end::Tab content-->

                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <button class="btn btn-light me-5">
                        Cancel
                    </button>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="button"class="btn btn-primary">
                        <span class="indicator-label">
                            Save Changes
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content container-->
</div>
