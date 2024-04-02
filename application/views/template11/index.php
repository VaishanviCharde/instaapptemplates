    <!-- SLIDER AREA START (slider-3) -->
    <?php if(isset(TEMP_1['BANNER'])) { ?>
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white">
        <?php foreach(TEMP_1['BANNER'] as $banner) { 
                if(isset($banner['isImgLeft']) && $banner['isImgLeft'] != 'true') { ?>
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-3-normal text-color-white bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/img-slide/<?php if(isset($banner['img'])) { echo $banner['img']; } else { echo ""; } ?>"> 
                    <div class="ltn__slide-item-inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="javascript:void(0)" data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                            <?php if(isset($banner['head'])) { ?>
                                            <h1 class="slide-title animated "><?php echo $banner['head']; ?></h1>
                                            <?php } ?>
                                            <?php if(isset($banner['desc'])) { ?>
                                            <div class="slide-brief animated">
                                                <p><?php echo $banner['desc']; ?></p>
                                            </div>
                                            <?php } ?>
                                            <div class="btn-wrapper animated">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } else { ?>
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-3-normal text-color-white bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/img-slide/<?php if(isset($banner['img'])) { echo $banner['img']; } else { echo ""; } ?>">
                    <div class="ltn__slide-item-inner  text-right text-end">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <?php if(isset($banner['head'])) { ?>
                                            <h1 class="slide-title animated "><?php echo $banner['head']; ?></h1>
                                            <?php } ?>
                                            <?php if(isset($banner['desc'])) { ?>
                                            <div class="slide-brief animated">
                                                <p><?php echo $banner['desc']; ?></p>
                                            </div>
                                            <?php } ?>
                                            <div class="btn-wrapper animated">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } ?>
        </div>
    </div>
    <?php } ?>
    <!-- SLIDER AREA END -->
    
    <!-- ABOUT US AREA START -->
    <?php if(isset(TEMP_1['ABOUT'])) {  ?>
    <div class="ltn__about-us-area pt-100 pb-60">
        <div class="container">
            <div class="row">
                <?php if(isset(TEMP_1['ABOUT']['img'])) { ?>
                <div class="col-lg-6 align-self-center">
                    <div class="why-choose-us-img-wrap">
                        <?php foreach(TEMP_1['ABOUT']['img'] as $aboutImg) {  ?>
                        <div class="why-choose-us-img-<?= $aboutImg['cls']; ?>">
                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/about/<?= $aboutImg['img']; ?>" alt="<?= $aboutImg['alt']; ?>">
                        </div>
                        <?php } ?>
                        <!-- <div class="why-choose-us-img-2 text-right text-end">
                            <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/about/about-2.jpg" alt="About Us Image">
                        </div> -->
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-6">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <?php if(isset(TEMP_1['ABOUT']['head'])) { ?>
                            <h1 class="ltn__secondary-color"><?php echo TEMP_1['ABOUT']['head']; ?></h1>
                            <?php } ?>
                            <?php if(isset(TEMP_1['ABOUT']['sub-title'])) { ?>
                            <p><?php echo TEMP_1['ABOUT']['sub-title']; ?></p>
                            <?php } ?>
                        </div>
                        <?php if(isset(TEMP_1['ABOUT']['desc'])) { ?>
                        <p><?php echo TEMP_1['ABOUT']['desc']; ?></p>
                        <?php } ?>
                        <div class="about-author-info d-flex">
                            <?php if(isset(TEMP_1['ABOUT']['onr_name'])) { ?>
                                <div class="author-name-designation  align-self-center mr-30">
                                    <h4 class="mb-0"><?php echo TEMP_1['ABOUT']['onr_name']; ?></h4>
                                    <small><?php echo TEMP_1['ABOUT']['onr_designation']; ?></small>
                                </div>
                            <?php } ?>
                            <?php if(isset(TEMP_1['ABOUT']['authorSignImg']) && TEMP_1['ABOUT']['authorSignImg'] !== NULL && TEMP_1['ABOUT']['authorSignImg'] !== "") { ?>
                            <div class="author-sign  align-self-center">
                                <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/icon-img/<?php echo TEMP_1['ABOUT']['authorSignImg']; ?>" alt="#">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- ABOUT US AREA END -->
    
    <!-- CATEGORY AREA START -->
    <div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-40 pb-10" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/img-slide/slide-2.jpg">
        <div class="container">
            <?php if(isset(TEMP_1['TEMP_INDUSTRY_TYPE']) && TEMP_1['TEMP_INDUSTRY_TYPE'] !== NULL && TEMP_1['TEMP_INDUSTRY_TYPE'] != "") { ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-area ltn__section-title-2 text-center">
                            <h1 class="section-title white-color"><?php if(TEMP_1['TEMP_INDUSTRY_TYPE'] == 'restaurant') { ?> Top Categories <?php } else { ?> Our Brands <?php } ?></h1>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if(isset($categoryData) && $categoryData !== NULL && $categoryData != "") { ?>
            <div class="row ltn__category-slider-active slick-arrow-1">
                <?php foreach($categoryData as $catData) { ?>
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-3 text-center">
                            <div class="ltn__category-item-img">
                                <a href="javascript:void(0)">
                                    <img src="<?php if(isset($catData->category_url) && $catData->category_url !== NULL && $catData->category_url != "") { echo $catData->category_url; } else { echo ""; } ?>" alt="Image">
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h3><a href="javascript:void(0)"><?php if(isset($catData->category) && $catData->category !== NULL && $catData->category != "") { echo $catData->category; } else { echo ""; } ?></a></h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- CATEGORY AREA END -->

    <?php if(isset(TEMP_1['CALLSEC'])) {  ?>
    <!-- CALL TO ACTION START (call-to-action-4) -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120 mt-110 mb-60" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-center">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  any question you have  //</h6>
                            <?php if(isset(TEMP_1['CALLSEC']['SUP-MOB'])) { ?>
                            <h1 class="section-title white-color"><?php echo TEMP_1['CALLSEC']['SUP-MOB']; ?></h1>
                            <?php } ?>
                        </div>
                        <div class="btn-wrapper">
                            <a href="tel:<?php echo TEMP_1['CALLSEC']['SUP-MOB']; ?>" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                            <!-- <a href="javascript:void(0)" class="btn btn-transparent btn-effect-4 white-color">CONTACT US</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(isset(TEMP_1['CALLSEC']['img'])) {  ?>
            <?php foreach(TEMP_1['CALLSEC']['img'] as $aboutImg) {  ?>
                <div class="<?php echo $aboutImg['cls']; ?>">
                    <img src="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/others/<?php echo $aboutImg['img']; ?>" alt="<?php echo $aboutImg['alt']; ?>">
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <?php } ?>
    <!-- CALL TO ACTION END -->

    <!-- PRODUCT TAB AREA END -->
	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>

</body>
</html>