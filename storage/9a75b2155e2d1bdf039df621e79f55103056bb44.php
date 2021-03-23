
<?php $__env->startSection('title','Danh sách danh mục'); ?>
<?php $__env->startSection('main-content'); ?>


<body>
    <div class="container">
        <div class="header">
            <span>Số lượng:  <?php echo e(count($listCate)); ?></span>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Show Menu</th>
                    <th scope="col">Desc</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($loop->iteration); ?></th>
                    <td><?php echo e($row->cate_name); ?></td>
                    <td><?php echo e(count($row->products)); ?></td>
                    <td>
                    <?php echo e($row->show_menu == 1 ? 'Có' : 'Không'); ?>

                    </td>
                    <td><?php echo e($row->desc); ?></td>
                    <td>
                        <a href="<?php echo e(BASE_URL .'admin/category/edit/' .$row->id); ?>" type="button" class="btn btn-info">Sửa</a> <br>
                        <a href="<?php echo e(BASE_URL .'admin/category/delete/' .$row->id); ?>" type="button" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/admin/cate/list-category.blade.php ENDPATH**/ ?>