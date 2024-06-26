    
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <!-- <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6> -->
                            <h1 class="section-title white-color">Order Details</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?= site_url(); ?>">Home</a></li>
                                <li>Order Details</li>
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
                <div class="col-lg-6">
                    <div class="ltn__team-details-member-about">
                        <ul>
                            <li><strong>Order number:</strong> <?= $order_id; ?></li>
                            <li><strong>Status:</strong> <?= str_replace("_"," ",strtoupper($status)); ?></li>
                            <?php if(isset($shipping_address_text) && $orderitem[0]->order_type == 'DELIVERY') { ?><li><strong>Shipping Address:</strong> <?= $shipping_address_text; ?></li><?php } ?>
                        </ul>
                    </div>
                <br/><br/>  
                </div>
                <div class="col-lg-6">
                    <div class="ltn__team-details-member-about">
                        <ul>
                            <li><strong>Order Date:</strong> <?= date("d/m/Y", strtotime($date)); ?></li>
                            <li><strong>Payment Method:</strong> <?php if($payment_method == 'CASH') { echo 'Cash on Delivery'; } else { echo 'Card Payment'; } ?></li>
                            <?php if($billing_address_text) { ?><li><strong>Billing Address:</strong> <?= $billing_address_text; ?></li><?php } ?>
                        </ul>
                    </div>
                <br/><br/>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__myaccount-tab-content-inner">
                        <div class="table-responsive text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th width="5%">#</th>
                                    <th width="25%">Product Name</th>
                                    <th width="25%">Price</th>
                                    <th width="20%">Quantity</th>
                                    <th width="25%">Subtotal</th>
                                    </tr>
                                </thead>
                                <?php if(isset($orderitem) && $orderitem != '') { ?>
                                    <tbody>
                                        <?php $i = 1; foreach($orderitem as $ordList) {?>
                                            <tr>
                                                <td width="5%"><?php echo $i; ?></td>
                                                <td width="25%"><?php echo $ordList->product->product_name;?></td>
                                                <td width="25%"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?php echo $ordList->product_price;?></td>
                                                <td width="20%"><?php echo $ordList->quantity;?></td>
                                                <td width="25%"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?php echo $ordList->price;?></td>
                                            </tr>
                                        <?php $i++; } ?>
                                            <tr>
                                                <td width="5%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="20%" style="text-align:right;"><b>Subtotal:</b></td>
                                                <td width="25%" class="cart-product-subtotal text-center" id="totalPrdPrice"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?= $sub_total; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="5%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="20%" class="error" style="text-align:right;"><b>Discount:</b></td>
                                                <td width="25%" class="cart-product-subtotal text-center error"  id="totalPrdPrice">-<?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?= $discount; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="5%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="20%" style="text-align:right;"><b>Delivery Fee:</b></td>
                                                <td width="25%" class="cart-product-subtotal text-center" id="totalPrdPrice"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?= $shipping_fee; ?></td>
                                            </tr>
                                            <tr>
                                                <td width="5%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="25%">&nbsp;</td>
                                                <td width="20%" style="text-align:right;"><b>Total:</b></td>
                                                <td width="25%" class="cart-product-subtotal text-center" id="totalPrdPrice"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?= $total; ?></td>
                                            </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
</body>
</html>