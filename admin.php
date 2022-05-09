<?php include('partial/header.php') ?>

<section class="login py-5">
    <div class="container">
        <div class="login__block">
            <div class="site-header">
                <h3>Admin Login</h3>
            </div>
            <form class="form-contact contact__form">
                <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Enter Your Email</label>
                            <input class="form-control " name="lastname" type="email" placeholder="name@gmail.com">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <div class="">
                                <label for="confirm-password">Password</label>
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
                    <div class="col-lg-12">
                        <div class=" text-center">
                            <div class="button">
                                <button class="btn all-button">Sign in</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('partial/footer.php') ?>