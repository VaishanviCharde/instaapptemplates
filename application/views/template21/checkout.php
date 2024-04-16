        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image"
            data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/9.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                            <div class="section-title-area ltn__section-title-2">
                                <h6 class="section-subtitle ltn__secondary-color">// Welcome to our company</h6>
                                <h1 class="section-title white-color">Checkout</h1>
                            </div>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <div class="ltn__checkout-area mb-105">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__checkout-inner">
                            <div class="ltn__checkout-single-content ltn__returning-customer-wrap d-flex">
                                <h5 class="me-5">Pick your preference?</h5>
                                <div class="d-flex ms-5 mt-3">
                                    <div class="form-check me-5">
                                        <input class="form-check-input fs-5" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" value="Pickup">
                                        <label class="form-check-label fs-5" for="flexRadioDefault1">
                                            Pickup
                                        </label>
                                    </div>

                                    <div class="form-check ms-5">
                                        <input class="form-check-input fs-5" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" value="Delivery">
                                        <label class="form-check-label fs-5" for="flexRadioDefault2">
                                            Delivery
                                        </label>
                                    </div>
                                </div>
                                <span id="selectcheckbox_error" style="display:none;">Please pick your preference</span>
                                
                            </div>
                            <button
                            class="place-order-btn1 btn btn-transparent text-color-primary font-weight-700 d-flex float-end"
                            type="submit">Next</button>
                            <?php if((isset($bill_address_list) && $bill_address_list != []) || (isset($ship_address_list) && $ship_address_list != [])){ ?>
                                <div class="ltn__checkout-single-content ltn__coupon-code-wrap shippingAddressSection billingAddressSection d-none">
                                    <h6><b>Note: If using a new address, uncheck the current one and fill in the fields
                                            below</b></h6>
                                </div>
                            <?php } ?>
                            <?php if(isset($ship_address_list) && $ship_address_list != []){ ?>
                                <div class="ltn__checkout-single-content ltn__coupon-code-wrap d-flex  shippingAddressSection d-none">
                                    <div class="form-check mt-2 ms-2 me-2">
                                        <input class="form-check-input fs-5 mt-2" type="checkbox" value="shipAddCheck" id="flexCheckChecked" >
                                    </div>
                                    <b style="width: 20%;" class="mt-3">Use Existing Address</b>
                                    <input type="hidden" name="shippingId" id="shippingId" value="<?php if($ship_address_list) { echo $ship_address_list[0]->id; } ?>" /> 
                                    <!-- <b style="width: 25%;" class="mt-1">Use Shipping Address for Billing</b>  -->
                                    <input type="hidden" name="shipName" id="shipName" value="<?php if($ship_address_list) { echo $ship_address_list[0]->name; } ?>" /> 
                                    <input type="hidden" name="shipAddress" id="shipAddress" value="<?php if($ship_address_list) { echo  $ship_address_list[0]->address; } ?>" /> 
                                    <input type="hidden" name="shipHouseNo" id="shipHouseNo" value="<?php if($ship_address_list) { echo  $ship_address_list[0]->house_number; } ?>" /> 
                                    <input type="hidden" name="shipZip" id="shipZip" value="<?php if($ship_address_list) { echo  $ship_address_list[0]->zip; } ?>" /> 
                                    <input type="hidden" name="shipCity" id="shipCity" value="<?php if($ship_address_list) { echo  $ship_address_list[0]->city; } ?>" /> 
                                    <input type="hidden" name="shipState" id="shipState" value="<?php if($ship_address_list) { echo  $ship_address_list[0]->state; } ?>" /> 
                                    <input type="hidden" name="shipCountry" id="shipCountry" value="<?php if($ship_address_list) { echo  $ship_address_list[0]->country; } ?>" />
                                    <div class="ltn__checkout-single-content-info w-100" onclick="initMap()"><?php  if($ship_address_list) { echo $ship_address_list[0]->name.', '.$ship_address_list[0]->address.', '.$ship_address_list[0]->house_number.', '.$ship_address_list[0]->zip.', '.$ship_address_list[0]->city.', '.$ship_address_list[0]->state.', '.$ship_address_list[0]->country; } ?></div>
                                </div>
                            <!-- <button class="place-order-btn3 btn btn-transparent shippingAddressSection d-none text-color-primary font-weight-700 d-flex fl-left" type="submit">Add New Address</button> -->
                            <div class="ltn__checkout-single-content ltn__coupon-code-wrap shippingAddressSection shipAddOption d-none">
                                <h6><b>Select existing address or pick address from map</b></h6>
                            </div>
                            <div id="map" class="shippingAddressSection shipAddOption d-none" style="height: 400px;"></div>
                            <?php } ?>
                            
                            <?php if(isset($bill_address_list)){ ?>
                            <div class="d-flex billingAddressSection d-none">
                                <div class="form-check ms-2 me-2">
                                    <input class="form-check-input fs-5" type="checkbox" value="billingAddCheck" id="flexCheckChecked1">
                                </div>
                                <b style="width: 25%;" class="mt-1">Use Existing Address for Billing</b>
                                <input type="hidden" name="billingId" id="billingId" value="<?php  if($bill_address_list) { echo $bill_address_list[0]->id; } ?>" /> 
                                <!-- <b style="width: 25%;" class="mt-1">Use Shipping Address for Billing</b>  -->
                                <div class="ltn__checkout-single-content-info w-100"><?php  if($bill_address_list) { echo $bill_address_list[0]->name.', '.$bill_address_list[0]->address.', '.$bill_address_list[0]->house_number.', '.$bill_address_list[0]->zip.', '.$bill_address_list[0]->city.', '.$bill_address_list[0]->state.', '.$bill_address_list[0]->country; } ?></div>  
                                <input type="hidden" name="billName" id="billName" value="<?php if($bill_address_list) { echo $bill_address_list[0]->name; } ?>" /> 
                                <input type="hidden" name="billAddress" id="billAddress" value="<?php if($bill_address_list) { echo  $bill_address_list[0]->address; } ?>" /> 
                                <input type="hidden" name="billHouseNo" id="billHouseNo" value="<?php if($bill_address_list) { echo  $bill_address_list[0]->house_number; } ?>" /> 
                                <input type="hidden" name="billZip" id="billZip" value="<?php if($bill_address_list) { echo  $bill_address_list[0]->zip; } ?>" /> 
                                <input type="hidden" name="billCity" id="billCity" value="<?php if($bill_address_list) { echo  $bill_address_list[0]->city; } ?>" /> 
                                <input type="hidden" name="billState" id="billState" value="<?php if($bill_address_list) { echo  $bill_address_list[0]->state; } ?>" /> 
                                <input type="hidden" name="billCountry" id="billCountry" value="<?php if($bill_address_list) { echo  $bill_address_list[0]->country; } ?>" /> 
                            </div>
                            <?php } ?>
                                           

                            <div class="ltn__checkout-single-content mt-50 billingAddressSection d-none">
                                <h4 class="title-2">Billing Details</h4>
                                <div class="ltn__checkout-single-content-info">
                                    <form action="#" method="post" id="pickupForm" name="pickupForm">
                                        <h6>Personal Information</h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="pName" id="pName" placeholder="Full name">
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-6">
                                                <div class="input-item input-item-phone ltn__custom-icon">
                                                    <input type="text" name="pPhone" id="pPhone" placeholder="Phone number">
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <h6>Address</h6>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <input type="text" name="pAddress" id="pAddress"
                                                                placeholder="Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-item">
                                                            <input type="text" name="pApartment" id="pApartment"
                                                                placeholder="Apartment, suite, unit etc." maxlength="12">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>Town / City</h6>
                                                <div class="input-item">
                                                    <input type="text" name="pCity" id="pCity" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>State </h6>
                                                <div class="input-item">
                                                    <input type="text" name="pState" id="pState" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>Country</h6>
                                                <div class="input-item">
                                                    <input type="text" name="pCountry" id="pCountry" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>Zip / Postal code</h6>
                                                <div class="input-item">
                                                    <input type="text" name="pZip" id="pZip" placeholder="Zip">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6"></div>
                                            <div class="col-lg-3 col-md-6"></div>
                                            <div class="col-lg-3 col-md-6"></div>
                                            <div class="col-lg-3 col-md-6">
                                                <input type="hidden" name="bill_shipping_method" id="bill_shipping_method" value="<?php if(isset($bill_shipping_method)) { echo $bill_shipping_method; } ?>" />
                                                <button
                                                    class="place-order-btn2 pickupButtton btn btn-transparent text-color-primary font-weight-700 d-flex float-end"
                                                    type="submit">Next</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="ltn__checkout-single-content mt-50 shipAddOptionForm d-none">
                                <h4 class="title-2">Shipping Details</h4>
                                <div class="ltn__checkout-single-content-info">
                                    <div class="ltn__checkout-single-content ltn__coupon-code-wrap shippingAddressSection billingAddressSection d-none">
                                        <h6><b>Note: Please select address from map</b></h6>
                                    </div>
                                    <form action="#" method="post" name="deliveryForm" id="deliveryForm" autocomplete="off">
                                        <h6>Personal Information</h6>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-item input-item-name ltn__custom-icon">
                                                    <input type="text" name="ship_name" id="ship_name" placeholder="Full name">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-lg-12 col-md-12">
                                                <h6>Address</h6>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="input-item">
                                                            <input type="text" name="ship_building" id="ship_building" placeholder="Building / Socity">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="input-item">
                                                            <input type="text" name="ship_address" id="ship_address" placeholder="Address line">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="input-item">
                                                            <input type="text" name="ship_apart" id="ship_apart" placeholder="Apartment, suite, unit etc.">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>Town / City</h6>
                                                <div class="input-item">
                                                    <input type="text" name="ship_city" id="ship_city" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>State </h6>
                                                <div class="input-item">
                                                    <input type="text" name="ship_state" id="ship_state" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>Country</h6>
                                                <div class="input-item">
                                                    <input type="text" name="ship_country" id="ship_country" placeholder="Country">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <h6>Zip / Postal code</h6>
                                                <div class="input-item">
                                                    <input type="text" name="ship_zip" id="ship_zip" placeholder="Zip">
                                                </div>
                                            </div>
                                        <input type="hidden" name="ship_shipping_method" id="ship_shipping_method" value="<?php if(isset($ship_shipping_method)) { echo $ship_shipping_method; } ?>" />
                                        <input type="hidden" name="latitude" id="latitude" value="" />
                                        <input type="hidden" name="longitude" id="longitude" value="" />
                                        </div>
                                        <button class="place-order-btn2 deliveryButtton btn btn-transparent text-color-primary font-weight-700 d-flex float-end" type="submit">Next</button>

                                    </form>
                                </div>
                            </div>

                            <div class="ltn__checkout-single-content mt-50 paymentOption d-none">
                                <h4 class="title-2">Payment Details</h4>

                                <div class="ltn__checkout-single-content-info">
                                    <form class="row" method="POST" name="placeOrderForm" id="placeOrderForm" action="#">
                                        <div class="col-lg-6">
                                            <h6>Order Notes (optional)</h6>
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <textarea placeholder="Notes about your order, e.g. special notes for delivery." name="bill_note" id="bill_note"></textarea>
                                            </div>

                                            <h6 class="mt-2">Apply Coupon</h6>
                                            <div class="input-item d-flex">
                                                <input type="text" name="bill_coupon" id="bill_coupon" value="" class="w-75 me-2" placeholder="Coupon Code">
                                                <button type="button" class="w-25 ms-2 btn btn-transparent text-color-primary font-weight-700 coupon-btn h-100">Apply</button>
                                            </div>
                                            <span id="bill_coupon_err" name="bill_coupon_err" class="error"></span>
                                        </div>
                                        <div class="col-lg-6">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Subtotal</td>
                                                        <td class="total_cost"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?php if(isset($_SESSION['total_cost'])) { echo $_SESSION['total_cost']; } else { echo '0.00'; } ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tax</td>
                                                        <td><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Discount</td>
                                                        <td>- <?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Delivery Fee</td>
                                                        <td><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?>0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3"><strong>Order Total</strong></td>
                                                        <td class="py-3"><strong><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?php if(isset($_SESSION['total_cost'])) { echo $_SESSION['total_cost']; } else { echo '0.00'; } ?></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <input type="hidden" class="app_name" name="app_name" id="app_name" value="<?= APP_NAME; ?>">
                                            <input type="hidden" class="total_cost" name="total_cost" id="total_cost" value="<?php if(isset($_SESSION['total_cost'])) { echo round($_SESSION['total_cost'] * 100); } else { echo '0.00'; } ?>">
                                            <input type="hidden" name="testKey" id="testKey" value="<?= RAZOR_PAY_TEST_KEY ?>">
                                            <input type="hidden" name="ordId" id="ordId" value="<?= $ordId; ?>">
                                            <input type="hidden" name="cName" id="cName" value="<?= $this->session->userdata('pre_login_data')['appName']; ?>">
                                            <input type="hidden" name="cPhone" id="cPhone" value="<?= $this->session->userdata('pre_login_data')['appPhone']; ?>">
                                            <input type="hidden" name="cEmail" id="cEmail" value="<?= $this->session->userdata('pre_login_data')['appEmail']; ?>">
                                            <button
                                                class="place-order-btn btn btn-transparent text-color-primary font-weight-700 d-flex float-end" type="button" id="ProceedPaymentButton" onclick=ProceedPaymentFunction()>Place order</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <form action="<?= site_url('submit-payment'); ?>" method="POST" id="razorPayPaymentFrm">
                                <input type="hidden" name="payId" id="payId" value="">
                                <input type="hidden" name="payMethod" id="payMethod" value="Card">
                                <input type="hidden" name="orderId" id="orderId" value="">
                                <input type="hidden" name="o_type" id="o_type" value="restaurant">
                                <input type="hidden" name="paymentType" id="paymentType" value="">
                                <input type="hidden" name="shipMethodId" id="shipMethodId" value="">
                                <input type="hidden" name="special_note" id="special_note" value="">
                                <input type="hidden" name="c_code" id="c_code" value="">
                            </form>
                            <!-- <button
                            class="place-order-btn1 btn btn-transparent text-color-primary font-weight-700 d-flex float-end"
                            type="submit">Next</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function ProceedPaymentFunction() {
        var oneTimeSetupFee = $("#total_cost").val();
        var username = $("#cName").val();
        var base_url = $("#base_url").val();
        var business_phone = $("#cPhone").val();
        var business_email = $("#cEmail").val();
        var testKey = $("#testKey").val(); // Assuming this is an input field containing your Razorpay test key
        var order_id = $("#ordId").val();
        var bill_note = $("#bill_note").val();
        var bill_coupon = $("#bill_coupon").val();
        var selectedPaymentType = $('input[type="radio"][name="flexRadioDefault"]:checked').val();
        var bill_shipping_method = $("#bill_shipping_method").val();
        var ship_shipping_method = $("#ship_shipping_method").val();
        $("#orderId").val(order_id);
        $("#paymentType").val(selectedPaymentType);
        $("#special_note").val(bill_note);
        $("#c_code").val(bill_coupon);

        if(selectedPaymentType == 'Pickup') {
            $("#shipMethodId").val(bill_shipping_method);
        } else {
            $("#shipMethodId").val(ship_shipping_method);
        }

        var app_name = $("#app_name").val();
        var options = {
            key: testKey, // Replace this with your test key
            amount: oneTimeSetupFee, // Amount in paise (e.g., 100 rupees = 10000 paise)
            currency: "INR",
            name: app_name,
            description: app_name+' Payment For Order - '+order_id,
            image: '<?php if(isset(TEMP_1['HEAD']['TEMP_FAVICON']) && TEMP_1['HEAD']['TEMP_FAVICON'] != NULL && TEMP_1['HEAD']['TEMP_FAVICON'] != "") { echo TEMP_1['HEAD']['TEMP_FAVICON']; } else { echo ""; } ?>',
            order_id: order_id,
            prefill: {
                name: username,
                contact: business_phone,
                email: business_email
            },
            notes: {
                appname: app_name,
                paymenttype: 'Single Time Payment'
            },
            handler: function (response) {
                console.log(response);
                if(response.razorpay_payment_id) {
                    $("#payId").val(response.razorpay_payment_id);
                    $("#ProceedPaymentButton").attr("disabled", true);
                    $("#razorPayPaymentFrm").submit();
                } else {
                    console.log('Payment Failed!');
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
            modal: {
                ondismiss: function () {
                    console.log('Payment modal closed');
                }
            },
            theme: {
                color: '#699403'
            }
        };
        
        // Create a new instance of Razorpay and open the payment modal
        var razorpayModal = new Razorpay(options);
        razorpayModal.open();
    }

    function initModal() {
        initMap();
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT4Ks8zytEomcp-Q-WhAY4swAg4dhGlSw&libraries=places&callback=initMap" async defer></script>
<script type="text/javascript">
    var map;
    var marker;
    var initialLat;
    var initialLng;
    function initMap() {
        // Check if the Geolocation API is supported
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                // Get current latitude and longitude
                var currentLat = position.coords.latitude;
                var currentLng = position.coords.longitude;

                // Set initial coordinates
                initialLat = currentLat;
                initialLng = currentLng;

                // Create a new map centered at the current location
                map = new google.maps.Map(document.getElementById('map'), {
                    center: { lat: currentLat, lng: currentLng },
                    zoom: 15 // You can adjust the zoom level
                });
                // $("#map_error").show();
                // setTimeout(() => {
                //     $("#map_error").hide();
                // }, 3000);
                

                // Add a draggable marker at the current location
                marker = new google.maps.Marker({
                    position: { lat: currentLat, lng: currentLng },
                    map: map,
                    title: 'Your Location',
                    draggable: true
                });

                marker.addListener("click", () => {
                    geocodeLatLng(marker.getPosition())
                });

                // Initialize autocomplete
                var input = document.getElementById('map_autocomplete');
                // var options = {
                //     componentRestrictions: { country: ['IN', 'US', 'UK', 'CN'] }
                // };
                var autocomplete = new google.maps.places.Autocomplete(input);

                // Set the bounds to the map's viewport for autocomplete
                autocomplete.bindTo('bounds', map);

                // Update marker position on autocomplete place changed
                autocomplete.addListener('place_changed', function () {
                    var place = autocomplete.getPlace();
                    if (place.geometry) {
                        map.setCenter(place.geometry.location);
                        marker.setPosition(place.geometry.location);
                        updateLatLngInputs(place.geometry.location.lat(), place.geometry.location.lng());
                        updateAddressFields(place);
                    }
                });

                function updateAddressFields(place) {
                    var addressComponents = place.address_components;
                    var formattedAddress = place.formatted_address;

                    var country = getAddressComponent(addressComponents, 'country', 'long_name');
                    var state = getAddressComponent(addressComponents, 'administrative_area_level_1', 'long_name');
                    var city = getAddressComponent(addressComponents, 'locality', 'long_name');
                    var pincode = getAddressComponent(addressComponents, 'postal_code', 'long_name');

                    // Update UI or perform further actions with the address components
                    $("#ship_address").val(formattedAddress);
                    $("#ship_state").val(state);
                    $("#ship_city").val(city);
                    $("#ship_zip").val(pincode);
                    $("#ship_country").val(country);
                    // $("#country").trigger("change");
                }

                // Update marker position on marker drag
                marker.addListener('dragend', function () {
                    var newPosition = marker.getPosition();
                    map.setCenter(newPosition);
                    // You can also retrieve the new position's coordinates using newPosition.lat() and newPosition.lng()
                    updateLatLngInputs(newPosition.lat(), newPosition.lng());
                    geocodeLatLng(newPosition);
                });

                // Add click event listener to move the marker to the clicked location
                map.addListener('click', function (event) {
                    marker.setPosition(event.latLng);
                    map.panTo(event.latLng);
                    updateLatLngInputs(event.latLng.lat(), event.latLng.lng());
                    geocodeLatLng(event.latLng);
                });
            });
        } else {
            console.log('Geolocation is not supported by this browser.');
        }
    }

    function updateLatLngInputs(latitude, longitude) {
        document.getElementById('latitude').value = latitude.toFixed(6);
        document.getElementById('longitude').value = longitude.toFixed(6);
    }

    function geocodeLatLng(latLng) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({ 'location': latLng }, function (results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    var addressComponents = results[0].address_components;
                    var formattedAddress = results[0].formatted_address;

                    // Extract address components
                    var countryLongName = getAddressComponent(addressComponents, 'country', 'long_name');
                    var countryShortName = getAddressComponent(addressComponents, 'country', 'short_name');
                    var state = getAddressComponent(addressComponents, 'administrative_area_level_1', 'long_name');
                    var city = getAddressComponent(addressComponents, 'locality', 'long_name');
                    var pincode = getAddressComponent(addressComponents, 'postal_code', 'long_name');

                    // Update UI or perform further actions with the address components
                    // document.getElementById('map_autocomplete').value = formattedAddress;
                    $("#ship_address").val(formattedAddress);
                    $("#ship_state").val(state);
                    $("#ship_city").val(city);
                    $("#ship_zip").val(pincode);
                    $("#ship_country").val(countryShortName);
                } else {
                    console.log('No results found');
                }
            } else {
                console.log('Geocoder failed due to: ' + status);
            }
        });
    }

    // Helper function to extract specific address component property
    function getAddressComponent(addressComponents, type, property) {
        for (var i = 0; i < addressComponents.length; i++) {
            var component = addressComponents[i];
            if (component.types.indexOf(type) !== -1) {
                return component[property];
            }
        }
        return '';
    }
</script>
</body>

</html>