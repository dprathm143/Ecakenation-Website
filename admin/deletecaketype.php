<?php
$category_code=$_GET["category_code"];
$sql="delete from category_details where category_code=$category_code";
//echo $sql;
include("conn.php");
if($conn->query($sql)){

header("location:caketype.php");
}
else
{
	echo '<BR><BR><center><h2 style="color:red">CANNOT DELETE AS CAKE EXIST FOR THIS CATEGORY<br>
	<a href="caketype.php">BACK</a>
	</h2></center>';
}
?>