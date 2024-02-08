@extends('auth.0000')

@section('title', "RVLMC -iLEARN | Login")

@section('login-form')

<form class="form w-100" id="form-login" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login') }}">

    <!--begin::Heading-->
    <div class="text-center mb-15">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">
            Sign In Guest Account
        </h1>
        <!--end::Title-->

        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6">
            Enter Username and Password
        </div>
        <!--end::Subtitle--->
    </div>
    <!--begin::Heading-->

    <!--begin::Input group--->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <label for="" class="form-label">Username</label>
        <input type="text" placeholder="Username" name="username" autocomplete="off"
            class="form-control bg-transparent" />
        <!--end::Email-->
    </div>

    <!--end::Input group--->
    <div class="fv-row mb-3">
        <!--begin::Password-->
        <label for="" class="form-label">Password</label>
        <input type="password" placeholder="Password" name="password" autocomplete="off"
            class="form-control bg-transparent" />
        <!--end::Password-->
    </div>
    <!--end::Input group--->

    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>

        <!--begin::Link-->
        <a href="javascript:;" class="link-primary">
            Forgot Password ?
        </a>
        <!--end::Link-->
    </div>
    <!--end::Wrapper-->

    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" class="btn btn-primary form-btn-submit">

            <!--begin::Indicator label-->
            <span class="indicator-label">
                Sign In</span>
            <!--end::Indicator label-->

            <!--begin::Indicator progress-->
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Submit button-->
</form>

@endsection
