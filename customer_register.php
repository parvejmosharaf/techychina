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

    <title>TechyChina ! Register</title>

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
                            echo 'Welcome to TechyChina ';
                        } else {
                            echo "Hello! " . $_SESSION['customer_email'] . "";
                        }
                        ?>
                    </a>

                    <a href="#">Shopping Cart Total Price: <?php total_price(); ?>$, Total Items <?php items(); ?></a>

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

                </div>-->

            </div>

        </div>

    </div>

    <div id="content">

        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">

                    <li><a href="index.php">Home</a></li>
                    <li>Register</li>

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

                            <h2>Sign Up For A New Account</h2>

                        </center>

                    </div>

                    <form method="post" action="customer_register.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="">Full Name</label>

                                <input type="text" class="form-control" name="c_name" required placeholder="Enter Your Name">

                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="c_email" required placeholder="Enter Your Email">

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6">

                                <label for="">Password</label>
                                <input type="password" id="pass" class="form-control" name="c_pass" required placeholder="Enter Password">
                            </div>

                            <div class="col-md-6">

                                <label for="">Confirm Password</label>
                                <input type="password" id="cpass" class="form-control" name="conf_pass" required placeholder="Enter Password Again">
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="">Country</label>
                                <input type="text" class="form-control" name="c_country" required placeholder="Enter Your County">

                            </div>

                            <div class="col-md-6">
                                <label for="">City</label>
                                <input type="text" class="form-control" name="c_city" required placeholder="Enter Your City">
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="">Enter Mobile No</label>
                                <input type="text" class="form-control" name="c_contact" required placeholder="Enter Mobile No">
                            </div>

                            <div class="col-md-6">
                                <label for="">Gender</label>
                                <select class="form-control" name="c_gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="c_address" required placeholder="Enter Your Address">

                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="">Zip Code</label>
                                <input type="text" class="form-control" name="c_zipcode" required placeholder="Enter Your Zipcode">
                            </div>

                            <div class="col-md-6">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="c_image" required>

                            </div>

                        </div>

                        <div class="text-center">
                            <button id="submit" type="submit" name="register" class="btn btn-primary">
                                <i class="fas fa-user-plus"></i> Sign Up

                            </button>
                        </div>
                    </form>

                    <script type="text/javascript">
                        $("#submit").submit(function() {
                            var pass = $("#pass").val();
                            var cpass = $("#cpass").val();

                            if (pass != cpass) {
                                alert("ds");

                            }
                        });
                    </script>
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

<?php

if (isset($_POST['register'])) {
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_gender = $_POST['c_gender'];
    $c_address = $_POST['c_address'];
    $c_zipcode = $_POST['c_zipcode'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];

    $c_ip = getRealUserIp();

    move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

    $get_email = "SELECT * FROM customers WHERE customer_email='$c_email'";
    $run_email = mysqli_query($con, $get_email);
    $check_email = mysqli_num_rows($run_email);
    if ($check_email == 1) {
        echo "<script>alert('This Email is already registered ! please choose another email')</script>";
        exit();
    }

    $customer_confirm_code = mt_rand();
    $subject = "TechyChina Email Confirmation Message";
    $from = "techychina@qq.com";
    $message = "
<h2>
Hey $c_name,
</h2>


We received a request to set your email to $c_email. If this is correct, please confirm by clicking the button below. If you don’t know why you got this email, please tell us straight away so we can fix this for you.

<p>
Information That save in our database
</p>

<table style='border:2px solid black;'>
  <tr>
    <th>Name</th>
    <td>$c_name</td>
    </tr>
    <tr>
    <th>E-mail</th> 
    <td>$c_email</td> 
    </tr>
    <tr>
    <th>Pass</th>
     <td>$c_pass</td> 
    </tr>
    <tr>
    <th>Country</th>
    <td>$c_country</td>
    </tr>
    <tr>
    <th>City</th>
    <td>$c_city</td>
    </tr>
    <tr>
    <th>Contact</th>
    <td>$c_contact</td>
    </tr>
    <tr>
    <th>Zipcode</th>
    <td>$c_zipcode</td>
    </tr>
    <tr>
    <th>Gender</th>
    <td>$c_gender</td>
    </tr>
    <tr>
    <th>Address</th>
    <td>$c_address</td>
    </tr>
    </tr>

</table>
<br>
<br>

<a style='background-color: #af0c42; text-decoration: none; padding: 10px; font-size: 130%; color: white; margin-top:20px;' href='http://techychina.cf/customer/my_account.php?$customer_confirm_code'>
Click Here To Confirm Email
</a>
";
    $headers = "From: $from \r\n";
    $headers .= "Content-type: text/html\r\n";
    mail($c_email, $subject, $message, $headers);


    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_gender,customer_zipcode,customer_address,customer_image,customer_ip, customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact', '$c_gender','$c_zipcode','$c_address','$c_image','$c_ip', '$customer_confirm_code')";


    $run_customer = mysqli_query($con, $insert_customer);
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    $run_cart = mysqli_query($con, $sel_cart);
    $check_cart = mysqli_num_rows($run_cart);

    if ($check_cart > 0) {
        $_SESSION['customer_email'] = $c_email;
        echo "<script>alert('You have been Registered Successfully')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    } else {
        $_SESSION['customer_email'] = $c_email;
        echo "<script>alert('You have been Registered Successfully')</script>";
        echo "<script>window.open('customer/my_account.php?profile','_self')</script>";
    }
}

?>