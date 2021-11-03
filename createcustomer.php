<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<style type="text/css">
	
#loader
{
position: absolute;
top: 150px;
left: 450px;
}


</style>
</head>
<body>
<?php
include("admin/conn.php");



$customer_name=$_POST["customer_name"];
$customer_email=$_POST["customer_email"];
$customer_contact=$_POST["customer_contact"];
$customer_shipaddress=$_POST["customer_shipaddress"];
$customer_address=$_POST["customer_address"];
//$customer_location=$_POST["customer_location"];
$customer_password=$_POST["customer_password"];

$sql="INSERT INTO `customer_details`( `customer_name`,  `customer_address`, `customer_shipaddress`, `customer_contact`, `customer_email`, `customer_password`) VALUES ('$customer_name','$customer_address','$customer_shipaddress','$customer_contact','$customer_email','$customer_password')";
//echo $sql;
$result=$conn->query($sql);
if($result== true){

	echo"<div class='alert alert-success'>";
  echo "<strong>Success!</strong> You are registered Successfully";
  echo "<br>";
  echo "This page will redirect after 5 seconds on login page";
echo "</div>";

echo"<script>
         setTimeout(function(){
            window.location.href = 'http://localhost/cakenation/customerlogin.php';
         }, 5000);
      </script>";

      echo "<img src='./img/5.gif' alt='animated' id='loader'/>";
}
else
{

	echo("Error description: " . mysqli_error($conn));
}

?>
</body>
</html>



