<!DOCTYPE>
<html>
<head>
	<title>Payment Page</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
	</script>

	<style type="text/css">
		

		#delivery{
text-align: center;
		position: absolute;
		top: 100px;
		left: 500px;
		border: 3px inset red;
		height: 300px;
		width: 600px;
		}


	</style>
</head>
<body><div id="container">
<div id="delivery">
<form>
	<h1>Delivery Options</h1>
  <input type="radio" name="delivery" value="cod" checked id="cash"> Cash on delivery<br>
  <input type="radio" name="delivery" value="paytm" id="paytm"> Paytm<br><br>
 <button type="button" class="btn btn-success" onclick="placeOrder()"> Place Order</button>
</form> 

<div style="">
<h1  id="response"></h1>
</div>
</div>



</body>
<script>
function placeOrder()
{
	$("#response").html("Order Placed Successfully...");
}


    $('#cash').change(function() {
        if(this.checked) {
            $("#response").html("");
        }       
    });

   $('#paytm').change(function() {
        if(this.checked) {
            $("#response").html("");
        }       
    });
</script>
</html>