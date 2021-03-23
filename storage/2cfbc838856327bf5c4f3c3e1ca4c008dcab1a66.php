
<?php $__env->startSection('title','Danh sách đơn hàng'); ?>
<?php $__env->startSection('main-content'); ?>
<body>
    <div class="container">
        <div class="header">
            <span>Số lượng:</span>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Total Price</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                    <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                        <td><?php echo e($row->customer_name); ?></td>
                        <td><?php echo e($row->customer_phone_number); ?></td>
                        <td><?php echo e($row->customer_email); ?></td>
                        <td><?php echo e($row->customer_address); ?></td>
                        <td><?php echo e($row->total_price); ?></td>
                        <td>
                            <a href="<?php echo e(BASE_URL .'admin/invoice/detail/' .$row->id); ?>" type="button" class="btn btn-info">Chi tiết</a> 
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
           
                <tr><nav aria-label="Page navigation example">
                    <td colspan="6"><ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <?php for($i = 1; $i <= $totalPage; $i++): ?>
                            <li class="page-item"><a class="page-link" href="<?php echo e(BASE_URL ."admin/invoice?keyword=$keyword&page=$i"); ?>"><?php echo e($i); ?></a></li>
                        <?php endfor; ?>

                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul></td>
                    
                  </nav></tr>
                

        </table>
    </div>
</body>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/admin/invoice/all-invoice.blade.php ENDPATH**/ ?>