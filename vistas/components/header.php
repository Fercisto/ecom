<!-- Header -->
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="login.html" class="flex-c-m trans-04 p-lr-25">Login</a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <nav class="limiter-menu-desktop container">
                
                <!-- Logo desktop -->		
                <a href="index.php" class="logo">
                    <img src="../assets/images/icons/logo-01.png" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <!-- class="active-menu" -->
                        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active-menu' : ''; ?>">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'product.php' ? 'active-menu' : ''; ?>">
                            <a href="product.php">Shop</a>
                        </li>
                        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active-menu' : ''; ?>">
                            <a href="about.php">About</a>
                        </li>
                        <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active-menu' : ''; ?>">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>	

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">

                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="2">
                        
                        <a  style="text-decoration: none; color: inherit;" href="shoping-cart.php"><i class="zmdi zmdi-shopping-cart"></i></a>
                    </div>

                </div>
            </nav>
        </div>	
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->		
        <div class="logo-mobile">
            <a href="index.html"><img src="../assets/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">

            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="2">         
                <a  style="text-decoration: none; color: inherit;" href="shoping-cart.php"><i class="zmdi zmdi-shopping-cart"></i></a>
            </div>

        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    Free shipping for standard order over $100
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">Help & FAQs</a>
                    <a href="#" class="flex-c-m p-lr-10 trans-04">My Account</a>
                    <a href="#" class="flex-c-m p-lr-10 trans-04">EN</a>
                    <a href="#" class="flex-c-m p-lr-10 trans-04">USD</a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <li>
                <a href="index.html">Home</a>
            </li>

            <li>
                <a href="product.html">Shop</a>
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
</header>