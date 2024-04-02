function isNumber(e) {
    var t = (e = e || window.event).which ? e.which : e.keyCode;
    return !(t > 31 && (t < 48 || t > 57));
}

$( document ).on( 'ready', function (e) {
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
            error.insertAfter(element);
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            var def_cont = $("#def_cont").val();
            $("#signUpSubmitBtn").prop('disabled', true)

            var formData = $(form).serialize();
            $.ajax({
                url: site_url+def_cont+"/signUpAction",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#signUpSubmitBtn").prop("disabled", false);
                        $('#sign_up_modal').modal('hide');
                        silverBox({
                            alertIcon: "success",
                            text: response.message,
                            centerContent: true,
                            showCloseButton: true,
                            timer: 3000
                        });
                    } else {
                        $("#signUpSubmitBtn").prop("disabled", false);
                        silverBox({
                            alertIcon: "error",
                            text: response.message,
                            centerContent: true,
                            showCloseButton: true,
                            timer: 3000
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#signUpSubmitBtn").prop("disabled", false);
                    silverBox({
                        alertIcon: "error",
                        text: 'Could not reach server, please try again later.  - '+error,
                        centerContent: true,
                        showCloseButton: true,
                        timer: 3000,
                        closeOnClick: false,
                    });
                }
            });
        }
    });

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
            if (error) {
                element.addClass("error-form-field");
            } else {
                element.removeClass("error-form-field");
            }
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            var def_cont = $("#def_cont").val();
            $("#signInBtn").prop('disabled', true)

            var formData = $(form).serialize();
            $.ajax({
                url: site_url+def_cont+"/signInAction",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#signInBtn").prop("disabled", false);
                        $('#sign_in_modal').modal('hide');
                        silverBox({
                            alertIcon: "success",
                            text: response.message,
                            centerContent: true,
                            showCloseButton: true,
                            timer: 3000
                        });
                    } else {
                        $("#signInBtn").prop("disabled", false);
                        silverBox({
                            alertIcon: "error",
                            text: response.message,
                            centerContent: true,
                            showCloseButton: true,
                            timer: 3000
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#signInBtn").prop("disabled", false);
                    silverBox({
                        alertIcon: "error",
                        text: 'Could not reach server, please try again later.  - '+error,
                        centerContent: true,
                        showCloseButton: true,
                        timer: 3000,
                        closeOnClick: false,
                    });
                }
            });
        }
    });

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
            var def_cont = $("#def_cont").val();
            $("#guestSignInBtn").prop('disabled', true)

            var formData = $(form).serialize();
            $.ajax({
                url: site_url+def_cont+"/guestSignInAction",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#guestSignInBtn").prop("disabled", false);
                        $('#guest_sign_in_modal').modal('hide');
                        silverBox({
                            alertIcon: "success",
                            text: response.message,
                            centerContent: true,
                            showCloseButton: true,
                            timer: 3000
                        });
                    } else {
                        $("#guestSignInBtn").prop("disabled", false);
                        silverBox({
                            alertIcon: "error",
                            text: response.message,
                            centerContent: true,
                            showCloseButton: true,
                            timer: 3000
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $("#guestSignInBtn").prop("disabled", false);
                    silverBox({
                        alertIcon: "error",
                        text: 'Could not reach server, please try again later.  - '+error,
                        centerContent: true,
                        showCloseButton: true,
                        timer: 3000,
                        closeOnClick: false,
                    });
                }
            });
        }
    });

});