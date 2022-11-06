<?php
include("../controllers/product_controller.php");

if (isset($_POST['add_product'])) {
    $product_title=$_POST['product_title'];
    $product_price=$_POST['product_price'];
    $product_brand=$_POST['product_brand'];
    $product_cat=$_POST['product_cat'];
    $product_desc=$_POST['product_desc'];
    $product_keywords=$_POST['product_keywords'];
    // echo $product_title;
    // echo "<br>";
    // echo $product_price;
    // echo "<br>";
    // echo $product_brand;
    // echo "<br>";
    // echo $product_cat;
    // echo "<br>";
    // echo $product_desc;
    // echo "<br>";
    // echo $product_keywords;
    // echo "<br>";
    $add_result=add_product_controller($product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords);
    if ($add_result==false) {
        header( "Location: ../admin/product.php?error=<script>alert('Could not add product')</script>");
    }else {
        header( "Location: ../admin/product.php?Successfully updated");
    }
}
if (isset($_POST['Update'])) {
    $product_id=$_POST['product_id'];
    $product_title=$_POST['product_title'];
    $product_price=$_POST['product_price'];
    $product_brand=$_POST['product_brand'];
    $product_cat=$_POST['product_cat'];
    $product_desc=$_POST['product_desc'];
    $product_keywords=$_POST['product_keywords'];
    // echo $product_title;
    // echo "<br>";
    // echo $product_price;
    // echo "<br>";
    // echo $product_brand;
    // echo "<br>";
    // echo $product_cat;
    // echo "<br>";
    // echo $product_desc;
    // echo "<br>";
    // echo $product_keywords;
    // echo "<br>";
    // echo $product_id;
    $update_result= update_product_controller($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords);
    var_dump($update_result);
    if ($update_result==false) {
        header( "Location: ../admin/update_product.php?error=<script>alert('Could not add product')</script>");
    }else {
        header( "Location: ../admin/product.php?Successfully updated");
    }
}
?>