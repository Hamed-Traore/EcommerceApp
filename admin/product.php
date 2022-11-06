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
        <title> Product Management </title>
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
                <div class="container" >
                    <div class="row" style="display:flex; justify-content: space-between;">
                        <h5>Here all the products</h5>
                        <button  class="btn btn-primary" data-toggle="modal" data-target="#add_product_form">Add new product</button>   
                    </div>
                </div>
                <div class="container">
                    <br>
                    <?php
                        $rows=display_all_product_controller();
                        //print_r($rows);
                        echo '<table class="table table-striped table-dark">';
                            echo '<thead>';
                            echo '    <tr>';
                            echo '    <th scope="col">ID</th>';
                            echo '    <th scope="col">Category Name</th>';
                            echo '    <th scope="col">Brand Name</th>';
                            echo '    <th scope="col">Product Title</th>';
                            echo '    <th scope="col">Product Price</th>';
                            echo '    <th scope="col">Description</th>';
                            echo '    <th scope="col">Image</th>';
                            echo '    <th scope="col">Keywords</th>';
                            echo '    <th scope="col">Actions</th>';
                            echo '    </tr>';
                            echo '</thead>';
                        foreach( $rows as $row ){
                            $brand=select_one_brand_controller($row['product_brand']);
                            $cat=select_one_category_controller($row['product_cat']);
                            echo '<tbody>';
                            echo '    <tr>';
                            echo '      <td>'.$row['product_id'].'</td>';
                            echo '      <td>'.$cat['cat_name'].'</td>';
                            echo '      <td>'.$brand['brand_name'].'</td>';
                            echo '      <td>'.$row['product_title'].'</td>';
                            echo '      <td>'.$row['product_price'].'</td>';
                            echo '      <td>'.$row['product_desc'].'</td>';
                            echo '      <td>'.$row['product_image'].'</td>';
                            echo '      <td>'.$row['product_keywords'].'</td>';
                            echo '      <td style="display:flex; justify-content: space-between;"><a href="update_product.php?product_id='.$row['product_id'].'"class="btn btn-primary">Update</a>
                                        <a href="../functions/delete_function.php?id='.$row['product_id'].'" class="btn btn-danger">Delete</a></td>';
                            //echo ' <td><input type="button" value="Update" name="Update" onclick="validate('.$row['pid'].')" class="btn btn-primary">  
                            //<input type="button" value="Delete" name="Delete" onclick="validate('.$row['pid'].')" class="btn btn-danger">';
                            echo '</tr>'; 
                        
                        }
                        echo ' </tbody>
                            </table>';
                    ?>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="add_product_form" tabindex="-1" role="dialog" aria-labelledby="add_product_formLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_product_formLabel">Add new product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../actions/productprocess.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="product_title">Product name</label>
                        <input type="text" class="form-control" id="product_title" name="product_title" placeholder="name" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="product_price">Selling price</label>
                        <input type="number" min="0.00" class="form-control" id="product_price" name="product_price" placeholder="price" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="product_brand">Brand</label>
                            <select id="product_brand" name="product_brand" class="form-control">
                                <option selected value="">Choose...</option>
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
                                <option selected>Choose...</option>
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
                        <textarea class="form-control" id="product_desc" name="product_desc" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product_keywords">Product Keywords</label>
                        <input type="text" class="form-control" id="product_keywords" name="product_keywords" placeholder="Apartment, studio, or floor">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

</html>

