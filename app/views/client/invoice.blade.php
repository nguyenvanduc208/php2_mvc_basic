@extends('client.layouts.main');

@section('main-content')
    

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <h2>Đặt hàng thành công</h2>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #{{$invoice->id}}</p>
                            <p class="text-muted">Due to: {{$invoice->created_at}}</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1"><b>{{$invoice->customer_name}}</b></p>
                            <p>Acme Inc</p>
                            <p class="mb-1">{{$invoice->customer_phone_number}}</p>
                            <p class="mb-1">{{$invoice->customer_address}}</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                            <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">#</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Product</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detail as $row)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$row->product->name}}</td>
                                            <td>{{$row->quantity}}</td>
                                            <td>${{number_format($row->unit_price,0,",",".")}}</td>
                                            <td>${{number_format($row->unit_price * $row->quantity,0,",",".")}}</td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light">${{number_format($invoice->total_price,0,",",".")}}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h2 font-weight-light">0%</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Sub - Total amount</div>
                            <div class="h2 font-weight-light">${{number_format($invoice->total_price,0,",",".")}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div>

</div>



@endsection