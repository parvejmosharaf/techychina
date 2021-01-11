<div id="footer">

    <div class="container">

        <div class="row">

            <div class="col-md-3 col-sm-6">

                <h4>Quick Links</h4>
                <ul>
                    <li><a href="shop.php">All Products</a></li>
                    <li><a href="cart.php">Shopping Cart</a></li>
                    <li><a href="customer/my_account.php">My Account</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="customer_register.php">Resister</a></li>
                    <li><a href="checkout.php">Login</a></li>
                </ul>

                <hr class="hidden-md hiddden-lg hidden-sm">

            </div>

            <div class="col-md-3 col-sm-6">

                <h4>Top Product Catagory</h4>

                <ul>

                    <?php

                    $get_p_cats = "select * from product_categories";

                    $run_p_cats = mysqli_query($con, $get_p_cats);

                    while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                        $p_cat_id = $row_p_cats['p_cat_id'];

                        $p_cat_title = $row_p_cats['p_cat_title'];

                        echo "<li> <a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a> </li>";
                    }

                    ?>

                </ul>

                <hr class="hidden-md hiddden-lg">

            </div>

            <div class="col-md-3 col-sm-6">

                <h4>Where to find Us</h4>
                <p> <strong>TechyChina</strong> <br>Hangzhou Dianzi University<br>Hangzhou, Zhejiang<br> China
                    <br><a href="tel:+8613067819636">Mobile : +8613067819636</a>
                    <br><a href="mailto:techychina@qq.com"> Email : techychina@qq.com</a>
                    <br>
                </p>

                <hr class="hidden-md hiddden-lg">

            </div>


            <div class="col-md-3 col-sm-6">
                <b>
                    <p>
                        Get updates on latest products and offers
                    </p>
                </b>
                <form action="#" method="post">

                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                    </div>

                </form>
                <br>
                <h4>Stay in touch</h4>
                <p class="social">
                    <a href="javascript:void(0)"> <i class="fab fa-facebook-square"></i> </a>
                    <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-pinterest-square"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-google-plus"></i></a>
                </p>

            </div>

        </div>

    </div>

</div>

<div id="copyright">

    <div class="container">
        <div class="row">
        </div>
        <div class="col-md-6">
            <p> &copy; 2021 TechyChina | All Rights Reserved. </p>
        </div>
    </div>

</div>