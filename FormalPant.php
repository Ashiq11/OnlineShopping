<?php
	require("menu.php");
	include("database.php");
	print_r($GLOBALS);
	
//SELECT * FROM iteam WHERE category="Men Fashion" and type="Formal Shirts";
$sql="SELECT * FROM iteam WHERE category='Men Fashion' and type='Formal Pants';";
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
			<table border="0" cellspacing="0">
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
								<td colspan="3"><?php echo $jsonData[0]["price"];?></td>
								<td colspan="2"><?php echo $jsonData[0]["discount"];?></td>
							</tr>
							<tr>
								<td>30</td>
								<td>31 </td>
								<td>32</td>
								<td>33</td>
								<td>34</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/2.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">CK</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 1500.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>28</td>
								<td>30 </td>
								<td>32</td>
								<td>34</td>
								<td>36</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/3.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Fashion</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 1940.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>30</td>
								<td>31 </td>
								<td>31</td>
								<td>32</td>
								<td>33</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/4.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Yellow</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 1240.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>30</td>
								<td>29 </td>
								<td>28</td>
								<td>31</td>
								<td>32</td>
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/5.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Eastasy</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 1440.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>30</td>
								<td>31 </td>
								<td>32</td>
								<td>33</td>
								<td>34</td>
							</tr>

						</table>
					</td>
					<td>
						<<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/6.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">CK</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3"> Tk 1820.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>27</td>
								<td>28 </td>
								<td>29</td>
								<td>30</td>
								<td>31</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/7.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">levis</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 5420.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>29</td>
								<td>30 </td>
								<td>31</td>
								<td>33</td>
								<td>32</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/8.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Denim</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 3940.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>30</td>
								<td>31 </td>
								<td>32</td>
								<td>33</td>
								<td>34</td>
							</tr>

						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/9.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Arong</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 2940.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>27</td>
								<td>28</td>
								<td>29</td>
								<td>30</td>
								<td>31</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/10.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">CK</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 2430.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>29</td>
								<td>30 </td>
								<td>31</td>
								<td>32</td>
								<td>33</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/11.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Denim</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3"> Tk 1570.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>27</td>
								<td>28</td>
								<td>29</td>
								<td>30</td>
								<td>31</td>
							</tr>

						</table>
					</td>
					<td>
						<table border="0">
							<tr>
								<td colspan="5" > <img  src="Formal_pant/12.JPG" alt="Mountain View" style="width:290px;height:230px;"></td>
							</tr>
							<tr>
								<td colspan="5">Levis</td>
							</tr>
							<tr>
								<td colspan="5">Formal Pant for Men</td>
							</tr>
							<tr>
								<td colspan="3">Tk 940.00</td>
								<td colspan="2">-10%</td>
							</tr>
							<tr>
								<td>30</td>
								<td>31 </td>
								<td>32</td>
								<td>33</td>
								<td>34</td>
							</tr>

						</table>
					</td>
				
				</tr>
			</table>
		</center>
	
	</body>
	<br/>
	<br/>
	<br/>
</html>

<?php
include ("footer.php");
?>

