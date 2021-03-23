@extends('admin.layouts.main')
@section('title','Danh sách đơn hàng')
@section('main-content')
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
                    @foreach($invoices as $row)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$row->customer_name}}</td>
                        <td>{{$row->customer_phone_number}}</td>
                        <td>{{$row->customer_email}}</td>
                        <td>{{$row->customer_address}}</td>
                        <td>{{$row->total_price}}</td>
                        <td>
                            <a href="{{ BASE_URL .'admin/invoice/detail/' .$row->id }}" type="button" class="btn btn-info">Chi tiết</a> 
                        </td>
                    </tr>
                    @endforeach
            </tbody>
           
                <tr><nav aria-label="Page navigation example">
                    <td colspan="6"><ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        @for ($i = 1; $i <= $totalPage; $i++)
                            <li class="page-item"><a class="page-link" href="{{ BASE_URL ."admin/invoice?keyword=$keyword&page=$i"}}">{{$i}}</a></li>
                        @endfor

                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul></td>
                    
                  </nav></tr>
                

        </table>
    </div>
</body>

@endsection

