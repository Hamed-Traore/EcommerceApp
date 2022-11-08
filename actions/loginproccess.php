<?php 
echo "hereee";
// include ('../controllers/customer_controller.php');
// //1- check if the button was click (isset)


// //2- Collect the data $GET and $POST
// if (isset($_POST['submit'])) {
//     //echo "here";
//     $customer_email= $_POST['customer_email'];
//     $customer_pass= $_POST['customer_pass'];
    
//     //echo $customer_email . " " . $customer_pass;
//     $result = loginUser_controller($customer_email,$customer_pass);
//     if ($result===false) {
//         header( "Location: ../view/login.php?error=Please you typed a wrong Email or password");
//     } 
//     else {
//         if ($_SESSION['user_role']==1) {
//             header( "Location: ../admin/dashboard.php");
//         }
//         else {
//             header( "Location: ../view/customer_dashboard.php");
//         }
        
//     }
   
// }

?>
