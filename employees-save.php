<?php

$conn=mysqli_connect("localhost","***","****","****");
if(!$conn){
    die(mysqli_connect_errno());
}
print_r($_POST);
$name=$_POST["name"];
$email=$_POST["email"];
$phone_num=$_POST["phone_num"];
$position=$_POST["position"];
$hired_date=$_POST["hired_date"];
$sql="INSERT INTO employees (name,email,phone_num,position,hired_date) VALUES ('$name','$email',$phone_num,'$position','$hired_date')";
$query=mysqli_query($conn,$sql);
if($query){
    header("Location:employees-create-list.php");
}