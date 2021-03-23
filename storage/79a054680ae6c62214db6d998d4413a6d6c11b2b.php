
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
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="disabledSelect">Category</label>
                <select id="disabledSelect" name="cate_id" class="form-control">
                        <option value="">Chose Category</option>
                        <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option <?php if($err['cate'] == $row->id): ?>
                                selected='selected'
                            <?php endif; ?> value="<?php echo e($row->id); ?>"><?php echo e($row->cate_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_cate']) && !empty($err['err_cate'])): ?> <?php echo e($err['err_cate']); ?> <?php endif; ?></small>

                    
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Name</label>
                <input type="text" id="disabledTextInput" value="<?php if(isset($err['name']) && !empty($err['name'])): ?> <?php echo e($err['name']); ?> <?php endif; ?>" class="form-control" name="name">
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_name']) && !empty($err['err_name'])): ?> <?php echo e($err['err_name']); ?> <?php endif; ?></small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Price</label>
                <input type="text" id="disabledTextInput" class="form-control" value="<?php if(isset($err['price']) && !empty($err['price'])): ?> <?php echo e($err['price']); ?> <?php endif; ?>" name="price">
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_price']) && !empty($err['err_price'])): ?> <?php echo e($err['err_price']); ?> <?php endif; ?></small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Short Desc</label>
                <input type="text" id="disabledTextInput" class="form-control" value="<?php if(isset($err['short_desc']) && !empty($err['short_desc'])): ?> <?php echo e($err['short_desc']); ?> <?php endif; ?>" name="short_desc">
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_short']) && !empty($err['err_short'])): ?> <?php echo e($err['err_short']); ?> <?php endif; ?></small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Detail</label>
                <input type="text" id="disabledTextInput" class="form-control" value="<?php if(isset($err['detail']) && !empty($err['detail'])): ?> <?php echo e($err['detail']); ?> <?php endif; ?>" name="detail">
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_detail']) && !empty($err['err_detail'])): ?> <?php echo e($err['err_detail']); ?> <?php endif; ?></small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Image</label>
                <input type="file" id="disabledTextInput" class="form-control" name="image">
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_img']) && !empty($err['err_img'])): ?> <?php echo e($err['err_img']); ?> <?php endif; ?></small>

            </div>
            
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/admin/product/add-product.blade.php ENDPATH**/ ?>