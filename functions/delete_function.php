<?php 
include ('../controllers/product_controller.php');



if (isset($_GET['brand_id'])) {
    $brand_id=$_GET['brand_id'];
    delete_band_controller($brand_id);
    header("Location: ../admin/dashboard.php?Successfully deleted");
} elseif (isset($_GET['cat_id'])) {
    $cat_id=$_GET['cat_id'];
    delete_category_controller($cat_id);
    header("Location: ../admin/dashboard.php?Successfully deleted");
}elseif (isset($_GET['product_id'])) {
    $product_id=$_GET['product_id'];
    delete_product_controller($product_id);
    header("Location: ../admin/dashboard.php?Successfully deleted");
}

// function delete_brand_action() 
// {
//     //get the id
//     $brand_id=$_GET['brand_id'];
//     //echo $id;
//     if(!delete_controller_brand($id)==true){
//         echo 'Not deleted';
//     }else {
//         header( "Location: ../view/form.php ");
//     }
    
    

// }
// delete_brand_action();

?>