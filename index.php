<?php
	
	include("database.php");
	session_start();
	$sql="SELECT * FROM iteam WHERE pid='".$_SESSION["pid"]."'";
	$jsonData= getJSONFromDB($sql);
	$jsonData = json_decode($jsonData, true);
?>
<html>
	<style>
	table, tr, td {
		border: 1px solid black;
		border-collapse: collapse;
	}
	</style>
	<body>
		<form method='POST'action="payment.php" >
		<b>1.YOUR EMAIL: </b>
		<?php //$_SESSION['email']=$email;
			//var_dump($GLOBALS);
			//echo $_POST['email'];?>
		<br/>
		<br/>
		<hr/>
		<b>2.YOUR ADDRESS: </b>
		<?php //echo $address;?>

		<div align="center">
		<input type="submit" value="CHANGED ADDRESS" onclick="window.location.href='check_place_order.php'" style="color:white;background-color:green;" >
		</div>
		<hr/>
		<b>3.ORDER SUMMARY</b>
		<br/>
		<hr/>
		<b>Select your shipping:</b>
		<br/>
		<br/>
		<input type="radio" name="shipping" checked>
			Delivered in 2-5 days<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; at your doorstep for Tk 40.00<br/>
		<hr/>
		
		<b>Your Order:</b>
		<br/>
		<br/>
		<table style="width:100%">
			<tr>
				<td><b>ITEM</b></td>
				<td><b>QUANTITY</b></td>
				<td><b>UNIT PRICE</b></td>
				<td><b>DELEVERY DETAILS</b></td>
				<td valign="center"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL PRICE</b></td>
			</tr>
			<tr>
				<td><?php echo $jsonData[0]["brand"];?><br/>
				<?php echo"SIZE: "; echo $jsonData[0]["size"];?></td>
				<td><?php $quantity=$_POST['quantity'];
							echo $quantity;
				?></td>
				<td><?php echo"TK "; echo $jsonData[0]["price"];?> </td>
				<td>Delivered in 3-10 days
				</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
						$price=$quantity*$jsonData[0]["price"];
						echo $price;
					?>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				<td valign='right'>SUBTOTAL: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
						
						echo $price;
					?>
				</br>
				SHIPPING AMOUNT:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+<?php
						$i=40;
						echo $i;
					?></br>
				</td>	
			</tr>
			<tr>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				<td>
				</td>
				<td valign="right">
				<b>TOTAL:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					<form method='POST' action="payment.php">
					<input type=text name="price" value="<?php
					echo $total=$price+$i ." TK";
					?>">
					<input type="button" value="PLACE ORDER"  size="20" onclick="window.location.href='payment.php'" style="width:170px;font-size:15pt;color:white;background-color:orange;">
					</form>
					
				</b>
			</tr>
		</table>
		<br/>
		<br/>
		<center>
		
		</center>
		</form>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>