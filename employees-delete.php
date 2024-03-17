<?php
include_once("./db_connect.php");
$employee_id=$_GET["employee_id"];
$sql="DELETE FROM employees WHERE id=$employee_id";
$query=mysqli_query($conn,$sql);
if($query){
    header("Location:employees-create-list.php");
}