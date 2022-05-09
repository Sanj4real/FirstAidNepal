<?php include('partial/header.php') ?>

<section class="login py-5">
    <div class="container">
        <div class="breadcrumb">
            <nav style="" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order</li>
                </ol>
            </nav>
        </div>
        <div class="login__block">
            <div class="site-header">
                <h3>Create new customer account</h3>
            </div>
            <form class="form-contact contact__form">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Enter Your FullName</label>
                            <input class="form-control " name="lastname" type="text" placeholder="Enter your name">
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Enter Your Email</label>
                            <input class="form-control " name="lastname" type="email" placeholder="name@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="confirm-password">Password</label>
                                <a href="forget.php" class="text-primary fs-6">Forget Password</a>
                            </div>
                            <div class="password">
                                <input class="form-control " type="password" id="confirm-password"
                                    placeholder="Your password">
                                <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="confirm-password">Confirm Password</label>
                                <a href="forget.php" class="text-primary fs-6">Forget Password</a>
                            </div>
                            <div class="password">
                                <input class="form-control " type="password" id="confirm-password"
                                    placeholder="Confirm password">
                                <div class="form-alert-icon" onclick="showPassword('confirm-password',this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-element mb-3 d-flex align-items-center terms">
                            <input class="checkbox-primary me-3" type="checkbox" id="agree">
                            <label for="agree" class="text-secondary mb-0">Accept the <a href="#"
                                    style="text-decoration: underline;">Terms</a> and <a href="#"
                                    style="text-decoration: underline;">Privacy Policy</a></label>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class=" d-flex justify-content-between">
                            <div class="button">
                                <button class="btn all-button">Create an account</button>
                            </div>
                            <div class="forget">
                                <a href="login.php" class="fs-6">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('partial/footer.php') ?>