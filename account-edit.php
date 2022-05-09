<?php include('partial/header.php') ?>
<section class="breadcrumb">
    <div class="container">
        <nav style="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="account.php">Account information</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account Edit</li>
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
                            <li class="nav-item active">
                                <a href="#">My Account information</a>
                            </li>
                            <li class="nav-item">
                                <a href="order.php"> My Order </a>
                            </li>
                            <li class="nav-item">
                                <a href="wish.php"> My Wishlist </a>
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
                        <h4>Account Edit</h4>
                    </div>
                    <div class="user--info">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group first">
                                        <label for="">First Name</label>
                                        <input class="form-input " type="text" placeholder="First-Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group second">
                                        <label for="">Last Name</label>
                                        <input class="form-input " type="text" placeholder="Last-Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group second">
                                        <label for="">Address</label>
                                        <input class="form-input " type="text" placeholder="N/A">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group second">
                                        <label for="">Image</label>
                                        <input class="form-input " type="file" value="Add Image">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group fourth">
                                        <label for="">Contact</label>
                                        <input class="form-input " type="text" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group third">
                                        <label for="">Email</label>
                                        <input class="form-input " type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="buttons-group m-0">
                                        <button class="site-button all-button" role="button">Update
                                        </button>
                                        <button class="site-button all-button cancel" role="button">cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>




<?php include('partial/footer.php') ?>