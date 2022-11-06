<div class="col-sm">
            <form  method="POST" action="../actions/brandproccess.php" id="form" class="form" data-parsley-validate="">
                <h2>Brand Dashboard</h2>
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
                    <label for="brand_name">Brand name:</label>
                    <input type="text" id="brand_name" name="brand_name" placeholder="Enter your brand name" value="<?php  if (isset($_GET["brand_id"])){ 
                        $brand_id=$_GET["brand_id"];
                        $brand=select_one_brand_controller($brand_id);
                        echo $brand["brand_name"];
                    } ?>" data-parsley-required="true">
                    <small id="brand_nameError"></small>
                    <input type="hidden" name="brand_id" value="">
                    <?php if (isset($_GET["brand_id"])){ 
                        echo '<input type="hidden" name="brand_id" value="'.$_GET["brand_id"].'">';
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
                $rows=select_all_brand_controller();
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
                    echo '       <td>'.$row['brand_id'].'</td>';
                    echo '       <td>'.$row['brand_name'].'</td>';
                    echo '       <td><a href="?brand_id='.$row['brand_id'].'">Update</a> <a href="../functions/delete_function.php?id='.$row['brand_id'].'" >Delete</a></td>';
                    //echo ' <td><input type="button" value="Update" name="Update" onclick="validate('.$row['pid'].')" class="btn btn-primary">  
                    //<input type="button" value="Delete" name="Delete" onclick="validate('.$row['pid'].')" class="btn btn-danger">';
                    echo '</tr>'; 
                
                }
                echo ' </tbody>
                    </table>';
            ?>
        </div>