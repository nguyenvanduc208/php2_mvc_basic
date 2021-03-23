@extends('admin.layouts.main');



@section('main-content')
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
        <div class="header">
            <h2>Edit Product</h2>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="disabledSelect">Category</label>
                <select id="disabledSelect" name="cate_id" class="form-control">
                        <option value="">Chose Category</option>
                        <?php  foreach($listCate as $row): ?>
                            <option <?php $sl = $row->id==$product->cate_id?'selected="selected"':'' ; echo $sl?> value="<?= $row->id ?>"><?= $row->cate_name ?></option>
                        <?php endforeach ?>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_cate']) && !empty($err['err_cate'])) {{$err['err_cate']}} @endif</small>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Name</label>
                <input type="text" id="disabledTextInput" value="<?php echo $product->name ?>" class="form-control" name="name">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_name']) && !empty($err['err_name'])) {{$err['err_name']}} @endif</small>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Price</label>
                <input type="text" id="disabledTextInput" value="<?php echo $product->price ?>" class="form-control" name="price">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_price']) && !empty($err['err_price'])) {{$err['err_price']}} @endif</small>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Short Desc</label>
                <input type="text" id="disabledTextInput" value="<?php echo $product->short_desc ?>" class="form-control" name="short_desc">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_short']) && !empty($err['err_short'])) {{$err['err_short']}} @endif</small>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Detail</label>
                <input type="text" id="disabledTextInput" value="<?php echo $product->detail ?>" class="form-control" name="detail">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_detail']) && !empty($err['err_detail'])) {{$err['err_detail']}} @endif</small>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Image</label>
                <input type="file" id="disabledTextInput" class="form-control" name="image">
            </div>
            <button type="submit" name="editSubmit" class="btn btn-primary">Edit Product</button>
        </form>
    </div>
</body>
@endsection
