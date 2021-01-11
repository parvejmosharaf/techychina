<div class="box">

    <div class="box-header">

        <center>

            <h1>Sign in to TechyChina</h1><br><br>
            <!-- <p class="lead">Already our Customer</p> -->
            <p class="text-muted">

                Login to TechyChina with your valid email and password.<br> If you have not techychina account please register
                <br>
            </p>

        </center>

    </div>

    <div class="col-md-6">

        <form action="checkout.php" method="post">

            <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" class="form-control" name="c_email" required>

            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="c_pass" required>
            </div>
            <div class="text-center">
                <button name="login" class="btn btn-primary" value="Login">
                    <i class="fas fa-sign-in-alt"></i> Sign In
                </button>

            </div>
        </form>

    </div>

    <center>

        <h2>Don't have an account.</h2>
        <h2>Create a New Account</h2><br>

    </center>

    <center>

        <div class="type-1" style="margin-top:10px;">
            <div>
                <a href="customer_register.php" class="btn btn-1">
                    <span class="txt">New ?? Register Here</span>
                    <span class="round"><i class="fa fa-chevron-right"></i></span>
                </a>
            </div>
        </div>

    </center>

    <br>

</div>

<?php

if (isset($_POST['login'])) {

    $customer_email = $_POST['c_email'];

    $customer_pass = $_POST['c_pass'];

    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

    $run_customer = mysqli_query($con, $select_customer);

    $get_ip = getRealUserIp();

    $check_customer = mysqli_num_rows($run_customer);

    $select_cart = "select * from cart where ip_add='$get_ip'";

    $run_cart = mysqli_query($con, $select_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_customer == 0) {

        echo "<script>alert('password or email is wrong')</script>";

        exit();
    }

    if ($check_customer == 1 and $check_cart == 0) {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>window.open('customer/my_account.php?profile','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $customer_email;

        echo "<script>window.open('checkout.php','_self')</script>";
    }
}

?>