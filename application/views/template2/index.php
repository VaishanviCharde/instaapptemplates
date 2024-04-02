<?php if(isset(TEMP_1['BANNER']) && TEMP_1['BANNER'] != NULL && TEMP_1['BANNER'] != "") { ?>
    <div class="slider-area pb-70">
        <div class="home-slider owl-carousel owl-theme">
            <?php foreach(TEMP_1['BANNER'] as $banner) { ?>
                <div class="slider-item bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>img/img-slide/<?php if(isset($banner['img']) && $banner['img'] != NULL && $banner['img'] != "") { echo $banner['img']; } else { echo ""; } ?>">
                    <div class="container">
                        <div class="slider-content">
                            <?php if(isset($banner['sub-title']) && $banner['sub-title'] != NULL && $banner['sub-title'] != "") { ?>
                                <span><?php echo $banner['sub-title']; ?></span>
                            <?php } ?>
                            <?php if(isset($banner['head']) && $banner['head'] != NULL && $banner['head'] != "") { ?>
                                <h1><?php echo $banner['head']; ?></h1>
                            <?php } ?>
                            <?php if(isset($banner['desc']) && $banner['desc'] != NULL && $banner['desc'] != "") { ?>
                                <p>
                                    <?php echo $banner['desc']; ?>
                                </p>
                            <?php } ?>
                            <div class="slider-btn">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
    
    <?php if(isset(TEMP_1['ABOUT']) && TEMP_1['ABOUT'] != NULL && TEMP_1['ABOUT'] != "") { ?>
    <div class="about-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <?php if(isset(TEMP_1['ABOUT']['img']) && TEMP_1['ABOUT']['img'] != NULL && TEMP_1['ABOUT']['img'] != "") {
                            foreach(TEMP_1['ABOUT']['img'] as $abtImg) { ?>
                                <img src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>img/about/<?= $abtImg['img']; ?>" alt="<?= $abtImg['alt']; ?>">
                        <?php } } ?>
                        <?php if(isset(TEMP_1['ABOUT']['shapes']) && TEMP_1['ABOUT']['shapes'] != NULL && TEMP_1['ABOUT']['shapes'] != "") { ?>
                            <div class="about-img-shape">
                                <?php foreach(TEMP_1['ABOUT']['shapes'] as $abtShapes) { ?>
                                    <div class="<?= $abtShapes['cls']; ?>">
                                        <img src="<?= base_url(); ?>assets/<?= TEMP_1['TEMP_VIEW_PATH']; ?>img/about/<?= $abtShapes['img']; ?>" alt="Images">
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <?php if(isset(TEMP_1['ABOUT']['sub-title']) && TEMP_1['ABOUT']['sub-title'] != NULL && TEMP_1['ABOUT']['sub-title'] != "") { ?>
                                <span><?= TEMP_1['ABOUT']['sub-title']; ?></span>
                            <?php } ?>
                            <?php if(isset(TEMP_1['ABOUT']['head']) && TEMP_1['ABOUT']['head'] != NULL && TEMP_1['ABOUT']['head'] != "") { ?>
                                <h2><?= TEMP_1['ABOUT']['head']; ?></h2>
                            <?php } ?>
                            <?php if(isset(TEMP_1['ABOUT']['desc']) && TEMP_1['ABOUT']['desc'] != NULL && TEMP_1['ABOUT']['desc'] != "") { ?>
                                <p><?= TEMP_1['ABOUT']['desc']; ?></p>
                            <?php } ?>
                        </div>
                        <?php if(isset(TEMP_1['ABOUT']['points']) && TEMP_1['ABOUT']['points'] != NULL && TEMP_1['ABOUT']['points'] != "") { ?>
                            <ul>
                                <?php foreach(TEMP_1['ABOUT']['points'] as $abtPoints) { ?>
                                    <li>
                                        <i class='bx bx-check-circle'></i>
                                        <?= $abtPoints; ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- PRODUCT TAB AREA END -->
	<?php $this->load->view(TEMP_1['TEMP_VIEW_PATH'].'layouts/footer.php'); ?>
</body>
</html>