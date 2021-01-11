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

    <title>TechyChina ! Contact-Us</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400, 500, 700, 300, 100" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</head>

<body>

    <div id="top">

        <div class="container">

            <div class="row">

                <div class="col-md-6 login-details">

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

                <div class="col-md-6">

                    <ul class="menu">

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
                </div>
            </div>
        </div>
    </div>
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

                        <li class="active">
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
                    <li>Contact</li>

                </ul>

            </div>

            <div class="col-md-3">

                <?php

                include("includes/sidebar.php");

                ?>

            </div>

            <div class="col-md-9">

                <div class="box">

                    <div class="box-header">

                        <center>

                            <h2>Contact Us</h2>

                            <p class="text-muted">
                                If You have any question please share with us. We will catch you as soon as possible
                            </p>
                        </center>

                    </div>

                    <div id="map-container-3" class="z-depth-1"></div>

                    <iframe class="embed-responsive-item" src="map.html" height="520px" width="100%" allowfullscreen></iframe>

                    <!--Google Maps-->
                    <script src="js/js"></script>
                    <script src="js/javascript.js"></script>

                    <form method="post" action="contact.php">

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required>

                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>

                        </div>

                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" name="subject" required>

                        </div>

                        <div class="form-group">
                            <label for="">Message</label>

                            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>

                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fas fa-user-md"></i> Send Message

                            </button>

                        </div>

                    </form>

                    <?php

                    if (isset($_POST['submit'])) {
                        $sender_name = $_POST['name'];
                        $sender_email = $_POST['email'];
                        $sender_subject = $_POST['subject'];
                        $sender_message = $_POST['message'];
                        $receiver_email = "techychina@qq.com";
                        mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                        $email = $_POST['email'];
                        $subject = "Welcome to TechyChina";
                        $msg = "I shall get you soon, thanks for sending us email";
                        $sendmail_from = "techychina@qq.com";
                        mail($email, $subject, $msg, $sendmail_from);

                        echo "<h2 align='center'>Your Message has been sent successfully</h2>";
                    }

                    ?>

                </div>

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