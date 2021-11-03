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

         <?php include("sidenav.php");?>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
		<BR>
		<BR>
          
         <h3 style="color:#3366CC;">ADD NEW CAKE</h3>
		 <?php
		 if(isset($_GET["msg"]))
		 {
			echo '<div class="alert alert-success alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>New Cake added!</strong>
			</div>';
		 }
		 ?>
			<FORM METHOD="POST" ACTION="addnewcake.php" enctype="multipart/form-data">
				<TABLE style="width:60%">
			<TR>
				<TD>Cake Name</TD>
				<TD><INPUT TYPE="text" NAME="product_name" id="product_name" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Cake Type</TD>
				<TD>
				<SELECT NAME="category_code" id="category_code" class="form-control" required>
					<OPTION VALUE="" SELECTED>Select Cake type
					<?php
						$sql2="select * from category_details";
						$result2=$conn->query($sql2);
						if($result2->num_rows>0)
						{
							while($row2=$result2->fetch_assoc())
							{
								echo '<OPTION VALUE="'.$row2["category_code"].'">'.$row2["category_name"];
							}
						}	
					?>
					
				</SELECT>
				</TD>
			</TR>
			<TR>
				<TD>Cake Description</TD>
				<TD><textarea   NAME="product_desc" id="product_desc" class="form-control" required></textarea></TD>
			</TR>
			<TR>
				<TD>Cake Cost</TD>
				<TD><INPUT TYPE="text" NAME="product_cost" id="product_cost" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Total Stock</TD>
				<TD><INPUT TYPE="number" NAME="stock_inhand" id="stock_inhand" class="form-control" required></TD>
			</TR>
			<TR>
				<TD>Cake Image</TD>
				<TD><INPUT TYPE="file" NAME="product_image" accept="image/jpeg" id="product_image" class="form-control" required></TD>
			</TR>
			<TR>
				<TD colspan="2"><CENTER><br><INPUT TYPE="submit" class="btn btn-sm btn-success" VALUE="Add Cake" ></CENTER></TD>
			</TR>
			</TABLE>
			</FORM>
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
