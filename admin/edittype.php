<?php
$category_code=$_POST["category_code"];
$category_name=$_POST["category_name"];
$sql="update category_details set category_name='$category_name' where category_code=$category_code";
//echo $sql;
include("conn.php");
$conn->query($sql);
header("location:caketype.php");
?>