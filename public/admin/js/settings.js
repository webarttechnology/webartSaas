$(document).ready(function () {
    function ToasterSuccess($msg) {
        $.fn.toaster({
            message: $msg,
            position: 'top-right',
            type: 'success',
        });
    }

    function ToasterError($msg) {
        $.fn.toaster({
            message: $msg,
            position: 'top-right',
            type: 'error',
        });
    }

    $('#country').change(function() {
        var countryId = $(this).val();
        loadStates(countryId, '#state');
    });

    $('#state').change(function() {
        var stateId = $(this).val();
        loadCities(stateId, '#city');
    });

    $('#store_country').change(function() {
        var countryId = $(this).val();
        loadStates(countryId, '#store_state');
    });

    $('#store_state').change(function() {
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
            ToasterError("Please fill in all fields.");
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
                    ToasterSuccess(response.message);
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
                    ToasterError(errorMessage);
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
                    ToasterSuccess(response.message);
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
                    ToasterError(errorMessage);
                }
            },
            error: function (xhr, status, error) {
                ToasterError("Error occurred while saving data.");
            }
        });
    });
    

});

function ToasterSuccess($msg) {
    $.fn.toaster({
        message: $msg,
        position: 'top-right',
        type: 'success',
    });
}

function ToasterError($msg) {
    $.fn.toaster({
        message: $msg,
        position: 'top-right',
        type: 'error',
    });
}

var csrfToken = $('meta[name="csrf-token"]').attr('content');


$(document).on("click", ".make-default", function (e) {
    e.preventDefault();

    var $thisBtn = $(this);

    $.ajax({
        url: "/dw-admin/make-default",
        method: 'POST',
        data: {
            id: $(this).data('id'),
            csrf_token: csrfToken
        },
        success: function (response) {
            console.log(response);
            if (response.status === 'success') {
                ToasterSuccess(response.message);

                $('.make-btn').removeClass('bg-light').addClass('make-default  btn btn-sm btn-primary').text('Make Default');
                $thisBtn.removeClass('make-default btn btn-sm btn-primary').addClass('bg-light').text('Default');

                // Hide delete button for the current item
                // $thisBtn.closest('.box').find('.delete-location').remove();
                getlocations();
                 
            }
        },
    });
});

$(document).on("click", ".delete-location", function (e) {
    e.preventDefault();
    var $thisBtn = $(this);

    $.ajax({
        url: "/dw-admin/delete-location",
        method: 'POST',
        data: {
            id: $(this).data('id'),
            csrf_token: csrfToken
        },
        success: function (response) {
            console.log(response);
            if (response.status === 'success') {
                ToasterSuccess(response.message);
                $thisBtn.closest('.box').remove();
                getlocations();
            }
        },
        error: function (xhr, status, error) {
            // Handle error
            console.error(xhr.responseText);
        }
    });
});


function getlocations() {
    $.ajax({
        url: "/dw-admin/location-data",
        method: 'GET',
        success: function (response) {

            console.log(response);
            
            $('.location-data').html('');
            $('.location-data').html(response);
        },
    });
}


function loadStates(countryId, stateSelectId) {
    $.ajax({
        url: '/dw-admin/get-states',
        type: 'post',
        data: { country_id: countryId,
            csrf_token: csrfToken },
            success: function(response) {
                var states = response;
                var options = '<option value="">Select State</option>';
                states.forEach(function(state) {
                    options += '<option value="' + state.id + '">' + state.name + '</option>';
                });
                $(stateSelectId).html(options);
                $(stateSelectId).trigger('change');
            }
    });
}

function loadCities(stateId, citySelectId) {
    $.ajax({
        url: '/dw-admin/get-city',
        type: 'post',
        data: { state_id: stateId,
            csrf_token: csrfToken },
        success: function(response) {
            var cities = response;
            var options = '<option value="">Select City</option>';
            cities.forEach(function(city) {
                options += '<option value="' + city.id + '">' + city.name + '</option>';
            });
            $(citySelectId).html(options);
            $(citySelectId).trigger('change');
        }
    });
}



