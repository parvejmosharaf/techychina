<?php
session_start();

include("includes/connection.php");

include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/logo-small.PNG">

    <title>TechyChina ! Checkout</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400, 500, 700, 300, 100" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>

<body>

    <div id="top">
        <!--top starts-->

        <div class="container">
            <!--container starts-->

            <div class="row">
                <!--row starts-->

                <div class="col-md-6 login-details">
                    <!-- col-md-6 login-details starts-->
                    <a href="#" class="btn btn-primary btn-sm">
                        <?php
                        $ip = getRealUserIp();

                        if (!isset($_SESSION['customer_email'])) {
                            echo 'Welcome to TechyChina';
                        } else {
                            echo "Hello! " . $_SESSION['customer_email'] . " ";
                        }
                        ?>
                    </a>

                    <a href="cart.php">Shopping Cart Total Price: <?php total_price(); ?>$, Total Items <?php items(); ?></a>

                </div>
                <!-- col-md-6 login-details ends-->

                <div class="col-md-6">
                    <!-- col-md-6  starts-->

                    <ul class="menu">
                        <!--menu starts-->

                        <li>
                            <?php
                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='customer_register.php'>Register</a>";
                            } else {
                                echo "<a href='customer/my_account.php?profile'>Profile</a>";
                            }
                            ?>

                        </li>
                        <li>
                            <?php
                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='checkout.php'>My Account</a>";
                            } else {
                                echo "<a href='customer/my_account.php?my_orders'>CheckOut</a>";
                            }
                            ?></li>
                        <li><a href="cart.php">Go to Cart</a></li>
                        <li>
                            <?php
                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='checkout.php'>Sign in</a>";
                            } else {
                                echo "<a href='logout.php'>Sign out</a>";
                            }

                            ?>

                        </li>

                    </ul>
                    <!--menu ends-->
                </div>
                <!-- col-md-6 ends-->
            </div>
            <!-- row ends-->

        </div>
        <!--container ends-->

    </div>
    <!--top ends-->

    <div class="navbar navbar-default" id="navbar">

        <div class="container">

            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php">

                    <img src="images/logo-large.PNG" class="hidden-xs" alt="techychina logo">
                    <img src="images/logo-small.PNG" class="visible-xs" alt="techychina logo">

                </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation </span>

                    <i class="fa fa-align-justify"></i>

                </button>

            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <div class="padding-nav">

                    <ul class="nav navbar-nav navbar-left">

                        <li>
                            <a href="index.php"> Home </a>
                        </li>

                        <li>
                            <a href="shop.php"> Shop </a>
                        </li>

                        <li>
                            <a href="customer/my_account.php?profile"> My Account </a>
                        </li>

                        <li>
                            <a href="contact.php"> Contact Us</a>
                        </li>

                    </ul>

                </div>

                <a class="btn btn-primary navbar-btn right" href="cart.php">


                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> items in Cart</span>
                </a>

            </div>

        </div>

    </div>

    <div id="content">

        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">

                    <li><a href="index.php">Home</a></li>
                    <li>CheckOut</li>

                </ul>

            </div>

            <div class="col-md-3">

                <?php

                include("includes/sidebar.php");

                ?>

            </div>

            <div class="col-md-9">

                <?php

                if (!isset($_SESSION['customer_email'])) {
                    include("customer/customer_login.php");
                } else {
                    include("payment_options.php");
                }

                ?>

            </div>

        </div>

    </div>

    <?php

    include("includes/footer.php");

    ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</body>

</html>