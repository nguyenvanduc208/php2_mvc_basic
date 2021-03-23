@extends('admin.layouts.main')
@section('title','Danh sách danh mục')
@section('main-content')


<body>
    <div class="container">
        <div class="header">
            <span>Số lượng:  {{ count($listCate) }}</span>
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
                @foreach($listCate as $row)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$row->cate_name}}</td>
                    <td>{{ count($row->products) }}</td>
                    <td>
                    {{$row->show_menu == 1 ? 'Có' : 'Không' }}
                    </td>
                    <td>{{$row->desc}}</td>
                    <td>
                        <a href="{{ BASE_URL .'admin/category/edit/' .$row->id }}" type="button" class="btn btn-info">Sửa</a> <br>
                        <a href="{{ BASE_URL .'admin/category/delete/' .$row->id }}" type="button" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

@endsection

