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
		  <?php include("sidenav.php");?>
          
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
		<BR>
		<BR>
		<input type="text" name="search_str" id="search_text" onkeyup="fetchcustomer(this.value)" style="width:200px;margin-right:20px;float:right;" placeholder="Search Customer"><br>
		<div id="search_result">
		</div>
		<br>
		<TABLE class="table table-bordered">
		<TR class="bg-primary" style="color:white;">
			<TD colspan="3"><CENTER>ALL ORDERS</CENTER></TD>
		</TR>
		<TR>
			<TD>Order date</TD>
			<TD>Payable Amount</TD>
			<td>Show Bill</td>
		</TR>
		<?php
		include("conn.php");
		$sqla="select * from order_details order by order_date desc";
		$resulta=$conn->query($sqla);
		while($rowa=$resulta->fetch_assoc())
		{
			echo '<TR>
			<TD>'.$rowa["order_date"].'</TD>
			<TD>'.$rowa["payable_amount"].'</TD>
			<td><A HREF="generatebill.php?customer_code='.$rowa["customer_code"].'&order_code='.$rowa["order_code"].'&order_date='.$rowa["order_date"].'">show</A></td>
		</TR>';
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
