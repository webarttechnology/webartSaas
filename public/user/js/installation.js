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

  //Enable Tooltips
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });


  const csrf_token = $('meta[name="csrf-token"]').attr('content');

  // console.log(csrf_token);

  //Advance Tabs
  $(".next").click(function () {
    const nextTabLinkEl = $(".nav-tabs .active")
      .closest("li")
      .next("li")
      .find("a")[0];
    const nextTab = new bootstrap.Tab(nextTabLinkEl);

    // console.log(nextTabLinkEl.getAttribute('id'));


    let TagId = nextTabLinkEl.getAttribute('id');

    if (TagId == 'step2-tab') {
      if (validateStep1() == true) {
        $('#step2-tab').removeAttr("disabled").removeClass('disabled');
        $('#step1-tab').addClass("bg-primary text-white");
        nextTab.show();
      }
    }



    if (TagId == 'step3-tab') {
      if (validateStep2() == true) {
        $('#step3-tab').removeAttr("disabled").removeClass('disabled');
        $('#step2-tab').addClass("bg-primary text-white");
        nextTab.show();
      }
    }

    if (TagId == 'step4-tab') {
      if (validateStep3() == true) {
        // nextTab.show();
        OTPSendMail(nextTab, 'send');
      }
    }

    if (TagId == 'step5-tab') {
      if (validateStep4() == true) {
        // nextTab.show();
        checkOTP(nextTab);
      }
    }



  });

  $(".previous").click(function () {
    const prevTabLinkEl = $(".nav-tabs .active")
      .closest("li")
      .prev("li")
      .find("a")[0];
    const prevTab = new bootstrap.Tab(prevTabLinkEl);
    prevTab.show();
  });



  function validateStep1() {

    // Get all radio buttons with name 'radioGroup'
    var radioButtons = document.getElementsByName('plan');

    // Check if any radio button is selected
    var isValidStep1 = false;

    for (var i = 0; i < radioButtons.length; i++) {
      if (radioButtons[i].checked) {
        isValidStep1 = true;
        break;
      }
    }

    if (isValidStep1 == false) {
      // alert('Please select a valid option before proceeding.');
      $('.step1-error').html('<span class="text-danger">Please select any one</span>');
    } else {
      $('.step1-error').html('');
    }

    return isValidStep1;
  }


  function validateStep2() {


    var isValidStep2 = false;

    if ($('#float_business_name').val() == '') {
      $('.business_name_error').text('Business field is required');
      $('#float_business_name').focus();
    } else if ($('#floatingSelect').val() == '') {
      $('.business_name_error').text('');
      $('.business_type_error').text('Business type field is required');
      $('.business_type_error').focus();
    } else if ($('#float_name').val() == '') {
      $('.business_name_error').text('');
      $('.business_type_error').text('');
      $('.user_name_error').text('User name field is required');
      $('.user_name_error').focus();
    } else if ($('#float_password').val() == '') {
      $('.business_name_error').text('');
      $('.business_type_error').text('');
      $('.user_name_error').text('');
      $('.password_error').text('Password field is required');
      $('.password_error').focus();
    } else if ($('#float_password').val().length < 6) {
      $('.business_name_error').text('');
      $('.business_type_error').text('');
      $('.user_name_error').text('');
      $('.password_error').text('Password must be 6 character is required');
      $('.password_error').focus();
    } else if ($('#floatingCurrency').val() == '') {
      $('.business_name_error').text('');
      $('.business_type_error').text('');
      $('.user_name_error').text('');
      $('.password_error').text('');
      $('.currency_error').text('Currency field is required');
      $('.currency_error').focus();
    } else if ($('#floatingSelectCountry').val() == '') {
      $('.business_name_error').text('');
      $('.business_type_error').text('');
      $('.user_name_error').text('');
      $('.password_error').text('');
      $('.currency_error').text('');
      $('.country_error').text('Country field is required');
      $('.country_error').focus();
    } else {

      $('.business_name_error').text('');
      $('.business_type_error').text('');
      $('.user_name_error').text('');
      $('.password_error').text('');
      $('.currency_error').text('');
      $('.country_error').text('');

      isValidStep2 = true;
    }

    return isValidStep2;

  }


  function validateStep3() {


    //  console.log($('input[name="quantity"]:checked').length);


    var isValidStep3 = false;

    var phoneRegex = /^\d{10}$/; //// 10 Digits Mobile number check
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; /// Email Validation

    if ($('#float_first_name').val() == '') {

      $('.float_first_error').text('First name field is required');
      $('#float_first_name').focus();

    } else if ($('#float_last_name').val() == '') {

      $('.float_first_error').text('');
      $('.float_last_error').text('Last name field is required');
      $('.float_last_name').focus();

    } else if ($('#float_emailid').val() == '') {

      $('.float_first_error').text('');
      $('.float_last_error').text('');
      $('.float_email_error').text('Email field is required');
      $('.float_emailid').focus();

    } else if (emailRegex.test($('#float_emailid').val()) == false) {

      $('.float_first_error').text('');
      $('.float_last_error').text('');
      $('.float_email_error').text('Invalid email address');
      $('.float_emailid').focus();

    } else if ($('#float_phoneno').val() == '') {

      $('.float_first_error').text('');
      $('.float_last_error').text('');
      $('.float_email_error').text('');
      $('.float_phone_error').text('Phone field is required');
      $('.float_phoneno').focus();

    } else if (phoneRegex.test($('#float_phoneno').val()) == false) {

      $('.float_first_error').text('');
      $('.float_last_error').text('');
      $('.float_email_error').text('');
      $('.float_phone_error').text('Phone number must be 10 character is required');
      $('.float_phoneno').focus();

    } else if ($('input[name="quantity"]:checked').length == 0) {

      $('.float_first_error').text('');
      $('.float_last_error').text('');
      $('.float_email_error').text('');
      $('.float_phone_error').text('');
      $('.product_quantity_error').text('Product Quantity field is required');

    } else {

      $('.float_first_error').text('');
      $('.float_last_error').text('');
      $('.float_email_error').text('');
      $('.float_phone_error').text('');
      $('.product_quantity_error').text('');

      isValidStep3 = true;
    }

    return isValidStep3;

  }

  function validateStep4() {

    // Check if any radio button is selected
    var isValidStep4 = false;

    if ($('input[name="otp"]').filter(function () {
      return this.value.length !== 1;
    }).length > 0) {
      $('.otp_error').text('OTP field is required');
      return;
    }

    isValidStep4 = true;

    return isValidStep4;

  }




  // otp scripts
  function auto_tab_input() {
    $(".code-inputs .form-control").keyup(function () {
      if (this.value.length == this.maxLength) {
        $(this).nextAll(".code-inputs .form-control:enabled:first").focus();
      }
    });
  }

  function auto_backspace() {
    $(".code-inputs .form-control").keyup(function (e) {
      if (e.keyCode == 8) {
        if ($(this).prev().length > 0) {
          $(this).prev("input").focus();
        }
      }
    });
  }

  auto_tab_input();
  auto_backspace();


  function OTPSendMail(nextTab, type) {

    var first_name = $('#float_first_name').val();
    var last_name = $('#float_last_name').val();
    var email = $('#float_emailid').val();
    var phone = $('#float_phoneno').val();

    var $loaderHtml = $('<div class="loading"><span></span></div>');

    $.ajax({
      type: 'POST',
      url: '/otp-send-mail',
      data: { first_name: first_name, last_name: last_name, email: email, phone: phone, csrf_token: csrf_token },
      beforeSend: function () {
        if (type == 'send') {
          $('#step3').append($loaderHtml);
        } else {
          $('#step4').append($loaderHtml);
        }
      },
      success: function (response) {
        if (response.status == 'success') {


          if (type == 'send') {
            nextTab.show();
            $('#step4-tab').removeAttr("disabled").removeClass('disabled');
            $('#step3-tab').addClass("bg-primary text-white");
          }

          $loaderHtml.remove();
          localStorage.setItem("otp", response.otp);
          ToasterSuccess(response.message);

        } else if (response.status == 'error') {
          $loaderHtml.remove();
          ToasterError(response.message);
        }
      },
      error: function (error) {
        // Handle error response
        console.error('Error:', error);
      }
    });

  }


  function checkOTP(nextTab) {
    // Combine all OTP inputs into a single string
    let enteredOTP = '';
    for (let i = 1; i <= 6; i++) {
      enteredOTP += document.getElementById(`otp${i}`).value;
    }
    // Get OTP from localStorage
    let storedOTP = localStorage.getItem("otp");

    // Check if entered OTP matches stored OTP
    if (enteredOTP === storedOTP) {
      ToasterSuccess("OTP matched successfully!");
      $('#step5-tab').removeAttr("disabled").removeClass('disabled');
      $('#step4-tab').addClass("bg-primary text-white");
      localStorage.removeItem("otp");
      nextTab.show();
      $('.nav-btn').prop("disabled", true);
    } else {
      ToasterError("OTP does not match. Please try again.");
    }
  }


  $(".resend-otp").click(function () {
       OTPSendMail('', 'resend');
  });



  $(document).on("click", ".save-submit", function (e) {
      e.preventDefault();
      if($(this).data('url')){
        window.location.href = $(this).data('url');
        return;
      }else{
        finalSubmit();
      }
  });


  function finalSubmit() {

    var $loaderHtml = $('<div class="loading"><span></span></div>');

    var $thisForm = $('.save');

    var url     = $($thisForm).attr('action');
    var method  = $($thisForm).attr('method');
    var data    =  $($thisForm).serialize();
  
    $(this).prop("disabled", true);

    $.ajax({
      url: url,
      type: method,
      data: data,
      beforeSend: function () {
        $('#step5').append($loaderHtml);
      },
      success: function (data) {

        $loaderHtml.remove();

        if (data[0].status == 'success') {

          $('.thank-section').html(`<div class="mt-2 waiting-txt">Please wait while we are creating the domain for you....</div>
           <div id="countdown" class="mt-3">60</div>`);

          $('.save-submit').data('url', data[0].url);
          $('.save-submit').html(`<div class="sm-loader"></div>`);

          startCountdown();
         
          setTimeout(() => {
            $(this).prop("disabled", false);
            $('.thank-section').html(`<div class="mt-2 waiting-txt">Your website is ready, please click on <b>Go to your new website</b> button </div>`);
            $('.save-submit').html('Go to your new website');
            stopCountdown();
          }, 60000);

          ToasterSuccess(data[0].message);

        } else if (data[0].status == 'error') {
          ToasterError(hdata[0].message);
          $(this).prop("disabled", false);
        } else if (data[0].status == 'errors') {

          var htmlError = "";
          $.each(data[0].message, (index, item) => {
            htmlError += item;
          });
          ToasterError(htmlError);
          $(this).prop("disabled", false);
        }
      },
      error: function (error) {
        // Handle error response
        console.error('Error:', error);
        $(this).prop("disabled", false);
      }
    });

  }



let currentTime = 59;
let countdown;

function startCountdown() {
  currentTime = currentTime;
  countdown   = setInterval(updateCountdown, 1000);
}

function stopCountdown() {
  clearInterval(countdown);
}


function updateCountdown() {
  const hours = Math.floor(currentTime / 3600);
  const minutes = Math.floor((currentTime % 3600) / 60);
  const seconds = currentTime % 60;
  document.getElementById("countdown").innerHTML = `${String(seconds).padStart(2, '0')}`;
  // document.getElementById("countdown").innerHTML = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
  currentTime--;
}
  

});






