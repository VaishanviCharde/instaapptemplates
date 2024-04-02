
function isNumber(e) {
    var t = (e = e || window.event).which ? e.which : e.keyCode;
    return !(t > 31 && (t < 48 || t > 57));
}

$(".toggle-password").on("click", function() {
    var passwordInput = $("#password");
    var signinpassword = $("#signinpassword");
    
    var icon = $(this).find("i");
    
    if (passwordInput.attr("type") === "password") {
        passwordInput.attr("type", "text");
        icon.removeClass("fa-eye").addClass("fa-eye-slash");
    } else {
        passwordInput.attr("type", "password");
        icon.removeClass("fa-eye-slash").addClass("fa-eye");
    }
    if (signinpassword.attr("type") === "password") {
        signinpassword.attr("type", "text");
        icon.removeClass("fa-eye").addClass("fa-eye-slash");
    } else {
        signinpassword.attr("type", "password");
        icon.removeClass("fa-eye-slash").addClass("fa-eye");
    }
});

$(".logout-btn").on("click", function() {
    var site_url = $("#site_url").val();

    $.ajax({
        url: site_url+"logout",  
        type: "post", 
        dataType: 'json',
        data: [],
        success:function(response){
            if(response.success == 1) {
                $("#signInBtn1").removeClass('d-none');
                $("#myAccBtn").addClass('d-none');
                $('#custId').val('');
            } else {
                Swal.fire({
                    toast: true,
                    text: 'Service temporarily unavailable, try again later',
                    icon: 'error',
                    showCloseButton: true,
                    position: 'bottom',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
        },
        error: function(xhr, status, error) {
            Swal.fire({
                toast: true,
                text: 'Could not reach server, please try again later.  - '+error,
                icon: 'error',
                showCloseButton: true,
                position: 'bottom',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        }
    });
});

$("#changeNumber").on("click", function() {
    $('#guestModalForm').removeClass('d-none');
    $('#OTPModalForm').addClass('d-none');
});

$("#requestOTPAgain").on("click", function() {
    var site_url = $("#site_url").val();
    var number = $("#number").html();

    $.ajax({
        url: site_url+"guest-signin-action",  
        type: "post", 
        dataType: 'json',
        data: {number:number},
        success:function(response){
            if(response.success == 1) {
                $('#guestModalForm').removeClass('d-none');
                $('#OTPModalForm').addClass('d-none');
                Swal.fire({
                    toast: true,
                    text: response.message,
                    icon: 'success',
                    showCloseButton: true,
                    position: 'bottom',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            } else {
                Swal.fire({
                    toast: true,
                    text: response.message,
                    icon: 'error',
                    showCloseButton: true,
                    position: 'bottom',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
        },
        error: function(xhr, status, error) {
            Swal.fire({
                toast: true,
                text: 'Could not reach server, please try again later.  - '+error,
                icon: 'error',
                showCloseButton: true,
                position: 'bottom',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        }
    });
});

$("#BookNowBtn").on("click", function() {
    var custId = $("#custId").val();

    if (custId != "" && custId != undefined) {
        $('#book_now_modal').modal('show');
    } else {
        Swal.fire({
            title: 'Alert',
            html: `
                <h4>Ready to Book Your Test Drive? Let's Get Started - Please Log In!</h4>
                <button id="loginButton" class="swal2-confirm swal2-styled" style="display: block; margin: 0 auto;">Login</button>
            `,
            // icon: 'error',
            showCloseButton: true,
            position: 'center',
            // timer: 5000,
            // timerProgressBar: true,
            showConfirmButton: false,
            allowOutsideClick: false
        });
    }
});


$("#TestDriveBtn").on("click", function() {
    var custId = $("#custId").val();

    if (custId != "" && custId != undefined) {
        $('#book_test_drive_modal').modal('show');
    } else {
        Swal.fire({
            title: 'Alert',
            html: `
                <h4>Ready to book your car? Let's Get Started - Please Log In!</h4>
                <button id="loginButton" class="swal2-confirm swal2-styled" style="display: block; margin: 0 auto;">Login</button>
            `,
            // icon: 'error',
            showCloseButton: true,
            position: 'center',
            // timer: 5000,
            // timerProgressBar: true,
            showConfirmButton: false,
            allowOutsideClick: false
        });
    }
});

$(document).on("click", "#loginButton", function() {
    openLoginModal();
});

function openLoginModal() {
    Swal.close();
    $('#sign_in_modal').modal('show');
}

// Function to show the loader
// function showLoader() {
//     document.getElementById("loader").style.display = "block";
// }

// Function to hide the loader
// function hideLoader() {
//     document.getElementById("loader").style.display = "none";
// }

$("#UniqueBookNowBtn").on("click", function(event) { 
    event.preventDefault(); // Prevent the default behavior of the anchor element
    var site_url = $("#site_url").val();
    var product_id = $("#product_id").val();
    var custId = $("#custId").val();
    var price = $("#price").val();
    $("#UniqueBookNowBtn").html('Book Now &nbsp; <i class="fa fa-spinner fa-spin"></i>');
    $("#UniqueBookNowBtn").prop('disabled', true);

    $.ajax({
        url: site_url+"book-now-action",  
        type: "post", 
        dataType: 'json',
        data: {custId:custId,product_id:product_id, price:price},
        success:function(response){
            $("#UniqueBookNowBtn").html('Book Now');
            $("#UniqueBookNowBtn").prop("disabled", false);
            if(response.success == 1) {
                $("#book_now_modal").modal("hide");
                Swal.fire({
                    toast: true,
                    text: response.message,
                    icon: 'success',
                    showCloseButton: true,
                    position: 'bottom',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            } else {
                Swal.fire({
                    toast: true,
                    text: response.message,
                    icon: 'error',
                    showCloseButton: true,
                    position: 'bottom',
                    timer: 5000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
        },
        error: function(xhr, status, error) {
            $("#UniqueBookNowBtn").html('Book Now');
            $("#UniqueBookNowBtn").prop("disabled", false);
            Swal.fire({
                toast: true,
                text: 'Could not reach server, please try again later.  - '+error,
                icon: 'error',
                showCloseButton: true,
                position: 'bottom',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        }
    });
});

$(function() {
    $('#sign_up_modal').on('show.bs.modal', function() {
        // Reset the form fields
        $('#signup-form')[0].reset();

        // Reset the validation errors and remove error classes
        $('form[name="signup-form"]').validate().resetForm();
        $('form[name="signup-form"] .error-form-field').removeClass('error-form-field');
    });

    // Sign Up Action
    $("form[name='signup-form']").validate({
        ignore: "#salutation [value='']",
        rules: {
            salutation: {
                required: true
            },
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            "mobile[main]": {
                required: true,
                number: true,
                minlength: 10
            },
            signup_username: {
                required: true
            },
            password: {
                required: true,
                minlength: 8
            },
            conf_password: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            }
        },
        messages: {
            salutation: {
                required: "Please select your salutation"
            },
            first_name: {
                required: "Please enter your first name"
            },
            last_name: {
                required: "Please enter your last name"
            },
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email"
            },
            "mobile[main]": {
                required: "Please enter your mobile number",
                number: "Please enter a valid number",
                minlength: "Mobile number must be at least 10 digits long"
            },
            signup_username: {
                required: "Please enter your username"
            },
            password: {
                required: "Please enter a password",
                minlength: "Password must be at least 8 characters long"
            },
            conf_password: {
                required: "Please enter the confirmation password",
                minlength: "Password must be at least 8 characters long",
                equalTo: "Passwords do not match"
            }
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") === "password") {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#signUpSubmitBtn").html('Sign Up &nbsp; <i class="fa fa-spinner fa-spin"></i>');
            $("#signUpSubmitBtn").prop('disabled', true);

            var formData = $(form).serialize();
            $.ajax({
                url: site_url+"sign-up-action",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#signUpSubmitBtn").html('Sign Up');
                        $("#signUpSubmitBtn").prop("disabled", false);
                        $('#sign_up_modal').modal('hide');
                        $('#sign_in_modal').modal('show');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'success',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    } else {
                        $("#signUpSubmitBtn").html('Sign Up');
                        $("#signUpSubmitBtn").prop("disabled", false);
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'error',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#signUpSubmitBtn").html('Sign Up');
                    $("#signUpSubmitBtn").prop("disabled", false);
                    Swal.fire({
                        toast: true,
                        text: 'Could not reach server, please try again later.  - '+error,
                        icon: 'error',
                        showCloseButton: true,
                        position: 'bottom',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                }
            });
        },
        focusInvalid: true,
    });

    $('#sign_in_modal').on('show.bs.modal', function() {
        var remembermechecker = $("#remembermechecker").val();
        if(remembermechecker != true) {
            // Reset the form fields
            $('#signin-form')[0].reset();

            // Reset the validation errors and remove error classes
            $('form[name="signin-form"]').validate().resetForm();
            $('form[name="signin-form"] .error-form-field').removeClass('error-form-field');
        }
    });

    // Sign In Action   
    $("form[name='signin-form']").validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true,
                minlength: 8
            }
        },
        messages: {
            username: {
                required: "Please enter your username"
            },
            password: {
                required: "Please enter a password",
                minlength: "Password must be at least 8 characters long"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
            if (element.attr("name") === "password") {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#signInBtn").html('<b>Sign In Now &nbsp; <i class="fa fa-spinner fa-spin"></i></b>');
            $("#signInBtn").prop('disabled', true);

            var formData = $(form).serialize();
            $.ajax({
                url: site_url+"sign-in-action",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    console.log(response);
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $('#custId').val(response.customer_id);
                        $("#loginUsername").html(response.customer_name);
                        $('#sign_in_modal').modal('hide');
                        $("#signInBtn").prop("disabled", false);
                        $("#signInBtn").html('<b>Sign In Now</b>');
                        $("#signInBtn1").addClass('d-none');
                        $("#myAccBtn").removeClass('d-none');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'success',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    } else {
                        $("#signInBtn").prop("disabled", false);
                        $("#signInBtn").html('<b>Sign In Now</b>');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'error',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#signInBtn").prop("disabled", false);
                    $("#signInBtn").html('<b>Sign In Now</b>');
                    Swal.fire({
                        toast: true,
                        text: 'Could not reach server, please try again later.  - '+error,
                        icon: 'error',
                        showCloseButton: true,
                        position: 'bottom',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                }
            });
        }
    });

    $('#guest_sign_in_modal').on('show.bs.modal', function() {
        // Reset the form fields
        $('#guest-login-form')[0].reset();

        // Reset the validation errors and remove error classes
        $('form[name="guest-login-form"]').validate().resetForm();
        $('form[name="guest-login-form"] .error-form-field').removeClass('error-form-field');
    });

    // Guest Login Action
    $("form[name='guest-login-form']").validate({
        rules: {
            "guest_mobile[main]": {
                required: true,
                number: true,
                minlength: 10
            }
        },
        messages: {
            "guest_mobile[main]": {
                required: "Please enter your mobile number",
                number: "Please enter a valid number",
                minlength: "Mobile number must be at least 10 digits long"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#guestSignInBtn").html('<b>Request OTP &nbsp; <i class="fa fa-spinner fa-spin"></i></b>');
            $("#guestSignInBtn").prop('disabled', true);

            var formData = $(form).serialize();
            $.ajax({
                url: site_url+"guest-signin-action",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#number").html(response.guest_mobile);
                        $("#guestSignInBtn").html('<b>Request OTP</b>');
                        $("#guestSignInBtn").prop("disabled", false);
                        $('#guestModalForm').addClass('d-none');
                        $('#OTPModalForm').removeClass('d-none');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'success',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    } else {
                        $("#guestSignInBtn").html('<b>Request OTP</b>');
                        $("#guestSignInBtn").prop("disabled", false);
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'error',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#guestSignInBtn").html('<b>Request OTP</b>');
                    $("#guestSignInBtn").prop("disabled", false);
                    Swal.fire({
                        toast: true,
                        text: 'Could not reach server, please try again later.  - '+error,
                        icon: 'error',
                        showCloseButton: true,
                        position: 'bottom',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                }
            });
        }
    });

    // Guest OTP Verification
    $("form[name='otp-verify-form']").validate({
        rules: {
            "otp1": {
                required: true,
            },
            "otp2": {
                required: true,
            },
            "otp3": {
                required: true,
            },
            "otp4": {
                required: true,
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter('.otp-field');
            if (error) {
                element.addClass("error-form-field");
                $("#otp1-error").css('margin-left', '25%');
                $("#otp2-error").css('margin-left', '25%');
                $("#otp3-error").css('margin-left', '25%');
                $("#otp4-error").css('margin-left', '25%');
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#otpBtn").html('<b>Verify &nbsp; <i class="fa fa-spinner fa-spin"></i></b>');
            $("#otpBtn").prop('disabled', true);
            let otp1 = $("#otp1").val();
            let otp2 = $("#otp2").val();
            let otp3 = $("#otp3").val();
            let otp4 = $("#otp4").val();
            let number = $("#number").html();

            $.ajax({
                url: site_url+"otp-verify-action",  
                type: "post", 
                dataType: 'json',
                data: {otp1:otp1, otp2:otp2, otp3:otp3, otp4:otp4, number:number},
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $('#guest_sign_in_modal').modal('hide');
                        $("#otpBtn").prop("disabled", false);
                        $("#otpBtn").html('<b>Verify</b>');
                        $('#OTPModalForm').addClass('d-none');
                        $("#guestSignInBtn").html('<b>Request OTP</b>');
                        $("#guestSignInBtn").prop("disabled", false);
                        $("#guestModalForm").removeClass('d-none');
                        $("#signInBtn1").hide();
                        $("#myAccBtn").removeClass('d-none');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'success',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    } else {
                        $("#otpBtn").prop("disabled", false);
                        $("#otpBtn").html('<b>Verify</b>');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'error',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#otpBtn").prop("disabled", false);
                    $("#otpBtn").html('<b>Verify</b>');
                    Swal.fire({
                        toast: true,
                        text: 'Could not reach server, please try again later.  - '+error,
                        icon: 'error',
                        showCloseButton: true,
                        position: 'bottom',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                }
            });
        }
    });

    // Forgot Password
    $("form[name='forgot-password-form']").validate({
        rules: {
            "f_username": {
                required: true,
            }
        },
        messages: {
            f_username: {
                required: "Please enter your username"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#forgotPassBtn").html('<b>Reset &nbsp; <i class="fa fa-spinner fa-spin"></i></b>');
            $("#forgotPassBtn").prop('disabled', true);
            var formData = $(form).serialize();
            $.ajax({
                url: site_url+"forgot-password-action",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#forgotPassBtn").prop("disabled", false);
                        $("#forgotPassBtn").html('<b>Reset</b>');
                        $('#fotgot_password_modal').modal('hide');
                        $('#sign_in_modal').modal('show');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'success',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    } else {
                        $("#forgotPassBtn").prop("disabled", false);
                        $("#forgotPassBtn").html('<b>Reset</b>');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'error',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#forgotPassBtn").prop("disabled", false);
                    $("#forgotPassBtn").html('<b>Reset</b>');
                    Swal.fire({
                        toast: true,
                        text: 'Could not reach server, please try again later.  - '+error,
                        icon: 'error',
                        showCloseButton: true,
                        position: 'bottom',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                }
            });
        }
    });

    // Forgot Username
    $("form[name='forgot-username-form']").validate({
        rules: {
            "f_email": {
                required: true,
            }
        },
        messages: {
            f_email: {
                required: "Please enter your email"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#forgotEmailBtn").html('<b>Reset &nbsp; <i class="fa fa-spinner fa-spin"></i></b>');
            $("#forgotEmailBtn").prop('disabled', true);
            var formData = $(form).serialize();
            $.ajax({
                url: site_url+"forgot-username-action",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#forgotEmailBtn").prop("disabled", false);
                        $("#forgotEmailBtn").html('<b>Reset</b>');
                        $('#fotgot_username_modal').modal('hide');
                        $('#sign_in_modal').modal('show');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'success',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    } else {
                        $("#forgotEmailBtn").prop("disabled", false);
                        $("#forgotEmailBtn").html('<b>Reset</b>');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'error',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#forgotEmailBtn").prop("disabled", false);
                    $("#forgotEmailBtn").html('<b>Reset</b>');
                    Swal.fire({
                        toast: true,
                        text: 'Could not reach server, please try again later.  - '+error,
                        icon: 'error',
                        showCloseButton: true,
                        position: 'bottom',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                }
            });
        }
    });    

    // Forgot Username
    $("form[name='test-drive-form']").validate({
        rules: {
            "select_option": {
                required: true,
            },
            "date": {
                required: true,
                date: true
            },
            "time": {
                required: true,
            }
        },
        messages: {
            select_option: {
                required: "Please enter your email"
            },
            date: {
                required: "Please enter your email",
                date: "Please enter a valid date"
            },
            time: {
                required: "Please enter your email"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#forgotEmailBtn").html('<b>Reset &nbsp; <i class="fa fa-spinner fa-spin"></i></b>');
            $("#forgotEmailBtn").prop('disabled', true);
            var formData = $(form).serialize();
            $.ajax({
                url: site_url+"forgot-username-action",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#forgotEmailBtn").prop("disabled", false);
                        $("#forgotEmailBtn").html('<b>Reset</b>');
                        $('#fotgot_username_modal').modal('hide');
                        $('#sign_in_modal').modal('show');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'success',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    } else {
                        $("#forgotEmailBtn").prop("disabled", false);
                        $("#forgotEmailBtn").html('<b>Reset</b>');
                        Swal.fire({
                            toast: true,
                            text: response.message,
                            icon: 'error',
                            showCloseButton: true,
                            position: 'bottom',
                            timer: 5000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#forgotEmailBtn").prop("disabled", false);
                    $("#forgotEmailBtn").html('<b>Reset</b>');
                    Swal.fire({
                        toast: true,
                        text: 'Could not reach server, please try again later.  - '+error,
                        icon: 'error',
                        showCloseButton: true,
                        position: 'bottom',
                        timer: 5000,
                        timerProgressBar: true,
                        showConfirmButton: false
                    });
                }
            });
        }
    }); 

    // Add click event handler to each menu item
    $("#catList").on("click", ".categoryClass", function() {
        // Remove the "active" class from all menu items
        $(".categoryClass").removeClass("active");
        $(".categoryClass").find("i").removeClass("active");

        // Add the "active" class to the clicked menu item
        $(this).addClass("active");
        $(this).find("i").addClass("active"); // Add "active" class to the <i> element
        var catId1 = $(this).attr('my-cat');
        getProductList(catId1);
    });

    var $activeLi = $('.categoryClass.active');
    var catId = $activeLi.attr('my-cat');
    getProductList(catId);

    function getProductList(catId) {
        var site_url = $("#site_url").val();
        // showLoader();
        $.ajax({
            url: site_url+"get-products-by-category",  
            type: "post", 
            dataType: 'json',
            data: {catId: catId},
            success:function(response){
                if(response.success == 1) {
                    var productList = response.productList;
                    if(productList.length > 0) {
                        var pListHtml = '';
                        for (var i = 0; i < productList.length; i++) {
                            var product_url = '-';
                            if(productList[i].product_url != "" && productList[i].product_url != undefined) { 
                                product_url = productList[i].product_url; 
                            }
                            var product_name = '-';
                            if(productList[i].product_name != "" && productList[i].product_name != undefined) { 
                                product_name = productList[i].product_name; 
                            }
                            var price = '-';
                            if(productList[i].price != "" && productList[i].price != undefined) {
                                var myPrice = parseFloat(productList[i].price);
                                var code = 'US';
                                var currency = 'USD';
                                if(response.currency == 'inr') {
                                    code = 'IN';
                                    currency = 'INR';
                                }

                                // Convert the number to a formatted string with commas and decimal points
                                var price = myPrice.toLocaleString('en-'+code, {
                                    style: 'currency',
                                    currency: currency, 
                                    minimumFractionDigits: 2, 
                                }); 
                            }
                            var KM_Driven = '-';
                            if(productList[i].product_specification['KM Driven'] != "" && productList[i].product_specification['KM Driven'] != undefined) { 
                                KM_Driven = productList[i].product_specification['KM Driven']; 
                            }
                            var Registration_Date = '-';
                            if(productList[i].product_specification['Registration Date'] != "" && productList[i].product_specification['Registration Date'] != undefined) { 
                                Registration_Date = productList[i].product_specification['Registration Date']; 
                            }
                            var Ownership = '-';
                            if(productList[i].product_specification['Ownership'] != "" && productList[i].product_specification['Ownership'] != undefined) { 
                                Ownership = productList[i].product_specification['Ownership']; 
                            }
                            pListHtml += '<div class="col-sm-6 col-6"><div class="ltn__product-item ltn__product-item-3 text-center"><div class="product-img"><a href="'+site_url+'product-details/'+btoa(response.myToken+'_apptoken_'+productList[i].product_id)+'"><img src="'+product_url+'" alt="Product Image"></a></div><div class="product-info"><h2 class="product-title mt-10 mb-10"><a href="'+site_url+'product-details/'+btoa(response.myToken+'_apptoken_'+productList[i].product_id)+'">'+product_name+'</a></h2><div class="product-price"><span>'+price+'</span></div><div class="product-info-brief"><ul><li><i class="fas fa-road"></i>'+KM_Driven+'</li><li><i class="fas fa-car"></i>'+Registration_Date+'</li><li><i class="fas fa-user"></i>'+Ownership+'</li></ul></div></div></div></div>';
                        }
                        $("#productListDiv").html(pListHtml);
                    } else {
                        $("#productListDiv").html('<label class="txt-center">No Listings Available</label>');
                    }
                    // hideLoader();
                } else {
                    $("#productListDiv").html('<label class="txt-center">No Listings Available</label>');
                    // hideLoader();
                }
            },
            error: function(xhr, status, error) {
                $("#productListDiv").html('<label class="txt-center">No Listings Available</label>');
                // hideLoader();
            }
        });
    }
});