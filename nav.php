<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
	<a class="navbar-brand" href="#"><IMG SRC="img/itcs2.png" class="img img-responsive" style="height:40px;width:240px;"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav ml-auto">
		<li class="nav-item active">
		  <a class="nav-link" href="index.php">Home
			<span class="sr-only">(current)</span>
		  </a>
		</li>
		<li class="nav-item">
		 <a href="mybasket.php" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span>My Basket</a>
		</li>
		<?php
		if(isset($_SESSION["customer_code"]))
		{
			echo '<li class="nav-item">
		 <a href="myorders.php" class="nav-link"><span class="glyphicon glyphicon-shopping-cart"></span>My orders</a>
		</li>
		<li class="nav-item">
		 <a href="#" class="nav-link"><span class="glyphicon glyphicon-user"></span>welcome '.$_SESSION["customer_name"].'</a>
		</li>
		<li class="nav-item">
		 <a href="logout.php" class="nav-link"><span class="glyphicon glyphicon-login"></span>Logout</a>
		</li>
		';
		}
		else
		{
			echo '<li class="dropdown nav-item">
			<a href="#" class="dropdown-toggle js-activated nav-link" data-hover="dropdown" data-toggle="dropdown" data-target="#"><i class="glyphicon glyphicon-user"></i>&nbsp;Customer</a>
			<ul class="dropdown-menu">
				<li><a href="regcustomer.php">&nbsp;Register</a></li>
				<li><a href="customerlogin.php">&nbsp;Login</a></li>
			</ul>
		</li>';
		}
		?>
		
		<li class="nav-item">
		  <a class="nav-link" href="contact.php">Contact</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="feedback.php">Feedback</a>
		</li>
		<li class="nav-item">
		<a href="https://www.facebook.com" class="nav-link fa fa-facebook"></a>
		</li>
		
		<li class="nav-item">
		<a href="https://www.gmail.com" class="nav-link fa fa-google-plus"></a>
		</li>
	  </ul>
	</div>
  </div>
</nav>