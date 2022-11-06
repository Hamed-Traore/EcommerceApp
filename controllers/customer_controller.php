<?php
//connect to the user account class
include("../classes/CustomerClass.php");


//sanitize data

 

//--INSERT--//

function register_controller($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role)
{
    //check if email already exist
    $check= new CustomerClass();
        $user=$check ->  Check_email_exist($customer_email);
        //print_r($user);
        if (isset($user['customer_email']))
        {
            header( "Location: ../view/register.php?error=Please this email is already used");
        } else 
        {
            //check if password match
            $add_customer= new CustomerClass();
            $add_customer->add_customer($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role);
            header( "Location: ../view/login.php?successfull ");
        }
    
}

function loginUser_controller($customer_email,$customer_pass)
    {
        session_start();
        $check= new CustomerClass();
        $user=$check ->  Check_email_exist($customer_email);
        //print_r($user);
        
        
        if ($user==false)
        {
            return false;
        } else 
        {
            //check if password match    
            $matching= password_verify($customer_pass,$user["customer_pass"]);
            if ($matching!==true)
            {
                return false;
            } else 
            {
                
                $_SESSION['user_id']=$user["customer_id"];
                $_SESSION['user_role'] =$user['user_role'];
                $_SESSION['user_name']= $user['customer_name'];
                
            }
         }
       
    } 



//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>