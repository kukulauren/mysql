<?php
include_once("./db_connect.php");
$id=$_POST['row_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone_num=$_POST['phone_num'];
$position=$_POST['position'];
$hired_date=$_POST['hired_date'];
$sql="UPDATE employees SET name='$name',email='$email',phone_num=$phone_num,position='$position',hired_date='$hired_date' WHERE id=$id";
$query=mysqli_query($conn,$sql);
if($query){
    header('Location:employees-create-list.php');
}