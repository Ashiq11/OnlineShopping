<?php
	require("menu.php");
	include("database.php");
	print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Men Fashion' and type='Sports Outfit';";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
$_SESSION["pid"]=$jsonData[1]["pid"];


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
								<td colspan="5" > <img  src="Sports_product/2.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Swimming Musk</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 1800.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/3.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jersey</td>
							</tr>
							
								<td colspan="3">Tk 850.00</td>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/4.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Helmet</td>
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
								<td colspan="5" > <img  src="Sports_product/5.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Dumble</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 2040.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Football</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 740.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/7.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Rugby</td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan="3">Tk 1840.00</td>
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/8.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Gloves</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 1250.00</td>
								
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
								<td colspan="5" > <img  src="Sports_product/9.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Goggles</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 1190.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/10.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Boxing Glove </td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 2290.00</td>
								
							</tr>
							<tr>
								<
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/11.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Golf Ball</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3"> Tk 340.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Sports_product/12.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Swimming Goggle</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 940.00</td>
								
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

