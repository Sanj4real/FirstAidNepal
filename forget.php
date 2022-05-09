<?php include('partial/header.php') ?>

<section class="login py-5">
    <div class="container">
        <div class="login__block">
            <div class="site-header">
                <h3>Forget Your Password</h3>
            </div>
            <form class="form-contact contact__form">
                <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="">Enter Your Email</label>
                            <input class="form-control " name="lastname" type="email" placeholder="name@gmail.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class=" text-center">
                            <div class="button">
                                <button class="btn all-button">Reset my Password</button>
                            </div>
                            <div class="forget">
                                <a href="login.php" class="fs-6">Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('partial/footer.php') ?>