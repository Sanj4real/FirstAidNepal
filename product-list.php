<?php include('partial/header.php') ?>

<section class="list">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  d-none d-lg-block d-xl-block">
                <nav class="sidebar">
                    <div class="sidebar__block">
                        <div class="sidebar-head">
                            <h4>Price Range</h4>
                            <div class="wrapper">
                                <fieldset class="filter-price">
                                    <div class="price-field">
                                        <input type="range" min="100" max="500" value="135" id="lower">
                                        <input type="range" min="100" max="500" value="500" id="upper">
                                    </div>
                                    <div class="price-wrap">
                                        <span class="price-title">Price</span>
                                        <div class="price-container">
                                            <div class="price-wrap-1">

                                                <label for="one">Rs</label>
                                                <input id="one">
                                            </div>
                                            <div class="price-wrap_line"></div>
                                            <div class="price-wrap-2">
                                                <label for="two">Rs</label>
                                                <input id="two">

                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="sidebar-head ">
                            <h4>Overview</h4>
                        </div>

                        <ul class="nav flex-column">
                            <li class="nav-item active">
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

                <nav class="sidebar custom--sidebar">
                    <div class="sidebar__block">
                        <div class="sidebar-head">
                            <h4>Filter By</h4>
                        </div>
                        <form action="#">
                            <h5>Discounts</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item active">
                                    <input type="radio" id="test1" name="radio-group" checked>
                                    <label for="test1">No Discount filter</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test2" name="radio-group">
                                    <label for="test2">1% to 19% discount</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test3" name="radio-group">
                                    <label for="test3">20% to 29% discount</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test4" name="radio-group">
                                    <label for="test4">30% to 39% discount</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test5" name="radio-group">
                                    <label for="test5">40% to 49% discount</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test6" name="radio-group">
                                    <label for="test6">50% to more </label>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="sidebar__block">
                        <form action="#">
                            <h5>Brands</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item active">
                                    <input type="radio" id="test-1" name="radio-group" checked>
                                    <label for="test-1">Ingco</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test-2" name="radio-group">
                                    <label for="test-2">MPT</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test-3" name="radio-group">
                                    <label for="test-3">Dingqi</label>
                                </li>
                                <li class="nav-item">
                                    <input type="radio" id="test-4" name="radio-group">
                                    <label for="test-4">Karcher</label>
                                </li>
                            </ul>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <div class="list-products">
                    <div class="shop-control-bar">
                        <h4>Network Cameras</h4>
                        <form class="d-none d-lg-block d-xl-block">
                            <select class="techmarket-wc-wppp-select c-select" id="show_count" name="show_count">
                                <option value="10">Show 10</option>
                                <option value="20" selected="">Show 20</option>
                                <option value="30">Show 30</option>
                                <option value="50">Show 50</option>
                                <option value="100">Show 100</option>
                            </select>
                            <select class="orderby" name="orderby" id="orderby">
                                <option value="date_desc" selected="selected">Sort by Popularity</option>
                                <option value="price_asc">Sort by price: low to high</option>
                                <option value="price_desc">Sort by price: high to low</option>
                            </select>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-1.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-2.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-3.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-3.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-1.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-2.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-3.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-4.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-5.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-1.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-2.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="product__list">
                                <div class="product__img">
                                    <a href="details.php">
                                        <img src="img/products/p-3.png" alt="">
                                    </a>
                                    <div class="product__info">
                                        <ul>
                                            <li class="heart header-icon">
                                                <a href="#">
                                                    <i class="lar la-heart"></i>
                                                </a>
                                            </li>
                                            <li class="cart header-icon">
                                                <a href="">
                                                    <i class="las la-shopping-cart"></i>
                                                </a>
                                            </li>
                                            <li class="header-icon">
                                                <a href="">
                                                    <i class="las la-search"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product__content">
                                    <h5>Fire Hydrant</h5>
                                    <div class="price">
                                        <span class="old-price">₹ 19,221</span>
                                        <span class="current-price">₹12,499</span>
                                    </div>
                                    <div class="ratting">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <nav aria-label="...">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">2</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('partial/footer.php') ?>