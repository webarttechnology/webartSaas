"use strict";
var KTSigninGeneral = (function () {
    var t, e, r, formData;
    return {
        init: function () {
            (t = document.querySelector("#kt_sign_in_form")),
                (e = document.querySelector("#kt_sign_in_submit")),
                (r = FormValidation.formValidation(t, {
                    fields: {
                        user: { validators: { notEmpty: { message: "The user is required" } } },
                        password: { validators: { notEmpty: { message: "The password is required" } } },
                    },
                    plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                })),
                (function (t) {
                    try {
                        return new URL(t), !0;
                    } catch (t) {
                        return !1;
                    }
                })(e.closest("form").getAttribute("action"))
                    ? e.addEventListener("click", function (i) {
                          i.preventDefault(),
                              r.validate().then(function (r) {
                                  "Valid" == r
                                      ? (e.setAttribute("data-kt-indicator", "on"),
                                        (e.disabled = !0),

                                        formData = new FormData(t),
                                        formData.append('url', window.location.host),
                                      
                                        axios
                                            .post(e.closest("form").getAttribute("action"), formData)
                                            .then(function (response) {
                                                   console.log(response.data.status);

                                                if (response.data.status == "success") {
                                                    t.reset(),

                                                    Swal.fire({ text: "You have successfully logged in!", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                                                   
                                                    if (response.data.url) {
                                                        location.href = response.data.url;
                                                    }

                                                } else {
                                                    Swal.fire({ text: response.data.message , icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                                                }
                                               
                                            })
                                            .catch(function (t) {
                                                Swal.fire({
                                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                                    icon: "error",
                                                    buttonsStyling: !1,
                                                    confirmButtonText: "Ok, got it!",
                                                    customClass: { confirmButton: "btn btn-primary" },
                                                });
                                            })
                                            .then(() => {
                                                e.removeAttribute("data-kt-indicator"), (e.disabled = !1);
                                            }))
                                      : Swal.fire({
                                            text: "Sorry, looks like there are some errors detected, please try again.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: { confirmButton: "btn btn-primary" },
                                        });
                              });
                      })
                    : e.addEventListener("click", function (i) {
                          i.preventDefault(),
                              r.validate().then(function (r) {
                                  "Valid" == r
                                      ? (e.setAttribute("data-kt-indicator", "on"),
                                        (e.disabled = !0),
                                        setTimeout(function () {
                                            e.removeAttribute("data-kt-indicator"),
                                                (e.disabled = !1),
                                                Swal.fire({ text: "You have successfully logged in!", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }).then(
                                                    function (e) {
                                                        if (e.isConfirmed) {
                                                            (t.querySelector('[name="email"]').value = ""), (t.querySelector('[name="password"]').value = "");
                                                            var r = t.getAttribute("data-kt-redirect-url");
                                                            r && (location.href = r);
                                                        }
                                                    }
                                                );
                                        }, 2e3))
                                      : Swal.fire({
                                            text: "Sorry, looks like there are some errors detected, please try again.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: { confirmButton: "btn btn-primary" },
                                        });
                              });
                      });
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
