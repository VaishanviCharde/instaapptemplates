    
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                            <h1 class="section-title white-color">Cart</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?= site_url(); ?>">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- SHOPING CART AREA START -->
    <div class="liton__shoping-cart-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping-cart-inner">
                        <div class="shoping-cart-table table-responsive">
                            <table class="table" id="cartListPageHtml">
                                <!-- <thead>
                                    <th class="cart-product-remove">Remove</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->
                                <?php if(isset($cartList) && $cartList != '' && !empty($cartList)) { ?>
                                <tbody>
                                    <?php foreach($cartList as $cart_list) { ?>
                                        <tr>
                                            <td width="5%" class="cart-product-remove delete-cart-item" data-key="<?= base64_encode($cart_list->cart_item_id); ?>">x</td>
                                            <td width="15%" class="cart-product-image">
                                                <a href="#"><img src="<?php if(isset($cart_list->product->product_url) && $cart_list->product->product_url != NULL && $cart_list->product->product_url != '') { echo $cart_list->product->product_url; } else { echo base_url().'assets/'.TEMPNAME.'/img/product/NoProductImg.png'; } ?>" alt="Image"></a>
                                            </td>
                                            <td width="30%" class="cart-product-info">
                                                <h4><a href="#"><?php if(isset($cart_list->product->product_name)) { echo $cart_list->product->product_name; } else { echo 'NA'; } ?></a></h4>
                                            </td>
                                            <td width="10%" class="cart-product-price"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?= $cart_list->product->price;?>
                                                <input type="hidden" id="cartIdPrice" name="cartIdPrice" value="<?= $cart_list->product->price;?>" />
                                                <input type="hidden" id="cartIdProduct" name="cartIdProduct" value="<?= $cart_list->product->product_id;?>" />
                                                <input type="hidden" id="cartItemId" name="cartItemId" value="<?= $cart_list->cart_item_id;?>" />
                                            </td>
                                            <td width="20%" class="cart-product-quantity">
                                                <div class="cart-plus-minus cartPageQtybutton" id="cartPageQtybutton">
                                                    <input type="text" value="<?= $cart_list->quantity; ?>" name="cartPageQtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </td>
                                            <td width="20%" class="cart-product-subtotal" id="prdPrice1"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?= number_format($cart_list->quantity * $cart_list->product->price, 2, '.', '');?></td>
                                        </tr>
                                    <?php } ?>
                                        <tr>
                                            <td width="5%"></td>
                                            <td width="15%"></td>
                                            <td width="30%"></td>
                                            <td width="10%"></td>
                                            <td width="20%" style="float:right;"><b>Total:</b></td>
                                            <td width="20%" class="cart-product-subtotal text-center" id="totalPrdPrice"><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?php if(isset($_SESSION['total_cost'])) { echo number_format($_SESSION['total_cost'], 2, '.', ''); } else { echo '0.00'; } ?></td>
                                        </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                        <!-- <div class="shoping-cart-total mt-50">
                            <h4>Cart Totals</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td>$618.00</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping and Handing</td>
                                        <td>$15.00</td>
                                    </tr>
                                    <tr>
                                        <td>Vat</td>
                                        <td>$00.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><strong>$633.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="btn-wrapper text-right text-end">
                                <a href="checkout.html" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOPING CART AREA END -->

    <!-- ABOUT US AREA END -->
	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
</body>
</html>