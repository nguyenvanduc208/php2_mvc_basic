<?php
    namespace App\Controllers;
    use App\Models\Invoice;
    use App\Models\InvoiceDetail;

class InvoiceController extends BaseController{

        public function all()
        {   
            $pagenumber = isset($_GET['page']) == true ? $_GET['page'] : 1;
            $pagesize =10;
            $offset = ($pagenumber-1)*$pagesize;

        $keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
        if($keyword != ""){
            $invoices = Invoice::where("customer_name", "like", "%$keyword%")
                        ->take($pagesize)
                        ->skip($offset)
                        ->get();
            $totalPage = intval(ceil(Invoice::where("customer_name", "like", "%$keyword%")->count()/$pagesize));
        }else{
            $invoices = Invoice::take($pagesize)
                            ->skip($offset)
                            ->get();
            $totalPage = intval(ceil(Invoice::count()/$pagesize));
        }
        
        
        $this->render('admin.invoice.all-invoice', compact('invoices','totalPage','keyword','pagenumber'));

        }



        public function save()
        {   
            $data = $_POST;
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
            $id =mt_rand(1000,9999);
            $check = 0 ; 
            $listInvoice = Invoice::all(); 
            foreach($listInvoice as $item){
                if($item->id == $id){
                    $check++;
                    break;
                }
            }
            if($check == 0){
                $data['id'] = $id;
            }else{
                $data['id'] = mt_rand(1000,9999);
            }
            $subTotal = 0;
            foreach($cart as $item){
                $total = $item['price'] * $item['so-luong'];
                $subTotal += $total;
            }
            $data['total_price'] = $subTotal;
            $data['payment_method'] = 2;


            //Validate
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
            $checkErr = 0;
            if(empty($data['customer_name'])){
                $err['err_name'] = 'Tên không để trống !';
                $checkErr++;
            }
            if(empty($data['customer_phone_number'])){
                $err['err_phone'] = 'Số điện thoại không để trống';
                $checkErr++;
            }
            if(empty($data['customer_email']) ){
                $err['err_email'] = 'Email không để trống';
                $checkErr++;
            }
            if(empty($data['customer_address']) ){
                $err['err_address'] = 'Địa chỉ không để trống';
                $checkErr++;
            }

            if(empty($cart)){
                $err['err_cart'] = 'Giỏ hàng đang trống';
                $checkErr++; ;
            }
            
            
            if($checkErr == 0 ){
                $model = new Invoice;
                $model->fill($data);
                $model->save();

                foreach($cart as $item){
                    $data_detai['invoice_id'] = $id;
                    $data_detai['product_id'] = $item['id'];
                    $data_detai['quantity'] = $item['so-luong'];
                    $data_detai['unit_price'] = $item['price'];

                    $model = new InvoiceDetail;
                    $model->fill($data_detai);
                    $model->save();
                }
                unset($_SESSION['cart']);
                unset($_SESSION['err']);
                header('Location: '. BASE_URL . '/client/invoice/'.$id);
            }else{
                $err['name'] = $data['customer_name'];
                $err['phone'] = $data['customer_phone_number'];
                $err['email'] = $data['customer_email'];
                $err['address'] = $data['customer_address'];
                $_SESSION['err'] = $err;
                header('Location: '. BASE_URL . '/client/cart');
            }
            
            
            
        }

        public function invoiceDetail($id)
        {
            $invoice = Invoice::find($id);
            $detail = InvoiceDetail::where('invoice_id','=',"$id")->get();
            $detail->load('product');
            // echo '<pre>';
            // var_dump($detail);die;
            $this->render('admin/invoice/detail',compact('invoice','detail'));
            
         
        }
    }



?>