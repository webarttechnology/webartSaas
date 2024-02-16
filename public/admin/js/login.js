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
  
    $(document).on("submit", ".save-submit", function (e) {
      e.preventDefault();

      if($('#float_user').val() == ''){
        $('.error-user').text('User name field is required');
      }else if($('#float_password').val() == ''){
        $('.error-user').text('');
        $('.error-password').text('Password field is required');
      }else{
        $('.error-user').text('');
        $('.error-password').text('');

        var $loaderHtml = $('<div class="sm-loader" style="margin: auto;"><span></span></div>');
        var doneIcon    = '<i class="fas fa-check-circle" style="font-size: 15px"></i>';
  
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var data = $(this).serialize();
        var extraUrl =  window.location.host;
        data += '&url=' + encodeURIComponent(extraUrl);
    
        $.ajax({
          url: url,
          type: method,
          data: data,
          beforeSend: function () {
            $(this).prop("disabled", true);
            $('.login-btn').html($loaderHtml);
          },
          success: function (data) {
            $(this).prop("disabled", false);
           
            $('.error-user').text('');
            $('.error-password').text('');

            $('.login-btn').html('');

            if(data.status == 'success'){
              $('#float_user').val('');
              $('#float_password').val('');
              $('.login-btn').html(doneIcon);

              ToasterSuccess(data.message);

             setTimeout(() => {
               window.location.href = data.url;
             }, 1000);


            }else if(data.status == 'error'){
              $('.login-btn').text('Login');
              ToasterError(data.message);
            }else if(data.status == 'errors'){
              $('.login-btn').text('Login');
              if(data.message.user){
                $('.error-user').text(data.message.user[0]);
              }
              if(data.message.password){
                $('.error-password').text(data.message.password[0]);
              }

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

      }

    });
  

  
  
  });
  
  
  
  
  
  
  