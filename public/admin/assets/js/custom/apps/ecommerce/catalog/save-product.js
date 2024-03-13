"use strict";
var KTAppEcommerceSaveProduct = (function () {
    const e = () => {
            $("#kt_ecommerce_add_product_options").repeater({
                initEmpty: !1,
                defaultValues: { "text-input": "foo" },
                show: function () {
                    $(this).slideDown(), t();
                },
                hide: function (e) {
                    $(this).slideUp(e);
                },
            });
        },
        t = () => {
            document.querySelectorAll('[data-kt-ecommerce-catalog-add-product="product_option"]').forEach((e) => {
                $(e).hasClass("select2-hidden-accessible") || $(e).select2({ minimumResultsForSearch: -1 });
            });
        };
    return {
        init: function () {
            var o, a, formData, uploadedFiles = [], myDropzone;
            ["#kt_ecommerce_add_product_description", "#kt_ecommerce_add_product_meta_description"].forEach((e) => {
                let t = document.querySelector(e);
                t && (t = new Quill(e, { modules: { toolbar: [[{ header: [1, 2, !1] }], ["bold", "italic", "underline"], ["image", "code-block"]] }, placeholder: "Type your text here...", theme: "snow" }));
            }),
                ["#kt_ecommerce_add_product_category", "#kt_ecommerce_add_product_tags",  "#kt_ecommerce_add_product_meta_keywords"].forEach((e) => {
                    const t = document.querySelector(e);
                    t && new Tagify(t, { dropdown: { maxItems: 20, classname: "tagify__inline__suggestions", enabled: 0, closeOnSelect: !1 } });
                }),
                (o = document.querySelector("#kt_ecommerce_add_product_discount_slider")),
                (a = document.querySelector("#kt_ecommerce_add_product_discount_label")),
                noUiSlider.create(o, { start: [10], connect: !0, range: { min: 1, max: 100 } }),
                o.noUiSlider.on("update", function (e, t) {
                    (a.innerHTML = Math.round(e[t])), t && (a.innerHTML = Math.round(e[t]));
                }),
                e(),
                  myDropzone = new Dropzone("#kt_ecommerce_add_product_media", {
                    url: "/dw-admin/upload-product-img",
                    paramName: "file",
                    maxFiles: 10,
                    maxFilesize: 10,
                    addRemoveLinks: !0,
                    accept: function (e, t) {
                        "wow.jpg" == e.name ? t("Naha, you don't.") : t();
                    },
                    params: {
                        csrf_token: $('meta[name="csrf-token"]').attr('content')
                    },
                    init: function() {
                        // Listen for the addedfile event
                        this.on("addedfile", function(file) {
                            // Push file object to the array
                            uploadedFiles.push(file);
                            console.log('add', uploadedFiles);
                        });
                
                        // Listen for the removedfile event
                        this.on("removedfile", function(file) {
                            // Find the index of the file in the array
                            var index = uploadedFiles.indexOf(file);
                            // If found, remove it from the array
                            if (index !== -1) {
                                uploadedFiles.splice(index, 1);
                                console.log('remove', uploadedFiles);
                            }
                        });
                    }
                }),
                t(),
                (() => {
                    const e = document.getElementById("kt_ecommerce_add_product_status"),
                        t = document.getElementById("kt_ecommerce_add_product_status_select"),
                        o = ["bg-success", "bg-warning", "bg-danger"];
                    $(t).on("change", function (t) {
                        switch (t.target.value) {
                            case "published":
                                e.classList.remove(...o), e.classList.add("bg-success"), c();
                                break;
                            case "scheduled":
                                e.classList.remove(...o), e.classList.add("bg-warning"), d();
                                break;
                            case "inactive":
                                e.classList.remove(...o), e.classList.add("bg-danger"), c();
                                break;
                            case "draft":
                                e.classList.remove(...o), e.classList.add("bg-primary"), c();
                        }
                    });
                    const a = document.getElementById("kt_ecommerce_add_product_status_datepicker");
                    $("#kt_ecommerce_add_product_status_datepicker").flatpickr({ enableTime: !0, dateFormat: "Y-m-d H:i" });
                    const d = () => {
                            a.parentNode.classList.remove("d-none");
                        },
                        c = () => {
                            a.parentNode.classList.add("d-none");
                        };
                })(),
                (() => {
                    const e = document.querySelectorAll('[name="method"][type="radio"]'),
                        t = document.querySelector('[data-kt-ecommerce-catalog-add-category="auto-options"]');
                    e.forEach((e) => {
                        e.addEventListener("change", (e) => {
                            "1" === e.target.value ? t.classList.remove("d-none") : t.classList.add("d-none");
                        });
                    });
                })(),
                (() => {
                    const e = document.querySelectorAll('input[name="discount_option"]'),
                        t = document.getElementById("kt_ecommerce_add_product_discount_percentage"),
                        o = document.getElementById("kt_ecommerce_add_product_discount_fixed");
                    e.forEach((e) => {
                        e.addEventListener("change", (e) => {
                            switch (e.target.value) {
                                case "2":
                                    t.classList.remove("d-none"), o.classList.add("d-none");
                                    break;
                                case "3":
                                    t.classList.add("d-none"), o.classList.remove("d-none");
                                    break;
                                default:
                                    t.classList.add("d-none"), o.classList.add("d-none");
                            }
                        });
                    });
                })(),
                (() => {
                    const e = document.getElementById("kt_ecommerce_add_product_shipping_checkbox"),
                        t = document.getElementById("kt_ecommerce_add_product_shipping");
                    e.addEventListener("change", (e) => {
                        e.target.checked ? t.classList.remove("d-none") : t.classList.add("d-none");
                    });
                })(),
                (() => {
                    let e;
                    const t = document.getElementById("kt_ecommerce_add_product_form"),
                        o = document.getElementById("kt_ecommerce_add_product_submit");
                    (e = FormValidation.formValidation(t, {
                        fields: {
                            product_name: { validators: { notEmpty: { message: "Product name is required" } } },
                            sku: { validators: { notEmpty: { message: "SKU is required" } } },
                            barcode: { validators: { notEmpty: { message: "Product barcode is required" } } },
                            shelf: { validators: { notEmpty: { message: "Shelf quantity is required" } } },
                            price: { validators: { notEmpty: { message: "Product base price is required" } } },
                            tax: { validators: { notEmpty: { message: "Product tax class is required" } } },
                        },
                        plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                    })),
                        o.addEventListener("click", (a) => {
                            a.preventDefault(),
                                e &&
                                    e.validate().then(function (e) {

                                        if (e === "Valid") {
                                           
                                            formData = new FormData(t),
                                            formData.append('product_description', document.querySelector('#kt_ecommerce_add_product_description .ql-editor').innerHTML);
                                            formData.append('product_meta_description', document.querySelector('#kt_ecommerce_add_product_meta_description .ql-editor').innerHTML);
                                            formData.append('discount_label', document.querySelector('#kt_ecommerce_add_product_discount_label').innerText);
                                          
                                            for (var i = 0; i < uploadedFiles.length; i++) {
                                                formData.append('media[]', uploadedFiles[i]); // Assuming 'media[]' is the name of the file input field
                                            }

                                          
                                            $.ajax({
                                                url: t.getAttribute("action"),
                                                method: "POST",
                                                data: formData, 
                                                contentType: false,
                                                processData: false,
                                                dataType: 'json',
                                                success: function (response) {
                                                    // Handle successful response
                                                    if(response.status == 'success'){
                                                        if(response.type == 'add'){
                                                            t.reset(),
                                                            document.querySelector('#kt_ecommerce_add_product_description .ql-editor').innerHTML = '';
                                                            document.querySelector('#kt_ecommerce_add_product_meta_description .ql-editor').innerHTML = '';
                                                            document.querySelector('.category-step').innerHTML = '';
                                                            $('.image-input-wrapper').css("background-image", "none");
                                                            myDropzone.removeAllFiles();
                                                        }

                                                        if(response.type == 'update'){
                                                            setTimeout(function() {
                                                                window.location.reload();
                                                            }, 3000); // 5 seconds in milliseconds
                                                        }

                                                        Swal.fire({ text: response.message, icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                                                    }else if(response.status == 'error'){

                                                        Swal.fire({
                                                            html:  response.message,
                                                            icon: "error",
                                                            buttonsStyling: false,
                                                            confirmButtonText: "Ok, got it!",
                                                            customClass: { confirmButton: "btn btn-primary" },
                                                        });

                                                    }else if (response.status == 'errors') {

                                                        var ErrorMessage = '';
                                    
                                                        $.each(response.message, function (keys, value) {
                                                            ErrorMessage += value[0] + "</br>";
                                                        });
                                    
                                    
                                                        Swal.fire({ html: ErrorMessage, icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                                    
                                                    }
                                                },
                                                error: function (xhr, status, error) {
                                                    // Handle error
                                                    console.error("Error:", error);
                                                }
                                            });

                                        } else {
                                            // Handle validation errors
                                            Swal.fire({
                                                html: "Sorry, looks like there are some errors detected, please try again.",
                                                icon: "error",
                                                buttonsStyling: false,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: { confirmButton: "btn btn-primary" },
                                            });
                                        }
                                    });
                        });
                })();
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTAppEcommerceSaveProduct.init();
});
