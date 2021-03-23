<?php
    namespace App\Controllers;
    use App\Models\Product;
    use App\Models\Category;
    class ProductController extends BaseController{


        public function all(){
            // take-skip phân trang
            $key = isset($_GET['keyword'])? $_GET['keyword'] : '';
            if(!empty($key)){
                $listPrd = Product::where('name','like',"%$key%")->get();
            }
            else{
                $listPrd = Product::all();               
            }
            $listPrd->load('category');
            $this->render('admin.product.list-product',compact('listPrd'));
        }

        public function add(){
            if(!isset($_SESSION['err']) || empty($_SESSION['err'])){
                $err = [];
            }else{
                $err = $_SESSION['err'];
            }
            $listCate = Category::all();
            $this->render('admin.product.add-product',compact('listCate','err'));
            unset($_SESSION['err']);

            //-------------------
        }


        public function saveNew(){
            $data = $_POST;
            //Xử lý ảnh
            $file = $_FILES['image'];
            $image = '';
            if($file['size']>0){
                $image = 'uploads/' . uniqid() . '-' . $file['name'];
                move_uploaded_file($file['tmp_name'],$image);
                $data['image'] = $image;
            }
            //Validate

            $err = [];
            //check trùng
            $checkErr = 0;

            if(Product::where('name',$data['name'])->count() > 0){
                $err['err_name'] = 'Tên sản phẩm đã tồn tại!';
                $checkErr++;
            }
            if(empty($data['name'])){
                $err['err_name'] = 'Tên sản phẩm không để trống';
                $checkErr++;
            }
            if(empty($data['cate_id'])){
                $err['err_cate'] = 'Chọn danh mục';
                $checkErr++;
            }
            if(empty($data['price'])){
                $err['err_price'] = 'Giá sản phẩm không để trống !';
                $checkErr++;
            }
            if($data['price'] < 0 || !is_numeric($data['price'])){
                $err['err_price'] = 'Giá sản phẩm không hợp lệ!';
                $checkErr++;
            }
            if(empty($data['short_desc']) ){
                $err['err_short'] = 'Short Desc không để trống !';
                $checkErr++;
            }

            if(empty($data['detail']) ){
                $err['err_detail'] = 'Chi tiết không để trống !';
                $checkErr++;
            }
            if(empty($data['image']) ){
                $err['err_img'] = 'Chọn ảnh sản phẩm !';
                $checkErr++;
            }

            if($checkErr == 0 ){
                $model = new Product;
                $model->fill($data);
                $model->save($data);
                unset($_SESSION['err']);
                header('Location: '. BASE_URL . '/admin/product');
            }else{
                $err['cate'] = trim($data['cate_id']);
                $err['name'] = trim($data['name']);
                $err['price'] = trim($data['price']);
                $err['short_desc'] = trim($data['short_desc']);
                $err['detail'] = trim($data['detail']);
                $_SESSION['err'] = $err;
                header('Location: '. BASE_URL . '/admin/product/add');
            }

        }

        public function delete($id){
            if(!isset($_SESSION['auth'])){
                die();
            }
            Product::destroy($id);
            header('Location: '. BASE_URL . '/admin/product');
        }


        public function edit($id){
            if(!isset($_SESSION['err']) || empty($_SESSION['err'])){
                $err = [];
            }else{
                $err = $_SESSION['err'];
            }
            $listCate = Category::all();
            $product = Product::find($id);
            $this->render('admin.product.edit-product',compact('listCate','product','err'));
            unset($_SESSION['err']);
        }

        public function saveEdit($id){
            
            $model = Product::find($id);
            $data = $_POST;
            //Xử lý ảnh
            $file = $_FILES['image'];
            if($file['size']>0){
                $image = 'uploads/' . uniqid() . '-' . $file['name'];
                move_uploaded_file($file['tmp_name'],$image);
                $data['image'] = $image;
            }
            if(!isset($data['image']) || empty($data['image'])){
                $data['image'] = $model->image;
            }
            //Validate

            
            $err = [];
            //check trùng
            $checkErr = 0;

            if(Product::where('name',$data['name'])->where('id','<>',$id)->count() > 0){
                $err['err_name'] = 'Tên sản phẩm đã tồn tại!';
                $checkErr++;
            }
            if(empty($data['name'])){
                $err['err_name'] = 'Tên sản phẩm không để trống';
                $checkErr++;
            }
            if(empty($data['cate_id'])){
                $err['err_cate'] = 'Chọn danh mục';
                $checkErr++;
            }
            if(empty($data['price'])){
                $err['err_price'] = 'Giá sản phẩm không để trống !';
                $checkErr++;
            }
            if($data['price'] < 0 || !is_numeric($data['price'])){
                $err['err_price'] = 'Giá sản phẩm không hợp lệ!';
                $checkErr++;
            }
            if(empty($data['short_desc']) ){
                $err['err_short'] = 'Short Desc không để trống !';
                $checkErr++;
            }

            if(empty($data['detail']) ){
                $err['err_detail'] = 'Chi tiết không để trống !';
                $checkErr++;
            }

            if($checkErr == 0 ){
                $model->fill($data);
                $model->save();
                unset($_SESSION['err']);
                header('Location: '. BASE_URL . '/admin/product');
            }else{
                $_SESSION['err'] = $err;
                header('Location: '. BASE_URL . '/admin/product/edit/'.$id);
            }




        }

        public function cateProduct(){
            $cateId = $_GET['id'];
            $listPrd = Product::where('cate_id', '=' ,"$cateId")->get();
            $listCate = Category::all();
            $this->render('client.products.home',compact('listPrd','listCate'));
        }

    }
?>