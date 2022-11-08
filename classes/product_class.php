<?php

require ('../settings/db_class.php');
/**
 *@author Hamed Traore
 *@version 1.1
 */

class product_class extends db_connection
{
    //add to the brand table
    function add_brand($brand_name){
        $sql="INSERT INTO `brands`(`brand_name`) VALUES ('$brand_name')";
        return $this->db_query($sql);
    }

    // select all from brand
    function select_all_brand()
    {
        $sql="SELECT * FROM `brands`";
        return $this->db_fetch_all($sql);
    }

    // select one from brand
    function select_one_brand($brand_id)
    {
        $sql="SELECT * FROM `brands` WHERE `brand_id`='$brand_id'";
        return $this->db_fetch_one($sql);
    }
    function update_brand($brand_id,$brand_name)
    {
        $sql="UPDATE `brands` SET `brand_name`='$brand_name' WHERE `brand_id`='$brand_id'";
        return $this->db_query($sql);
    }
    // delete brand
    function delete_brand($id)
    {
        $sql="DELETE FROM `brands` WHERE `brand_id`='$id'";
        return $this->db_query($sql);
    }

    //-----------------------------------------------------------------------------------------------------------------------------------
    //add to the category table
    function add_category($category_name){
        $sql="INSERT INTO `categories`(`cat_name`) VALUES ('$category_name')";
        return $this->db_query($sql);
    }

    // select all from category
    function select_all_category()
    {
        $sql="SELECT * FROM `categories`";
        return $this->db_fetch_all($sql);
    }

    // select one from category
    function select_one_category($category_id)
    {
        $sql="SELECT * FROM `categories` WHERE `cat_id`='$category_id'";
        return $this->db_fetch_one($sql);
    }
    function update_category($category_id,$category_name)
    {
        $sql="UPDATE `categories` SET `cat_name`='$category_name' WHERE `cat_id`='$category_id'";
        return $this->db_query($sql);
    }

    // delete category
    function delete_category($id)
    {
        $sql="DELETE FROM `categories` WHERE `cat_id`='$id'";
        return $this->db_query($sql);
    }

    //----------------------------------------------------------------------------------------------------------------------------------------
    //add product
    function add_product($product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords)
    {
        $sql="INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_keywords`)
        VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_keywords')";
        return $this->db_query($sql);
    }
    // display all product
    function display_all_product()
    {
        $sql="SELECT * FROM `products`";
        return $this->db_fetch_all($sql);
    }
    // display One product
    function display_one_product($product_id)
    {
        $sql="SELECT * FROM `products` WHERE `product_id`='$product_id'";
        return $this->db_fetch_one($sql);
    }
    //update product
    function update_product($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$product_keywords)
    {
        $sql="UPDATE `products` 
        SET `product_cat`='$product_cat',`product_brand`='$product_brand',`product_title`='$product_title',
        `product_price`='$product_price',`product_desc`='$product_desc',`product_keywords`='$product_keywords' 
        WHERE `product_id`=$product_id";
        return $this->db_query($sql);
    }
    //delete product
    function delete_product($id)
    {
        $sql="DELETE FROM `products` WHERE `product_id`='$id'";
        return $this->db_query($sql);
    }


}


