<?php

$conn=mysqli_connect("localhost","***","****","****");
if(!$conn){
    die(mysqli_connect_errno());
}
print_r($_POST);
$customer_name=$_POST["customer_name"];
$product_name=$_POST["product_name"];
$amount=$_POST["amount"];
$stock=$_POST["stock"];
$order_date=$_POST["order_date"];
$sql="INSERT INTO orderlists (customer_name,product_name,amount,stock,order_date) VALUES ('$customer_name','$product_name',$amount,'$stock','$order_date')";
$query=mysqli_query($conn,$sql);
if($query){
    header("Location:orderlists-create-list.php");
}