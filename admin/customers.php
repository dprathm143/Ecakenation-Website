<?php
session_start();
if(!isset($_SESSION["admin_name"]))
{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <?php include("resource.php");?>
  </head>

  <body>

    <!-- Navigation -->
    <?php include("nav.php");?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <div class="list-group">
		  <?php #include("sidenav.php");?>
          
          </div>

        </div>
        <!-- /.col-lg-3 -->
		
        <div class="col-lg-9">
		<BR>
		<input type="text" name="search_str" id="search_text" onkeyup="fetchcustomer(this.value)" style="width:200px;margin-right:20px;float:right;" placeholder="Search Customer"><br>
		<div id="search_result">
		</div>
		<br>
		<TABLE class="table table-bordered">
		<tr>
		<td colspan="5"><h3 class="bg-success text-white">ALL CUSTOMER DETAILS</h3></td>
		</tr>
		<tr class="bg-primary text-white">
		<td>Name</td>
		<td>Contact</td>
		<td>Email</td>
		<td>Address</td>
		<td>Ship Address</td>
		</tr>
		
		<?php
			include("conn.php");
			$sql="select * from customer_details order by customer_name";
			$result=$conn->query($sql);
			if($result->num_rows >0){
			while($row=$result->fetch_assoc())
				{
				echo	'<tr><td>'.$row["customer_name"].'</td>
						<td>'.$row["customer_contact"].'</td>
						<td>'.$row["customer_email"].'</td>
						<td>'.$row["customer_address"].'</td>
						<td>'.$row["customer_shipaddress"].'</td></tr>';

				}
			}
			
		?>
		</TABLE>
		<br>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

     <?php include("footer.php");?>

    <!-- Bootstrap core JavaScript -->

  </body>

</html>
