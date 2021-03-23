<header class="header-v4">

    <div class="container-menu-desktop">

        <div class="wrap-menu-desktop how-shadow1">
            <nav class="limiter-menu-desktop container">

                <a href="#" class="logo">
                    <img src="<?php echo e(THEME_URL); ?>images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="<?php echo e(BASE_URL); ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo e(BASE_URL . 'client/shop'); ?>">Shop</a>
                        </li>
                        <li>
                            <a href="<?php echo e(BASE_URL); ?>">Blog</a>
                        </li>
                        <li>
                            <a href="<?php echo e(BASE_URL); ?>">About</a>
                        </li>
                        <li>
                            <a href="<?php echo e(BASE_URL); ?>">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>
                    <a href="<?php echo e(BASE_URL . 'client/cart'); ?>"><div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo e(isset($_SESSION['cart'])?count($_SESSION['cart']):0); ?>">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div></a>
                    <?php if(isset($_SESSION['auth']) || !empty($_SESSION['auth'])): ?>
                        <a href="<?php echo e(BASE_URL . 'admin'); ?>">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 t" data-notify="2">
                                <i class="zmdi zmdi-account-o"><?php echo e($_SESSION['auth']['name']); ?></i>
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(BASE_URL . '/login'); ?>">
                            <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 t" data-notify="2">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>

    <div class="wrap-header-mobile">

        <div class="logo-mobile">
            <a href="index-2.html"><img src="<?php echo e(THEME_URL); ?>images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                <i class="zmdi zmdi-shopping-cart"></i>
            </div>
            <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                <i class="zmdi zmdi-favorite-outline"></i>
            </a>
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>
            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help & FAQs
                    </a>
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        My Account
                    </a>
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        EN
                    </a>
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        USD
                    </a>
                </div>
            </li>
        </ul>
        <ul class="main-menu-m">
            <li>
                <a href="index-2.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="index-2.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </span>
            </li>
            <li>
                <a href="product.html">Shop</a>
            </li>
            <li>
                <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
            </li>
            <li>
                <a href="blog.html">Blog</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>

    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="<?php echo e(THEME_URL); ?>images/icons/icon-close2.png" alt="CLOSE">
            </button>
            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header><?php /**PATH C:\xampp\htdocs\WEB3013\Assignment\app\views/client/layouts/header.blade.php ENDPATH**/ ?>