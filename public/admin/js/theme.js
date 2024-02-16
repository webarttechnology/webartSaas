$(function () {

    const csrf_token = $('meta[name="csrf-token"]').attr('content');


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

    $(document).on("click", ".add-theme", function (e) {
        e.preventDefault();
        $('#myModal').modal('show');
    });


    //////// Theme Install ////
    $('.save-theme').submit(function (e) {
        e.preventDefault();

        if ($('.theme').val() == '') {
            $('.error-theme').removeClass('text-success').addClass('text-danger').text('Theme field is required');
        } else {

            var url = $(this).attr('action');
            var method = $(this).attr('method');
            var data = new FormData($(this)[0]);

            var $loaderHtml = $('<div class="loader"></div>');
            $('.error-theme').text('');

            $.ajax({
                url: url,
                type: method,
                data: data,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: function () {
                    $(this).prop("disabled", true);
                    $('.loader-div').html($loaderHtml);
                },
                success: function (data) {
                    $(this).prop("disabled", false);
                    $('.loader-div').html('');
                    if (data.status == 'success') {
                        $('.save-theme')[0].reset();
                        $('.error-theme').removeClass('text-danger').addClass('text-success').text(data.message);
                    } else if (data.status == 'errors') {
                        $('.error-theme').removeClass('text-success').addClass('text-danger').text(data.message.theme[0]);
                    } else if (data.status == 'error') {
                        $('.error-theme').removeClass('text-success').addClass('text-danger').text(data.message);
                    }
                }
            });
        }

    });


    //////// Theme Active ////
    $(document).on("click", ".theme-active", function (e) {
        e.preventDefault();

        var $thisBtn = $(this);

        $.ajax({
            type: 'POST',
            url: '/dw-admin/active-theme',
            data: { theme: $(this).data('theme'), csrf_token: csrf_token },
            success: function (response) {
              if (response.status == 'success') {
                $('.theme-active').text('Active');
                if($thisBtn.data('type') == 'themedetails'){  
                  $thisBtn.addClass('d-none');
                }
                $thisBtn.text('');
              } else if (response.status == 'error') {
                ToasterError(response.message);
              }
            },
            error: function (error) {
              // Handle error response
              console.error('Error:', error);
            }
          });

    });

});