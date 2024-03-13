$(document).ready(function () {
    const csrf_token = $('meta[name="csrf-token"]').attr('content');


    $(document).on("submit", ".register", function (e) {
        e.preventDefault();
        var type = $(this).find('[name="type"]').data('type');

        if (type === 'signin') {
            if ($('#signinemail').val() == '') {
                $('.error-signinemail').text('Email field is required');
                return;
            }

            if ($('#signinotp').val() == '' && $('.signinotp').hasClass('d-none')) {
                // Generate and send OTP
                $.ajax({
                    url: '/send-otp', // Change this to the correct path to your PHP file
                    type: 'POST',
                    data: { email: $('#signinemail').val(), csrf_token: csrf_token },
                    dataType: 'json',
                    success: function (response) {
                        console.log(response.status);
                        if (response.status == 'success') {
                            alert('OTP sent to your email');
                            // Show OTP input field
                            localStorage.setItem("otp", response.otp);
                            $('.signinotp').removeClass('d-none');
                            $('.loginbtn').text('Verify OTP');

                        } else {
                            alert('Failed to send OTP. Please try again.');
                        }
                    },
                    error: function () {
                        alert('Failed to send OTP. Please try again.');
                    }
                });
                return;
            }

            if ($('#signinotp').val() != window.atob(localStorage.getItem('otp'))) {
                $('.error-signinotp').text('Invalid OTP');
                return;
            }

            $('.error-signinotp').text('');
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
                success: function (data) {
                    if (data.status == 'success') {
                        alert('Signin successful');

                        if (data.url) {
                            window.location.href = data.url;
                            return;
                        }
                        // Redirect to a success page or perform other actions
                    }
                },
            });


        } else {
            if ($('#email').val() == '') {
                $('.error-email').text('Email field is required');
                return;
            }

            if ($('#otp').val() == '' && $('.otp').hasClass('d-none')) {
                // Generate and send OTP
                $.ajax({
                    url: '/send-otp', // Change this to the correct path to your PHP file
                    type: 'POST',
                    data: { email: $('#email').val(), csrf_token: csrf_token },
                    dataType: 'json',
                    success: function (response) {
                        console.log(response.status);
                        if (response.status == 'success') {
                            alert('OTP sent to your email');
                            // Show OTP input field
                            localStorage.setItem("otp", response.otp);
                            $('.otp').removeClass('d-none');
                            $('.resendbtn').addClass('d-none');
                            $('.registerbtn').text('Verify OTP');
                            startTimer();
                        } else {
                            alert('Failed to send OTP. Please try again.');
                        }
                    },
                    error: function () {
                        alert('Failed to send OTP. Please try again.');
                    }
                });
                return;
            }

            if ($('#otp').val() != window.atob(localStorage.getItem('otp'))) {
                $('.error-otp').text('Invalid OTP');
                return;
            }

            // OTP is correct, complete registration
            $('.error-otp').text('');
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
                success: function (data) {
                    if (data.status == 'success') {
                        alert('Registration successful');

                        if (data.url) {
                            window.location.href = data.url;
                            return;
                        }
                        // Redirect to a success page or perform other actions
                    }
                },
            });

        }
    });


    $(document).on("click", ".resendbtn", function (e) {
        e.preventDefault();

        if ($('#email').val() == '') {
            $('.error-email').text('Email field is required');
            return;
        }

        $.ajax({
            url: '/send-otp', // Change this to the correct path to your PHP file
            type: 'POST',
            data: { email: $('#email').val(), csrf_token: csrf_token },
            dataType: 'json',
            success: function (response) {
                console.log(response.status);
                if (response.status == 'success') {
                    alert('OTP resent to your email');
                    // Show OTP input field
                    localStorage.setItem("otp", response.otp);
                    $('.otp').removeClass('d-none');
                    $('.resendbtn').removeClass('d-none');
                    $('.registerbtn').text('Verify OTP');
                    startTimer();
                } else {
                    alert('Failed to send OTP. Please try again.');
                }
            },
            error: function () {
                alert('Failed to send OTP. Please try again.');
            }
        });
        return;
    });

    $(document).on("keyup", "#otp", function (e) {
        e.preventDefault();
        if ($(this).val() == window.atob(localStorage.getItem('otp'))) {
            $('.registerbtn').text('Submit');
        } else {
            $('.registerbtn').text('Verify OTP');
        }
    });

    function clearOtp() {
        localStorage.removeItem('otp');
        $('.otp').removeClass('d-none');
        $('.resendbtn').removeClass('d-none');
        $('.registerbtn').text('Register');
    }

    function startTimer() {
        var timeLeft = 60;
        var timerId = setInterval(function () {
            timeLeft--;
            $('.otp-timer').text('Resend OTP in ' + timeLeft + 's');
            if (timeLeft <= 0) {
                clearInterval(timerId);
                $('.otp-timer').text('');
                $('.otp').removeClass('d-none');
                $('.resendbtn').addClass('d-none');
                $('.registerbtn').text('Verify OTP');
                clearOtp();
            }
        }, 1000);
    }

    // Check if OTP is already present in localStorage and start timer if needed
    if (localStorage.getItem('otp')) {
        var savedTime = localStorage.getItem('otpTime');
        var currentTime = new Date().getTime();
        if ((currentTime - savedTime) < 60000) {
            startTimer();
        } else {
            clearOtp();
        }
    }

});


