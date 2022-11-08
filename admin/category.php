<div class="col-sm">
            <form  method="POST" action="../actions/categoryproccess.php" id="form" class="form" data-parsley-validate="">
                <h2>Category Dashboard</h2>
                <h5 style="color: red;">
                    <?php
                        if (isset($_GET["error"]))
                        {
                            echo $_GET["error"];
                            
                        }
                        else {
                            echo "";
                        }
                       

                    ?>
                </h5><br>
                <div class="form-control ">
                    <label for="category_name">category name:</label>
                    <input type="text" id="category_name" name="category_name" placeholder="Enter your category name" value="<?php  if (isset($_GET["cat_id"])){ 
                        $cat_id=$_GET["cat_id"];
                        $category=select_one_category_controller($cat_id);
                        echo $category["cat_name"];
                    } ?>" data-parsley-required="true">
                    <small id="category_nameError"></small>
                    <input type="hidden" name="cat_id" value="">
                    <?php if (isset($_GET["cat_id"])){ 
                        echo '<input type="hidden" name="cat_id" value="'.$_GET["cat_id"].'">';
                        echo '<button type="submit" name="Update" class="btn btn-primary">Update</button>';
                    }
                    else {
                        echo '<button type="submit" name="submit" class="btn btn-primary">ADD</button>';
                    }
                    ?>
                    
                </div>
                
            </form>
            <br>
            <?php
                $rows=select_all_category_controller();
                //print_r($rows);
                echo '<table class="table table-striped table-dark">';
                    echo '<thead>';
                    echo '    <tr>';
                    echo '    <th scope="col">ID</th>';
                    echo '    <th scope="col">Name</th>';
                    echo '    <th scope="col">buttons</th>';
                    echo '    </tr>';
                    echo '</thead>';
                foreach( $rows as $row ){
                    
                        
                
                    echo '<tbody>';
                    echo '    <tr>';
                    echo '       <td>'.$row['cat_id'].'</td>';
                    echo '       <td>'.$row['cat_name'].'</td>';
                    echo '       <td><a href="?cat_id='.$row['cat_id'].'">Update</a> <a href="../functions/delete_function.php?cat_id='.$row['cat_id'].'" >Delete</a></td>';
                    //echo ' <td><input type="button" value="Update" name="Update" onclick="validate('.$row['pid'].')" class="btn btn-primary">  
                    //<input type="button" value="Delete" name="Delete" onclick="validate('.$row['pid'].')" class="btn btn-danger">';
                    echo '</tr>'; 
                
                }
                echo ' </tbody>
                    </table>';
            ?>
        </div>