    
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <!-- <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6> -->
                            <h1 class="section-title white-color">My Profile</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?= site_url(); ?>">Home</a></li>
                                <li>My Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120--- pb-120">
        <div class="container">
            <div class="row">
                <form id="profile-form" name="profile-form" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Salutation <span class="error">*&nbsp;</span></label>
                                <select class="form-control nice-select list" name="pro_salutation" id="pro_salutation" required="">
                                    <option value="">Select Salutation</option>
                                    <option value="Mr." <?php if($customers[0]->salutation == 'Mr.') { echo 'selected'; } ?>>Mr.</option>
                                    <option value="Mrs." <?php if($customers[0]->salutation == 'Mrs.') { echo 'selected'; } ?>>Mrs.</option>
                                    <option value="Miss." <?php if($customers[0]->salutation == 'Miss.') { echo 'selected'; } ?>>Miss.</option>
                                    <option value="Ms." <?php if($customers[0]->salutation == 'Ms.') { echo 'selected'; } ?>>Ms.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Username <span class="error">*&nbsp;</span></label>
                                <input type="text" name="pro_username" id="pro_username" value="<?php if(isset($customers[0]->customer->username)) { echo $customers[0]->customer->username; } ?>" placeholder="Enter your username" class="form-control" onkeydown="restrictSpaces(event)" readonly required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>First Name <span class="error">*&nbsp;</span></label>
                                <input type="text" name="pro_first_name" id="pro_first_name" value="<?php if(isset($customers[0]->customer->first_name)) { echo $customers[0]->customer->first_name; } ?>" placeholder="Enter your first name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Last Name <span class="error">*&nbsp;</span></label>
                                <input type="text" name="pro_last_name" id="pro_last_name" value="<?php if(isset($customers[0]->customer->last_name)) { echo $customers[0]->customer->last_name; } ?>" placeholder="Enter your last name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Email <span class="error">*&nbsp;</span></label>
                                <input type="email" name="pro_email" id="pro_email" value="<?php if(isset($customers[0]->customer->email)) { echo $customers[0]->customer->email; } ?>" placeholder="Enter your email" class="form-control" readonly required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Mobile Number <span class="error">*&nbsp;</span></label>
                                <input type="text" name="pro_mobile[main]" id="pro_mobile" value="<?php if(isset($customers[0]->phone_number)) { echo $customers[0]->phone_number; } ?>" placeholder="Enter your mobile number" class="form-control" onkeypress="return isNumber(event)" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center mt-10 mb-20">
                            <button type="submit" class="theme-btn-1 default-btn" id="profileSubmitButton">
                                <b>Update Profile</b>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 mt-30">
                            <a href="<?= site_url('change-password'); ?>"><b>Change Password</b></a>
                        </div>
                        <div class="col-lg-6 col-sm-6 mt-30">
                            <a href="javascript:void(0);" class="error float-right" id="deleteAccount"><b>Delete Account</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
</body>
</html>