import {gs_swalToast} from '../global.js';
"use strict";

var fvLogin = (function () {

    let form, fvLoginForm, formUrl, btnSubmit= $('.form-btn-submit');

    var _handleLogin = function() {

        window.onload = function () {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            console.log(123)
        }

        form     = document.querySelector("#form-login");
        formUrl  = KTUtil.attr(form,'action');

        fvLoginForm = FormValidation.formValidation(form, {
            fields: {
                username: { validators: { notEmpty: { message: "This field is required" } },
                },
                password: { validators: { notEmpty: { message: "This field is required" } },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "",
                    eleValidClass: "",
                }),
            }
        });

        btnSubmit.click((e) => {
            e.preventDefault()
            e.stopImmediatePropagation()

            fvLoginForm.validate().then((i) => {
                if (i == "Valid") {
                    btnSubmit.attr("data-kt-indicator", "on").attr('disabled', true);
                    FormValidation.utils.fetch(formUrl, {
                        method: 'POST',
                        dataType: 'json',
                        credentials: "same-origin",
                        headers: { "X-CSRF-Token": $('meta[name="csrf-token"]').attr('content') },
                        params: {
                            username: form.querySelector('[name="username"]').value,
                            password: form.querySelector('[name="password"]').value,
                        },
                    }).then((response) => {
                        if (response.status == 'success') {
                            gs_swalToast(response.message, response.status);
                            window.location.replace(response.payload);
                        } else {
                            gs_swalToast(response.message, response.status);
                            if (response.payload == 'throttle') {
                                btnSubmit.attr("data-kt-indicator", "on").attr('disabled', true);
                            } else {
                                $("#csrf-token").attr('content', response.payload);
                                btnSubmit.attr("data-kt-indicator", "off").attr('disabled', false);
                            }
                        }
                    });
                }
            });
        });

    }

    return {
        init: function () {
            _handleLogin()
        }
    };

})();

jQuery(document).ready(function() {
    fvLogin.init();
});
