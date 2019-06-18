<?php
   include "../../functions/connect.php";
   extract($_POST);

   $sql = mysqli_query($con,"INSERT INTO `tbl_category`(`name`, `description`)  VALUES ('$cat_name','$cat_desc')");
   $description = "New Category $cat_name Added by Admin!";

   $sql1 = mysqli_query($con,"INSERT INTO `tbl_notifi`(`description`)  VALUES ('$description')");

    
                    if($sql==true)
                                  {
                                        echo '<script language="javascript">';
                                        echo 'alert("Successfully Added")';
                                        echo '</script>';
                                        echo '<meta http-equiv="refresh" content="0;url=index.php" />';
                                  }
                        
                        
                    ?>