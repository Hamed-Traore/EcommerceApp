<?php
// contact phonte entiy

use LDAP\Result;

require ('../settings/db_class.php');
//add, edit, and delete class

class CustomerClass extends db_connection
{
    function add_customer($customer_name,$customer_email,$customer_pass,$customer_country,$customer_city,$customer_contact,$user_role)
    {
        $hash= password_hash($customer_pass, PASSWORD_DEFAULT);
        // write the sql
        $sqlQuery="INSERT INTO `customer` (`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`,`user_role`)
            VALUES ('$customer_name','$customer_email','$hash','$customer_country','$customer_city','$customer_contact','$user_role')";
        //execute with method in db_connection
        return $this->db_query($sqlQuery);
    }
    function Check_email_exist($customer_email)
    {
        // $hash= password_hash($customer_pass, PASSWORD_DEFAULT);
        $sqlQuery="SELECT * FROM `customer` WHERE `customer_email`='$customer_email'";
        return $this->db_fetch_one($sqlQuery);
        // if ($result==false) {
        //     return false;
        // } else {
        //     $hash=$result["customer_pass"];
        //     return $hash;

        //     $matching= password_verify($customer_pass,$hash);
        //     if ($matching!==true) {
        //         header( "Location: ../view/login.php?successfull");
        //     } else {
        //         header( "Location: ../view/login.php?successfull");
        //     }
        // }
        
        // return $this->db_query($sqlQuery);
    }
    
    
}



?>