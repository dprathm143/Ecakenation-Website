<?php
session_start();
include("conn.php");
$admin_password=$_POST["admin_password"];
$sql="update admin_details set admin_password='$admin_password' where admin_code=".$_SESSION["admin_code"];
$conn->query($sql);
header("location:adminhome.php");
?>