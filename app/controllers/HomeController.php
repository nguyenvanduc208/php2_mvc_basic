<?php
    namespace App\Controllers;
    use App\Models\User;


    class HomeController extends BaseController{
        public function login(){
            if(isset($_SESSION['auth'])){
                die();
            }
            $this->render('login');
            if(isset($_POST['btn'])){
                $dataLogin = $_POST;
                $user = User::where('email','=',$dataLogin['email'])->first();
                if(password_verify($dataLogin['password'],$user->password)){
                    $_SESSION['auth'] = [
                        'name' => $user->name,
                        'email' => $user->email,
                        'role' => $user->role,
                        'avt' => $user->avatar
                    ];
                    header('Location:'. BASE_URL);
                }else{
                    echo '<p style="color:red">Sai tên đăng nhập hoặc mật khẩu</p>';
                }
            }

        }

        public function logout(){
            unset($_SESSION['auth']);
            header('Location:'.BASE_URL);
        }

    }


?>