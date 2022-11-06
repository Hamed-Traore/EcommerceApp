<?php 
include ('../controllers/customer_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $customer_name= $_POST['customer_name'];
    $customer_email= $_POST['customer_email'];
    $customer_pass= $_POST['customer_pass'];
    $conf_password= $_POST['conf_password'];
    $customer_country= $_POST['customer_country'];
    $customer_city= $_POST['customer_city'];
    $customer_contact= $_POST['customer_contact'];
    $user_role= $_POST['user_role'];

    // echo $customer_name.$customer_email.$customer_pass.$conf_password.$customer_country.$customer_city.$customer_contact.$user_role;
    // return false;
 

    $result = register_controller($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role);
    
    // if ($result==true) {
    //     header( "Location: ../view/login.php?successfull ");
    // } else {
    //     header( "Location: ../view/register.php?error=NOT_successfull ");
    // }
    
   
}




?>