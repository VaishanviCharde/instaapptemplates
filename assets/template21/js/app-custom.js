
let uri2 = $("#uri2").val();
if(uri2 != 'all') {
    var activeLi = $('.categoryClass.active');
    var catId = activeLi.attr('my-cat');
    getProductList(catId);
}

function getProductList(catId) {
    var site_url = $("#site_url").val();
    var base_url = $("#base_url").val();
    var TEMPNAME = $("#TEMPNAME").val();
    $.ajax({
        url: site_url+"get-products-by-category",  
        type: "post", 
        dataType: 'json',
        data: {catId: catId},
        beforeSend:function () {
            $('#loader').show();
        },
        success:function(response){
            $('#loader').hide();
            if(response.success == 1) {
                // $("#productListDiv").html(response.pListHtml);
                // $("#productListDiv1").html(response.pListHtml1);
                var productList = response.productList;
                if(productList.length > 0) {
                    var pListHtml = '';
                    var pListHtml1 = '';
                    for (var i = 0; i < productList.length; i++) {
                        // var addedToCart = '';
                        // var title= "Add to Cart";
                        // var isAdded = 'isAddToCart';
                        // if ($.inArray(productList.product_id, response.pIdList)) {
                        //     addedToCart = 'prd_active';
                        //     title= "Already In Cart";
                        //     isAdded = 'isNotAddToCart';
                        // }
                        var addedToCart = '';
                        var title = "Add to Cart";
                        var isAdded = 'isAddToCart';
                        // var isAdded = 'isNotAddToCart';

                        // if ($.inArray(productList.product_id, response.pIdList) !== -1) {
                        //     addedToCart = 'prd_active';
                        //     title = "Already In Cart";
                        //     isAdded = 'isNotAddToCart';
                        // }
                        let product_url = base_url+'assets'+TEMPNAME+'img/product/NoProductImg.png';
                        if(productList[i].product_url != '') {
                            product_url = productList[i].product_url;
                        }
                        let product_name = 'NA';
                        if(productList[i].product_name != '') {
                            product_name = productList[i].product_name;
                        }
                        let isStock = '';
                        if(productList[i].in_stock != true) {
                            isStock = '<div class="product-badge"><ul><li class="sale-badge">Out Off Stock</li></ul></div>';
                        }
                        let price = '0.00';
                        if(productList[i].price != '') {
                            price = productList[i].price;
                        }
                        let MRP = '0.00';
                        if(productList[i].MRP != '') {
                            MRP = productList[i].MRP;
                        }
                        let product_id = btoa(productList[i].product_id);
                        pListHtml += "<div class='col-xl-4 col-sm-6 col-6'><div class='ltn__product-item ltn__product-item-3 text-center'><div class='product-img'><a href='javascript:void(0)'><img src='"+product_url+"' loading='lazy' alt='Product Image' class='pImg'></a>"+isStock+"<div class='product-hover-action'><ul><li class='quick_view_button' data-key="+product_id+"><a href='javascript:void(0)' title='Quick View'><i class='far fa-eye'></i></a></li><li class='add_to_cart "+isAdded+"' data-key='"+btoa(productList[i].product_id)+"' data-price='"+btoa(productList[i].price)+"'><a href='javascript:void(0)' title='"+title+"' class="+addedToCart+"><i class='fas fa-shopping-cart'></i></a></li></ul></div></div><div class='product-info'><h2 class='product-title pTitleHeight'><a href='javascript:void(0)'>"+product_name+"</a></h2><div class='product-price'><span>₹"+price+"</span><del>₹"+MRP+"</del></div></div></div></div>";
                        pListHtml1 += "<div class='col-lg-12'><div class='ltn__product-item ltn__product-item-3'><div class='product-img'><a href='javascript:void(0)'><img src='"+product_url+"' loading='lazy' alt='Product Image'></a>"+isStock+"</div><div class='product-info'><h2 class='product-title'><a href='javascript:void(0)'>"+product_name+"</a></h2><div class='product-price'><span>₹"+price+"</span><del>₹"+MRP+"</del></div><div class='product-brief'><p>"+productList[i].extra+"</p></div><div class='product-hover-action'><ul><li class='quick_view_button' data-key="+product_id+"><a href='javascript:void(0)' title='Quick View'><i class='far fa-eye'></i></a></li><li class='add_to_cart "+isAdded+"' data-key='"+btoa(productList[i].product_id)+"' data-price='"+btoa(productList[i].price)+"'><a href='javascript:void(0)' title='"+title+"' class="+addedToCart+"><i class='fas fa-shopping-cart'></i></a></li></ul></div></div></div></div>";
                    }
                    $("#productListDiv").html(pListHtml);
                    $("#productListDiv1").html(pListHtml1);
                } else {
                    $("#productListDiv").html('<label class="txt-center">No Listings Available</label>');
                }
                // hideLoader();
            } else {
                $("#productListDiv").html('<label class="txt-center">No Listings Available</label>');
            }
        },
        error: function(xhr, status, error) {
            $('#loader').hide();
            $("#productListDiv").html('<label class="txt-center">No Listings Available</label>');
        }
    });
}
$(document).ready(function(){ 

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
            sign_password: {
                required: true,
                minlength: 8
            },
            conf_password: {
                required: true,
                minlength: 8,
                equalTo: "#sign_password"
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
            sign_password: {
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
            error.insertAfter(element.parent());
            // if (error) {
            //     element.addClass("error-form-field");
            // } else {
            //     element.removeClass("error-form-field");
            // }
            // $(".form-control").css('margin-bottom', '0px');
        },
        // success: function(label) {
        //     // Check if the element is a select box
        //     if (label.prev('.form-control').is('select')) {
        //         // Remove any error message associated with the select box
        //         label.prev('.form-control').removeClass('error').next('label.error').remove();
        //     }
        //     // Add margin-bottom if needed for other form controls
        //     // $(".form-control.valid").css('margin-bottom', '5px');
        // },
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
                        $("custId").val(response.customer_id);
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
                    if(response.success == 1) {
                        $(form).trigger("reset");
                        $("#cartId").val(response.cartDataId);
                        $('#custId').val(response.customer_id);
                        $("#loginUsername").html(response.customer_name);
                        $('#cartCount').html(response.cartCount);
                        $('.total_cost').html(response.total_cost);
                        $("#totalAmount").val(response.total_cost);

                        $('#sign_in_modal').modal('hide');
                        $("#signInBtn").prop("disabled", false);
                        $("#signInBtn").html('<b>Sign In Now</b>');
                        $("#myAccBtn").removeClass('d-none');
                        $("#signInBtn1").addClass('d-none');
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
            error.insertAfter(element.parent());
        },
        submitHandler: function(form) {
            $(".iti__selected-flag").css('height', '100%');
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
                        $("#otp1").val('');
                        $("#otp2").val('');
                        $("#otp3").val('');
                        $("#otp4").val('');
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
                        $("#cartId").val(response.cartDataId);
                        $('#custId').val(response.customer_id);
                        $("#loginUsername").html(response.customer_name);
                        $('#cartCount').html(response.cartCount);
                        $('.total_cost').html(response.total_cost);
                        $("#totalAmount").val(response.total_cost);

                        $('#guest_sign_in_modal').modal('hide');
                        $("#otpBtn").prop("disabled", false);
                        $("#otpBtn").html('<b>Verify</b>');
                        $('#OTPModalForm').addClass('d-none');
                        $("#guestSignInBtn").html('<b>Request OTP</b>');
                        $("#guestSignInBtn").prop("disabled", false);
                        $("#guestModalForm").removeClass('d-none');
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
                email: true
            }
        },
        messages: {
            f_email: {
                required: "Please enter your email",
                email: "Please enter a valid email",
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

    /** Logout Action */
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
                    $('#cartCount').html('0');
                    $('.total_cost').html('0.00');
                    $("#totalAmount").val('0.00');

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

    /** Change Number for login */
    $("#changeNumber").on("click", function() {
        $('#guestModalForm').removeClass('d-none');
        $('#OTPModalForm').addClass('d-none');
    });

    /** Request OTP Again */
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
                    // $('#guestModalForm').removeClass('d-none');
                    // $('#OTPModalForm').addClass('d-none');
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

    // Capture scroll position before opening modal
    // $('.tab-content').on('click', '.quick_view_button', function() {
    //     var scrollPosition = $(window).scrollTop();
    //     // Show the modal
    //     $('#quick_view_modal').modal('show');
        
    //     // Set the scroll position to the current position to prevent scrolling
    //     $(window).scrollTop(scrollPosition);
    // });

    // $('#quick_view_modal').on('hidden.bs.modal', function () {
    //     var scrollPosition = $(window).scrollTop();
    //     $(window).scrollTop(scrollPosition);
    // });

    /** Quick View Appended Html */
    $('.tab-content').on('click', '.quick_view_button', function() {
        let prdId = atob($(this).data('key'));
        var site_url = $("#site_url").val();
        var base_url = $("#base_url").val();
        var TempName = $("#TempName").val();

        $('#prdImg').attr('src', base_url+'assets/'+TempName+'/img/grey-bg.jpg');
        $("#prdTitle").html('--');
        $("#prdPrice").html('0.00');
        $("#prdDelMRP").html('0.00');

        $.ajax({
            url: site_url+"get-single-product",  
            type: "post", 
            dataType: 'json',
            data: {prdId:prdId},
            beforeSend:function () {
                $('.loading').show();
            },
            success:function(response){
                $(".loading").hide();
                if(response.success == 1) {
                    var prdCur = '$';
                    if(response.currency == 'inr' || response.currency == 'INR') {
                        prdCur = '₹';
                    }
                    var product_url = base_url+'assets/'+TempName+'/img/product/NoProductImg.png';
                    if(response.productDetails.product_url != "") {
                        product_url = response.productDetails.product_url;
                    }
                    $('#prdImg').attr('src', product_url);
                    $("#prdTitle").html(response.productDetails.product_name);
                    $("#prdPrice").html(prdCur+response.productDetails.price);
                    $("#prdDelMRP").html(prdCur+response.productDetails.MRP);
                    $("#quick_view_modal").modal('show');
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
                $(".loading").hide();
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

    /** Quick view Popup */
    $(document).on("click", ".quick_view_button", function() {
        // alert("hiii")
        let prdId = atob($(this).data('key'));
        var site_url = $("#site_url").val();
        var base_url = $("#base_url").val();
        var TempName = $("#TempName").val();

        $('#prdImg').attr('src', base_url+'assets/'+TempName+'/img/grey-bg.jpg');
        $("#prdTitle").html('--');
        $("#prdPrice").html(0);
        $("#prdDelMRP").html(0);
        $("#prd_des").html('');
        $("input[name='prdCurrency']").val('₹');
        $("input[name='prdPrice']").val(0);
        $("input[name='prdDelMRP']").val(0);
        $(".quickAddToCart").attr('data-key', '')
        $("input[name='qtybutton']").val(1);

        $.ajax({
            url: site_url+"get-single-product",  
            type: "post", 
            dataType: 'json',
            data: {prdId:prdId},
            beforeSend:function () {
                $('.loading').show();
            },
            success:function(response){
                $(".loading").hide();
                if(response.success == 1) {
                    var prdCur = '$';
                    if(response.currency == 'inr' || response.currency == 'INR') {
                        prdCur = '₹';
                    }
                    var product_url = base_url+'assets/'+TempName+'/img/product/NoProductImg.png';
                    if(response.productDetails.product_url != "") {
                        product_url = response.productDetails.product_url;
                    }
                    $("input[name='prdPrice']").val(response.productDetails.price);
                    $("input[name='prdDelMRP']").val(response.productDetails.MRP);
                    $('#prdImg').attr('src', product_url);
                    $("#prdTitle").html(response.productDetails.product_name);
                    $("#prdDesc").html(response.productDetails.extra);
                    $("#prdPrice").html(prdCur+response.productDetails.price);
                    $("#prdDelMRP").html(prdCur+response.productDetails.MRP);
                    $("input[name='prdCurrency']").val(prdCur);
                    // $(".quickAddToCart").attr('data-key', btoa(prdId));
                    $("#prdIdNew").val(prdId);
                    $("input[name='qtybutton']").val(1);
                    $("#prdQty").val(1);
                    $("#quick_view_modal").modal('show');
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
                $(".loading").hide();
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

    /** Add to Cart */
    $(document).on("click", ".isAddToCart", function() {
        var $clickedButton = $(this);
        var prdId = atob($(this).data('key'));
        var price = atob($(this).data('price'));
        var site_url = $("#site_url").val();
        var base_url = $("#base_url").val();
        var TempName = $("#TempName").val();
        var custId = $("#custId").val();
        var cartId = $("#cartId").val();
        // $("input[name='qtybutton']").val(1);
        // alert(custId);
        // alert(cartId);
        if(custId != '' && cartId != '') {
            $.ajax({
                url: site_url+"add-to-cart",  
                type: "post", 
                dataType: 'json',
                data: {prdId:prdId,prdQty:1,price:price,custId:custId,cartId:cartId},
                beforeSend:function () {
                    $('.loading').show();
                },
                success:function(response){
                    $(".loading").hide();
                    if(response.success == 1) {
                        // $clickedButton.removeClass('isAddToCart').addClass('isNotAddToCart');
                        // $clickedButton.find('a').addClass('prd_active').attr('title', 'Already In Cart');
                        $("#cartItemList").html(response.cartList);
                        $("#cartCount").html(response.cartCount);
                        $(".total_cost").html(response.total_cost);
                        $("#totalAmount").val(response.total_cost);

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
                    $(".loading").hide();
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

        } else {
            Swal.fire({
                toast: true,
                text: 'Please Login First',
                icon: 'error',
                showCloseButton: true,
                position: 'bottom',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        }
    });

    /** Add to Cart */
    $(document).on("click", ".quickAddToCart", function() {
        let $clickedButton = $(this);
        // let prdId = atob($(this).data('key'));
        let prdId = $("#prdIdNew").val();

        let price = $("input[name='prdPrice']").val();
        let prdInstruction = $("#prdInstruction").val();
        let site_url = $("#site_url").val();
        let base_url = $("#base_url").val();
        let TempName = $("#TempName").val();
        let custId = $("#custId").val();
        let cartId = $("#cartId").val();
        let prdQty = $("#prdQty").val();
        // alert(custId);
        // alert(cartId);
        if(custId != '' && cartId != '') {
            $.ajax({
                url: site_url+"add-to-cart",  
                type: "post", 
                dataType: 'json',
                data: {prdId:prdId,prdQty:prdQty,price:price,custId:custId,cartId:cartId,prdInstruction:prdInstruction},
                beforeSend:function () {
                    $('.loading').show();
                },
                success:function(response){
                    $(".loading").hide();
                    if(response.success == 1) {
                        // $clickedButton.removeClass('isAddToCart').addClass('isNotAddToCart');
                        // $clickedButton.find('a').addClass('prd_active').attr('title', 'Already In Cart');
                        $("#cartCount").html(response.cartCount);
                        $(".total_cost").html(response.total_cost);
                        $("#totalAmount").val(response.total_cost);

                        $("#cartItemList").html(response.cartList);
                        $("#quick_view_modal").modal('hide');
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
                    $(".loading").hide();
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

        } else {
            Swal.fire({
                toast: true,
                text: 'Please Login First',
                icon: 'error',
                showCloseButton: true,
                position: 'bottom',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        }
    });

    /** Cart Plus Minus Values */
    $("#cartPlusMinus").prepend('<div class="dec qtybutton">-</div>');
    $("#cartPlusMinus").append('<div class="inc qtybutton">+</div>');

    $(".qtybutton").on("click", function() {
        var button = $(this);
        var oldValue = parseFloat(button.siblings("input").val());
        var prdPrice = parseFloat($("input[name='prdPrice']").val());
        var prdDelMRP = parseFloat($("input[name='prdDelMRP']").val());
        var prdCurrency = $("input[name='prdCurrency']").val();
        if (button.text() == "+") {
            var newVal = oldValue + 1;
        } else {
            if (oldValue > 1) {
                var newVal = oldValue - 1;
            } else {
                var newVal = 1;
            }
        }
        var newPrdPrice = newVal * prdPrice;
        var newPrdDelMRP = newVal * prdDelMRP;
        button.siblings("input").val(newVal);
        $("#prdQty").val(newVal);
        $("#prdPrice").text(prdCurrency+newPrdPrice.toFixed(2));
        $("#prdDelMRP").text(prdCurrency+newPrdDelMRP.toFixed(2));

        $("input[name='updatedPrdPrice']").val(newPrdPrice.toFixed(2));
        $("input[name='updatedPrdDelMRP']").val(newPrdDelMRP.toFixed(2)); 
    });

    $(".cartPageQtybutton").prepend('<div class="dec qtybutton qtybutton1">-</div>');
    $(".cartPageQtybutton").append('<div class="inc qtybutton qtybutton1">+</div>');

    $(document).on("click", ".qtybutton1", function() {
        var button = $(this);
        var oldValue = parseFloat(button.siblings("input").val());
        var cartIdPrice = button.closest('td').siblings('td').find('#cartIdPrice').val();
        var cartIdProduct = button.closest('td').siblings('td').find('#cartIdProduct').val();
        var cartItemId = button.closest('td').siblings('td').find('#cartItemId').val();

        // alert(' oldValue --> '+oldValue);
        // alert(' cartIdPrice --> '+cartIdPrice);
        // alert(' cartIdProduct --> '+cartIdProduct);
        // alert(' cartItemId --> '+cartItemId);return false;

        if (button.text() == "+") {
            var newVal = oldValue + 1;
        } else {
            if (oldValue > 1) {
                var newVal = oldValue - 1;
            } else {
                var newVal = 1;
            }
        }
        var newPrdPrice = newVal * cartIdPrice;
        button.siblings("input").val(newVal);
        var qty = newVal - oldValue;
        var site_url = $("#site_url").val();
        if(qty != 0) {
            $.ajax({
                url: site_url+"update-qty",  
                type: "post", 
                dataType: 'json',
                data: {qty:qty,newVal:newVal,newPrdPrice:newPrdPrice,cartIdPrice:cartIdPrice,cartIdProduct:cartIdProduct,cartItemId:cartItemId},
                beforeSend:function () {
                    $('.loading').show();
                },
                success:function(response){
                    $(".loading").hide();
                    if(response.success == 1) {
                        // console.log(response);return false;
                        $("#cartItemList").html(response.cartListHtml);
                        $("#cartListPageHtml").html(response.cartListPageHtml);
                        $("#cartCount").html(response.cartCount);
                        $(".total_cost").html(response.total_cost);
                        $("#totalAmount").val(response.total_cost);

                        // $("#prdPrice1").html(response.total_cost);
                        // button.closest('tr').find('#prdPrice1').text('999')

                        Swal.fire({
                            toast: true,
                            text: 'Cart item quantity updated successfully',
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
                            text: 'Failed to update cart item quantity',
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
                    $(".loading").hide();
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

        // $("#prdQty").val(newVal);
        // $("#prdPrice").text(prdCurrency+newPrdPrice.toFixed(2));
        // $("#prdDelMRP").text(prdCurrency+newPrdDelMRP.toFixed(2));

        // $("input[name='updatedPrdPrice']").val(newPrdPrice.toFixed(2));
        // $("input[name='updatedPrdDelMRP']").val(newPrdDelMRP.toFixed(2)); 
    });

    /** Delete mini cart item Function */
    $(document).on("click", ".mini-cart-item-delete", function() {
        let pId = $(this).data("key");
        let site_url = $("#site_url").val();
        $.ajax({
            url: site_url+"delete-cart-item",  
            type: "post", 
            dataType: 'json',
            data: {pId:pId},
            beforeSend:function () {
                $('.loading').show();
            },
            success:function(response){
                $(".loading").hide();
                if(response.success == 1) {
                    $("#cartItemList").html(response.cartListHtml);
                    $("#cartListPageHtml").html(response.cartListPageHtml);
                    $("#cartCount").html(response.cartCount);
                    $(".total_cost").html(response.total_cost);
                    $("#totalAmount").val(response.total_cost);

                    // var activeLi = $('.categoryClass.active');
                    // var catId = activeLi.attr('my-cat');
                    // getProductList(catId);
                    
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
                $(".loading").hide();
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

    /** Delete cart list item Function */
    $(document).on("click", ".delete-cart-item", function() {
        let pId = $(this).data("key");
        let site_url = $("#site_url").val();
        $.ajax({
            url: site_url+"delete-cart-item",  
            type: "post", 
            dataType: 'json',
            data: {pId:pId},
            beforeSend:function () {
                $('.loading').show();
            },
            success:function(response){
                $(".loading").hide();
                if(response.success == 1) {
                    $("#cartItemList").html(response.cartListHtml);
                    $("#cartListPageHtml").html(response.cartListPageHtml);
                    $("#cartCount").html(response.cartCount);
                    $(".total_cost").html(response.total_cost);
                    $("#totalAmount").val(response.total_cost);

                    // var activeLi = $('.categoryClass.active');
                    // var catId = activeLi.attr('my-cat');
                    // getProductList(catId);
                    
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
                $(".loading").hide();
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

    $(document).on("click", ".place-order-btn1", function() 
    {
        var selectedValue = $('input[name="flexRadioDefault"]:checked').val();
        if (!selectedValue) {
            $("#selectcheckbox_error").show();
            setTimeout(function() {
                $("#selectcheckbox_error").hide();
            }, 3000);
        } else {
            if(selectedValue == 'Pickup') {
                $(".shippingAddressSection").addClass('d-none');
                $(".billingAddressSection").removeClass('d-none');
                // $(".shippingAddSection").removeClass('d-none');

                // $(".place-order-btn1").addClass("pickupButton");
                // $(".place-order-btn1").removeClass("deliveryButton");
                $(".place-order-btn1").addClass("d-none");
            } else if(selectedValue == 'Delivery') {
                $(".billingAddressSection").addClass('d-none');
                $(".shippingAddressSection").removeClass('d-none');
                // $(".shippingAddSection").removeClass("d-none");

                // $(".place-order-btn1").removeClass("pickupButton");
                // $(".place-order-btn1").addClass("deliveryButton");
                $(".place-order-btn1").addClass("d-none");
            }
        }
        return false;
    });

    $(document).on("change", 'input[name="flexRadioDefault"]', function() {
        var selectedValue = $('input[name="flexRadioDefault"]:checked').val();
        // alert("hiii");
        // alert(selectedValue);
        if (!selectedValue) {
            $("#selectcheckbox_error").show();
            setTimeout(function() {
                $("#selectcheckbox_error").hide();
            }, 3000);
        } else {
            if (selectedValue == 'Pickup') {
                $(".shippingAddressSection").addClass('d-none');
                $(".billingAddressSection").removeClass('d-none');
                $(".shipAddOptionForm").addClass("d-none");
                $(".place-order-btn1").addClass("d-none");
                $("#flexCheckChecked1").prop("checked", false);
                $(".mapOption").addClass("d-none");
            } else if (selectedValue == 'Delivery') {
                $(".billingAddressSection").addClass('d-none');
                $(".shippingAddressSection").removeClass('d-none');
                $(".shipAddOptionForm").removeClass("d-none");
                $(".paymentOption").addClass('d-none');
                $(".place-order-btn1").addClass("d-none");
                $("#flexCheckChecked").prop("checked", false);
                $(".mapOption").removeClass("d-none");
            }
        }
    });

    // Submit Pickup Form
    $("form[name='pickupForm']").validate({
        rules: {
            pName: {
                required: true
            },
            // pPhone: {
            //     required: true,
            //     number: true,
            //     minlength: 10
            // },
            pAddress: {
                required: true,
            },
            pApartment: {
                required: true,
                maxlength: 12,
            },
            pCity: {
                required: true,
            },
            pState: {
                required: true,
            },
            pCountry: {
                required: true,
            },
            pZip: {
                required: true,
            }
        },
        messages: {
            pName: {
                required: "Please enter your full name"
            },
            // pPhone: {
            //     required: "Please enter your mobile number",
            //     number: "Please enter a valid number",
            //     minlength: "Mobile number must be at least 10 digits long"
            // },
            pAddress: {
                required: "Please enter your address",
            },
            pApartment: {
                required: "Please enter your apartment no.",
            },
            pCity: {
                required: "Please enter your city",
            },
            pState: {
                required: "Please enter your state",
            },
            pCountry: {
                required: "Please enter your country",
            },
            pZip: {
                required: "Please enter your zip / postal code",
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
        beforeSend:function () {
            $('#loader').show();
        },
        submitHandler: function(form) {
            $(".pickupButtton").prop("disabled", true);
            $(".pickupButtton").html('Next &nbsp; <i class="fa fa-spinner fa-spin" style="margin-top: 5px;"></i>');

            // $(".pickupButtton").addClass("d-none");
            var site_url = $("#site_url").val();
            var billingId = $("#billingId").val();
            var formData = $(form).serialize();
            formData += "&billingId=" + encodeURIComponent(billingId);
            $.ajax({
                url: site_url+"add-billing-address",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    $('#loader').hide();
                    if(response.success == 1) {
                        // $(form).trigger("reset");
                        $(".pickupButtton").prop("disabled", false);
                        $(".pickupButtton").html('<b>Next</b>');
                        $(".pickupButtton").addClass('d-none');
                        $(".paymentOption").removeClass("d-none");
                        // Swal.fire({
                        //     toast: true,
                        //     text: response.message,
                        //     icon: 'success',
                        //     showCloseButton: true,
                        //     position: 'bottom',
                        //     timer: 5000,
                        //     timerProgressBar: true,
                        //     showConfirmButton: false
                        // });
                    } else {
                        $(".pickupButtton").prop("disabled", false);
                        $(".pickupButtton").html('<b>Next</b>');
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
                    $('#loader').hide();
                    $(".pickupButtton").prop("disabled", false);
                    $(".pickupButtton").html('<b>Next</b>');
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

    // When click exist checkbox
    $(document).on("click", "#flexCheckChecked1", function() {
        // alert("byeee")
        // Check if the checkbox is checked
        if ($(this).is(":checked")) {
            let billName = $("#billName").val();
            let billAddress = $("#billAddress").val();
            let billHouseNo = $("#billHouseNo").val();
            let billZip = $("#billZip").val();
            let billCity = $("#billCity").val();
            let billState = $("#billState").val();
            let billCountry = $("#billCountry").val();
    
            $("#pName").val(billName);
            $("#pAddress").val(billAddress);
            $("#pApartment").val(billHouseNo);
            $("#pCity").val(billCity);
            $("#pState").val(billState);
            $("#pCountry").val(billCountry);
            $("#pZip").val(billZip);
        } else {
            $("#pName").val('');
            $("#pAddress").val('');
            $("#pApartment").val('');
            $("#pCity").val('');
            $("#pState").val('');
            $("#pCountry").val('');
            $("#pZip").val('');
        }
    });
    
    // Coupon code validation
    $(document).on("click", ".coupon-btn", function() {
        // alert("hiii");
        var bill_coupon = $("#bill_coupon").val();
        var bill_shipping_method_id = $("#bill_shipping_method").val();
        var ship_shipping_method_id = $("#ship_shipping_method").val();
        var site_url = $("#site_url").val();
        var total_cost = $("#total_cost").val();
        var o_type = $("#o_type").val();
        var stringCartItem = $("#stringCartItem").val();
        var latitude = $("#latitude").val();
        var longitude = $("#longitude").val();
        var flexCheckChecked2 = $("#flexCheckChecked2").is(":checked");
        var paymentType = $("input[name='flexRadioDefault']:checked").val();
        var ship_address = $("#ship_address").val();
        if(bill_coupon == "") {
            $("#bill_coupon_err").html("Please enter coupon code");
            setTimeout(function() {
                $("#bill_coupon_err").html("");
            },3000);
        } else {
            $.ajax({
                url: site_url+"validate-coupon",
                type:"post",
                dataType:"json",
                data:{bill_coupon:bill_coupon,total_cost:total_cost,bill_shipping_method_id:bill_shipping_method_id,o_type:o_type
                ,ship_shipping_method_id:ship_shipping_method_id,stringCartItem:stringCartItem,latitude:latitude,longitude:longitude,flexCheckChecked2:flexCheckChecked2,paymentType:paymentType,ship_address:ship_address},
                success:function(response){
                    // alert(response);
                    if(response.success) {
                        // $("#bill_coupon").prop('readonly', true); 
                        $("#subTotal").html(response.subTotal);
                        $("#Tax").html('0.00');
                        $("#DeliveryFee").html(response.shipping_fee);
                        $("#Discount").html(response.discount);
                        $("#totalAmt").html(response.totalAmt);
                        $("#total_cost").val(response.total); 
                        $("#totalAmount").val(response.total);

                        $("#ordId").val(response.ordId);

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
                error:function(xhr, status, error) {
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

    // Submit Pickup Form
    $("form[name='deliveryForm']").validate({
        rules: {
            ship_name: {
                required: true
            },
            ship_building: {
                required: true,
            },
            ship_address: {
                required: true,
            },
            ship_apart: {
                required: true,
                maxlength: 12,
            },
            ship_city: {
                required: true,
            },
            ship_state: {
                required: true,
            },
            ship_country: {
                required: true,
            },
            ship_zip: {
                required: true,
            },
            bill_Name: {
                required: true,
            },
            bill_Address: {
                required: true,
            },
            bill_Apartment: {
                required: true,
                maxlength: 12
            },
            bill_City: {
                required: true,
            },
            bill_State: {
                required: true,
            },
            bill_Country: {
                required: true,
            },
            bill_Zip: {
                required: true,
            }
        },
        messages: {
            ship_name: {
                required: "Please enter your full name"
            },
            ship_building: {
                required: "Please enter your building/socity",
            },
            ship_address: {
                required: "Please enter your address",
            },
            ship_apart: {
                required: "Please enter your apartment no.",
                maxlength: "Maximum length is 12 Character"
            },
            ship_city: {
                required: "Please enter your city",
            },
            ship_state: {
                required: "Please enter your state",
            },
            ship_country: {
                required: "Please enter your country",
            },
            ship_zip: {
                required: "Please enter your zip / postal code",
            },
            bill_Name: {
                required: "Please enter your full name",
            },
            bill_Address: {
                required: "Please enter your address",
            },
            bill_Apartment: {
                required: "Please enter your apartment no.",
                maxlength: "Maximum length is 12 Character"
            },
            bill_City: {
                required: "Please enter your city",
            },
            bill_State: {
                required: "Please enter your state",
            },
            bill_Country: {
                required: "Please enter your country",
            },
            bill_Zip: {
                required: "Please enter your zip",
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
        beforeSend:function () {
            $('#loader').show();
        },
        submitHandler: function(form) {
            $(".deliveryButtton").prop("disabled", true);
            $(".deliveryButtton").html('Next &nbsp; <i class="fa fa-spinner fa-spin" style="margin-top: 5px;"></i>');

            var site_url = $("#site_url").val();
            var shippingId = $("#shippingId").val();
            var total_cost = $("#total_cost").val();
            var o_type = $("#o_type").val();
            var stringCartItem = $("#stringCartItem").val();
            var latitude = $("#latitude").val();
            var longitude = $("#longitude").val();
            var flexCheckChecked2 = $("#flexCheckChecked2").is(":checked");
            var billingId = $("#billingId").val();

            var formData = $(form).serialize();
            formData += "&shippingId=" + encodeURIComponent(shippingId)+"&total_cost="+total_cost+"&o_type="+o_type+"&stringCartItem="+stringCartItem+"&latitude="+latitude+"&longitude="+longitude+"&billingId="+billingId+"&flexCheckChecked2="+flexCheckChecked2;
            
            $.ajax({
                url: site_url+"add-shipping-address",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    $('#loader').hide();
                    if(response.success == 1) {
                        $("#subTotal").html(response.subTotal);
                        $("#Tax").html('0.00');
                        $("#DeliveryFee").html(response.shipping_fee);
                        $("#Discount").html(response.discount);
                        $("#totalAmt").html(response.totalAmt);
                        $("#total_cost").val(response.total);
                        $("#totalAmount").val(response.total);

                        $("#ordId").val(response.ordId);

                        $(".deliveryButtton").prop("disabled", false);
                        $(".deliveryButtton").html('<b>Next</b>');
                        $(".deliveryButtton").addClass('d-none');
                        $(".paymentOption").removeClass("d-none");
                    } else {
                        $(".deliveryButtton").prop("disabled", false);
                        $(".deliveryButtton").html('<b>Next</b>');
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
                    $('#loader').hide();
                    $(".deliveryButtton").prop("disabled", false);
                    $(".deliveryButtton").html('<b>Next</b>');
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

    // When click exist checkbox
    $(document).on("click", "#flexCheckChecked", function(){
        // Check if the checkbox is checked
        if($(this).is(":checked")) {
            $(".mapOption").addClass("d-none");
            let shipName = $("#shipName").val();
            let shipAddress = $("#shipAddress").val();
            let shipHouseNo = $("#shipHouseNo").val();
            let shipZip = $("#shipZip").val();
            let shipCity = $("#shipCity").val();
            let shipState = $("#shipState").val();
            let shipCountry = $("#shipCountry").val();
            let shipLat = $("#shipLat").val();
            let shipLong = $("#shipLong").val();
            
            $("#ship_name").val(shipName);
            $("#ship_address").val(shipAddress);
            $("#ship_apart").val(shipHouseNo);
            $("#ship_city").val(shipCity);
            $("#ship_state").val(shipState);
            $("#ship_country").val(shipCountry);
            $("#ship_zip").val(shipZip);
            $("#latitude").val(shipLat);
            $("#longitude").val(shipLong);

        } else {
            $(".mapOption").removeClass("d-none");
            $("#ship_name").val('');
            $("#ship_address").val('');
            $("#ship_apart").val('');
            $("#ship_city").val('');
            $("#ship_state").val('');
            $("#ship_country").val('');
            $("#ship_zip").val('');
            $("#latitude").val('');
            $("#longitude").val('');

        }
    });

    $(document).on("click", "#flexCheckChecked2", function(){
        // Check if the checkbox is checked
        if($(this).is(":checked")) {
            $("#useShipAddreeBill").val(true);
            $(".billingAddForm").addClass('d-none');
        } else {
            $("#useShipAddreeBill").val(false);
            $(".billingAddForm").removeClass('d-none');
        }
    });

    // Update Profile
    $("form[name='profile-form']").validate({
        ignore: "#salutation [value='']",
        rules: {
            pro_salutation: {
                required: true
            },
            pro_username: {
                required: true
            },
            pro_first_name: {
                required: true
            },
            pro_last_name: {
                required: true
            },
            pro_email: {
                required: true,
                email: true
            },
            "pro_mobile[main]": {
                required: true,
                number: true,
                minlength: 10
            }
        },
        messages: {
            pro_salutation: {
                required: "Please select your salutation"
            },
            pro_username: {
                required: "Please enter your username"
            },
            pro_first_name: {
                required: "Please enter your first name"
            },
            pro_last_name: {
                required: "Please enter your last name"
            },
            pro_email: {
                required: "Please enter your email",
                email: "Please enter a valid email"
            },
            "pro_mobile[main]": {
                required: "Please enter your mobile number",
                number: "Please enter a valid number",
                minlength: "Mobile number must be at least 10 digits long"
            }
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element.parent());
        },
        submitHandler: function(form) {
            var site_url = $("#site_url").val();
            $("#profileSubmitButton").html('Update Profile &nbsp; <i class="fa fa-spinner fa-spin"></i>');
            $("#profileSubmitButton").prop('disabled', true);

            var formData = $(form).serialize();
            $.ajax({
                url: site_url+"profile-action",  
                type: "post", 
                dataType: 'json',
                data: formData,
                success:function(response){
                    if(response.success == 1) {
                        $("#profileSubmitButton").html('Update Profile');
                        $("#profileSubmitButton").prop("disabled", false);
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
                        $("#profileSubmitButton").html('Update Profile');
                        $("#profileSubmitButton").prop("disabled", false);
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
                    $("#profileSubmitButton").html('Update Profile');
                    $("#profileSubmitButton").prop("disabled", false);
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

    // Checkout button click event
    $(document).on("click", "#checkoutButton", function() {
        let total_cost = $("#totalAmount").val();
        let site_url = $("#site_url").val();
        if(total_cost == '₹0.00' || total_cost == '0.00' || total_cost == undefined) {
            Swal.fire({
                toast: true,
                text: 'No products available in your cart to place the order',
                icon: 'error',
                showCloseButton: true,
                position: 'bottom',
                timer: 5000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        } else {
            window.location.href = site_url+'checkout';
        }
    });
});
