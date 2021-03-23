@extends('admin.layouts.main')
@section('title','Chi tiết đơn hàng')
@section('main-content')
<body>
    <div class="container">
        <div class="header">
            <span>Số lượng:</span>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr >
                    <th>Mã đơn hàng</th>
                    <th colspan ="6">{{$invoice->id}}</th>
                </tr>
                <tr >
                    <th>Fullname</th>
                    <th colspan ="6">{{$invoice->customer_name}}</th>
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
                    @foreach ($detail as $row)
                    <tr>
                            <td>{{$row->product_id}}</td>
                            <td>{{$row->product->name}}</td>
                            <td><img src="@if(substr($row->product->image,0,4) == 'http')
                                {{ $row->product->image }}
                            @else
                                {{ BASE_URL . $row->product->image }}
                            @endif" style="width:70px;height:100px" alt=""></td>
                            <td>{{$row->quantity}}</td>
                            <td>{{$row->unit_price}}</td>
                            <td>{{$row->unit_price * $row->quantity}}</td>
                    </tr>
                    @endforeach
            </tbody>

                

        </table>
    </div>
</body>

@endsection

