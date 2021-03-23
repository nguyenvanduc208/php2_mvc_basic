
<?php $__env->startSection('title','Danh sách sản phẩm'); ?>
<?php $__env->startSection('main-content'); ?>
<body>
    <div class="container">
        <div class="header">
            <span>Số lượng: <?php echo count($listPrd) ?></span>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Cate</th>
                    <th scope="col">Price</th>
                    <th scope="col">Short Desc</th>
                    <th scope="col">Detail</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listPrd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($row->name); ?></td>
                    <td><img src="<?php echo e($row->image); ?>" style="width:70px;height:100px" alt=""></td>
                    <td><?php echo e($row->category->cate_name); ?></td>
                    <td><?php echo e($row->price); ?></td>
                    <td><?php echo e($row->short_desc); ?></td>
                    <td><?php echo e($row->detail); ?></td>
                    <td>
                        <a href="edit-product?id=<?php echo e($row->id); ?>" type="button" class="btn btn-info">Sửa</a> <br>
                        <a href="delete-product?id=<?php echo e($row->id); ?>" type="button" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/list-product.blade.php ENDPATH**/ ?>