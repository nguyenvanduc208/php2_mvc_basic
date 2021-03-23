;
<?php $__env->startSection('main-content'); ?>


<div class="wrap-header-cart js-panel-cart">
    <div class="s-full js-hide-cart"></div>
    <div class="header-cart flex-col-l p-l-65 p-r-25">
        <div class="header-cart-title flex-w flex-sb-m p-b-8">
            <span class="mtext-103 cl2">
                Your Cart
            </span>
            <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                <i class="zmdi zmdi-close"></i>
            </div>
        </div>
        <div class="header-cart-content flex-w js-pscroll">
            <ul class="header-cart-wrapitem w-full">
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="<?php echo e(THEME_URL); ?>images/item-cart-01.jpg" alt="IMG">
                    </div>
                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            White Shirt Pleat
                        </a>
                        <span class="header-cart-item-info">
                            1 x $19.00
                        </span>
                    </div>
                </li>
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="<?php echo e(THEME_URL); ?>images/item-cart-02.jpg" alt="IMG">
                    </div>
                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            Converse All Star
                        </a>
                        <span class="header-cart-item-info">
                            1 x $39.00
                        </span>
                    </div>
                </li>
                <li class="header-cart-item flex-w flex-t m-b-12">
                    <div class="header-cart-item-img">
                        <img src="<?php echo e(THEME_URL); ?>images/item-cart-03.jpg" alt="IMG">
                    </div>
                    <div class="header-cart-item-txt p-t-8">
                        <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                            Nixon Porter Leather
                        </a>
                        <span class="header-cart-item-info">
                            1 x $17.00
                        </span>
                    </div>
                </li>
            </ul>
            <div class="w-full">
                <div class="header-cart-total w-full p-tb-40">
                    Total: $75.00
                </div>
                <div class="header-cart-buttons flex-w w-full">
                    <a href="shoping-cart.html"
                        class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                        View Cart
                    </a>
                    <a href="shoping-cart.html"
                        class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                        Check Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>





<section class="bg0 p-t-23 p-b-140">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                Product  Appreciation
            </h3>
        </div>
        <div class="row isotope-grid">

            <?php $__currentLoopData = $trendingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="
                        <?php if(substr($item->image,0,4) == 'http'): ?>
                        <?php echo e($item->image); ?>

                        <?php else: ?>
                        <?php echo e(BASE_URL . $item->image); ?>

                        <?php endif; ?>
                        " width="360px" height="260px" alt="IMG-PRODUCT">
                        <a href="<?php echo e(BASE_URL .'/client/cart/add/'. $item->id); ?>"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Add To Cart
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="<?php echo e(BASE_URL . 'client/detail/' . $item->id); ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <?php echo e($item->name); ?>

                            </a>
                            <span class="stext-105 cl3">
                                $<?php echo e(number_format($item->price,0,",",".")); ?>

                            </span>
                        </div>
                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="<?php echo e(THEME_URL); ?>images/icons/icon-heart-01.png"
                                    alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                    src="<?php echo e(THEME_URL); ?>images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/client/home.blade.php ENDPATH**/ ?>