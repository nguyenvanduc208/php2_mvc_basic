@extends('admin.layouts.main')
@section('title','Danh sách sản phẩm')
@section('main-content')
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
                @foreach($listPrd as $row)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->name}}</td>
                    <td><img src="@if(substr($row->image,0,4) == 'http')
                                    {{ $row->image }}
                                @else
                                    {{ BASE_URL . $row->image }}
                                @endif" style="width:70px;height:100px" alt=""></td>
                    <td>{{$row->category->cate_name}}</td>
                    <td>{{$row->price}}</td>
                    <td>{{$row->short_desc}}</td>
                    <td>{{$row->detail}}</td>
                    <td>
                        <a href="{{ BASE_URL .'admin/product/edit/' .$row->id }}" type="button" class="btn btn-info">Sửa</a> <br>
                        <a href="{{ BASE_URL .'admin/product/delete/' .$row->id }}" type="button" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

@endsection

