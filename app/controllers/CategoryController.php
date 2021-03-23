<?php
    namespace App\Controllers;
    use App\Models\Category;
    use App\Models\Product;

    class CategoryController extends BaseController{
        public function all(){
            $key = isset($_GET['keyword'])? $_GET['keyword'] : '';
            if(!empty($key)){
                $listCate = Category::where('cate_name','like',"%$key%")->get();
            }
            else{
                $listCate = Category::all();               
            }
            $listCate->load('products'); // Làm nhanh khả năng truy vấn
            $this->render('admin.cate.list-category',compact('listCate'));
        }


        public function add(){
            if(!isset($_SESSION['err']) || empty($_SESSION['err'])){
                $err = [];
            }else{
                $err = $_SESSION['err'];
            }
            $this->render('admin.cate.add-category',compact('err'));
            unset($_SESSION['err']);
        }

        public function saveNew(){
            $data = $_POST;
            $err = [];
            //check trùng
            $checkErr = 0;

            if(Category::where('cate_name',$data['cate_name'])->count() > 0){
                $err['err_name'] = 'Tên danh mục đã tồn tại!';
                $checkErr++;
            }
            if(empty($data['cate_name'])){
                $err['err_name'] = 'Tên không để trống !';
                $checkErr++;
            }
            if(empty($data['desc'])){
                $err['err_desc'] = 'Desc không để trống';
                $checkErr++;
            }
            if(!isset($data['show_menu']) ){
                $err['err_showmenu'] = 'Chọn show menu';
                $checkErr++;
            }
            

            if($checkErr == 0){
                $model = new Category();
                $model->fill($data);
                $model->save($data);

                //
                unset($_SESSION['err']);
                 
                header('Location: '. BASE_URL . '/admin/category');

                
            }else{
                $err['desc'] = trim($data['desc']);
                $err['name'] = trim($data['cate_name']);
                $err['show_menu'] = $data['show_menu'];
                $_SESSION['err'] = $err;
                header('Location: '. BASE_URL . '/admin/category/add');
            }


        }

        public function edit($id){
            if(!isset($_SESSION['err']) || empty($_SESSION['err'])){
                $err = [];
            }else{
                $err = $_SESSION['err'];
            }
            $inforCate = Category::find($id);
            $this->render('admin.cate.edit-category',compact('inforCate','err'));
            unset($_SESSION['err']);
        }

        public function saveEdit($id){
            $data = $_POST;
            unset($_SESSION['err']);
            $err = [];
            //check trùng

            $checkErr = 0;
            if(Category::where('cate_name',$data['cate_name'])->where('id','<>',$id)->count() > 0){
                $err['err_name'] = 'Tên đã trùng với tên danh mục khác';
                $checkErr++;
            }
            if(empty($data['cate_name'])){
                $err['err_name'] = 'Tên không để trống';
                $checkErr++;
            }
            if(empty($data['desc'])){
                $err['err_desc'] = 'Desc không để trống';
                $checkErr++;
            }
            if(!isset($data['show_menu']) ){
                $err['err_showmenu'] = 'Chọn show menu';
                $checkErr++;
            }
            if($checkErr == 0){
                $model = Category::find($id);
                $model->fill($data);
                $model->save();
                unset($_SESSION['err']);
                header('Location: '. BASE_URL . '/admin/category');

                
            }else{
                $_SESSION['err'] = $err;
                header('Location: '. BASE_URL . '/admin/category/edit/'.$id);
            }

        }

        public function delete($id){
            $model = Category::find($id);
            Product::where('cate_id', $id)->delete();
            $model->delete();
            category::destroy($id);
            header('Location: '. BASE_URL . '/admin/category');
        }
    }




?>