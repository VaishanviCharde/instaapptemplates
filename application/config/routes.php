<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
if (defined('TEMPNAME') && TEMPNAME == 'template1') { // Car - 1
    $route['default_controller'] = 'Home1'; 
} else if (defined('TEMPNAME') && TEMPNAME == 'template2') { // Car - 2
    $route['default_controller'] = 'Home2'; 
} else if (defined('TEMPNAME') && TEMPNAME == 'template11') { // Restaurant - 11
    $route['default_controller'] = 'Home11'; 
} else if (defined('TEMPNAME') && TEMPNAME == 'template12') { // Restaurant - 11
    $route['default_controller'] = 'Home12'; 
} else if (defined('TEMPNAME') && TEMPNAME == 'template21') { // Restaurant - 11
    $route['default_controller'] = 'Home21'; 
} else {
    $route['default_controller'] = 'Home'; // Default controller if condition is not met
}
// $route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/** MY Routes */
$route['sign-up-action'] = $route['default_controller'].'/signUpAction';
$route['sign-in-action'] = $route['default_controller'].'/signInAction';
$route['guest-signin-action'] = $route['default_controller'].'/guestSignInAction';
$route['otp-verify-action'] = $route['default_controller'].'/OTPVerifyAction';
$route['forgot-password-action'] = $route['default_controller'].'/ForgotPasswordAction';
$route['forgot-username-action'] = $route['default_controller'].'/ForgotUsernameAction';
$route['logout'] = $route['default_controller'].'/logout';

$route['about-us'] = $route['default_controller'].'/aboutUs';
$route['contact-us'] = $route['default_controller'].'/contactUs';

$route['product'] = $route['default_controller'].'/product';
$route['product/(:any)/(:any)'] = $route['default_controller'].'/product/$1/$2';
$route['product/(:any)'] = $route['default_controller'].'/product/$1';
$route['product-details/(:any)'] = $route['default_controller'].'/product_details/$1';
$route['get-products-by-category'] = $route['default_controller'].'/getProductsByCategory';
$route['get-single-product'] = $route['default_controller'].'/getSingleProduct';
$route['search-products'] = $route['default_controller'].'/searchProducts';

$route['add-to-cart'] = $route['default_controller'].'/addToCart';
$route['delete-cart-item'] = $route['default_controller'].'/deleteCartItem';
$route['cart'] = $route['default_controller'].'/cartView';
$route['update-qty'] = $route['default_controller'].'/updateQuantity';

$route['checkout'] = $route['default_controller'].'/checkout';
$route['add-billing-address'] = $route['default_controller'].'/addBillingAddress';
$route['add-shipping-address'] = $route['default_controller'].'/addShippingAddress';
$route['submit-payment'] = $route['default_controller'].'/RazorPaySubmitPayment';
$route['validate-coupon'] = $route['default_controller'].'/ValidateCouponCode';
$route['orders'] = $route['default_controller'].'/OrderList';
$route['order-detail/(:any)/(:any)/(:any)/(:any)'] = $route['default_controller'].'/orderDetail/$1/$2/$3/$4';

$route['save-location'] = $route['default_controller'].'/saveLocation';

$route['profile'] = $route['default_controller'].'/profile';
$route['profile-action'] = $route['default_controller'].'/profileUpdate';

$route['change-password'] = $route['default_controller'].'/changePassword';
$route['change-password-action'] = $route['default_controller'].'/changePasswordAction';

$route['delete-account-action'] = $route['default_controller'].'/deleteAccountAction';

// $route['book-now-action'] = $route['default_controller'].'/placeOrder';
/** /. MY Routes */