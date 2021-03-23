@extends('admin.layouts.main')
@section('title','Thêm sản phẩm')
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
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="disabledSelect">Category</label>
                <select id="disabledSelect" name="cate_id" class="form-control">
                        <option value="">Chose Category</option>
                        @foreach($listCate as $row)
                            <option @if ($err['cate'] == $row->id)
                                selected='selected'
                            @endif value="{{$row->id }}">{{$row->cate_name }}</option>
                        @endforeach
                </select>
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_cate']) && !empty($err['err_cate'])) {{$err['err_cate']}} @endif</small>

                    
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Name</label>
                <input type="text" id="disabledTextInput" value="@if(isset($err['name']) && !empty($err['name'])) {{$err['name']}} @endif" class="form-control" name="name">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_name']) && !empty($err['err_name'])) {{$err['err_name']}} @endif</small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Price</label>
                <input type="text" id="disabledTextInput" class="form-control" value="@if(isset($err['price']) && !empty($err['price'])) {{$err['price']}} @endif" name="price">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_price']) && !empty($err['err_price'])) {{$err['err_price']}} @endif</small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Short Desc</label>
                <input type="text" id="disabledTextInput" class="form-control" value="@if(isset($err['short_desc']) && !empty($err['short_desc'])) {{$err['short_desc']}} @endif" name="short_desc">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_short']) && !empty($err['err_short'])) {{$err['err_short']}} @endif</small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Detail</label>
                <input type="text" id="disabledTextInput" class="form-control" value="@if(isset($err['detail']) && !empty($err['detail'])) {{$err['detail']}} @endif" name="detail">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_detail']) && !empty($err['err_detail'])) {{$err['err_detail']}} @endif</small>

            </div>
            <div class="form-group">
                <label for="disabledTextInput">Image</label>
                <input type="file" id="disabledTextInput" class="form-control" name="image">
                <small id="emailHelp" class="form-text text-muted">@if(isset($err['err_img']) && !empty($err['err_img'])) {{$err['err_img']}} @endif</small>

            </div>
            
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
@endsection
