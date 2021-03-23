@extends('client.layouts.main')

@section('main-content')


<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <a href="{{BASE_URL.'client/shop'}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter=".women">
                    All Products
                </a>
                @foreach ($tablistCate as $item)
                    
                    <a href="{{BASE_URL.'client/cate/'.$item->id}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 " data-filter="*">
                        {{$item->cate_name}}
                    </a>
                @endforeach

            </div>
            <div class="flex-w flex-c-m m-tb-10">
                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i> Search
                </div>
            </div>

            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                </div>
            </div>

        </div>
        <div class="row isotope-grid">
            @foreach($listPrd as $row)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="
                        
                        @if(substr($row->image,0,4) == 'http')
                        {{ $row->image }}
                        @else
                            {{ BASE_URL . $row->image }}
                        @endif    
                
                        " width="360px" height="260px" alt="IMG-PRODUCT">
                        <a href="{{ BASE_URL .'/client/cart/add/' . $row->id }}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                            Add To Cart
                        </a>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{ BASE_URL . 'client/detail/' . $row->id }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$row->name}}
                            </a>
                            <span class="stext-105 cl3">
                                ${{number_format($row->price,0,",",".")}}
                            </span>
                        </div>
                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="{{THEME_URL}}images/icons/icon-heart-01.png" alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{THEME_URL}}images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
</div>
@endsection