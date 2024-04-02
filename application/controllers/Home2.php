<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home2 extends CI_Controller {
	public function __construct()
	{
	  	parent::__construct();
	  	$this->load->model('Home_model2');
	}

	/** Check API URL and App Id */
	public function checkurl() {
		$restId = RESTID;
		if($this->input->get('restaurantId') != "") {
			$restId = $this->input->get('restaurantId');
		}
		$data['url'] = URL;
		$data['restaurantId'] = $restId;
		$this->session->set_userdata($data);
	}

	/** Check login URL and Get the Token */
	public function checklogin() {
		$this->checkurl();
		$api = $this->session->userdata('url');
		$restaurantId = $this->session->userdata('restaurantId');

		$method = 'POST';
        $url = $api.'rest-auth/login/v1/';
        $header = array(
	       'Content-Type: application/json'
        );
        $login_data =array("username"=> "admin", "password"=> "Mphasis8","restaurant_id" =>1);

        $apiResponse = $this->Home_model2->CallAPI($method, $url, $header, json_encode($login_data));
        $apiDecodedResponse = json_decode($apiResponse);
        if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
			$apiResData = json_decode($apiDecodedResponse->response);
			$data['token'] = $apiResData->token;
			$this->session->set_userdata($data);

			/** */
			$api = $this->session->userdata('url');
			$token = $this->session->userdata('token');
			$restaurant_id = $this->session->userdata('restaurant_id');
	 	} else {
			redirect('');
		}

	 	if ($this->session->userdata('token') == '') 
        {
            redirect('');
        }
    }

	/** Get the app data using API */
	public function getAppData() {
		$this->checklogin();
		$api = $this->session->userdata('url');
		$token = $this->session->userdata('token');
		$restaurantId = $this->session->userdata('restaurantId');

		$data = array(
			'tempName' => TEMPNAME.'/',
			'restaurantId' => RESTID
		);
		/* Get Restaurant Data Api */
		$method = 'GET';
		$url = $api.'restaurants/'.$restaurantId.'/';
		$header = array(
			'Content-Type: application/json',
            'Authorization:  Token '.$token
		);
		$apiResponse = $this->Home_model2->CallAPI($method, $url, $header);
		$apiDecodedResponse = json_decode($apiResponse);
		if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
			$apiResData = json_decode($apiDecodedResponse->response);
			$data['appName'] = $apiResData->name;
			$data['appAddress'] = $apiResData->address;
			$data['appCity'] = $apiResData->city;
			$data['appState'] = $apiResData->state;
			$data['appZip'] = $apiResData->zip;
			$data['appNearbyZip'] = $apiResData->nearby_zip;
			$data['appCountry'] = $apiResData->country;
			$data['appLogo'] = $apiResData->restaurant_url;
			$data['appEmail'] = $apiResData->email;
			$data['appPhone'] = $apiResData->phone;
			$data['appStatus'] = $apiResData->status;
			$data['appCurrency'] = $apiResData->currency;
			$data['appPayment_account'] = $apiResData->payment_account;
			$data['appDesc'] = $apiResData->desc;
			$data['appWorking_hours'] = $apiResData->working_hours;
			$data['appPos'] = $apiResData->pos;
			// $data['appMid'] = $apiResData->mid;
			// $data['appToken'] = $apiResData->token;
			// $data['data['groupName']'] = $apiResData->group_name;
			$data['appTemplate'] = $apiResData->template;
			$data['appCreated_at'] = $apiResData->created_at;
			// $data['appUpdated_at'] = $apiResData->updated_at;
			// $data['appStripeApiKey'] = $apiResData->stripe_api_key;
			// $data['appPrinter_mac'] = $apiResData->printer_mac;
			// $data['appPlan'] = $apiResData->plan;
			// $data['appImage'] = $apiResData->image;

			/* Get Restaurant Admin Data Api */
			$method = 'GET';
			$url = $api.'restaurantadmin/?restaurant_id='.$restaurantId;
			$header = array(
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse1 = $this->Home_model2->CallAPI($method, $url, $header);
			$apiDecodedResponse1 = json_decode($apiResponse1);
			if(isset($apiDecodedResponse1->status) && $apiDecodedResponse1->status == 200 && $apiDecodedResponse1->status != NULL && $apiDecodedResponse1->status != ""){
				$apiResData1 = json_decode($apiDecodedResponse1->response);
				$data['appAdminId'] = $apiResData1[0]->id;
				$data['appAdminIndustType'] = $apiResData1[0]->industry_type;
				$data['appAdminUsername'] = $apiResData1[0]->username;
				$data['appAdminPhone'] = $apiResData1[0]->phone_number;
				$data['appAdminEmail'] = $apiResData1[0]->email;

			}
	 	}
		 
		if($this->input->get('restaurantId') != "") {
			$data['tempName'] = $this->input->get('tempName');
			$data['restaurantId'] = $this->input->get('restaurantId');
		} else {
			if(RESTID != "") {
				$data['tempName'] = TEMPNAME.'/';
				$data['restaurantId'] = RESTID;
			}
		} 
		$this->setAppConfigureData($data);
		return $data;
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
		if(count($appCommData) != 0 && $appCommData['restaurantId'] != "") {
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
				'TEMP_ADD' => $appAddress.', '.$appCity.', '.$appState.', '.$appZip.', '.$appCountry,
				'TEMP_MOB' => $appPhone,
				'TEMP_MOB1' => '',
				'TEMP_DSC' => $appDesc,
				'EXP_YEAR' => '',
				'TEMP_PAY_IMG' => '',
				'TEMP_COPYRIGHT' => 'Copyright © <script>document.write(new Date().getFullYear())</script> <a href="'.site_url().'">'.$appName.'</a>. All Rights Reserved.',
			),
			'SOCIAL' => array(
				array(
					'title' => 'Facebook',
					'icon' => 'bx bxl-facebook',
					'link' => 'javascript:void(0)',
					'attr' => "target='_blank'",
				),
				array(
					'title' => 'Twitter',
					'icon' => 'bx bxl-twitter',
					'link' => 'javascript:void(0)',
					'attr' => "target='_blank'",
				),
				array(
					'title' => 'Instagram',
					'icon' => 'bx bxl-instagram',
					'link' => 'javascript:void(0)',
					'attr' => "target='_blank'",
				),
				array(
					'title' => 'Google Plus',
					'icon' => 'bx bxl-google-plus',
					'link' => 'javascript:void(0)',
					'attr' => "target='_blank'",
				),
			),
			'BANNER' => array(
				array(
					'img' => 'home-one3.jpg',
					'alt' => 'Banner Img 1',
					'sub-title' => 'Welcome to Our Service',
					'head' => 'Fix Car & Get Care for Lifetime',
					'desc' => 'Nunc ut lacus vel felis scelerisque cursus. Quisque sit amet pellentesque urna. In eleifend
									elit sit amet tincidunt tempor. Integer finibus sem quis convallis convallis.',
					'isImgLeft' => 'false',
					'attr' => "target='_blank'",
					'link' => 'javascript:void(0)',
				),
				array(
					'img' => 'home-one2.jpg',
					'alt' => 'Banner Img 2',
					'sub-title' => 'Welcome to Our Service',
					'head' => 'We Make Car Repair Hassle Free',
					'desc' => 'Nunc ut lacus vel felis scelerisque cursus. Quisque sit amet pellentesque urna. In eleifend
									elit sit amet tincidunt tempor. Integer finibus sem quis convallis convallis.',
					'isImgLeft' => 'false',
					'attr' => "target='_blank'",
					'link' => 'javascript:void(0)',
				),
				array(
					'img' => 'home-one1.jpg',
					'alt' => 'Banner Img 3',
					'sub-title' => 'Welcome to Our Service',
					'head' => 'Your Car is Always Specials With Us',
					'desc' => 'Nunc ut lacus vel felis scelerisque cursus. Quisque sit amet pellentesque urna. In eleifend
									elit sit amet tincidunt tempor. Integer finibus sem quis convallis convallis.',
					'isImgLeft' => 'false',
					'attr' => "target='_blank'",
					'link' => 'javascript:void(0)',
				),
			),
			'ABOUT' => array(
				'img' => array(
					array(
						'img' => 'about-img1.jpg',
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
				'head' => 'We Have 20+ Years of Service Experience for You',
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
				),array(
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
			$appCommData = $this->getAppData();
			$myToken = $this->generate_unique_token();

			/* Get Category */
			$categoryData = array();
			$api = $this->session->userdata('url');
			$token = $this->session->userdata('token');
			$restaurantId = $this->session->userdata('restaurantId');
			$method = 'GET';
			$url = $api.'category/?restaurant_id='.$restaurantId;
			$header = array(
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse = $this->Home_model2->CallAPI($method, $url, $header);
			$apiDecodedResponse = json_decode($apiResponse);
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
				$apiResData = json_decode($apiDecodedResponse->response);
				$categoryData = $apiResData;
			}
			$data['categoryData'] = $categoryData;
			$data['myToken'] = $myToken;
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header.php');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'index',$data);
		}

		public function product($parameter = null)
		{
			$appCommData = $this->getAppData();

			/* Get Category */
			$categoryData = array();
			$api = $this->session->userdata('url');
			$token = $this->session->userdata('token');
			$restaurantId = $this->session->userdata('restaurantId');
			$method = 'GET';
			$url = $api.'category/?restaurant_id='.$restaurantId;
			$header = array(
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse = $this->Home_model2->CallAPI($method, $url, $header);
			$apiDecodedResponse = json_decode($apiResponse);
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
				$apiResData = json_decode($apiDecodedResponse->response);
				$categoryData = $apiResData;
			}

			$data['categoryData'] = $categoryData;
			$data['catId'] = $parameter;
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header.php');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'product', $data);	
		}

		public function getProductCategoryDetails() {
			$this->checklogin();
			$api = $this->session->userdata('url');
			$token = $this->session->userdata('token');
			$restaurantId = $this->session->userdata('restaurantId');
			$catId = $this->input->post('catId');
			$categoryDetails = array();
			$response['status'] = 0;
			$response['message'] = "No Listings Available";
			$response['cErrMessage'] = "No Listings Available";
			$response['categoryCount'] = 0;
			$response['categoryNextPage'] = "";
			$response['categoryPrevPage'] = "";

			$myToken = $this->generate_unique_token();

			/** Get Category Details */
			$method = 'GET';
			$url = $api.'catalog/?restaurant_id='.$restaurantId.'&category_id='.$catId.'&status=ACTIVE&page=1';
			$header = array(
				'Content-Type: application/json',
				'Authorization:  Token '.$token
			);
			$apiResponse = $this->Home_model2->CallAPI($method, $url, $header);
			$apiDecodedResponse = json_decode($apiResponse);
			if(isset($apiDecodedResponse->status) && $apiDecodedResponse->status == 200 && $apiDecodedResponse->status != NULL && $apiDecodedResponse->status != ""){
				$apiResData = json_decode($apiDecodedResponse->response);
				$categoryDetails = $apiResData->results;
				$response['status'] = 1;
				$response['message'] = "Data has been found";
				$response['categoryCount'] = $apiResData->count;
				$response['categoryNextPage'] = $apiResData->next;
				$response['categoryPrevPage'] = $apiResData->previous;
			}
			$response['categoryDetails'] = $categoryDetails;
			$response['myToken'] = $myToken;
			echo json_encode($response);exit;
		}

		public function product_details($parameter = null)
		{
			$appCommData = $this->getAppData();
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'/layouts/header.php');
			$this->load->view(TEMP_1['TEMP_VIEW_PATH'].'product-details');	
		}
	/**  /. Page End */
}
?>