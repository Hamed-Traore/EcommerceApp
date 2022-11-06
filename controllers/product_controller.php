<?php
//connect to the product class
include("../classes/product_class.php");


//display all brands
function select_all_brand_controller()
{
    $select_all= new product_class();
    return $select_all->select_all_brand();
}

// colect data for the update
function select_one_brand_controller($brand_id)
{
    $select_one= new product_class();
    return $select_one->select_one_brand($brand_id);
}


// add brand
function add_brand_controller($brand_name)
{
    $add= new product_class();
    return $add->add_brand($brand_name);
} 

//update brand
function update_brand_controller($brand_id,$brand_name)
{
    $update= new product_class();
    return $update->update_brand($brand_id,$brand_name);
}

//delete brand
function delete_controller_brand($id)
{
    $delete= new product_class();
    // return $delete->delete_brand($id);
}


//-------------------------------------------------------------------------------------------------------------------------------------------------
//display all categories
function select_all_category_controller()
{
    $select_all= new product_class();
    return $select_all->select_all_category();
}

// colect data for the update
function select_one_category_controller($category_id)
{
    $select_one= new product_class();
    return $select_one->select_one_category($category_id);
}


// add category
function add_category_controller($category_name)
{
    $add= new product_class();
    return $add->add_category($category_name);
} 

//update category
function update_category_controller($category_id,$category_name)
{
    $update= new product_class();
    return $update->update_category($category_id,$category_name);
}

//-------------------------------------------------------------------------------------------------------------------------------------------------
// add product
function add_product_controller($product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords)
{
    $add= new product_class ();
    return $add->add_product($product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords);
}
// display all product
function display_all_product_controller()
{
    $display_all= new product_class();
    return $display_all->display_all_product();
}
// display one product
function display_one_product_controller($id)
{
    $select_one= new product_class();
    return $select_one->display_one_product($id);
}
//update product
function update_product_controller($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords)
{
    $update= new product_class();
    return $update->update_product($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords);
}




?>