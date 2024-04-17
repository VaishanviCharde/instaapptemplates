    
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="<?= base_url(); ?>assets/<?= TEMPNAME; ?>/img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                            <h1 class="section-title white-color">Orders</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="<?= site_url(); ?>">Home</a></li>
                                <li>Orders</li>
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
                <div class="ltn__myaccount-tab-content-inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order Date</th>
                                    <th>Order Number</th>
                                    <th>Order Total</th>
                                    <th>Status</th>
                                    <th>Payment Method</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>1</td>
                                    <td>Jun 22, 2019</td>
                                    <td>Pending</td>
                                    <td>$3000</td>
                                    <td><a href="cart.html">View</a></td> -->

                                    <?php
                                    if($orders) {
                                        $i = 1;
                                    foreach ($orders as $ord) {
                                    ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= date("d M Y", strtotime($ord->created_at)); ?></td>
                                        <td><?= $ord->order->order_id; ?></td>
                                        <td><?= $_SESSION['pre_login_data']['appCurrencySymbol']; ?><?= $ord->amount; ?></td>
                                        <td><?= str_replace("_"," ",strtoupper($ord->status)); ?></td>
                                        <td><?php if($ord->payment_method == 'CASH') { echo 'Cash on Delivery'; } else { echo 'Card Payment'; } ?></td>
                                        <td>
                                            <a href="javascript:void(0)"><i class="fas fa-file-alt"></i></a>
                                            <?php /*site_url('orderdetail/'.base64_encode($ord->order->order_id).'/'.base64_encode($ord->created_at).'/'.base64_encode($ord->status).'/'.base64_encode($ord->payment_method));*/ ?>
                                        </td>
                                    </tr>
                                    <?php $i++; } } else { ?>
                                    <tr>
                                    <td colspan="6" style="text-align: center;">No Record Found</td>
                                    </tr>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
	<?php $this->load->view(TEMPNAME.'/layouts/footer.php'); ?>
</body>
</html>