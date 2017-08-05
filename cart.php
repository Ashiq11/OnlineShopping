<?php
	require("menu.php");
		include("database.php");
		session_start();
		

	$sql="SELECT * FROM iteam WHERE pid='".$_SESSION["pid"]."'";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
?>
<html>
	<head>
		<title>Friends And Family
		</title>
	</head>
	
	<body>
	
		<center>
		<form method="POST" action="index.php">
			<h2 align="center">CART</h2>
			<table align="center"   border="0" cellpadding="25" cellspacing="0">
				<tr>
					<td>
						<table align="center"   border="0" cellpadding="0" cellspacing="0" >
							<tr>
								<td>
									Item
								</td>
							</tr>
							<tr>
								<td>
									<img src="<?php echo $jsonData[0]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a>
								</td>
							</tr>
							<tr>
								<td>
									<?php echo $jsonData[0]["brand"];?>
								</td>
							</tr>
							<tr>
								<td>
								<?php echo"SIZE: "; echo $jsonData[0]["size"];?>
								</td>
							</tr>
							<tr>
								<td>
								<?php echo $jsonData[0]["brand"];?>
								</td>
							</tr>
						</table>
					</td>
					<td>
					<input type ="text" name="quantity" id="quantity" placeholder="Type your quantity" size="12">
					</td>
					<td>
					<b>Unit Price </b>
					<br/>
					<br/><?php echo"Tk "; echo $jsonData[0]["price"];?>
					</td>
				</tr>
			
			</table>
		
		<input style = "height:30px; width:250px; color:white;background-color:orange;" type ="submit" name = "proceed"  value = "Proceed to checkout" onclick="window.location.href='index.php'" >
		</table>
		
		</form>	
		</center>
	
	</body>
	<br/>
	<br/>
	<br/>
</html>


<?php
	include("footer.php");
?>