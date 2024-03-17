<?php
include_once("./db_connect.php") ;

$id=$_GET["row_id"];
$sql="DELETE FROM products WHERE id=$id";
$query=mysqli_query($conn,$sql);
if($query){
    header("Location:product-create-list.php");
}
?>