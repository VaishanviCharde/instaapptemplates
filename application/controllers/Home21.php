<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home21 extends CI_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->load->model('Home_model21');
		// session_start();
	}

	/** Check login URL and Get the Token */
	public function checklogin() {
		// $this->session->sess_destroy();
		// $this->checkurl();
		$api = URL;
		$getRestId = $this->input->get('restId');
		$tempId = RESTID;
		if(isset($getRestId)) {
			$tempId = $getRestId;
		}

		$getTempName = $this->input->get('tempName');
		$tempName = TEMPNAME;
		if(isset($getTempName)) {
			$tempName = $getTempName;
		}

		$getTempColor = $this->input->get('tempColor');

		$tempColor = TEMPCOLOR;

		if(isset($getTempColor)) {
			$tempColor = '#'.$getTempColor;
		}

		$type = 'user';
		$method = 'GET';
        $url = $api.'restaurant-details/?restaurant_id='.$tempId.'&type='.$type;
        $header = array(
	       'Content-Type: application/json'
        );
        $apiResponse = $this->Home_model21->CallAPI($method, $url, $header);
		$apiDecodedResponse = json_decode($apiResponse);
		if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200) {
			$data = array(
				"url" => $api,
				"tempId" => $tempId,
				"tempName" => $tempName,
				"tempColor" => $tempColor,
				"token" => '',
				"appName" => '',
				"appAddress" => '',
				"appCity" => '',
				"appState" => '',
				"appZip" => '',
				"appCountry" => '',
				"appLogo" => '',
				"appEmail" => '',
				"appPhone" => '',
				"appStatus" => '',
				"appCurrency" => '',
				"appCurrencySymbol" => '',
				"appDesc" => '',
				"appWorking_hours" => '',
				"appTemplate" => '',
				"appCreated_at" => '',
				"appStripeApiKey" => '',
				"appPrinter_mac" => '',
				"appPlan" => '',
				"appAdminIndustType" => '',
				"appAdminUsername" => ''
			);
			$token = '';
			if(isset($apiDecodedResponse->response)) {
				$token = $apiDecodedResponse->response->Token;
				$data['token'] = $apiDecodedResponse->response->Token;
				$data['appName'] = $apiDecodedResponse->response->compony_name;
				$data['appAddress'] = $apiDecodedResponse->response->address;
				$data['appCity'] = $apiDecodedResponse->response->city;
				$data['appState'] = $apiDecodedResponse->response->state;
				$data['appZip'] = $apiDecodedResponse->response->zip;
				$data['appCountry'] = $apiDecodedResponse->response->country;
				$data['appLogo'] = $apiDecodedResponse->response->compony_image;
				$data['appEmail'] = $apiDecodedResponse->response->email;
				$data['appPhone'] = $apiDecodedResponse->response->phone;
				$data['appStatus'] = $apiDecodedResponse->response->status;
				$data['appCurrency'] = $apiDecodedResponse->response->currency;
				$data['appCurrencySymbol'] = $apiDecodedResponse->response->currency_symbol;
				$data['appDesc'] = $apiDecodedResponse->response->about_us;
				$data['appWorking_hours'] = $apiDecodedResponse->response->working_hours;
				$data['appTemplate'] = $apiDecodedResponse->response->template_details;
				$data['appCreated_at'] = $apiDecodedResponse->response->created_at;
				$data['appAdminIndustType'] = $apiDecodedResponse->response->industry_type;
				$data['appAdminUsername'] = $apiDecodedResponse->response->admin_username;
				// $data['appStripeApiKey'] = $apiDecodedResponse->response->stripe_api_key;
				// $data['appPrinter_mac'] = $apiDecodedResponse->response->printer_mac;
				// $data['appPlan'] = $apiDecodedResponse->response->plan;
			}
			// session_start();
			$this->session->set_userdata('pre_login_data', $data);
				
			/** Set the default Controller Name */
				$defaultController = $this->uri->rsegment(1);
				define('DE_CONT', $defaultController);
			/** /. Set the default Controller Name */

			$this->setAppConfigureData($data);
		// return $data;
		} else {
			redirect('');
		}
    }

	/** Common Setup Code */
	public function setAppConfigureData($appCommData) {
		$tempName = $appCommData['tempName'];

		$appName = '';
		$appLogo = '';
		$appEmail = '';
		$appAddress = '';
		$appCity = '';
		$appState = '';
		$appZip = '';
		$appCountry = '';
		$appPhone = '';
		$appDesc = '';
		$tempIndType = '';
		if(count($appCommData) != 0 && $appCommData['tempId'] != "") {
			$tempIndType = $appCommData['appAdminIndustType'];
			$appTemplate = $appCommData['appTemplate'];
			$appName = $appCommData['appName'];
			$appLogo = $appCommData['appLogo'];
			$appEmail = $appCommData['appEmail'];
			$appAddress = $appCommData['appAddress'];
			$appCity = $appCommData['appCity'];
			$appState = $appCommData['appState'];
			$appZip = $appCommData['appZip'];
			$appCountry = $appCommData['appCountry'];
			$appPhone = $appCommData['appPhone'];
			$appDesc = $appCommData['appDesc'];
		} 

		/** Dynamic Templates */
		$temp1 = array(
			'TEMP_INDUSTRY_TYPE' => $tempIndType,
			'TEMP_VIEW_PATH' => $tempName, 
			'HEAD' => array(
				'C_TITLE' => $appName,
				'TEMP_LOGO' => $appLogo,
				'TEMP_TITLE' => $appName.' - '.ucfirst($tempIndType),
				'TEMP_MDES' => $appName.' - '.ucfirst($tempIndType),
				'TEMP_FAVICON' => $appLogo,
			),
			'DETAILS' => array(
				'TEMP_EMAIL' => $appEmail,
				// 'TEMP_ADD' => $appAddress.', '.$appCity.', '.$appState.', '.$appZip.', '.$appCountry,
				'TEMP_ADD' => $appAddress,
				'TEMP_MOB' => $appPhone,
				'TEMP_MOB1' => '',
				'TEMP_DSC' => $appDesc,
				'EXP_YEAR' => '25',
				'TEMP_PAY_IMG' => 'payment.png',
				'TEMP_COPYRIGHT' => '© Copyright <a href="'.site_url().'">'.$appName.'</a>. All Rights Reserved',
			),
			'SOCIAL' => array(
				array(
					'title' => 'Facebook',
					'icon' => 'fab fa-facebook-f',
					'link' => 'javascript:void(0)',
					'attr' => "target='_blank'",
				),
				array(
					'title' => 'Twitter',
					'icon' => 'fab fa-twitter',
					'link' => 'javascript:void(0)',
					'attr' => "target='_blank'",
				),
				array(
					'title' => 'Instagram',
					'icon' => 'fab fa-instagram',
					'link' => 'javascript:void(0)',
					'attr' => "target='_blank'",
				),
			),
			'BANNER' => array(
				array(
					'img' => '21.png',
					'alt' => 'Banner Img 1',
					'sub-title' => '<span>//</span> TALENTED ENGINEER & MECHANICS',
					'head' => 'Providing A <br> Professional & <br> Relaible Service',
					'desc' => '',
					'isImgLeft' => 'false',
					'attr' => "target='_blank'",
					'link' => 'javascript:void(0)',
				),
				array(
					'img' => '22.png',
					'alt' => 'Banner Img 2',
					'sub-title' => '// TALENTED ENGINEER & MECHANICS',
					'head' => 'Professional Car <br>  Service Provide',
					'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.',
					'isImgLeft' => 'true',
					'attr' => "target='_blank'",
					'link' => 'javascript:void(0)',
				),
			),
			'ABOUT' => array(
				'img' => array(
					array(
						'img' => '4.jpg',
						'cls' => '',
						'alt' => 'About Us Image 1',
					),
				),
				'shapes' => array(
					array(
						'img' => 'shape1.png',
						'cls' => 'shape-1',
					),
					array(
						'img' => 'shape2.png',
						'cls' => 'shape-2',
					),
					array(
						'img' => 'shape2.png',
						'cls' => 'shape-3',
					),
				),
				'sub-title' => 'About Us',
				'head' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore',
				'desc' => $appDesc,
				'points' => array(
					'1' => 'Customer Satisfaction',
					'2' => 'Latest & Modern Shop',
					'3' => 'Expertise Diagnostics',
					'4' => 'Fair Pricing',
					'5' => 'Expert Care',
				),
				'onr_name' => '',
				'onr_designation' => '',
				'authorSignImg' => '',
			),
			'FOOTMENU' => array(
				array(
					'title' => 'Terms & Conditions',
					'attr' => "target='_blank'",
					'link' => 'javascript:void(0)',
				),
				array(
					'title' => 'Privacy & Policy',
					'attr' => "target='_blank'",
					'link' => 'javascript:void(0)',
				),
			),
		);
		define('TEMP_1', $temp1);
	}

	/** Generate Unique Token */
	function generate_unique_token($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$token = '';
		for ($i = 0; $i < $length; $i++) {
			$token .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $token;
	}

	/** Page Start */
		/** First page */
		public function index()
		{	
			$appCommData = $this->checklogin();
			// $appCommData = $this->getAppData();
			$myToken = $this->generate_unique_token();

			/* Get Category */
			$categoryData = array();
			$api = URL;
			$token = $this->session->userdata('pre_login_data')['token'];
			$restaurantId = $this->session->userdata('pre_login_data')['tempId'];
			$method = 'GET';
			$url = $api.'category/?restaurant_id='.$restaurantId;
			$header = array(
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse = $this->Home_model21->CallAPI($method, $url, $header);
			$apiDecodedResponse = json_decode($apiResponse);

			$categoryData = array();
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
				$categoryData = $apiDecodedResponse->response;
			}
			/* /.Get Category */
			
			$data['categoryData'] = $categoryData;
			// $data['topProductsData'] = $topProductsData;
			// $data['hotProductsData'] = $hotProductsData;
			$data['myToken'] = $myToken;

			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/index', $data);
		}

		/** Get cart Data */
		public function getCartDataByCustId($customerId) {
			$tempId = $this->session->userdata('pre_login_data')['tempId'];
			$token = $this->session->userdata('pre_login_data')['token'];

			$api = URL;
			$method2 = 'GET';
			$url2 = $api.'cart/?customer_id='.$customerId.'&restaurant='.$tempId;
			$header2 = array(
				'action: cart',
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse2 = $this->Home_model21->CallAPI($method2, $url2, $header2);
			$apiDecodedResponse2 = json_decode($apiResponse2);

			$cartData = array();
			if(isset($apiDecodedResponse2->status) && $apiDecodedResponse2->status == 200 && $apiDecodedResponse2->status != NULL && $apiDecodedResponse2->status != ""){
				$apiResData2 = $apiDecodedResponse2->response;
				$cartData = $apiResData2->results;
			}
			if(empty($cartData)) {
				/* Create cart api */
				$method3 = 'POST';
				$url3 = $api.'cart/';
				$header3 = array(
					'action: cart',
					'Content-Type: application/json',
					'Authorization:  Token '.$token,
					'user_id: '.$customerId
				);
				$cart_data = array("customer_id"=>$customerId, "restaurant"=> $tempId);
				$details3 = $this->Home_model21->CallAPI($method3, $url3, $header3,json_encode($cart_data));
				$apiDecodedResponse3 = json_decode($details3);
				$mycartId = 0;
				if(isset($apiDecodedResponse3->status) && $apiDecodedResponse3->status == 201 && $apiDecodedResponse3->status != NULL && $apiDecodedResponse3->status != ""){
					$apiResData3 = $apiDecodedResponse3->response;
					$mycartId = $apiResData3->id;
				}
				$sessiondata['cartId'] = $mycartId;
			} else {
				$sessiondata['cartId'] = $cartData[0]->id;
			}
			$this->session->set_userdata($sessiondata);
			return $sessiondata['cartId'];
		}
		/** /. Get cart Data */

		/** Sign Up / Sign In / Guest Login Action */
			public function signUpAction() {
				$api = URL;
				$token = $this->session->userdata('pre_login_data')['token'];
				$restaurantId = $this->session->userdata('pre_login_data')['tempId'];

				$salutation = $this->input->post('salutation');
				$firstname = $this->input->post('first_name');
				$lastname = $this->input->post('last_name');
				$username = $this->input->post('signup_username');
				$email = $this->input->post('email');
				// $mobileno = str_replace(' ', '', $this->input->post('mobile'))['full'];
				$mobileno = $this->input->post('mobile')['full'];
				$password = $this->input->post('sign_password');
				$confirm_password = $this->input->post('conf_password');

				/* Signup User Api */
				$method = 'POST';
				$url = $api.'user/';
				$header = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$user_data = array("first_name"=>$firstname,"password"=>$password,"last_name"=>$lastname,"restaurant_id"=>$restaurantId,"verified"=>"N","username"=>$username,"email"=>$email);
				$user_details = $this->Home_model21->CallAPI($method, $url, $header,json_encode($user_data));
				$apiDecodedResponse = json_decode($user_details);
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
					$apiResData = $apiDecodedResponse->response;
					$method = 'POST';
					$url = $api.'customer/';
					$header = array(
						'Content-Type: application/json',
						'Authorization:  Token '.$token
					);
					$cust_data = array("salutation"=>$salutation,"last_access"=>$apiResData->last_login,"first_name"=>$firstname,"last_name"=>$lastname,"phone_number"=>$mobileno,"customer_id"=>$apiResData->id,"extra"=>"extra");
					$cust_details = $this->Home_model21->CallAPI($method, $url, $header,json_encode($cust_data));
					$apiDecodedResponse1 = json_decode($cust_details);
					if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200 && $apiDecodedResponse1->status != NULL && $apiDecodedResponse1->status != "") {
						$appResponse = $apiDecodedResponse1->response;
						$response['customer_id'] = $appResponse->customer_id;

						$response['success'] = 1;
						$response['message'] = 'Registration has been done successfully. We sent you an email for account verification';
					} else {
						if($apiDecodedResponse1->status == 400) {
							$response['success'] = 2;
							$response['message'] = 'Your email id/username is already used in InstaApp application for one of the application. You can login to InstaApp or register with new email id/username';
						} else {
							$response['success'] = 0;
							$response['message'] = 'The system is temporarily unavailable. Please try again later';
						}
					}
				} else {
					if($apiDecodedResponse->status == 400) {
						$response['success'] = 2;
						$response['message'] = 'Your email id/username is already used in InstaApp for one of the application. You can login to InstaApp or register with new email id/username';
					} else {
						$response['success'] = 0;
						$response['message'] = 'The system is temporarily unavailable. Please try again later';
					}
				}
				echo json_encode($response);
			}

			public function signInAction() {
				// $this->checklogin();
				
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$rememberme = $this->input->post('rememberme');
				$api = URL;
				$restaurantId = $this->session->userdata('pre_login_data')['tempId'];

				if(isset($rememberme)) {
					setcookie('username', base64_encode($username), time() + (86400 * 30), "/");
					setcookie('password', base64_encode($password), time() + (86400 * 30), "/");
					setcookie('rememberme', TRUE, time() + (86400 * 30), "/");
				} else {
					setcookie('username', "", time() + (86400 * 30), "/");
					setcookie('password', "", time() + (86400 * 30), "/");
					setcookie('rememberme', FALSE, time() + (86400 * 30), "/");
				}
				/* Login User */
				$method = 'POST';
				$url = $api.'rest-auth/login/v1/';
				$header = array(
					'Content-Type: application/json'
				);
				$data = array("username"=> $username, "password"=> $password, "restaurant_id"=> $restaurantId);
				$login_details = $this->Home_model21->CallAPI($method, $url, $header,json_encode($data));
				$apiDecodedResponse = json_decode($login_details);
				$response = array();
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$apiResData = $apiDecodedResponse->response;
					$data1['customer_name'] = $username;
					$data1['customer_id'] = $apiResData->id;
					$data1['login_token'] = $apiResData->token;
					$this->session->set_userdata('login_data',$data1);
					$myCartId = $this->getCartDataByCustId($apiResData->id);

					/** Get Cart Count & Other Details */
					$cart_id = $myCartId;
					if(isset($_SESSION['cartId']) && $_SESSION['cartId'] != NULL && $_SESSION['cartId'] != '') {
						$cart_id = $_SESSION['cartId'];
					}
					$token = $this->session->userdata('pre_login_data')['token'];
					$method = 'GET';
					$url = $api.'cart-items-x/?cart_id='.$cart_id.'&restaurant_id='.$restaurantId;
					$header = array(
						'action: cart-item',
						'Content-Type: application/json',
						'Authorization:  Token '.$token,
						'cart_id: '.$cart_id,
						'user_id: '.$apiResData->id
					);
					$cart_list_details = $this->Home_model21->CallAPI($method, $url, $header);
					$apiDecodedResponse3 = json_decode($cart_list_details);
					$cartList = array();
					$sess['cartCount'] = $_SESSION['pre_login_data']['appCurrencySymbol'].'0';
					$sess['total_cost'] = $_SESSION['pre_login_data']['appCurrencySymbol'].'0.00';
					if(isset($apiDecodedResponse3->status) && $apiDecodedResponse3->status == 200){
						$apiResponse3 = $apiDecodedResponse3->response;
						$cartList = $apiResponse3->results;
						$sess['cartCount'] = $apiResponse3->count;
						$sess['total_cost'] = $_SESSION['pre_login_data']['appCurrencySymbol'].number_format($apiResponse3->total_cost, 2, '.', '');
						$this->session->set_userdata($sess);
					}
					$response['customer_name'] = $username;
					$response['customer_id'] = $apiResData->id;
					$response['login_token'] = $apiResData->token;
					$response['cartCount'] = $sess['cartCount'];
					$response['total_cost'] = $sess['total_cost'];
					$response['cartDataId'] = $cart_id;
					$response['success'] = 1;
					$response['message'] = 'Login successful';
				} else {
					$apiResData = $apiDecodedResponse->response;
					if($apiDecodedResponse->status == 403) {
						$response['success'] = 0;
						// $response['message'] = 'Your email is not Verified, Please verify your email address';
						$response['message'] = $apiResData->message;
					} else {
						$response['success'] = 0;
						$response['message'] = 'Your Username and Password does not match. Please try again or Reset Your Password.';
					}
					$data['customer_name'] = "";
					$data['customer_id'] = "";
					$data['login_token'] = "";
				}
				echo json_encode($response);
			}

			public function guestSignInAction() {
				$mobile = $this->input->post('guest_mobile')['full'];
				$number = $this->input->post('number');
				if(isset($number)) {
					$mobile = $this->input->post('number');
				}
				$api = URL;

				/* Guest Login User */
				$method = 'POST';
				$url = $api.'send/code/';
				$header = array(
					'Content-Type: application/json'
				);
				$data = array("phone_number"=>$mobile);
				$login_details = $this->Home_model21->CallAPI($method, $url, $header,json_encode($data));
				$apiDecodedResponse = json_decode($login_details);
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$response['success'] = 1;
					if(isset($number) && $number != "") 
						$response['message'] = 'OTP resent on your mobile number';
					else
						$response['message'] = 'OTP sent on your mobile number';
				} else {
					$response['success'] = 0;
					if(isset($number) && $number != "") 
						$response['message'] = 'Failed to resent otp';
					else 
					$response['message'] = 'Failed to sent otp';
				}
				$response['guest_mobile'] = $mobile;
				echo json_encode($response);
			}

			public function OTPVerifyAction() {
				$otp1 = $this->input->post('otp1');
				$otp2 = $this->input->post('otp2');
				$otp3 = $this->input->post('otp3');
				$otp4 = $this->input->post('otp4');
				$number = $this->input->post('number');
				$verification_code = $otp1.$otp2.$otp3.$otp4;

				$api = URL;
				/* Verif OTP */
				$method = 'POST';
				$url = $api.'guest/verify/';
				$header = array(
					'Content-Type: application/json'
				);
				$data = array("verification_code"=>$verification_code, "phone_number"=> $number);
				$details = $this->Home_model21->CallAPI($method, $url, $header,json_encode($data));
				$apiDecodedResponse = json_decode($details);
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$apiResData = $apiDecodedResponse->response;

					/** Get Cart Count & Other Details */
					$myCartId = $this->getCartDataByCustId($apiResData->id);
					/** Get Cart Count & Other Details */
					$cart_id = $myCartId;
					if(isset($_SESSION['cartId']) && $_SESSION['cartId'] != NULL && $_SESSION['cartId'] != '') {
						$cart_id = $_SESSION['cartId'];
					}
					$token = $this->session->userdata('pre_login_data')['token'];
					$restaurantId = $this->session->userdata('pre_login_data')['tempId'];
					$method = 'GET';
					$url = $api.'cart-items-x/?cart_id='.$cart_id.'&restaurant_id='.$restaurantId;
					$header = array(
						'action: cart-item',
						'Content-Type: application/json',
						'Authorization:  Token '.$token,
						'cart_id: '.$cart_id,
						'user_id: '.$apiResData->id
					);
					$cart_list_details = $this->Home_model21->CallAPI($method, $url, $header);
					$apiDecodedResponse3 = json_decode($cart_list_details);
					$cartList = array();
					$sess['cartCount'] = $_SESSION['pre_login_data']['appCurrencySymbol'].'0';
					$sess['total_cost'] = $_SESSION['pre_login_data']['appCurrencySymbol'].'0.00';
					if(isset($apiDecodedResponse3->status) && $apiDecodedResponse3->status == 200){
						$apiResponse3 = $apiDecodedResponse3->response;
						$cartList = $apiResponse3->results;
						$sess['cartCount'] = $apiResponse3->count;
						$sess['total_cost'] = $_SESSION['pre_login_data']['appCurrencySymbol'].number_format($apiResponse3->total_cost, 2, '.', '');
						$this->session->set_userdata($sess);
					}

					$response['customer_name'] = $apiResData->username;
					$response['customer_id'] = $apiResData->id;
					$response['login_token'] = $apiResData->token;
					$response['cartCount'] = $sess['cartCount'];
					$response['total_cost'] = $sess['total_cost'];
					$response['cartDataId'] = $cart_id;

					$this->session->set_userdata('login_data',$response);
					$response['success'] = 1;
					$response['message'] = 'OTP verified. Login successful';
				} else {
					$response['success'] = 0;
					$response['message'] = 'Failed to verify otp';
				}
				echo json_encode($response);
			}

			public function ForgotPasswordAction() {
				$api = URL;
				$username = $this->input->post('f_username');

				/* Password Reset Api */
				$method = 'POST';
				$url = $api.'rest-auth/password/reset/v1/';
				$header = array(
					'Content-Type: application/json'
				);
				$data = array("username"=> $username);

				$details = $this->Home_model21->CallAPI($method, $url, $header, json_encode($data));
				$apiDecodedResponse = json_decode($details);
				
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$response['success'] = 1;
					$response['message'] = 'Password reset successful. Email has been sent to your email address.';
				} else {
					$response['success'] = 0;
					$response['message'] = 'Username does not exists';
				}
				echo json_encode($response);
			}

			public function ForgotUsernameAction() {
				$api = URL;
				$email = $this->input->post('f_email');
				/* Username Reset Api */
				$method = 'POST';
				$url = $api.'forgot/user/';
				$header = array(
					'Content-Type: application/json'
				);
				$data = array("email"=> $email);
				$details = $this->Home_model21->CallAPI($method, $url, $header, json_encode($data));
				$apiDecodedResponse = json_decode($details);
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$response['success'] = 1;
					$response['message'] = 'Username reset successful. Email has been sent on your email address.';
				} else {
					$response['success'] = 0;
					$response['message'] = 'Email does not exists';
				}

				echo json_encode($response);
			}
		/** /. Sign Up / Sign In / Guest Login Action */

		/** About Us Page */
		public function aboutUs() {
			$appCommData = $this->checklogin();

			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/about_us');
		}
		/** /.About Us Page */

		/** Contact Us Page */
		public function contactUs() {
			$appCommData = $this->checklogin();

			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/contact_us');
		}
		/** /. Contact Us Page */

		/** Product Details */
			public function product($catId = null)
			{
				$appCommData = $this->checklogin();

				$segment2 = $this->uri->segment(2);

				$decodeCatId = base64_decode($segment2);
				$parts = explode('_', $decodeCatId);
				
				// Get the last part (which is the last digit)
				$catId = end($parts);
				/* Get Category */
				$categoryData = array();
				$api = URL;
				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];
				$method = 'GET';
				$url = $api.'category/?restaurant_id='.$tempId;
				$header = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse = $this->Home_model21->CallAPI($method, $url, $header);
				$apiDecodedResponse = json_decode($apiResponse);
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
					$apiResData = $apiDecodedResponse->response;
					$categoryData = $apiResData;
				}

				/** Get product list */
				$productData = array();
				$method1 = 'GET';
				$url1 = $api."v2/catalog/?restaurant_id=".$tempId."&category_id=".$catId."&status=ACTIVE";
				$header1 = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse1 = $this->Home_model21->CallAPI($method1, $url1, $header1);
				$apiDecodedResponse1 = json_decode($apiResponse1);
				if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200 && $apiDecodedResponse1->status != NULL && $apiDecodedResponse1->status != ""){
					$apiResData1 = $apiDecodedResponse1->response;
					$productData = $apiResData1->results;
				}

				/** get all search products */
				$name = '';
				if($segment2 == 'all') {
					$name = $_POST['search'];
					$query = <<<'QUERY'
							query productSearch ($token: String, $productName: String,$restaurantId:Int, $first: Int, $skip: Int) {
								productSearch (token: $token, productName : $productName, restaurantId :$restaurantId, first: $first, skip: $skip ) {
								productId,
								productName,
								productUrl,
								price,
								MRP,
								extra,
								taxExempt,
								availableTime,
								inStock,
								suspendedUntil,
									category{ categoryId,category,availableTime,
										masterCategory{ masterCategoryId,status,
											MasterCategoryOpenHours{ day,startTime,endTime, status}
										}
									}
								}
							}
							QUERY;
						$variables = [
							'productName' => $name,
							'restaurantId'=>$tempId,
							'first' => 20,
							'skip' => 0,
							'token' =>'0o6jcui8mfhmp56we69kcmu5rkejtock'
						];
						$json = json_encode(['query' => $query, 'variables' => $variables]);
						$method = 'POST';
						$url = $api.'graphql/';
						$header = array(
							'Content-Type: application/json',
							'Authorization:  Token '.$token
						);
						$apiResponse = $this->Home_model21->CallAPI($method, $url, $header,$json);
						$apiDecodedResponse = json_decode($apiResponse);
						$productData = [];
						if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200) {
							$productData = $apiDecodedResponse->response->data->productSearch;
						}
						$data['segment2'] = 'all';
				}
				// print_r($productData);exit;
				$cartId = 0;
				if(isset($_SESSION['cartId'])) {
					$cartId = $_SESSION['cartId'];
				}
				$customerId = 0;
				if(isset($_SESSION['login_data']['customer_id'])) {
					$customerId = $_SESSION['login_data']['customer_id'];
				}
				/** Get cart list */
				$method2 = 'GET';
				$url2 = $api.'cart-items-x/?cart_id='.$cartId.'&restaurant_id='.$tempId;
				$header2 = array(
					'action: cart-item',
					'Content-Type: application/json',
					'Authorization:  Token '.$token,
					'cart_id: '.$cartId,
					'user_id: '.$customerId
				);
				$cart_list_details = $this->Home_model21->CallAPI($method2, $url2, $header2);
				$apiDecodedResponse2 = json_decode($cart_list_details);
				$cartList = array();
				$pIdList = array();
				if(isset($apiDecodedResponse2->status) && $apiDecodedResponse2->status == 200 && $apiDecodedResponse2->status != NULL && $apiDecodedResponse2->status != ""){
					$apiResData2 = $apiDecodedResponse2->response;
					$cartList = $apiResData2->results;
					foreach($cartList as $cartData) {
						array_push($pIdList, $cartData->product->product_id);
					}
				}

				$data['categoryData'] = $categoryData;
				$data['pIdList'] = array_unique($pIdList);
				$data['catId'] = $catId;
				$data['cartId'] = $cartId;
				$data['productData'] = $productData;
				$data1['searchName'] = $name;
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header', $data1);
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/product', $data);	
			}

			/** Get product by category wise */
			public function getProductsByCategory() {
				// $this->checklogin();
				$api = URL;
				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];
				$catId = base64_decode($this->input->post('catId'));
				$currency = $this->session->userdata('pre_login_data')['appCurrencySymbol'];
				$myToken = $this->generate_unique_token();

				/* Get Product Details - Top  */
				$method1 = 'GET';
				$url1 = $api.'v2/catalog/?restaurant_id='.$tempId.'&category_id='.$catId.'&status=ACTIVE';
				$header1 = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse = $this->Home_model21->CallAPI($method1, $url1, $header1);
				$apiDecodedResponse = json_decode($apiResponse);
				$productList = array();
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200) {
					$apiResData1 = $apiDecodedResponse->response;
					$productList = $apiResData1->results;
					$response['success'] = 1;
					$response['message'] = "Data Available";
				} else {
					$response['success'] = 0;
					$response['message'] = "No Listings Available";
				}

				/** Get cart list */
				$customerId = 0;
				if(isset($_SESSION['login_data']['customer_id'])) {
					$customerId = $_SESSION['login_data']['customer_id'];
				}

				$cart_id = 0;
				if(isset($_SESSION['cartId'])) {
					$cart_id = $_SESSION['cartId'];
				}
				$method2 = 'GET';
				$url2 = $api.'cart-items-x/?cart_id='.$cart_id.'&restaurant_id='.$tempId;
				$header2 = array(
					'action: cart-item',
					'Content-Type: application/json',
					'Authorization:  Token '.$token,
					'cart_id: '.$cart_id,
					'user_id: '.$customerId
				);
				$cart_list_details = $this->Home_model21->CallAPI($method2, $url2, $header2);
				$apiDecodedResponse2 = json_decode($cart_list_details);
				$cartList = array();
				$pIdList = array();
				if(isset($apiDecodedResponse2->status) && $apiDecodedResponse2->status == 200 && $apiDecodedResponse2->status != NULL && $apiDecodedResponse2->status != ""){
					$apiResData2 = $apiDecodedResponse2->response;
					$cartList = $apiResData2->results;
					foreach($cartList as $cartData) {
						array_push($pIdList, $cartData->product->product_id);
					}
				}
				
				$response['productList'] = $productList;
				$response['pIdList'] = array_unique($pIdList);	
				// $response['pListHtml'] = $pListHtml;	
				// $response['pListHtml1'] = $pListHtml1;
				$response['currency'] = $currency;
				$response['myToken'] = $myToken;
				echo json_encode($response);exit;
			}

			/** Get single product data */
			public function getSingleProduct() {
				// $this->checklogin();
				$prdId = $this->input->post('prdId');
				$api = URL;
				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];
				$currency = $this->session->userdata('pre_login_data')['appCurrency'];
				// $myToken = $this->generate_unique_token();
				/* Get Single Product Details - Top  */
				$method1 = 'GET';
				$url1 = $api.'catalog/'.$prdId.'/';
				$header1 = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse = $this->Home_model21->CallAPI($method1, $url1, $header1);
				$apiDecodedResponse = json_decode($apiResponse);
				$productDetails = array();
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200) {
					$productDetails = $apiDecodedResponse->response;
					$response['success'] = 1;
					$response['message'] = "Data Available";
				} else {
					$response['success'] = 0;
					$response['message'] = "No Data Found";
				}
				$response['productDetails'] = $productDetails;
				$response['currency'] = $currency;
				// $response['myToken'] = $myToken;
				echo json_encode($response);exit;
			}

		/** Cart Pages */
			/** Add to cart functionality */
			public function addToCart() {
				// $this->checklogin();
				$prdId = $this->input->post('prdId');
				$price = $this->input->post('price');
				$custId = $this->input->post('custId');
				$cartId = $this->input->post('cartId');
				$prdInstruction = isset($_POST['prdInstruction']) ? $_POST['prdInstruction'] : '';
				$quantity = $this->input->post('prdQty');

				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];
				$api = URL;

				$method = 'POST';
				$url = $api.'cart-item-post/';
				$header = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);

				$cart_item_arr = array(
					'product_id' => $prdId,
					'price' => ($price * $quantity),
					'quantity' => $quantity,
					'extra' => $prdInstruction,
					'cart_id' => $cartId
				);
				$apiResponse = $this->Home_model21->CallAPI($method, $url, $header,json_encode($cart_item_arr));
				
				$apiDecodedResponse = json_decode($apiResponse);
				$productDetails = array();
				$cartListHtml = '';
				// print_r($apiDecodedResponse);exit;
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 201) {
					$apiResData = $apiDecodedResponse->response;
					$productList = $apiResData->results;

					/** Append Cart List */
					foreach($productList as $cartPrdList) {
						$qPrice = ($cartPrdList->quantity * $cartPrdList->product->price);
						$qytPrice = number_format($qPrice, 2, '.', '');
						$cartListHtml .= '<div class="mini-cart-item clearfix">
							<div class="mini-cart-img">
								<a href="#"><img src="'.$cartPrdList->product->product_url.'" alt="Image"></a>
								<span class="mini-cart-item-delete" data-key="'.base64_encode($cartPrdList->cart_item_id).'"><i class="icon-cancel"></i></span>
							</div>
							<div class="mini-cart-info">
								<h6><a href="#">'.$cartPrdList->product->product_name.'</a></h6>
								<span class="mini-cart-quantity">'.$cartPrdList->quantity.' x '.$_SESSION['pre_login_data']['appCurrencySymbol'].$cartPrdList->product->price.'</span>
								<div class="float-right mr-20">'.$_SESSION['pre_login_data']['appCurrencySymbol'].$qytPrice.'</div>
							</div>
						</div>';
					}
					/** /.Append Cart List */
					$response['cartList'] = $cartListHtml;
					$response['cartCount'] = $apiResData->count;
					$response['total_cost'] = $_SESSION['pre_login_data']['appCurrencySymbol'].number_format($apiResData->total_cost, 2, '.', '');
					$response['success'] = 1;
					$response['message'] = "Item successfully added to cart";
				} else {
					$response['success'] = 0;
					$response['message'] = "Failed to add product in cart";
				}
				echo json_encode($response);exit;
			}

			/** Delete cart Items */
			public function deleteCartItem() {
				$pId = base64_decode($this->input->post('pId'));

				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];
				$api = URL;

				$method = 'DELETE';
				$url = $api.'cart-item-x/'.$pId.'/';
				$header = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse = $this->Home_model21->CallAPI($method, $url, $header);
				$apiDecodedResponse = json_decode($apiResponse);
				// $productDetails = array();
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 204) {
					$apiResData = $apiDecodedResponse->response;
					/** Get cart list */
					$customerId = 0;
					if(isset($_SESSION['login_data']['customer_id'])) {
						$customerId = $_SESSION['login_data']['customer_id'];
					}

					$cart_id = 0;
					if(isset($_SESSION['cartId'])) {
						$cart_id = $_SESSION['cartId'];
					}
					$method = 'GET';
					$url = $api.'cart-items-x/?cart_id='.$cart_id.'&restaurant_id='.$tempId;

					$header = array(
						'action: cart-item',
						'Content-Type: application/json',
						'Authorization:  Token '.$token,
						'cart_id: '.$cart_id,
						'user_id: '.$customerId
					);

					$cart_list_details = $this->Home_model21->CallAPI($method, $url, $header);
					
					$apiDecodedResponse1 = json_decode($cart_list_details);
					$cartList = array();
					$data['cartCount'] = '0';
					$data['total_cost'] = number_format(0.00, 2, '.', '');
					$cartListHtml = '';
					$cartListPageHtml = '';
					if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200 && $apiDecodedResponse1->status != NULL && $apiDecodedResponse1->status != ""){
						$apiResponse1 = $apiDecodedResponse1->response;
						$cartList = $apiResponse1->results;
						$cartListPageHtml .= '<tbody>';
						/** Append Cart List */
						foreach($cartList as $cartPrdList) {
							$qPrice = ($cartPrdList->quantity * $cartPrdList->product->price);
							$qytPrice = number_format($qPrice, 2, '.', '');
							$cartListHtml .= '<div class="mini-cart-item clearfix">
							<div class="mini-cart-img">
								<a href="#"><img src="'.$cartPrdList->product->product_url.'" alt="Image"></a>
								<span class="mini-cart-item-delete" data-key="'.base64_encode($cartPrdList->cart_item_id).'"><i class="icon-cancel"></i></span>
							</div>
							<div class="mini-cart-info">
								<h6><a href="#">'.$cartPrdList->product->product_name.'</a></h6>
								<span class="mini-cart-quantity">'.$cartPrdList->quantity.' x '.$_SESSION['pre_login_data']['appCurrencySymbol'].$cartPrdList->product->price.'</span>
								<div class="float-right mr-20">'.$_SESSION['pre_login_data']['appCurrencySymbol'].$qytPrice.'</div>
							</div>
						</div>';

						$cartListPageHtml .= '
							<tr>
								<td width="5%" class="cart-product-remove delete-cart-item" data-key="'.base64_encode($cartPrdList->cart_item_id).'">x</td>
								<td width="15%" class="cart-product-image">
									<a href="#"><img src="'.$cartPrdList->product->product_url.'" alt="Image"></a>
								</td>
								<td width="30%" class="cart-product-info">
									<h4><a href="#">'.$cartPrdList->product->product_name.'</a></h4>
								</td>

								<td width="10%" class="cart-product-price">'.$_SESSION['pre_login_data']['appCurrencySymbol'].$cartPrdList->product->price.'
									<input type="hidden" id="cartIdPrice" name="cartIdPrice" value="'.$cartPrdList->product->price.'" />
									<input type="hidden" id="cartIdProduct" name="cartIdProduct" value="'.$cartPrdList->product->product_id.'" />
									<input type="hidden" id="cartItemId" name="cartItemId" value="'.$cartPrdList->cart_item_id.'" />
								</td>
								<td width="20%" class="cart-product-quantity">
									<div class="cart-plus-minus cartPageQtybutton" id="cartPageQtybutton">
										<div class="dec qtybutton qtybutton1">-</div>
											<input type="text" value="'.$cartPrdList->quantity.'" name="cartPageQtybutton" class="cart-plus-minus-box">
										<div class="inc qtybutton qtybutton1">+</div>
									</div>
								</td>
								<td width="20%" class="cart-product-subtotal text-center" id="prdPrice1">'.$_SESSION['pre_login_data']['appCurrencySymbol'].$qytPrice.'</td>
							</tr><tr>
							<td width="5%"></td>
							<td width="15%"></td>
							<td width="30%"></td>
							<td width="10%"></td>
							<td width="20%" style="float:right;"><b>Total:</b></td>
							<td width="20%" class="cart-product-subtotal text-center" id="totalPrdPrice">'.$_SESSION['pre_login_data']['appCurrencySymbol'].number_format($apiResponse->total_cost, 2, '.', '').'</td>
						</tr>';
						}
						$cartListPageHtml .= '</tbody>';
						/** /.Append Cart List */

						$data['cartCount'] = $apiResponse1->count;
						$data['total_cost'] = number_format($apiResponse1->total_cost, 2, '.', '');
						$this->session->set_userdata($data);
					}
					/** /.Get cart list */
					
					$response['cartListHtml'] = $cartListHtml;
					$response['cartListPageHtml'] = $cartListPageHtml;
					$response['cartCount'] = $data['cartCount'];
					$response['total_cost'] = $_SESSION['pre_login_data']['appCurrencySymbol'].$data['total_cost'];
					$response['success'] = 1;
					$response['message'] = "Item successfully deleted from cart";
				} else {
					$response['success'] = 0;
					$response['message'] = "Failed to delete Item";
				}
				echo json_encode($response);exit;
			}

			/** Cart View */
			public function cartView() {
				$appCommData = $this->checklogin();
				$api = $this->session->userdata('pre_login_data')['url'];
				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];

				$customerId = 0;
				if(isset($_SESSION['login_data']['customer_id'])) {
					$customerId = $_SESSION['login_data']['customer_id'];
				}

				$cart_id = 0;
				if(isset($_SESSION['cartId'])) {
					$cart_id = $_SESSION['cartId'];
				}

				$method = 'GET';
				$url = $api.'cart-items-x/?cart_id='.$cart_id.'&restaurant_id='.$tempId;
				$header = array(
					'action: cart-item',
					'Content-Type: application/json',
					'Authorization:  Token '.$token,
					'cart_id: '.$cart_id,
					'user_id: '.$customerId
				);

				$cart_list_details = $this->Home_model21->CallAPI($method, $url, $header);
				$apiDecodedResponse = json_decode($cart_list_details);
				$cartList = array();
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
					$apiResponse = $apiDecodedResponse->response;
					$cartList = $apiResponse->results;
					$data['cartCount'] = $apiResponse->count;
					$data['total_cost'] = $apiResponse->total_cost;
					$this->session->set_userdata($data);
				}
				$data['cartList'] = $cartList;
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header');
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/cart', $data);
			}

			/** Update Quantity */
			public function updateQuantity() {
				$api = $this->session->userdata('pre_login_data')['url'];
				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];

				$qty = $this->input->post("qty");
				$newVal = $this->input->post("newVal");
				$newPrdPrice = $this->input->post("newPrdPrice");
				$cartIdPrice = $this->input->post("cartIdPrice");
				$cartIdProduct = $this->input->post("cartIdProduct");
				$cartItemId = $this->input->post("cartItemId");
				$price = number_format($newVal * $cartIdPrice, 2, '.', '');
				$cart_id = 0;
				if(isset($_SESSION['cartId'])) {
					$cart_id = $_SESSION['cartId'];
				}

				$method = 'PUT';
				$url = $api.'cart-item-post/'.$cartItemId.'/';
				$header = array(
					'action: cart-item',
					'Content-Type: application/json',
					'Authorization:  Token '.$token,
				);
				$insertData = array(
					"quantity" => $newVal,
					"price" => $price,
					"cart_id" => $cart_id,
					"product_id" => $cartIdProduct,
				);
				$cart_list_details = $this->Home_model21->CallAPI($method, $url, $header, json_encode($insertData));
				
				$apiDecodedResponse = json_decode($cart_list_details);
				$cartList = array();
				$data['cartCount'] = '0';
				$data['total_cost'] = number_format(0.00, 2, '.', '');
				$cartListHtml = '';
				$cartListPageHtml = '';
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 201 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
					$apiResponse = $apiDecodedResponse->response;
					$cartList = $apiResponse->results;
					$cartListPageHtml .= '<tbody>';
					/** Append Cart List */
					foreach($cartList as $cartPrdList) {
						$qPrice = ($cartPrdList->quantity * $cartPrdList->product->price);
						$qytPrice = number_format($qPrice, 2, '.', '');


						$cartListHtml .= '<div class="mini-cart-item clearfix">
						<div class="mini-cart-img">
							<a href="#"><img src="'.$cartPrdList->product->product_url.'" alt="Image"></a>
							<span class="mini-cart-item-delete" data-key="'.base64_encode($cartPrdList->cart_item_id).'"><i class="icon-cancel"></i></span>
						</div>
						<div class="mini-cart-info">
							<h6><a href="#">'.$cartPrdList->product->product_name.'</a></h6>
							<span class="mini-cart-quantity">'.$cartPrdList->quantity.' x '.$_SESSION['pre_login_data']['appCurrencySymbol'].$cartPrdList->product->price.'</span>
							<div class="float-right mr-20">'.$_SESSION['pre_login_data']['appCurrencySymbol'].$qytPrice.'</div>
						</div>
					</div>';

					$cartListPageHtml .= '
						<tr>
							<td width="5%" class="cart-product-remove delete-cart-item" data-key="'.base64_encode($cartPrdList->cart_item_id).'">x</td>
							<td width="15%" class="cart-product-image">
								<a href="#"><img src="'.$cartPrdList->product->product_url.'" alt="Image"></a>
							</td>
							<td width="30%" class="cart-product-info">
								<h4><a href="#">'.$cartPrdList->product->product_name.'</a></h4>
							</td>

							<td width="10%" class="cart-product-price">'.$_SESSION['pre_login_data']['appCurrencySymbol'].$cartPrdList->product->price.'
								<input type="hidden" id="cartIdPrice" name="cartIdPrice" value="'.$cartPrdList->product->price.'" />
								<input type="hidden" id="cartIdProduct" name="cartIdProduct" value="'.$cartPrdList->product->product_id.'" />
								<input type="hidden" id="cartItemId" name="cartItemId" value="'.$cartPrdList->cart_item_id.'" />
							</td>
							<td width="20%" class="cart-product-quantity">
								<div class="cart-plus-minus cartPageQtybutton" id="cartPageQtybutton">
									<div class="dec qtybutton qtybutton1">-</div>
										<input type="text" value="'.$cartPrdList->quantity.'" name="cartPageQtybutton" class="cart-plus-minus-box">
									<div class="inc qtybutton qtybutton1">+</div>
								</div>
							</td>
							<td width="20%" class="cart-product-subtotal text-center" id="prdPrice1">'.$_SESSION['pre_login_data']['appCurrencySymbol'].$qytPrice.'</td>
						</tr>';
					}
					$cartListPageHtml .= '<tr>
						<td width="5%"></td>
						<td width="15%"></td>
						<td width="30%"></td>
						<td width="10%"></td>
						<td width="20%" style="float:right;"><b>Total:</b></td>
						<td width="20%" class="cart-product-subtotal text-center" id="totalPrdPrice">'.$_SESSION['pre_login_data']['appCurrencySymbol'].number_format($apiResponse->total_cost, 2, '.', '').'</td>
					</tr></tbody>';
					/** /.Append Cart List */

					$data['cartCount'] = $apiResponse->count;
					$data['total_cost'] = number_format($apiResponse->total_cost, 2, '.', '');
					$this->session->set_userdata($data);
				}
				$response['success'] = 1;
				$response['cartListHtml'] = $cartListHtml;
				$response['cartListPageHtml'] = $cartListPageHtml;
				$response['cartCount'] = $data['cartCount'];
				$response['total_cost'] = $_SESSION['pre_login_data']['appCurrencySymbol'].$data['total_cost'];
				echo json_encode($response);
			}
		/** /. Cart Pages */

		/** Get the lot long */
			public function saveLocation() {
				$latitude = $this->input->post('latitude');
				$longitude = $this->input->post('longitude');
				// Google Maps Geocoding API endpoint
				$apiEndpoint = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=AIzaSyCT4Ks8zytEomcp-Q-WhAY4swAg4dhGlSw";
		
				// Make a GET request to the API endpoint
				$response = file_get_contents($apiEndpoint);
		
				// Decode the JSON response
				$data = json_decode($response, true);
		
				// Extract the formatted address from the response
				$formattedAddress = isset($data['results'][0]['formatted_address']) ? $data['results'][0]['formatted_address'] : 'Address not found';
				$this->session->set_userdata("address", $formattedAddress);
				// Send the formatted address as response
				echo $formattedAddress;
			}
		/** /. Get the lot long */

		/** Checkout Function */
		public function checkout() {
			
			$appCommData = $this->checklogin();

			$api = $this->session->userdata('pre_login_data')['url'];
			$token = $this->session->userdata('pre_login_data')['token'];
			$tempId = $this->session->userdata('pre_login_data')['tempId'];

			$cart_id = 0;
			if(isset($_SESSION['cartId'])) {
				$cart_id = $_SESSION['cartId'];
			}

			$customerId = 0;
			if(isset($_SESSION['login_data']['customer_id'])) {
				$customerId = $_SESSION['login_data']['customer_id'];
			}

			$method = 'GET';
			$url = $api.'billing/?customer_id='.$customerId;
			$header = array(
				'action: billing',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
				'cart_id: '.$cart_id,
				'user_id: '.$customerId
			);
			$bill_details = $this->Home_model21->CallAPI($method, $url, $header);
			$apiDecodedResponse = json_decode($bill_details);

			$data['bill_address_list'] = [];
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
				$apiResponse = $apiDecodedResponse->response;
				$data['bill_address_list'] = $apiResponse->results;
			}

			$method1 = 'GET';
			$url1 = $api.'shipping/?customer_id='.$customerId;
			$header1 = array(
				'action: shipping',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
				'cart_id: '.$cart_id,
				'user_id: '.$customerId
			);
			$ship_details = $this->Home_model21->CallAPI($method1, $url1, $header1);
			$apiDecodedResponse = json_decode($ship_details);
			$data['ship_address_list'] = [];
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
				$apiResponse = $apiDecodedResponse->response;
				$data['ship_address_list'] = $apiResponse->results;
			}

			$method3 = 'GET';
			$url3 = $api.'shipping-method/?status=ACTIVE&restaurant_id='.$tempId;
			$header3 = array(
				'action: shipping',
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$shipmethod_details = $this->Home_model21->CallAPI($method3, $url3, $header3);
			$apiDecodedResponse3 = json_decode($shipmethod_details);
			// $data['shipping_method'] = [];
			$data['bill_shipping_method'] = 0;
			$data['ship_shipping_method'] = 0;
			if(isset($apiDecodedResponse3->status) && $apiDecodedResponse3->status == 200 && $apiDecodedResponse3->status != NULL && $apiDecodedResponse3->status != "") {
				$apiResponse3 = $apiDecodedResponse3->response;
				// $data['shipping_method'] = $apiResponse3->results;
				$data['bill_shipping_method'] = $apiResponse3->results[0]->id;
				$data['ship_shipping_method'] = $apiResponse3->results[1]->id;
			}

			/**
			 * Generate a unique orderId
			 */
			$ordAmount = 0;
			if(isset($_SESSION['total_cost'])) {
				$ordAmt = (int)round($_SESSION['total_cost']);
				$ordAmount = $ordAmt * 100;
			}
			$createOrder = $this->Home_model21->createRazorpayOrder($ordAmount);
			$ordData = json_decode($createOrder);
			$ordId = '';
			if(isset($ordData->id)) {
				$ordId = $ordData->id;
			} 
			$data['ordId'] = $ordId;
			$data['ordAmount'] = $ordAmount;
			// print_r($data['ship_address_list']);exit;
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/checkout', $data);
		}
		/** /. Checkout Function */

		/** Add Billing Address */
		public function addBillingAddress() {
			// print_r($_POST);echo "<pre>";
			$api = $this->session->userdata('pre_login_data')['url'];
			$token = $this->session->userdata('pre_login_data')['token'];
			$total_cost = $this->session->userdata('total_cost');
			$tempId = $this->session->userdata('pre_login_data')['tempId'];
			// print_r('total_cost --> '.$total_cost);echo "<pre>";exit;
			$cart_id = 0;
			if(isset($_SESSION['cartId'])) {
				$cart_id = $_SESSION['cartId'];
			}

			$customerId = 0;
			if(isset($_SESSION['login_data']['customer_id'])) {
				$customerId = $_SESSION['login_data']['customer_id'];
			}

			$pName = $this->input->post("pName");
			// $pPhone = $this->input->post("pPhone");
			$pAddress = $this->input->post("pAddress");
			$pApartment = $this->input->post("pApartment");
			$pCity = $this->input->post("pCity");
			$pState = $this->input->post("pState");
			$pCountry = $this->input->post("pCountry");
			$pZip = $this->input->post("pZip");
			$billingId = $this->input->post("billingId");
			$bill_shipping_method_Id = $this->input->post("bill_shipping_method");
			$ship_shipping_method = $this->input->post("ship_shipping_method");

			$method = 'POST';
			$url = $api.'billing/';
			if($billingId) {
				$method = 'PUT';
				$url = $api.'billing/'.$billingId.'/';
			}
			$header = array(
				'action: cart-item',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
			);
			$bill_data = array(
				"name"=>$pName,
				"zip"=>$pZip,
				"address"=>$pAddress,
				"house_number"=>$pApartment,
				"city"=>$pCity,
				"company_name"=>"",
				"priority"=>"1",
				"state"=>$pState,
				"customer_id"=>$customerId,
				"country"=>$pCountry
			);

			$cart_list_details = $this->Home_model21->CallAPI($method, $url, $header, json_encode($bill_data));
			
			$apiDecodedResponse = json_decode($cart_list_details);

			if(isset($apiDecodedResponse->status) && ($apiDecodedResponse->status == 201 || $apiDecodedResponse->status == 200) && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
				$apiResponse = $apiDecodedResponse->response;

				/** Get fee details  */
					// $method2 = 'POST';
					// $url2 = $api.'fee-x/';
					// $header2 = array(
					// 	'action: fee',
					// 	'Content-Type: application/json',
					// 	'Authorization:  Token '.$token,
					// 	'cart_id: '.$cart_id,
					// 	'user_id: '.$customerId
					// );
					// $fee_data = array("no_tax_total"=>0,"shipping_id"=>(int)$ship_shipping_method,"restaurant_id"=>(int)$tempId,"customer_id"=>$customerId,"sub_total"=>$total_cost,"tip"=>0,"custom_tip"=>0,"cart_id"=>$cart_id);
					// $fee_details = $this->Home_model21->CallAPI($method2, $url2, $header2, json_encode($fee_data));
					// $fees = json_decode($fee_details);
					// $response['fee'] = "";
				/** /. Get fee details  */
				$response['success'] = 1;
				$response['message'] = "Billing address added successfully";
			} else {
				$response['success'] = 0;
				$response['message'] = "Failed to add billing address";
			}
			echo json_encode($response);
		}
		/** /. Add Billing Address */

		/** Add Shipping Address */
		public function addShippingAddress() {
			$api = $this->session->userdata('pre_login_data')['url'];
			$token = $this->session->userdata('pre_login_data')['token'];
			$total_cost = $this->session->userdata('total_cost');
			$tempId = $this->session->userdata('pre_login_data')['tempId'];
			// print_r('total_cost --> '.$total_cost);echo "<pre>";exit;
			$cart_id = 0;
			if(isset($_SESSION['cartId'])) {
				$cart_id = $_SESSION['cartId'];
			}

			$customerId = 0;
			if(isset($_SESSION['login_data']['customer_id'])) {
				$customerId = $_SESSION['login_data']['customer_id'];
			}

			$ship_name = $this->input->post("ship_name");
			$ship_address = $this->input->post("ship_address");
			$ship_apart = $this->input->post("ship_apart");
			$ship_city = $this->input->post("ship_city");
			$ship_state = $this->input->post("ship_state");
			$ship_country = $this->input->post("ship_country");
			$ship_zip = $this->input->post("ship_zip");
			$shippingId = $this->input->post("shippingId");
			$ship_shipping_method = $this->input->post("ship_shipping_method");

			$method = 'POST';
			$url = $api.'shipping/';
			if($shippingId) {
				$method = 'PUT';
				$url = $api.'shipping/'.$shippingId.'/';
			}
			$header = array(
				'action: cart-item',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
			);
			$ship_data = array(
				"name"=>$ship_name,
				"zip"=>$ship_zip,
				"address"=>$ship_address,
				"house_number"=>$ship_apart,
				"city"=>$ship_city,
				"company_name"=>"",
				"priority"=>"1",
				"state"=>$ship_state,
				"customer_id"=>$customerId,
				"country"=>$ship_country
			);

			$cart_list_details = $this->Home_model21->CallAPI($method, $url, $header, json_encode($ship_data));
			
			$apiDecodedResponse = json_decode($cart_list_details);
			if(isset($apiDecodedResponse->status) && ($apiDecodedResponse->status == 201 || $apiDecodedResponse->status == 200) && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
				$apiResponse = $apiDecodedResponse->response;

				/** Get fee details  */
					// $method2 = 'POST';
					// $url2 = $api.'fee-x/';
					// $header2 = array(
					// 	'action: fee',
					// 	'Content-Type: application/json',
					// 	'Authorization:  Token '.$token,
					// 	'cart_id: '.$cart_id,
					// 	'user_id: '.$customerId
					// );
					// $fee_data = array("no_tax_total"=>0,"shipping_id"=>(int)$ship_shipping_method,"restaurant_id"=>(int)$tempId,"customer_id"=>$customerId,"sub_total"=>$total_cost,"tip"=>0,"custom_tip"=>0,"cart_id"=>$cart_id);
					// $fee_details = $this->Home_model21->CallAPI($method2, $url2, $header2, json_encode($fee_data));
					// $fees = json_decode($fee_details);
					// $response['fee'] = "";
				/** /. Get fee details  */
				$response['success'] = 1;
				$response['message'] = "Shipping address added successfully";
			} else {
				$response['success'] = 0;
				$response['message'] = "Failed to add shipping address";
			}
			echo json_encode($response);
		}
		/** /. Add Shipping Address */

		/** Submit payment */
		public function RazorPaySubmitPayment() {
			$api = $this->session->userdata('pre_login_data')['url'];
			$token = $this->session->userdata('pre_login_data')['token'];
			$tempId = $this->session->userdata('pre_login_data')['tempId'];
			// $appEmail = $this->session->userdata('pre_login_data')['appEmail'];
			$total_cost = $this->session->userdata('total_cost');

			$cart_id = 0;
			if(isset($_SESSION['cartId'])) {
				$cart_id = $_SESSION['cartId'];
			}
			$customerId = 0;
			if(isset($_SESSION['login_data']['customer_id'])) {
				$customerId = $_SESSION['login_data']['customer_id'];
			}

			$payId = $this->input->post("payId");
			$payMethod = $this->input->post("payMethod");
			$orderId = $this->input->post("orderId");
			$o_type = $this->input->post("o_type");
			$shipMethodId = $this->input->post("shipMethodId");
			$special_note = $this->input->post("special_note");
			$c_code = $this->input->post("c_code");
			$paymentType = $this->input->post("paymentType");

			/** Get billing address */
			$method = 'GET';
			$url = $api.'billing/?customer_id='.$customerId;
			$header = array(
				'action: billing',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
				'cart_id: '.$cart_id,
				'user_id: '.$customerId
			);
			$bill_details = $this->Home_model21->CallAPI($method, $url, $header);
			$apiDecodedResponse = json_decode($bill_details);

			$bill_address_list = [];
			$bill_address_text = '';
			$address = '';
			$house_number = '';
			$zip = '';
			$city = '';
			$state = '';
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
				$apiResponse = $apiDecodedResponse->response;
				$bill_address_list = $apiResponse->results;
				if(isset($bill_address_list) && is_array($bill_address_list) && !empty($bill_address_list)) {
					$bill_address_text = $bill_address_list[0]->name.', '.$bill_address_list[0]->address.', '.$bill_address_list[0]->house_number.', '.$bill_address_list[0]->zip.', '.$bill_address_list[0]->city.', '.$bill_address_list[0]->state.', '.$bill_address_list[0]->country;
					$address = $bill_address_list[0]->address;
					$house_number = $bill_address_list[0]->house_number;
					$zip = $bill_address_list[0]->zip;
					$city = $bill_address_list[0]->city;
					$state = $bill_address_list[0]->state;
				}
			}
			/** get shiping address */
			$method1 = 'GET';
			$url1 = $api.'shipping/?customer_id='.$customerId;
			$header1 = array(
				'action: shipping',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
				'cart_id: '.$cart_id,
				'user_id: '.$customerId
			);
			$ship_details = $this->Home_model21->CallAPI($method1, $url1, $header1);
			$apiDecodedResponse = json_decode($ship_details);
			$ship_address_list = [];
			$ship_address_text = '';

			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
				$apiResponse = $apiDecodedResponse->response;
				$ship_address_list = $apiResponse->results;
				if(isset($ship_address_list) && is_array($ship_address_list) && !empty($ship_address_list)) {
					$ship_address_text = $ship_address_list[0]->name.', '.$ship_address_list[0]->address.', '.$ship_address_list[0]->house_number.', '.$ship_address_list[0]->zip.', '.$ship_address_list[0]->city.', '.$ship_address_list[0]->state.', '.$ship_address_list[0]->country;
					$address = $ship_address_list[0]->address;
					$house_number = $ship_address_list[0]->house_number;
					$zip = $ship_address_list[0]->zip;
					$city = $ship_address_list[0]->city;
					$state = $ship_address_list[0]->state;
				}
			}

			/* Fee Api */
			$method = 'POST';
			$url = $api.'v2/fee-x/';
			$header = array(
				'action: fee',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
				'cart_id: '.$cart_id,
				'user_id: '.$customerId
			);

			$fee_data = array("no_tax_total"=>0,"shipping_id"=>(int)$shipMethodId,"restaurant_id"=>(int)$tempId,"customer_id"=>$customerId,"sub_total"=>$total_cost,"tip"=>0,"custom_tip"=>0,"coupon"=>$c_code,"type"=>$o_type);
			$fee_details = $this->Home_model21->CallAPI($method, $url, $header, json_encode($fee_data));
			$apiDecodedResponse = json_decode($fee_details);
			if(isset($apiDecodedResponse->status) && ($apiDecodedResponse->status == 201 || $apiDecodedResponse->status == 200) && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
				$fees = $apiDecodedResponse->response;

				/* Order detail Api */
				$method1 = 'POST';
				$url1 = $api.'order-detail-x/';
				$header1 = array(
					'action: order-detail',
					'Content-Type: application/json',
					'Authorization:  Token '.$token,
					'cart_id: '.$cart_id,
					'user_id: '.$customerId
				);
				$order_data = array("subtotal"=>$fees->sub_total,"total"=>$fees->total,"shipping_fee"=>$fees->shipping_fee,"currency"=>"INR","tip"=>$fees->tip,"discount"=>$fees->discount,"extra"=>$special_note,"tax"=>$fees->tax,"cart_id"=>$cart_id,"service_fee"=>$fees->service_fee,"customer"=>$customerId,"status"=>"active","shipping_address_text"=>$ship_address_text,"billing_address_text"=>$bill_address_text);
				// print_r($order_data);echo "<pre>";
				
				$order_details = $this->Home_model21->CallAPI($method1, $url1, $header1, json_encode($order_data));
				$apiDecodedResponse1 = json_decode($order_details);
				$orderDetails = [];
				$order_id = '';
				if(isset($apiDecodedResponse1->status) && ($apiDecodedResponse1->status == 201 || $apiDecodedResponse1->status == 200) && $apiDecodedResponse1->status != NULL && $apiDecodedResponse1->status != "") {
					$orderDetails = $apiDecodedResponse1->response;
					$order_id = $orderDetails->order_id;
				}
				if($orderDetails) {

					/** Get customer data */
					$method1 = 'GET';
					$url1 = $api.'customer/?customer_id='.$customerId;
					$header1 = array(
						'Content-Type: application/json',
						'Authorization:  Token '.$token
					);
					$cust_details = $this->Home_model21->CallAPI($method1, $url1, $header1);
					$cust_phone = "";
					$cust_username = "";
					$cust_email = "";
					$cust_name = "";
					$apiDecodedResponse1 = json_decode($cust_details);
					if(isset($apiDecodedResponse1->status) && ($apiDecodedResponse1->status == 201 || $apiDecodedResponse1->status == 200) && $apiDecodedResponse1->status != NULL && $apiDecodedResponse1->status != "") {
						$apiResponse1 = $apiDecodedResponse1->response;
						$apiResponse = $apiResponse1->results;
						$cust_username = $apiResponse[0]->customer->username;
						$cust_email = $apiResponse[0]->customer->email;
						$cust_name = $apiResponse[0]->customer->first_name.' '.$apiResponse[0]->customer->last_name;
						$cust_phone = $apiResponse[0]->phone_number;
					}

					/** Payment API */
						$method2 = 'POST';
						$url2 = $api.'v2/payment/';
						$header2 = array(
							'Content-Type: application/json',
							'Authorization:  Token '.$token,
						);
						// print_r($header);echo "<pre>";

						$pay_data = array(
							"type"=>"Online",
							"amount"=>$total_cost,
							"currency"=>"inr",
							"receipt_email"=>$cust_email,
							"source"=>"web",
							"card"=>array(
								"number"=>"4111 1111 1111 1111",
								"exp_month"=>"12",
								"exp_year"=>"9999",
								"cvc"=>"999",
								"name"=>$cust_name
							),
							"metadata"=>array(
								"order_id"=>$order_id,
								"shippingmethod_id"=>$shipMethodId,
								"restaurant_id"=>$tempId,
								"phone"=>$cust_phone,
								"customer_id"=>$customerId,
								"special_instruction"=>$special_note,
								"name"=>$cust_name
							),
							"billing_details"=>array(
								"address"=>array(
									"line1"=>$address,
									"line2"=>"",
									"city"=>$city,
									"state"=>$state,
									"house_no"=>$house_number,
									"postal_code"=>$zip
								),
							),
							"borzo_order"=>array(),
							"o_type"=>$o_type,
							"transaction_id"=>$payId,
							"payment_method"=>$payMethod,
							"cart_id"=>$cart_id,
							"coupon"=>$c_code
						);

						$pay_details = $this->Home_model21->CallAPI($method2, $url2, $header2, json_encode($pay_data));
						$apiDecodedResponse2 = json_decode($pay_details);
						// print_r($apiDecodedResponse2);echo "<pre>";exit;

						$payDetails = [];
						$apiResponse2 = '';
						if(isset($apiDecodedResponse2->status) && ($apiDecodedResponse2->status == 201 || $apiDecodedResponse2->status == 200) && $apiDecodedResponse2->status != NULL && $apiDecodedResponse2->status != "") {
							$apiResponse2 = $apiDecodedResponse2->response;
							$myCartId = $this->getCartDataByCustId($apiResData->id);

							$this->session->set_flashdata('success', 'Order placed successfully');
							redirect('product');
						} else {
							$this->session->set_flashdata('error', 'Failed to placed the order');
							redirect('checkout');
						}

				} else if($orderDetails->status == 400 || $orderDetails->status == 500) { 
					$res = json_decode($ordersData->response);
					$msg = 'Service temporarily unavailable, try again later';
					if(isset($res->msg)) {
						$msg = $res->msg;
					}
					$this->session->set_flashdata('error', $msg);
					redirect('checkout');
				} else {
					$this->session->set_flashdata('error', 'Service temporarily unavailable, try again later');
					redirect('checkout');
				}
					
			} else {
				$this->session->set_flashdata('error', 'Service temporarily unavailable, try again later');
				redirect('checkout');
			}
		}
		/** /. Submit payment */

		/** Validate Coupon Code */
		public function ValidateCouponCode() {
			$api = $this->session->userdata('pre_login_data')['url'];
			$token = $this->session->userdata('pre_login_data')['token'];
			$total_cost = $this->session->userdata('total_cost');
			$tempId = $this->session->userdata('pre_login_data')['tempId'];

			$cart_id = 0;
			if(isset($_SESSION['cartId'])) {
				$cart_id = $_SESSION['cartId'];
			}

			$customerId = 0;
			if(isset($_SESSION['login_data']['customer_id'])) {
				$customerId = $_SESSION['login_data']['customer_id'];
			}

			$bill_coupon = $this->input->post("bill_coupon");
			$bill_shipping_method_id = $this->input->post("bill_shipping_method_id");
			/* Fee Api */
			$method = 'POST';
			$url = $api.'v2/fee-x/';
			$header = array(
				'action: fee',
				'Content-Type: application/json',
				'Authorization:  Token '.$token,
				'cart_id: '.$cart_id,
				'user_id: '.$customerId
			);

			$fee_data = array("no_tax_total"=>0,"shipping_id"=>(int)$bill_shipping_method_id,"restaurant_id"=>(int)$tempId,"customer_id"=>$customerId,"sub_total"=>$total_cost,"tip"=>0,"custom_tip"=>0,"coupon"=>$bill_coupon,"cart_id"=>$cart_id, "type"=>"ecommerce");
			
			$fee_details = $this->Home_model21->CallAPI($method, $url, $header, json_encode($fee_data));
			$response['fee'] = "";
			$apiDecodedResponse = json_decode($fee_details);

			if(isset($apiDecodedResponse->response->error)) {
				$response['success'] = 0;
				$response['message'] = $apiDecodedResponse->response->error;
			} else {
				$tax = "0.00";
				if($apiDecodedResponse->response->tax != 0) 
					$tax = $apiDecodedResponse->response->tax;

					$response['success'] = 1;
					$response['message'] = 'Valid Coupon';
			}
			echo json_encode($response);

		}
		/** /. Validate Coupon Code */

		/** Logout */
			public function logout() {
				// Unset specific userdata items
				$this->session->unset_userdata('total_cost');
				$this->session->unset_userdata('cartCount');
				$this->session->unset_userdata('cartId');
				$this->session->unset_userdata('login_data');
			
				// Destroy all session data
				// $this->session->sess_destroy();
			
				// Respond with JSON indicating success
				$response['success'] = 1;
				$response['message'] = 'Logout Successfully';
				echo json_encode($response);
			}
		/**  /. Page End */
}
?>