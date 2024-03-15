$(document).ready(function () {
    const csrf_token = $('meta[name="csrf-token"]').attr('content');

    $(document).on("click", "#generate", function (e) {
        e.preventDefault();
        var charsNumber = "0123456789";
        var charsUpper = "ABCDEFGHIJKLMNOPQRSTUVWXTZ";
        var charsAll = [charsNumber, charsUpper];
        var chars = charsAll.join('');
        // Check for number of characters to generate. Defauts to 8 characters
        var randomString = '';
        for (var i = 0; i < 10; i++) { // Get string length
            var randNum = Math.floor(Math.random() * chars.length); // and then
            randomString += chars.substring(randNum, randNum + 1); // randomize it
        }
        document.getElementById('coupon_code').value = randomString;
    });

    $(document).on("change", ".coupon-type", function (e) {
        e.preventDefault();

        if ($(this).val() == 'Percentage') {
            $('.maximum_amount').show();
        } else {
            $('.maximum_amount').hide();
        }
    });


    $(document).on("submit", ".save-coupon", function (e) {
        e.preventDefault();

        // if ($('#coupon_code').val() == '') {
        //     $('.error-coupon_code').text('Coupon field is required');
        // } else {
        //     $('.error-coupon_code').text('');
        // }
        var isValid = true;
        $(".coupons").each(function () {
            if ($(this).val() === "") {
                isValid = false;
                return false; // exit loop early
            }
        });

        if (!isValid) {
            // ToasterError("Please fill in all fields.");
            Swal.fire({ text: "Please fill in all fields.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
            return;
        }

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
                    $('#category').val('');
                    $('#sub_category').val('');

                    // ToasterSuccess(data.message);

                    Swal.fire({ text: data.message, icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

                    resetCKEditor();

                    // setTimeout(() => {
                    //     location.reload();
                    // }, 1000);
                } else if (data.status == 'errors') {


                    if (data.message.category) {

                        Swal.fire({ text: data.message.category[0], icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

                    }
                }
            },
        });



    });

    $(document).on("click", ".delete_coupon", function (e) {
        e.preventDefault();

        var couponId = $(this).data('id');
        $.ajax({
            url: '/dw-admin/delete-coupon',
            type: "POST",
            data: { id: couponId, csrf_token: csrf_token },
            dataType: 'json',
    
            success: function (data) {
                $(this).prop("disabled", false);
    
                if (data.status == 'success') {
                    // Handle success response
                    Swal.fire({ text: data.message, icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });
                } else if (data.status == 'errors') {
                    // Handle errors response
                    Swal.fire({ text: data.message.category[0], icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } });

                }
            },
        });
    });


});

