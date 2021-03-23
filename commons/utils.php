<?php
    const BASE_URL = 'http://localhost/WEB3013/Assignment/';
    const PUBLIC_URL = BASE_URL . 'public/';
    const THEME_URL = PUBLIC_URL . 'theme/';
    const MEMBER_ROLE = 1;
    const ADMIN_ROLE = 200;
    function chechAuth($role = MEMBER_ROLE){
        if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
            header('location:'. BASE_URL .'login');die;
        }
    }



?>