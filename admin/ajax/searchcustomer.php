		<br><br>
		<TABLE class="table table-bordered">
		<tr class="bg-primary text-white">
		<td>Name</td>
		<td>Contact</td>
		<td>Email</td>
		<td>Address</td>
		<td>Ship Address</td>
		</tr>
		
		<?php
			include("../conn.php");
			$str=$_POST["str"];
			$sql="select * from customer_details where customer_name like '%$str%'";
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
			else
			{
				echo	'<tr><td colspan="5">NO CUSTOMER FOUND</td></tr>';
			}
			
		?>
		</TABLE>