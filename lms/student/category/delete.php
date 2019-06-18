<?php
include "../../functions/connect.php";
if($_GET['not_Id'])
{
$id=$_GET['not_Id'];
 $sql = "DELETE FROM tbl_notifi WHERE not_Id='$id'";
 mysqli_query($con,$sql);
}

?>