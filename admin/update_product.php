<?php 
include('../settings/core.php');
include ('../functions/select_product_function.php');
Check_login();
?>
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title> Category and brand management </title>
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        
        <link rel="stylesheet" href="style.css">
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include 'side_nav.php' ?>
        <section class="home-section">
            <div class="container text">Admin dashboard</div>
            <div class="container">
                <div class="row">
                <form action="../actions/productprocess.php" method="POST">
                    <?php
                        $id=$_GET["product_id"];
                        $display= display_one_product_controller($id);
                        print_r($display);
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="product_title">Product name</label>
                        <input type="text" class="form-control" id="product_title" name="product_title" placeholder="name" value="<?php echo $display['product_title'] ; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="product_price">Selling price</label>
                        <input type="number" min="0.00" class="form-control" id="product_price" name="product_price" placeholder="price" value="<?php echo $display['product_price'] ; ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="product_brand">Brand</label>
                            <select id="product_brand" name="product_brand" class="form-control">
                                <option selected value="<?php echo $display['product_brand'] ; ?>"><?php
                                    $brand=select_one_brand_controller($display['product_brand']);
                                    echo $brand['brand_name'] ; 
                                ?></option>
                                <?php
                                    $rows_brand=select_all_brand_controller();
                                    //print_r($rows);
                                    foreach( $rows_brand as $row ){
                                        echo '<option value='.$row['brand_id'].'>'.$row['brand_name'].'</option>';
                                    }
                                ?>
                            </select>                        </div>
                        <div class="form-group col-md-4">
                            <label for="product_cat">Caterogy</label>
                            <select id="product_cat" name="product_cat" class="form-control">
                                <option selected value="<?php echo $display['product_cat'] ; ?>"><?php
                                    $cat=select_one_category_controller($display['product_cat']);
                                    echo $cat['cat_name'] ; 
                                ?></option>
                                <?php
                                    $rows_cat=select_all_category_controller();
                                    //print_r($rows);
                                    foreach( $rows_cat as $row ){
                                        echo '<option value='.$row['cat_id'].'>'.$row['cat_name'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="product_desc">Description</label>
                        <textarea class="form-control" id="product_desc" name="product_desc" rows="3" value="<?php echo $display['product_desc'] ; ?>" placeholder="Enter new description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product_keywords">Product Keywords</label>
                        <input type="text" class="form-control" id="product_keywords" name="product_keywords" placeholder="Apartment, studio, or floor" value="<?php echo $display['product_keywords'] ; ?>">
                    </div>
                    
                    <div class="modal-footer">
                        <a href="product.php"class="btn btn-secondary">Back</a>
                        <?php if (isset($_GET["product_id"])){ 
                        echo '<input type="hidden" name="product_id" value="'.$_GET["product_id"].'">';
                        echo '<button type="submit" name="Update" class="btn btn-primary">Update</button>';
                    }
                    else {
                        echo '<button type="submit" class="btn btn-primary" name="add_product">Add</button>';
                    }
                    ?>
                        
                    </div>
                </form>

                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>

