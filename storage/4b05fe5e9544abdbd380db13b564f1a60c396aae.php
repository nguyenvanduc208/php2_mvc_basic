
<?php $__env->startSection('title','Chi tiết đơn hàng'); ?>
<?php $__env->startSection('main-content'); ?>
<body>
    <div class="container">
        <div class="header">
            <span>Số lượng:</span>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr >
                    <th>Mã đơn hàng</th>
                    <th colspan ="6"><?php echo e($invoice->id); ?></th>
                </tr>
                <tr >
                    <th>Fullname</th>
                    <th colspan ="6"><?php echo e($invoice->customer_name); ?></th>
                </tr>
                <tr>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ảnh sản phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Thành tiền</th>


                </tr>
            </thead>
            <tbody>
                    <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                            <td><?php echo e($row->product_id); ?></td>
                            <td><?php echo e($row->product->name); ?></td>
                            <td><img src="<?php if(substr($row->product->image,0,4) == 'http'): ?>
                                <?php echo e($row->product->image); ?>

                            <?php else: ?>
                                <?php echo e(BASE_URL . $row->product->image); ?>

                            <?php endif; ?>" style="width:70px;height:100px" alt=""></td>
                            <td><?php echo e($row->quantity); ?></td>
                            <td><?php echo e($row->unit_price); ?></td>
                            <td><?php echo e($row->unit_price * $row->quantity); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

                

        </table>
    </div>
</body>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/admin/invoice/detail.blade.php ENDPATH**/ ?>