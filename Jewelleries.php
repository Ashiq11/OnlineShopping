<?php
	require("menu.php");
	include("database.php");
	print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Womens Fashion' and type='Women Jewelleries';";
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
								<td colspan="5" > <img  src="Women/Jewelleries/2.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 11800.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/3.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							
								<td colspan="3">Tk 11850.00</td>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/4.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 11040.00</td>
								
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
								<td colspan="5" > <img  src="Women/Jewelleries/5.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							
							<tr>
								<td colspan="3">Tk 12040.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/6.PNG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 11740.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/7.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td colspan="3">Tk 11840.00</td>
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/8.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 11250.00</td>
								
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
								<td colspan="5" > <img  src="Women/Jewelleries/9.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 11190.00</td>
								
							</tr>
							<tr>
								
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/10.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5"> Jewelleries</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 12290.00</td>
								
							</tr>
							<tr>
								<
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/11.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5"> Jewelleries</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3"> Tk 11340.00</td>
								
							</tr>
							

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Women/Jewelleries/12.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Jewelleries</td>
							</tr>
							<tr>
								
							</tr>
							<tr>
								<td colspan="3">Tk 12940.00</td>
								
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

