// bootstrap 5 step widzad
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

    $('.choosefile').on('click', function() {
        $('#cat_image').click();
    });

    const csrf_token = $('meta[name="csrf-token"]').attr('content');

    $(document).on("submit", ".save-category", function (e) {
        e.preventDefault();

        // if ($('#category').val() == '') {
        //     $('.error-category').text('Category field is required');
        // } else if ($('#sub_category').val() == '') {
        //     $('.error-category').text('');
        //     $('.error-subcategory').text('Subcategory field is required');
        // } else {
        //     $('.error-category').text('');
        //     $('.error-subcategory').text('');

         

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

                    $('.error-user').text('');
                    $('.error-password').text('');
                    $('.catBtn').html('');

                    if (data.status == 'success') {
                        $('#category').val('');
                        $('#sub_category').val('');

                        ToasterSuccess(data.message);

                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    }
                },
                error: function (error) {
                    $('.error-user').text('');
                    $('.error-password').text('');
                    $(this).prop("disabled", false);
                    $('.login-btn').text('Login');
                    // Handle error response
                    console.error('Error:', error);
                    $(this).prop("disabled", false);
                }
            });

 

    });


    $(document).on("change", ".sub_category", function (e) {
        e.preventDefault();
            $.ajax({
                url: '/dw-admin/get-category',
                type: 'POST',
                data: {id: $(this).val(), csrf_token: csrf_token},
                success: function (response) {
                    console.log(response.data);
            
                   var selectElement = $('.dynamic-category-append');
                   var options = '<option value="">Choose Category</option>';
                   $.each(response.data, function(index, item) {
                       options += '<option value="' + item.id + '">' + item.name + '</option>';
                   });
                   selectElement.append(`
                   <div class="col-sm-12 dynamic-category-append">
                       <div class="form-floating mb-4 col-sm-12">
                           <select class="form-control sub_category" name="sub_category" id="sub_category">
                               ` + options + `
                           </select>
                           <label for="floatSubcategory">Choose category </label>
                           <span class="text-danger mt-1 d-block error-subcategory"></span>
                       </div>
                   </div>
               `);
                  
                },
                error: function (error) {
                    console.error('Error:', error);
                }
            });
    });

    // 


});






