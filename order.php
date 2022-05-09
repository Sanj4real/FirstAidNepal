<?php include('partial/header.php') ?>
<section class="breadcrumb">
    <div class="container">
        <nav style="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account information</li>
            </ol>
        </nav>
    </div>
</section>

<section class="banner user--dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 ">
                <nav class="sidebar">
                    <div class="sidebar__block">
                        <div class="sidebar-head">
                            <h4>Menu</h4>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item ">
                                <a href="account.php">My Account information</a>
                            </li>
                            <li class="nav-item">
                                <a href="order.php active"> My Order </a>
                            </li>
                            <li class="nav-item ">
                                <a href="wishlist.pho"> My Wishlist </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"> Logout </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 ">
                <div class="user-content">
                    <div class="user-head d-flex">
                        <h4>My Orders</h4>
                    </div>
                    <div class="user--info">

                    </div>


                </div>
                <div class="no-order">
                    <p>There are no orders placed yet</p>
                    <a href="index.php" class="all-button">Continue Shopping</a>
                </div>

            </div>
        </div>
    </div>
</section>




<?php include('partial/footer.php') ?>