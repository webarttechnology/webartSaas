$(document).ready(function () {

    // function ToasterSuccess($msg) {
    //     $.fn.toaster({
    //         message: $msg,
    //         position: 'top-right',
    //         type: 'success',
    //     });
    // }

    // function ToasterError($msg) {
    //     $.fn.toaster({
    //         message: $msg,
    //         position: 'top-right',
    //         type: 'error',
    //     });
    // }

    $("#kt_ecommerce_add_shipping_method").repeater({
        initEmpty: !1,
        defaultValues: { "text-input": "foo" },
        show: function () {
            $(this).slideDown();
        },
        hide: function (e) {
            $(this).slideUp(e);
        },
    });

    $('#country').change(function () {
        var countryId = $(this).val();
        loadStates(countryId, '#state');
    });

    $('#state').change(function () {
        var stateId = $(this).val();
        loadCities(stateId, '#city');
    });

    $('#store_country').change(function () {
        var countryId = $(this).val();
        loadStates(countryId, '#store_state');
    });

    $('#store_state').change(function () {
        var stateId = $(this).val();
        loadCities(stateId, '#store_city');
    });

    // getlocations();

    const csrf_token = $('meta[name="csrf-token"]').attr('content');


    $(document).on("click", "#location-submit", function (e) {
        e.preventDefault();

        // Check if all fields are filled
        var isValid = true;
        $(".location").each(function () {
            if ($(this).val() === "") {
                isValid = false;
                return false; // exit loop early
            }
        });

        if (!isValid) {
            // ToasterError("Please fill in all fields.");
            return;
        }
        $.ajax({
            type: "POST",
            url: "/dw-admin/save-location",
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            data: {
                csrf_token: csrf_token,
                country: $("#country").val(),
                address: $("#address").val(),
                apartment: $("#apartment").val(),
                phone: $("#phone").val(),
                city: $("#city").val(),
                state: $("#state").val(),
                pincode: $("#pincode").val(),
                default: $("#default").val()
            },
            success: function (response) {
                // ToasterSuccess(data.message);

                if (response.status === 'success') {
                    // ToasterSuccess(response.message);
                    setTimeout(function () {
                        // location.reload();
                        $(".location").val("");
                        $("select.location").val("");
                        getlocations();
                    }, 2000);
                } else if (response.status === 'errors') {
                    var errorMessage = "";
                    var errors = response.message;

                    // Loop through each field and its errors
                    Object.keys(errors).forEach(function (field) {
                        if (Array.isArray(errors[field])) {
                            errors[field].forEach(function (message) {
                                errorMessage += message + " \n ";
                            });
                        } else {
                            errorMessage += errors[field] + "\n";
                        }
                    });
                    // ToasterError(errorMessage);
                }
            },
            error: function (xhr, status, error) {
                ToasterError("Error occurred while saving data.");
            }
        });
    });


    $(document).on("click", "#store-submit", function (e) {
        e.preventDefault();

        // Check if all fields are filled
        // var isValid = true;
        // $(".store").each(function () {
        //     if ($(this).val() === "") {
        //         isValid = false;
        //         return false; // exit loop early
        //     }
        // });

        // if (!isValid) {
        //     ToasterError("Please fill in all fields.");
        //     return;
        // }
        $.ajax({
            type: "POST",
            url: "/dw-admin/save-store",
            headers: {
                'X-CSRF-TOKEN': csrf_token
            },
            data: {
                csrf_token: csrf_token,
                store_name: $("#store_name").val(),
                store_phone: $("#store_phone").val(),
                contact_email: $("#contact_email").val(),
                sender_email: $("#sender_email").val(),
                business_name: $("#business_name").val(),
                store_country: $("#store_country").val(),
                store_state: $("#store_state").val(),
                store_city: $("#store_city").val(),
                store_address: $("#store_address").val(),
                store_apartment: $("#store_apartment").val(),
                store_pincode: $("#store_pincode").val(),
                store_timezone: $("#store_timezone").val(),
                store_unitsystem: $("#store_unitsystem").val(),
                store_weight: $("#store_weight").val(),
                store_currency: $("#store_currency").val(),
                store_prefix: $("#store_prefix").val(),
                store_suffix: $("#store_suffix").val()
            },
            success: function (response) {
                // ToasterSuccess(data.message);


                if (response.status === 'success') {
                    // ToasterSuccess(response.message);
                    setTimeout(function () {
                        // location.reload();
                        $(".store").val("");
                        $("select.store").val("");
                        getlocations();
                    }, 2000);
                } else if (response.status === 'errors') {
                    var errorMessage = "";
                    var errors = response.message;

                    // Loop through each field and its errors
                    Object.keys(errors).forEach(function (field) {
                        if (Array.isArray(errors[field])) {
                            errors[field].forEach(function (message) {
                                errorMessage += message + " \n ";
                            });
                        } else {
                            errorMessage += errors[field] + "\n";
                        }
                    });
                    // ToasterError(errorMessage);
                }
            },
            error: function (xhr, status, error) {
                ToasterError("Error occurred while saving data.");
            }
        });
    });



    $(document).on("submit", ".save-general", function (e) {
        e.preventDefault();

        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var data = new FormData($(this)[0]);
        $.ajax({
            url: url,
            type: method,
            data: data,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: function () {
                $(this).prop("disabled", true);
            },
            success: function (data) {
                $(this).prop("disabled", false);

                if (data.status == 'success') {

                    Swal.fire({ text: data.message, icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                    // ToasterSuccess(data.message);

                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                } else if (data.status == 'errors') {

                    var ErrorMessage = '';

                    $.each(data.message, function (keys, value) {
                        ErrorMessage += value[0] + "</br>";
                    });

                    // console.log(ErrorMessage);

                    Swal.fire({ html: ErrorMessage, icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

                }
            },
        });
    });

});

document.addEventListener('DOMContentLoaded', function() {
    var input = document.querySelector('input[name=meta_keywords]');
    new Tagify(input);
});


