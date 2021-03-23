
<?php $__env->startSection('title','Tất cả sản phẩm'); ?>

<?php $__env->startSection('menu-category'); ?>
    <ul class="submenu">
        <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="danhMuc?id=<?php echo e($row->id); ?>"><?php echo e($row->cate_name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <?php $__currentLoopData = $listPrd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="
                                                <?php if(substr($row->image,0,4) == 'http'): ?>
                                                    <?php echo e($row->image); ?>

                                                <?php else: ?>
                                                    <?php echo e(BASE_URL . $row->image); ?>

                                                <?php endif; ?>    
                                            " alt="" width="360px" height="260px">
                                            <div class="img-cap">
                                                <span>Add to cart</span>
                                            </div>
                                            <div class="favorit-items">
                                                <span class="flaticon-heart"></span>
                                            </div>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html"><?php echo e($row->name); ?></a></h3>
                                            <span>$ <?php echo e($row->price); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/client/products/home.blade.php ENDPATH**/ ?>