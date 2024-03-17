<?php
include_once("./db_connect.php");
$id=$_POST['row_id'];
$customer_name=$_POST['customer_name'];
$product_name=$_POST['product_name'];
$amount=$_POST['amount'];
$stock=$_POST['stock'];
$order_date=$_POST['order_date'];
$sql="UPDATE orderlists SET customer_name='$customer_name',product_name='$product_name',amount=$amount,stock='$stock',order_date='$order_date' WHERE id=$id";
$query=mysqli_query($conn,$sql);
if($query){
    header('Location:orderlists-create-list.php');
}