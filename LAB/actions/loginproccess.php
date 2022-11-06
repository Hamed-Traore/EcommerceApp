<?php 
include ('../controllers/general_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $customer_email= $_POST['customer_email'];
    $customer_pass= $_POST['customer_pass'];
    // echo $customer_email . " " . $customer_pass;
    $result = loginUser($customer_email,$customer_pass);
    if ($result) {
        echo "<script>alert('Success')</script>";
    }
    else {
        echo "failed";
    }
}

