<?php
    use App\Controllers\CategoryController;
    use App\Controllers\HomeController;
    use App\Controllers\ProductController;
    use App\Controllers\Client\HomeController as ClientHomeController;
    use App\Controllers\InvoiceController;
    use Phroute\Phroute\RouteCollector;
    use Phroute\Phroute\Dispatcher;
    use Phroute\Phroute\Exception\HttpRouteNotFoundException;

$router = new RouteCollector();

    # định nghĩa filter
    $router->filter('auth', function(){    
        if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
            header('location: ' . BASE_URL . 'login');
            die;
        }
    });
    # kết thúc định nghĩa filter

    //Home
    $router->get('/', [ClientHomeController::class, "index"]);

     //Group Client
    $router->group(['prefix' => 'client'],function($router){
        $router->get('/', [ClientHomeController::class, "index"]);
        $router->get('/shop', [ClientHomeController::class, "viewShop"]);
        
        //Group cart
        $router->group(['prefix' => 'cart'],function($router){
            $router->any('/', [ClientHomeController::class, "cart"]);
            $router->get('/add/{id}', [ClientHomeController::class, "addCart"]);
            $router->get('/delete', [ClientHomeController::class, "deleteCart"]);
            $router->post('/add-customer', [InvoiceController::class, "save"]);



        });

        $router->get('/cate/{id}', [ClientHomeController::class, "cateProduct"]);
        $router->get('/detail/{id}', [ClientHomeController::class, "detailProduct"]);
        $router->get('/invoice/{id}', [ClientHomeController::class, "invoice"]);

    });



    //Group admin
    $router->group(['prefix' => 'admin','before' => 'auth'],function($router){
        $router->get('/', [ProductController::class, "all"]);


        //Group product
        $router->group(['prefix' => 'product'],function($router){
            $router->get('/', [ProductController::class, "all"]);
            $router->get('/add', [ProductController::class, "add"]);
            $router->post('/add', [ProductController::class, "saveNew"]);
            $router->get('/delete/{id}', [ProductController::class, "delete"]);
            $router->get('/edit/{id}', [ProductController::class, "edit"]);
            $router->post('/edit/{id}', [ProductController::class, "saveEdit"]);

        });



        //Group category
        $router->group(['prefix' => 'category'],function($router){
            $router->get('/', [CategoryController::class, "all"]);
            $router->get('/add', [CategoryController::class, "add"]);
            $router->post('/add', [CategoryController::class, "saveNew"]);
            $router->get('/edit/{id}', [CategoryController::class, "edit"]);
            $router->post('/edit/{id}', [CategoryController::class, "saveEdit"]);
            $router->get('/delete/{id}', [CategoryController::class, "delete"]);

        });



        //Group invoice
        $router->group(['prefix' => 'invoice'],function($router){
            $router->get('/', [InvoiceController::class, "all"]);
            $router->get('/detail/{id}', [InvoiceController::class, "invoiceDetail"]);

        });
    });


    //Login - logout
    $router->any('/login', [HomeController::class, "login"]);
    $router->any('/logout', [HomeController::class, "logout"]);


    //Not found
    $router->get('/error-404', function(){
        return "Đường dẫn không tồn tại";
    });


    
    // Route có áp dụng filter auth được định nghĩa ở phía trên

    // tham số tùy chọn: {name}?
    // tham số bắt buộc: {id}
    # Authenticate

    # End Authenticate


    //Bắt lỗi không tồn tại đường dẫn
    $dispatcher = new Dispatcher($router->getData());
    try{
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    }catch(HttpRouteNotFoundException $ex){
    header('location: ' . BASE_URL . 'error-404');
    die;
}
        
    // Print out the value returned from the dispatched function
    echo $response;

?>