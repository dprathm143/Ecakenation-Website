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


<center><h1>Comment Box</h1></center>
<!-------Wrap------------>
<div id="wrap" >
<div id="main" >
<div class="row" >
<div class="col-md-5" >
<h3 class="heading" >Admin Responses</h3>
</div>
<div class="col-md-7">
<div id="upper_blank"></div>
</div>
</div>
</div>

<!------------Form Start---------->

<div id='form'>
<div class="row">
<div class="col-md-12">

<form action="adcom.php" method="POST" id="commentform" >
<div id="comment-name" class="form-row">
<input type="text"  placeholder = "name" name="name"  id = "name" required >
</div><br>
<div id="comment-message" class="form-row">
<textarea name="message" placeholder = "Message" id="comment" required></textarea>
</div><br>
<div id="comment-name" class="form-row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="date" readonly value="<?php echo date("Y-m-d");?>" required >&nbsp;&nbsp;</div><br>
<input type="submit" name="dsubmit" id="commentSubmit" value="POST" ></a>
</form>
</div>
</div>
</div>
</div><!-------------------Reply Section------->
<?php
include('conn.php');
$sql="select * from feedback";
$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
	    echo '<div class="container">';
		echo '<div class="row" style="background-color:#ffffff;">';
		echo '<table class="table table-bordered">';
        echo '<tr>';
		echo '<td align="left" style="color:#00007d;">Name::<em><strong>'.$row["name"].'</em></strong></td>';
		echo '<td align="left" style="color:#00007d;">Message::<em><strong>'.$row["message"].'</em></strong></td>';
		echo '<td align="left" style="color:#00007d;">Date::<em><strong>'.$row["date"].'</em></strong></td>';	
		echo '</tr>';
		echo '</table >';
		echo '</div>';
		echo '</div>';
		}

}
?>
<a href="#"><input type="button" value = "reply" name = "dreply" id = "inner_reply"></a>
  </body>
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
