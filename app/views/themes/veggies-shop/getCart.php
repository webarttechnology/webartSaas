<?php if (count($cart['cartItems']) > 0) : ?>
    <?php foreach ($cart['cartItems'] as $data) : ?>
        <li>
            <a href="#" class="photo"><img src="<?php echo $data->thumb_img ?? url('/admin/assets/media/svg/files/blank-image.svg') ?>" class="cart-thumb" alt="" /></a>
            <h6><a href="#"><?php echo ucfirst($data->name) ?> </a></h6>
            <p><?php echo $data->quantity ?>x - <span class="price">$<?php echo number_format($data->base_price, 2) ?></span></p>
        </li>
    <?php endforeach; ?>
    <li class="total">
        <a href="<?= url('/cart') ?>" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
        <span class="float-right"><strong>Total</strong>: $<?php echo number_format($cart['grandTotal'], 2) ?></span>
    </li>
<?php else : ?>
    <span class="text-danger text-center d-block mt-5">No Data Found</span>
<?php endif; ?>