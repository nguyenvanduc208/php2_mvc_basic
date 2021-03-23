
<?php $__env->startSection('title','Thêm sản phẩm'); ?>
<?php $__env->startSection('main-content'); ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
    * {
        margin: 0;
        padding: 0;
    }
    
    .container {
        width: 90%;
        margin: 20px 5%;
        background-color: antiquewhite;
    }
    
    .header {
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <form action="save-product" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="disabledSelect">Category</label>
                <select id="disabledSelect" name="cate_id" class="form-control">
                        <option value="">Chose Category</option>
                        <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>"><?php echo e($row->cate_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Name Category</label>
                <input type="text" id="disabledTextInput" class="form-control" name="cate_name">
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Show Menu</label>
                <input type="radio" id="disabledTextInput" class="form-control" name="show_menu">Có
                <input type="radio" id="disabledTextInput" class="form-control" name="show_menu">Không

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Desc</label>
                <input type="text" id="disabledTextInput" class="form-control" name="desc">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/cate/add-category.blade.php ENDPATH**/ ?>