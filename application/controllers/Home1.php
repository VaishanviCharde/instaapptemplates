<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home1 extends CI_Controller {

	public function __construct()
	{
	  	parent::__construct();
	  	$this->load->model('Home_model1');
	}

	/** Check API URL and App Id */
	/* public function checkurl() {
		$restId = RESTID;
		if($this->input->get('restaurantId') != "") {
			$restId = $this->input->get('restaurantId');
		}
		$data['url'] = URL;
		$data['restaurantId'] = $restId;
		$this->session->set_userdata($data);
	} */

	/** Check login URL and Get the Token */
	public function checklogin() {
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
        $apiResponse = $this->Home_model1->CallAPI($method, $url, $header);
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
			if(isset($apiDecodedResponse->response)) {
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
				'TEMP_FAVICON' => 'favicon.png',
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
					'head' => 'TALENTED ENGINEER & MECHANICS',
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
				'Authorization:  Token '.$myToken
			);
			$apiResponse = $this->Home_model1->CallAPI($method, $url, $header);
			$apiDecodedResponse = json_decode($apiResponse);
			$categoryData = array();
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
				$categoryData = $apiDecodedResponse->response;
			}
			/* /.Get Category */

			/* Get Product Details - Top  */
			$method1 = 'GET';
			$url1 = $api.'product-details/?type=top&restaurant_id='.$restaurantId;
			$header1 = array(
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse1 = $this->Home_model1->CallAPI($method1, $url1, $header1);
			$apiDecodedResponse1 = json_decode($apiResponse1);
			$topProductsData = array();
			if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200) {
				$topProductsData = $apiDecodedResponse1->response;
			}
			/* /.Get Product Details - Top  */

			/* Get Product Details - New Arrival - Hot Deals  */
			$method2 = 'GET';
			$url2 = $api.'product-details/?type=new_arrievals&restaurant_id='.$restaurantId;
			$header2 = array(
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse2 = $this->Home_model1->CallAPI($method2, $url2, $header2);
			$apiDecodedResponse2 = json_decode($apiResponse2);
			$hotProductsData = array();
			if(isset($apiDecodedResponse2->status) && $apiDecodedResponse2->status == 200) {
				$hotProductsData = $apiDecodedResponse2->response;
			}
			/* /.Get Product Details - New Arrival - Hot Deals  */
			
			$data['categoryData'] = $categoryData;
			$data['topProductsData'] = $topProductsData;
			$data['hotProductsData'] = $hotProductsData;
			$data['myToken'] = $myToken;

			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header.php');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/index', $data);
		}

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
				$password = $this->input->post('password');
				$confirm_password = $this->input->post('conf_password');

				/* Signup User Api */
				$method = 'POST';
				$url = $api.'user/';
				$header = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$user_data = array("first_name"=>$firstname,"password"=>$password,"last_name"=>$lastname,"restaurant_id"=>$restaurantId,"verified"=>"N","username"=>$username,"email"=>$email);
				$user_details = $this->Home_model1->CallAPI($method, $url, $header,json_encode($user_data));
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
					$cust_details = $this->Home_model1->CallAPI($method, $url, $header,json_encode($cust_data));
					$apiDecodedResponse1 = json_decode($cust_details);
					if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200 && $apiDecodedResponse1->status != NULL && $apiDecodedResponse1->status != "") {
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
				$login_details = $this->Home_model1->CallAPI($method, $url, $header,json_encode($data));
				$apiDecodedResponse = json_decode($login_details);
				$response = array();
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$apiResData = $apiDecodedResponse->response;
					$data['customer_name'] = $username;
					$data['customer_id'] = $apiResData->id;
					$data['login_token'] = $apiResData->token;
					$this->session->set_userdata('login_data',$data);

					$response['customer_name'] = $username;
					$response['customer_id'] = $apiResData->id;
					$response['login_token'] = $apiResData->token;
					$response['success'] = 1;
					$response['message'] = 'Login successful';
				} else {
					if($apiDecodedResponse->status == 403) {
						$response['success'] = 0;
						$response['message'] = 'Your email is not Verified, Please verify your email address';
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
				$login_details = $this->Home_model1->CallAPI($method, $url, $header,json_encode($data));
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
				$details = $this->Home_model1->CallAPI($method, $url, $header,json_encode($data));
				$apiDecodedResponse = json_decode($details);
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$apiResData = $apiDecodedResponse->response;
					$data['customer_id'] = $apiResData->id;
					$data['login_token'] = $apiResData->token;
					$this->session->set_userdata('login_data',$data);
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

				$details = $this->Home_model1->CallAPI($method, $url, $header, json_encode($data));
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
				$details = $this->Home_model1->CallAPI($method, $url, $header, json_encode($data));
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

		/** Product Details */
			public function product($parameter = null)
			{
				$appCommData = $this->checklogin();

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
				$apiResponse = $this->Home_model1->CallAPI($method, $url, $header);
				$apiDecodedResponse = json_decode($apiResponse);
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
					$apiResData = $apiDecodedResponse->response;
					$categoryData = $apiResData;
				}

				$data['categoryData'] = $categoryData;
				$data['catId'] = $parameter;
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header.php');
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/product', $data);	
			}

			public function getProductsByCategory() {
				$this->checklogin();
				$api = URL;
				$token = $this->session->userdata('pre_login_data')['token'];
				$tempId = $this->session->userdata('pre_login_data')['tempId'];
				$catId = base64_decode($this->input->post('catId'));
				$currency = $this->session->userdata('pre_login_data')['appCurrency'];
				$myToken = $this->generate_unique_token();

				/* Get Product Details - Top  */
				$method1 = 'GET';
				$url1 = $api.'product-details/?type=category&restaurant_id='.$tempId.'&category_id='.$catId;
				$header1 = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse1 = $this->Home_model1->CallAPI($method1, $url1, $header1);
				$apiDecodedResponse1 = json_decode($apiResponse1);
				$productList = array();
				if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200) {
					$productList = $apiDecodedResponse1->response;
					$response['success'] = 1;
					$response['message'] = "Data Available";
				} else {
					$response['success'] = 0;
					$response['message'] = "No Listings Available";
				}
				$response['productList'] = $productList;
				$response['currency'] = $currency;
				$response['myToken'] = $myToken;
				echo json_encode($response);exit;
			}

			public function product_details($parameter)
			{
				$appCommData = $this->checklogin();
				$pId = base64_decode($parameter);
				$parts = explode('_', $pId);
				$prdId = end($parts);
				$api = URL;
				$token = $this->session->userdata('pre_login_data')['token'];
				/* Get Product Details By Prd Id  */
				$method = 'GET';
				$url = $api.'productdetails/'.$prdId.'/';
				$header = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse = $this->Home_model1->CallAPI($method, $url, $header);
				$apiDecodedResponse = json_decode($apiResponse);
				$productData = array();
				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200) {
					$productData = $apiDecodedResponse->response;
				}

				/* Get Product Details Images - By Prd Id  */
				$method1 = 'GET';
				$url1 = $api.'product-images/?product='.$prdId;
				$header1 = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$apiResponse1 = $this->Home_model1->CallAPI($method1, $url1, $header1);
				$apiDecodedResponse1 = json_decode($apiResponse1);
				$productImgData = array();
				if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200) {
					$productImgData = $apiDecodedResponse1->response;
				}
				$data['productData'] = $productData;
				$data['productImgData'] = $productImgData;
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header.php');
				$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/product-details', $data);	
			}
		/** /. Product Details */

		/** Order Place */

			public function placeOrder() {
				$productId = $this->input->post('product_id');
				$total = $this->input->post('price');
				$custId = $this->input->post('custId');
				$token = $this->session->userdata('pre_login_data')['token'];
				$api = URL;

				/* Guest Login User */
				$method = 'POST';
				$url = $api.'place-order/';
				$header = array(
					'Content-Type: application/json',
					'Authorization:  Token '.$token
				);
				$data = array(
					"subtotal"=>"0.00",
					"total" => $total,
					"discount" => "0.0",
					"extra" => "NA",
					"tax" => "0.0",
					"service_fee" => "0.0",
					"status" => "active",
					"customer" => $custId,
					"restaurant_id" => RESTID,
					"product_id" => $productId,
					"receipt_email" => "",
					"currency" => strtoupper($this->session->userdata('pre_login_data')['appCurrency']),
					"type" => "cash",
					"coupon" => "", 
					"transaction_id" => "12345"
				);
				$details = $this->Home_model1->CallAPI($method, $url, $header,json_encode($data));
				$apiDecodedResponse = json_decode($details);

				if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != "") {
					$response['success'] = 1;
					$response['message'] = 'Your car booking request has successfully submitted.';
				} else {
					$response['success'] = 0;
					$response['message'] = 'Failed to submit car booking request';
				}
				echo json_encode($response);
			}
		/** /. Order Place */

		/** Logout */

			public function logout() {
				$this->session->unset_userdata('login_data');
				// $this->session->sess_destroy('login_data');
				$response['success'] = 1;
				$response['message'] = 'Logout Successfully';
				echo json_encode($response);
			}
		/**  /. Page End */
}
?>