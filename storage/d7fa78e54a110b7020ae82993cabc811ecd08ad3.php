

<?php $__env->startSection('main-content'); ?>
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="
                                    <?php if(substr($inforPrd->image,0,4) == 'http'): ?>
                                    <?php echo e($inforPrd->image); ?>

                                    <?php else: ?>
                                        <?php echo e(BASE_URL . $inforPrd->image); ?>

                                    <?php endif; ?>    
                                ">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="
                                        <?php if(substr($inforPrd->image,0,4) == 'http'): ?>
                                        <?php echo e($inforPrd->image); ?>

                                        <?php else: ?>
                                            <?php echo e(BASE_URL . $inforPrd->image); ?>

                                        <?php endif; ?>    
                                    
                                    " alt="IMG-PRODUCT">
                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                            <?php $__currentLoopData = $listImg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item-slick3" data-thumb="
                                    <?php if(substr($item->img_url,0,4) == 'http'): ?>
                                    <?php echo e($item->img_url); ?>

                                    <?php else: ?>
                                        <?php echo e(BASE_URL . $item->img_url); ?>

                                    <?php endif; ?>    
                                ">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="
                                        <?php if(substr($item->img_url,0,4) == 'http'): ?>
                                        <?php echo e($item->img_url); ?>

                                        <?php else: ?>
                                            <?php echo e(BASE_URL . $item->img_url); ?>

                                        <?php endif; ?>    
                                    
                                    " alt="IMG-PRODUCT">
                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        <?php echo e($inforPrd->name); ?>

                    </h4>
                    <span class="mtext-106 cl2">
                        $ <?php echo e(number_format($inforPrd->price,0,",",".")); ?>

                    </span>
                    <p class="stext-102 cl3 p-t-23">
                        <?php echo e($inforPrd->detail); ?>

                    </p>

                    <div class="p-t-33">
                        <div class="flex-w flex-r-m p-b-10">
                            <div class="size-204 flex-w flex-m respon6-next">
                            
                                <a href="<?php echo e(BASE_URL .'/client/cart/add/' . $inforPrd->id); ?>" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                    Add to cart
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-m p-l-100 p-t-40 respon7">
                        <div class="flex-m bor9 p-r-10 m-r-11">
                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
                                <i class="zmdi zmdi-favorite"></i>
                            </a>
                        </div>
                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
        <span class="stext-107 cl6 p-lr-25">
            Categories: <?php echo e($inforPrd->category->cate_name); ?>

        </span>
    </div>
</section>

<section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                Related Products
            </h3>
        </div>

        <div class="wrap-slick2">
            <div class="slick2">
                <?php $__currentLoopData = $relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">

                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="
                            <?php if(substr($item->image,0,4) == 'http'): ?>
                            <?php echo e($item->image); ?>

                            <?php else: ?>
                                <?php echo e(BASE_URL . $item->image); ?>

                            <?php endif; ?> 
                            " alt="IMG-PRODUCT">
                            <a href="<?php echo e(BASE_URL . 'client/cart/add/'.$item->id); ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                Add To Cart
                            </a>
                        </div>
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    <?php echo e($item->name); ?>

                                </a>
                                <span class="stext-105 cl3">
                                    $<?php echo e(number_format($item->price,0,",",".")); ?>

                                </span>
                            </div>
                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="<?php echo e(THEME_URL); ?>images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?php echo e(THEME_URL); ?>images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/client/detail.blade.php ENDPATH**/ ?>