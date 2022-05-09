<?php include('partial/header.php') ?>

<div class="cart py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
                <div class="cart__details">
                    <h3>Shopping Cart</h3>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Items</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart__info">
                                            <a href="#">
                                                <img src="img/products/p-1.jpg" alt="">
                                            </a>
                                            <a href="details.php">Kieslect L11 Lady Smart Watch With Free Purple Silicon
                                                Strap</a>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 4300</h4>
                                    </td>
                                    <td>
                                        <div class="custom-button item-button">
                                            <div class="product-counter">
                                                <input id="minus" type="button" value="-" />
                                                <input id="quantity" type="text" value="1" name="quantity" />
                                                <input id="plus" type="button" value="+" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 6000</h4>
                                    </td>
                                    <td>
                                        <a href=""><i class="las la-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart__info">
                                            <a href="#">
                                                <img src="img/products/p-7.jpg" alt="">
                                            </a>
                                            <a href="details.php">Kieslect L11 Lady Smart Watch With Free Purple Silicon
                                                Strap</a>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 4300</h4>
                                    </td>
                                    <td>
                                        <div class="custom-button item-button">
                                            <div class="product-counter">
                                                <input id="minus" type="button" value="-" />
                                                <input id="quantity" type="text" value="1" name="quantity" />
                                                <input id="plus" type="button" value="+" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 6000</h4>
                                    </td>
                                    <td>
                                        <a href=""><i class="las la-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart__info">
                                            <a href="#">
                                                <img src="img/products/p-1.png" alt="">
                                            </a>
                                            <a href="details.php">Kieslect L11 Lady Smart Watch With Free Purple Silicon
                                                Strap</a>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 4300</h4>
                                    </td>
                                    <td>
                                        <div class="custom-button item-button">
                                            <div class="product-counter">
                                                <input id="minus" type="button" value="-" />
                                                <input id="quantity" type="text" value="1" name="quantity" />
                                                <input id="plus" type="button" value="+" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 6000</h4>
                                    </td>
                                    <td>
                                        <a href=""><i class="las la-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart__info">
                                            <a href="#">
                                                <img src="img/products/p-6.jpg" alt="">
                                            </a>
                                            <a href="details.php">Kieslect L11 Lady Smart Watch With Free Purple Silicon
                                                Strap</a>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 4300</h4>
                                    </td>
                                    <td>
                                        <div class="custom-button item-button">
                                            <div class="product-counter">
                                                <input id="minus" type="button" value="-" />
                                                <input id="quantity" type="text" value="1" name="quantity" />
                                                <input id="plus" type="button" value="+" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4> Rs. 6000</h4>
                                    </td>
                                    <td>
                                        <a href=""><i class="las la-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-5">
                <div class="cart__right">
                    <h3>Checkout Summary</h3>
                    <div class="discount border-btm">
                        <h4 data-bs-toggle="collapse" href="#itinery-1" role="button" aria-expanded="false"
                            aria-controls="collapseExample">Apply Discount code <b></b></h4>
                        <form action="" class="collapse " id="itinery-1">
                            <div class="form-group">
                                <label for="">
                                    Enter Discount code
                                </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" placeholder="Apply Discount">
                                    <span class="input-group-btn">
                                        <button class="btn btn-lg all-button" type="submit">Apply</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="total border-btm">
                        <ul>
                            <li>
                                <p>Total MRP: <b>RS 4300</b></p>
                            </li>
                            <li>
                                <p>Discount on MRP: <b>RS 400</b></p>
                            </li>
                            <li>
                                <p>Cupon Discount: <b>RS 300</b></p>
                            </li>
                            <li>
                                <p>Convinence Fee: <b>RS 300 <span class="cross">200</span></b></p>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="total border-btm">
                        <p>cart Total: <b>RS 8000</b></p>
                    </div>
                    <div class="button text-center">
                    <button class="site-button all-button" role="button">Checkout
                            </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include('partial/footer.php') ?>