<?php
    ob_start();
    session_start();

    $url = isset($_GET['url'])?$_GET['url']:"";

    require_once 'commons/utils.php';
    require_once 'vendor/autoload.php';
    require_once 'config/database.php';

    // use App\Controllers\ProductController;
    // use App\Controllers\CategoryController;
    // use App\Controllers\HomeController;
    // use App\Models\Category;
    // use App\Models\Product;
    // use App\Models\User;



    require_once 'commons/router.php';

// switch($url){
//         case '':
//             // chechAuth();
//             $ctr = new ProductController;
//             $ctr->homeAll();
//             break;


//         case 'product':
//             chechAuth();
//             $ctr = new ProductController;
//             $ctr->all();
//             break;

//         case 'add-product':
//             chechAuth();
//             $ctr = new ProductController;
//             $ctr->add();
//             break;

//         case 'save-product':
//             chechAuth();
//             $ctr = new ProductController;
//             $ctr->saveNew();
//             break;

//         case 'delete-product':
//             chechAuth();
//             $ctr = new ProductController;
//             $ctr->delete();
//             break;

//         case 'edit-product':
//             chechAuth();
//             $ctr = new ProductController;
//             $ctr->edit();
//             break;
        
//         case 'save-edit-product':
//             chechAuth();
//             $ctr = new ProductController;
//             $ctr->saveEdit();
//             break;


//         //------Category

//         case 'category':
//             chechAuth();
//             $ctr = new CategoryController();
//             $ctr->all();
//             break;

//         case 'add-category':
//             chechAuth();
//             $ctr = new CategoryController();
//             $ctr->add();
//             break;

//         case 'login':
//             $ctr = new HomeController;
//             $ctr->login();
//             break;

//         case 'logout':
//             $ctr = new HomeController;
//             $ctr->logout();
//             break;

//         case 'danhMuc':
//             $ctr = new ProductController();
//             $ctr->cateProduct();
//             break;
            

            

    //}

    




?>