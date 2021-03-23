<?php
    namespace App\Controllers\Client;

    use App\Controllers\BaseController;
    use App\Models\Product;
    use App\Models\Category;
    use App\Models\Invoice;
    use App\Models\InvoiceDetail;
    use App\Models\Galleries;

class HomeController extends BaseController{
        public function index(){
            $listCate = Category::all();
            $trendingProducts = Product::orderBy('star', 'desc')
                                    ->orderBy('id', 'desc')->take(8)->get();
            $trendingProducts->load('category');
        
            $this->render('client.home',compact('trendingProducts','listCate'));
        }


        public function viewShop(){
            $tablistCate = Category::where('show_menu', 1)->get();
            $listPrd = Product::all(); 
            $listCate = Category::all();
            // $listPrd->load('category');
            $this->render('client.shop',compact('listPrd','listCate','tablistCate'));
        }

        public function addCart($id)
        {
            $cart = isset($_SESSION['cart'])?$_SESSION['cart']:[];
            $inforPrd = Product::find($id);          
            $inforPrd = $inforPrd->toArray();

            $check = -1;
            $i = 0;
            foreach($cart as $item){
                if($cart[$i]['id'] == $id){
                    $check = $i;
                    break;
                }
                $i++;
            }

            if($check == -1){
                $inforPrd['so-luong'] = 1;
                array_push($cart,$inforPrd);
            }else{
                $cart[$check]['so-luong']++;
            }

            $_SESSION['cart'] = $cart;

            header('Location: '.BASE_URL.'client/cart');
        }
    


        public function cart()
        {   
            if(!isset($_SESSION['err']) || empty($_SESSION['err'])){
                $err = [
                    'name' => '',
                    'err_name' => '',
                    'phone' => '',
                    'err_phone' => '',
                    'email' => '',
                    'err_email' => '',
                    'address' => '',
                    'err_address' => '',
                    'err_cart' => '',
                ];
            }else{
                $err = $_SESSION['err'];
            }

            $list = isset($_SESSION['cart'])?$_SESSION['cart']:[];
            $subTotal = 0;
            foreach($list as $item){
                $total = $item['price'] * $item['so-luong'];
                $subTotal += $total;
            }
            $this->render('client.cart',compact('list','subTotal','err'));
            unset($_SESSION['err']);
        }

        public function deleteCart()
        {
            unset($_SESSION['cart']);
            header('Location: '.BASE_URL.'client/cart');
        }

        public function cateProduct($id)
        {
            $tablistCate = Category::where('show_menu', 1)->get();
            $idCate = $id;
            $listPrd = Product::where('cate_id','=',"$id")->get();
            $listCate = Category::all();
            $cate = Category::find($id);
            // echo '<pre>';
            // var_dump($cate);die;

            $this->render('client.cate',compact('listPrd','tablistCate','cate','idCate'));
        }


        public function detailProduct($id)
        {
            $listImg = Galleries::where('product_id','=',"$id")->get();
            $inforPrd = Product::find($id);
            $inforPrd->load('category');
            $relate = Product::where('cate_id', '=' ,"$inforPrd->cate_id")->where('id', '<>', $id)
            ->orderBy('star', 'desc')
            ->take(8)
            ->get();;
            $this->render('client.detail',compact('listImg','inforPrd','relate'));
        }

        public function invoice($id)
        {
            $invoice = Invoice::find($id);
            $detail = InvoiceDetail::where('invoice_id','=',"$id")->get();
            $detail->load('product');
            // echo '<pre>';
            // var_dump($invoice);die;
            $this->render('client.invoice',compact('invoice','detail'));
            
         
        }
    }









































    // $cart = isset($_SESSION['cart'])?$_SESSION['cart']:[];
    //         $product = Product::find($id);
    //         $product->load('category');
    //         $product = $product->toArray();

    //         $check = -1;
            
    //         for($i = 0; $i < count($cart); $i++){
    //             if($cart[$i]['id'] == $id){
    //                 $check = $i;
    //                 break;
    //             }
    //         }
    //         if($check == -1){
    //             $product['quantity'] = 1;
    //             array_push($cart, $product);
    //         }else{
    //             $cart[$check]['quantity'] += 1;
    //         }
    
    //         $_SESSION['cart'] = $cart;
    
    //         header('location: ' . BASE_URL . 'client/cart');
    //         die;
?>