    
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <!-- <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6> -->
                            <h1 class="section-title white-color">Change Password</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?= site_url(); ?>">Home</a></li>
                                <li>Change Password</li>
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
                <form id="change-pass-form" name="change-pass-form" method="post" autocomplete="off">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                                <label for="old_pass">Old Password <span class="error">*&nbsp;</span></label>
                                <input type="password" name="old_pass" id="old_pass" value="" placeholder="Enter Old password" class="form-control" required aria-invalid="true">
                                <i class="fa fa-eye input-icon-pass password-toggle" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-3"></div>

                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                            <label>New Password <span class="error">*&nbsp;</span></label>
                                <input type="password" name="new_pass" id="new_pass" value="" placeholder="Enter New password" class="form-control" required>
                                <i class="fa fa-eye input-icon-pass password-toggle" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-3"></div>

                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-group position-relative">
                            <label>Confirm Password <span class="error">*&nbsp;</span></label>
                                <input type="password" name="conf_pass" id="conf_pass" value="" placeholder="Enter Confirm password" class="form-control" required>
                                <i class="fa fa-eye input-icon-pass password-toggle" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 text-center mt-10 mb-20">
                            <button type="submit" class="theme-btn-1 default-btn" id="changePassSubmitButton">
                                <b>Change Password</b>
                            </button>
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