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
		<center>
		<br>
		<br>
		<h2 class="bg-success" style="color:white;">EDIT CATEGORY</h2>
		<?php
		include("conn.php");
		$sql="select * from category_details where category_code=".$_GET["category_code"];
		$result=$conn->query($sql);
		while($row=$result->fetch_assoc()){

			$category_name=$row["category_name"];
		}
		?>
		<form method="post" action="edittype.php">
			<table width="60%" class="table table-bordered">
			<tr>
				<td>Cake Type</td>
				<td><input type="text" name="category_name" value="<?php echo $category_name;?>" class="form-control" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="UPDATE" class="btn btn-primary"></td>
			</tr>
			</table>
			<input type="hidden" name="category_code" value="<?php echo $_GET["category_code"];?>">
		</form>
		</center>
		</div>
		 
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
