    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/9.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <!-- <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6> -->
                            <h1 class="section-title white-color">Contact Us</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index-2.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- CONTACT ADDRESS AREA START -->
    <div class="ltn__contact-address-area mb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/10.png" alt="Icon Image">
                        </div>
                        <h3>Email Address</h3>
                        <p><?php echo TEMP_1['DETAILS']['TEMP_EMAIL']; ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/11.png" alt="Icon Image">
                        </div>
                        <h3>Phone Number</h3>
                        <p><?php echo TEMP_1['DETAILS']['TEMP_MOB']; ?> <br/> <?php echo TEMP_1['DETAILS']['TEMP_MOB1']; ?></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <div class="ltn__contact-address-icon">
                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/12.png" alt="Icon Image">
                        </div>
                        <h3>Office Address</h3>
                        <p><?php echo TEMP_1['DETAILS']['TEMP_ADD']; ?></p>
                    </div>
                </div>
                <?php if($this->session->userdata('pre_login_data')['appWorking_hours']) { ?>
                <div class="col-lg-12">
                    <div class="ltn__contact-address-item ltn__contact-address-item-3 box-shadow">
                        <!-- <div class="ltn__contact-address-icon">
                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icons/11.png" alt="Icon Image">
                        </div> -->
                        <h3>Open Hours</h3>
                        <p><?php echo $this->session->userdata('pre_login_data')['appWorking_hours']; ?></span>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- CONTACT ADDRESS AREA END -->

	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
</body>
</html>