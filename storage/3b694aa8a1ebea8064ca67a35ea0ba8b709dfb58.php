
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
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Category Name</label>
                <input type="text" name="cate_name" value="<?php echo e($inforCate->cate_name); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter cate name">
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_name']) && !empty($err['err_name'])): ?> <?php echo e($err['err_name']); ?> <?php endif; ?></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Desc</label>
                <input type="text" name="desc" value="<?php echo e($inforCate->desc); ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter cate name">
                <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_desc']) && !empty($err['err_desc'])): ?> <?php echo e($err['err_desc']); ?> <?php endif; ?></small>
            </div>
            <div class="form-check">
                <input type="radio" name='show_menu' value="1"
                 <?php if($inforCate->show_menu == '1'): ?>
                    checked='checked'
                <?php endif; ?>
                
                 class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show menu</label>
            </div>
            <div class="form-check">
                <input type="radio" name='show_menu'
                <?php if($inforCate->show_menu == '0' || $inforCate->show_menu == ''): ?>
                    checked='checked'
                <?php endif; ?>
                 value="0" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Not Show Menu</label>
            </div>
            <small id="emailHelp" class="form-text text-muted"><?php if(isset($err['err_showmenu']) && !empty($err['err_showmenu'])): ?> <?php echo e($err['err_showmenu']); ?> <?php endif; ?></small>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/admin/cate/edit-category.blade.php ENDPATH**/ ?>