<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>First Aid Nepal | Ideas for Safety</title>

    <!-- Bootstrap cdn CSS -->
    <link href="app/css/bootstrap.min.css" rel="stylesheet">

    <!-- line-awesome -->
    <link rel="stylesheet" href="app/css/line-awesome.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-9/css/all.css"
        integrity="sha512-h7GJ1/B7ne4IeavUbcBsiAfjGg0HOg0jbLn0q3nm3iCZwDJSuRrW3xqsri7KMR2wEKOOQlf6zKCoS9jk0AtFPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- fancy-box -->
    <link rel="stylesheet" href="app/css/jquery.fancybox.min.css">

    <!-- owl-slider -->
    <link rel="stylesheet" type="text/css" href="app/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="app/css/owl.theme.default.min.css" />

    <!-- css-link -->
    <link rel="stylesheet" href="app/css/main.css">
    <link rel="stylesheet" href="app/css/xzoom.css">

</head>

<body>
    <!-- header -->
    <header id="header">
        <nav class="navbar header__menu navbar-expand-lg navbar-dark ">
            <div class="container">
                <div class="header__logo">
                    <a href="index.php">
                        <img src="img/logo/logo.png" alt="">
                    </a>
                </div>

                <div class="header__right mobile-view">
                    <ul>
                        <li class="heart header-icon">
                            <a href="login.php">
                                <i class="lar la-heart"></i>
                                <span>0</span>
                            </a>
                        </li>
                        <li class="cart header-icon">
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="las la-shopping-cart"></i>
                                <span>3</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="index.php"> Home </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php"> About us </a>
                        </li>
                        <li class="nav-item">
                            <a href="product-list.php"> products </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php"> Contact </a>
                        </li>
                    </ul>
                </div>

                <div class="offcanvas mobile-sidebar d-lg-none offcanvas-start w-75" tabindex="-1" id="offcanvas"
                    data-bs-keyboard="false" data-bs-backdrop="false">
                    <div class="offcanvas-header">
                        <img src="img/logo/logo.png" alt="">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <nav class="sidebar">
                            <div class="sidebar__block">
                                <div class="sidebar-head">
                                    <h4>Overview</h4>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item active">
                                        <a data-bs-toggle="collapse" href="#mobile-dropdown-1" role="button"
                                            aria-expanded="false" aria-controls="mobile-dropdown-1"> Network
                                            cameras <span>(16)</span> </a>
                                        <ul class="collapse" id="mobile-dropdown-1">
                                            <li class="dropdown-title"><a href="product-list.php">Clothing</a>
                                            </li>
                                            <li><a href="/hoodies">Hoodies</a></li>
                                            <li><a href="/sweatshirt">Men's Sweatshirt</a></li>
                                            <li><a href="/full-sleeve-t-shirt">Full Sleeve Tees &amp; Polos</a>
                                            </li>
                                            <li><a href="/suits-blazers">Suits &amp; Blazers</a></li>
                                            <li><a href="/winter-kids-hoodies">Kids Hoodies</a></li>
                                            <li><a href="/jackets">Jackets</a></li>
                                            <li><a href="/winter-hats">Winter Hats</a></li>
                                            <li><a href="/shawls">Shawls</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> Network Video Recorders <span>(16)</span> </a>
                                        <a data-bs-toggle="collapse" href="#mobile-dropdown-2" role="button"
                                            aria-expanded="false" aria-controls="mobile-dropdown-2"> Network
                                            cameras <span>(16)</span> </a>
                                        <ul class="collapse" id="mobile-dropdown-2">
                                            <li class="dropdown-title"><a href="product-list.php">Clothing</a>
                                            </li>
                                            <li><a href="/hoodies">Hoodies</a></li>
                                            <li><a href="/sweatshirt">Men's Sweatshirt</a></li>
                                            <li><a href="/full-sleeve-t-shirt">Full Sleeve Tees &amp; Polos</a>
                                            </li>
                                            <li><a href="/suits-blazers">Suits &amp; Blazers</a></li>
                                            <li><a href="/winter-kids-hoodies">Kids Hoodies</a></li>
                                            <li><a href="/jackets">Jackets</a></li>
                                            <li><a href="/winter-hats">Winter Hats</a></li>
                                            <li><a href="/shawls">Shawls</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> HDCVI Video Recorders<span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">HDCVI Video Recorders XVR <span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> HDCVI Recorders XVR<span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> Network Video Recorders <span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> HDCVI Video Recorders<span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">HDCVI Video Recorders XVR <span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> HDCVI Recorders XVR<span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> Network cameras <span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> Network Video Recorders <span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#"> HDCVI Video Recorders<span>(16)</span> </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">HDCVI Video Recorders XVR <span>(16)</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="header__right desktop-view">
                    <ul>
                        <li class="heart header-icon">
                            <a href="login.php">
                                <i class="lar la-heart"></i>
                                <span>0</span>
                            </a>
                        </li>
                        <li class="cart header-icon">
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="las la-shopping-cart"></i>
                                <span>3</span>
                            </a>
                        </li>
                        <li class="header-icon">
                            <i id="search-button" class="las la-search"></i>
                        </li>
                        <!-- <li>
                            <i class="las la-user"></i>
                            <a href="login.php">Login/Register</a>
                        </li> -->
                        <li class="user_icon dropdown">
                            <button class="" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="d-flex">
                                    <div class="user-img">
                                        <svg class="_ufjrdd" viewBox="0 0 48 48" role="img"
                                            aria-labelledby="UserFilled30415fa8-1c07-4695-c24e-db6cda2cfbbb UserFilled30415fa8-1c07-4695-c24e-db6cda2cfbbbDesc"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <title id="UserFilled30415fa8-1c07-4695-c24e-db6cda2cfbbb">User Filled
                                            </title>
                                            <path
                                                d="M33.5,10.4C33.7,5.1,29.2,1,24,1s-9.8,4.2-9.5,9.4c0.1,1.1,1.1,6.3,1.1,6.3c0.8,4.5,3.8,8.3,8.4,8.3s7.6-3.8,8.4-8.4C32.4,16.6,33.4,11.4,33.5,10.4z"
                                                role="presentation"></path>
                                            <path
                                                d="M47,47H1l1.1-8.2c0.5-2.7,2.9-4.3,5.6-4.9L24,31l16.3,2.9c2.7,0.6,5.1,2.2,5.5,4.9L47,47z"
                                                role="presentation"></path>
                                        </svg>
                                    </div>
                                    <div class="user-name">
                                        <h5>Sanjay</h5>
                                    </div>
                                </div>
                            </button>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="account.php">Profile</a></li>
                                <li><a class="dropdown-item" href="order.php">My order</a></li>
                                <li><a class="dropdown-item" href="">My Wishlist</a></li>
                                <li><a class="dropdown-item" href="#">Log out</a></li>
                            </ul>








                        </li>
                    </ul>
                </div>

                <div id="btn-close" class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>


    <form class="navbar-form-search" role="search">
        <div class="search-form-container hdn" id="search-input-container">
            <div class="search-input-group">
                <i class="las la-times" id="hide-search-input-container"></i>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                </div>
                <button class="search-button"><i class="las la-mouse"></i></button>
            </div>
        </div>
    </form>



    <!-- /header -->