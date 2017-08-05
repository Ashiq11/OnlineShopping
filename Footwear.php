<?php
	require("menu.php");
	include("database.php");
	print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Men Fashion' and type='Footwear';";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$_SESSION["pid"]=$jsonData[1]["pid"];


?>


<?php 
require("home.css");
?>

<html>
	<head>
		<title>Friends And Family</title>
	</head>
	
		<body>
		<center>
			<table border="0" cellspacing="15">
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" ><a href="Details.php"> <img src="<?php echo $jsonData[0]["image"];?>" alt="Mountain View" style="width:290px;height:230px;"></a></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["brand"];?></td>
							</tr>
							<tr>
								<td colspan="5"><?php echo $jsonData[0]["color"];?></td>
							</tr>
							<tr>
								<td colspan="3"><?php echo"TK ";echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];echo"%";?></td>
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/2.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">BATA</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 2840.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/3.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Letherex</td>
							</tr>
							
								<td colspan="3">Tk 850.00</td>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/4.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Fourtune</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 1040.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/5.jpg" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jennys</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 7040.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">APEX</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 1740.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/7.jpg" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">APEX</td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan="3">Tk 840.00</td>
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/8.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Zoles</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 850.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Footwear/9.jpeg" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">ZOla</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 1900.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					
				
				</tr>
			</table>
		</center>
	
	</body>
	
	

	
</html>

<?php
include ("footer.php");
?>

