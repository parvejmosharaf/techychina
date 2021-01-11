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

    <title>TechyChina | E-Commerce Store</title>


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
                            ?>
                        </li>
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

                        <li class="active">
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

                <div class="navbar-collapse collapse right">

                </div>

                <div class="collapse clearfix" id="search">

                    <form class="navbar-form" method="get" action="results.php">

                        <div class="input-group">

                            <input class="form-control" type="text" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">

                                <button type="submit" value="Search" name="search" class="btn btn-primary">

                                    <i class="fa fa-search"></i>

                                </button>

                            </span>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!--    closing-->

    <div class="container" id="slider">

        <div class="col-md-12">
            <div id="slideimage">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
                        <li data-target="#myCarousel" data-slide-to="1"> </li>
                        <li data-target="#myCarousel" data-slide-to="2"> </li>
                        <li data-target="#myCarousel" data-slide-to="3"> </li>
                    </ol>

                    <div class="carousel-inner image-slide-size">
                        <?php

                        $get_slides = "SELECT slide_id, slide_name, slide_image FROM slider LIMIT 0,1";
                        $run_slides = mysqli_query($con, $get_slides);
                        while ($row_slides = mysqli_fetch_array($run_slides)) {
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];
                            echo "
                        <div class='item active img-responsive'>

    <img src='admin/slides_images/$slide_image'></a>
    <div class='carousel-caption'>
    <h1 style='color: blue;'>Shopping with Trust </h1>
    <button class='btn btn-primary' style='color: white;'><a href='shop.php'>Go to Shop</a></button>
    <p style='color: blue;'>Find The best option for shopping </p>
   
  </div>

</div>
                        


";
                        }

                        ?>

                        <?php

                        $get_slides = "SELECT slide_id, slide_name, slide_image FROM slider LIMIT 1,3";
                        $run_slides = mysqli_query($con, $get_slides);
                        while ($row_slides = mysqli_fetch_array($run_slides)) {
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];
                            echo "
                        <div class='item img-responsive'>

    <img src='admin/slides_images/$slide_image'></a>

</div>
                        
";
                        }

                        ?>

                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next</span> </a>
                </div>

            </div>

        </div>

    </div>

    <div id="hot">

        <div class="box">

            <div class="container">
                <div class="col-md-12">

                    <h2 style="color: purple">Latest Products</h2>

                </div>

            </div>

        </div>

    </div>

    <div id="content" class="container">

        <?php

        getProducts();

        ?>

    </div>

    <?php

    include("includes/footer.php")

    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</body>

</html>