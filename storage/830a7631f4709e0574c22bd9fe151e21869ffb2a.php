    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo e(THEME_URL); ?>/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li><a href="shop.html">Sản phẩm</a></li>
                                    <li class=""><a href="#">Danh mục</a>
                                        <?php echo $__env->yieldContent('menu-category'); ?>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="bi bi-search"></span>
                                    </div>
                                </li>
                                <li> <a href="<?php echo e(BASE_URL . 'login'); ?>"><span class="bi bi-person"></span></a></li>
                                <li><a href="cart.html"><span class="bi bi-bag"></span></a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/home/layouts/header.blade.php ENDPATH**/ ?>