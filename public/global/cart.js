$(document).ready(function () {

    function ToasterMsg(msg, type){
        if (type === 'success') {
            $('body').append('<div id="trixcarttoaster" class="toaster-success" style="font-size: 17px; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background-color: #333; color: #fff; padding: 15px 25px; border-radius: 4px; display: none; z-index: 999;"></div>');
            $('#trixcarttoaster').text(msg).fadeIn().delay(5000).fadeOut();
            
        } else{
            $('body').append('<div id="trixcarttoaster" class="toaster-error" style="font-size: 17px; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background-color: #bb1010; color: #fff; padding: 15px 25px; border-radius: 4px; display: none; z-index: 999;"></div>');
            $('#trixcarttoaster').text(msg).fadeIn().delay(5000).fadeOut();
        }
        setTimeout(function() {
            $('#trixcarttoaster').remove();
        }, 5000);
    }

    const csrf_token = $('meta[name="csrf-token"]').attr('content');

    function manageCart(productId, quantity, type) {
        var removetype = type;
        $.ajax({
            url: '/manage-cart',
            method: 'POST',
            data: {
                productId: productId,
                quantity: quantity,
                type: type,
                csrf_token: csrf_token
            },
            success: function (response) {
               

                if (response.status == 'success') {
                   
                    ToasterMsg(response.message, 'success');

                    if (removetype == "remove") {
                        window.location.reload();
                    }

                } else {
                    ToasterMsg(response.message, 'error');
                }

                
            },
            error: function (xhr, status, error) {
                // Handle errors
            }
        });
    }

    $(document).on("click", ".manage_cart", function (e) {
        e.preventDefault();
        var productId = $(this).data('id');
        var quantity = 1;
        manageCart(productId, quantity, "add");
    });

   
    updateTotals();

    function updateTotals() {
        $.ajax({
            url: '/get-cart',
            method: 'GET',
            data: {
                csrf_token: csrf_token
            },
            success: function (response) {
                if (response.status === 'success') {
                    var cart = response.data;
                    console.log(cart.grandTotal);
                    $('.sub_total').text('$ ' + cart.grandTotal.toFixed(2));
                    $('.grand_total').text('$ ' + cart.grandTotal.toFixed(2));
                } else {

                }
            },

        });
       
    }

    $('.quantity-box input[name="quantity"]').on('input', function () {

        if ($(this).val() == 0) {
            $(this).val(1); // set value to 1 if user enters 0
        }
        var quantity = parseInt($(this).val());
        var productId = $(this).data('id');
       
        updateTotals();
        manageCart(productId, quantity, "update");

    });


    $(document).on("click", ".remove_cart", function (e) {
        e.preventDefault();
        var productId = $(this).data('id');
        var quantity = null;
        manageCart(productId, quantity, "remove");
    });


    function getcartdata() {
        $.ajax({
            url: "/cart-data",
            method: 'GET',
            success: function (response) {
                
                $('.cart-data').html('');
                $('.cart-data').html(response.data);
            },
        });
    }


    $('#mycart').on('click', function (e) {
        e.preventDefault(); // Prevent the default behavior of the anchor tag
        getcartdata(); // Call the getcartdata() function
    });


    $(document).on("click", ".couponbtn", function (e) {
        e.preventDefault();
        var couponcode = $("#coupon_code").val();
        // alert(couponcode);
        $.ajax({
            url: '/get-coupon',
            method: 'POST',
            data: {
                coupon_code: couponcode,
                csrf_token: csrf_token
            },
            success: function (response) {
                if (response.status === 'success') {
                    $('.grand_total').text('$ ' + response.data.grand_total.toFixed(2));
                    $('.couponfield').text('$ ' + response.data.discount);
                    ToasterMsg(response.message, 'success');
                } else{
                    ToasterMsg(response.message, 'error');
                }
            },

        });
    });

});