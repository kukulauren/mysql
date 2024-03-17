<?php
include_once("./db_connect.php");
$orderlists_id=$_GET["orderlists_id"];
$sql="DELETE FROM orderlists WHERE id=$orderlists_id";
$query=mysqli_query($conn,$sql);
if($query){
    header("Location:orderlists-create-list.php");
}