<html>
<body>
<?php 
require("menu.php");
?>
<?php 
require("home.css");
?>
<content>
	<table style="width:100%" border="0" cellpadding="70" cellspacing="0">
		<tr>
			<td valign="top">
				<table style="width:100%" cellpadding="4" cellspacing="4">
					<tr>
						<td>
			
							<font size="5px"><b style="color:purple"><a class="none" href="#">All Category:</a><b></font>
						</td>
					</tr>
					<tr>
						<td>
							<div class="dropdown1">
							<button class="dropbtn1" >Men's Fashion </button>
							<div class="dropdown1-content">
							<a href="CausalTshirt.php">Casual Shirt</a>
							<a href="JeansPants.php">Jeans Pants</a>
							<a href="FormalShirt.php">Formal Shirts</a>
							<a href="FormalPant.php">Formal Pants</a>
							<a href="Watch.php">Watch</a>
							<a href="Footwear.php">Footwear</a>
							<a href="SportProduct.php">Sports Outfit</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="dropdown1">
							<button class="dropbtn1">Women's Fashion</button>
							<div class="dropdown1-content">
							<a href="dress.php">Dresses</a>
							<a href="cosmetics.php">Cosmetics</a>
							<a href="shoe.php">Women's shoes</a>
							<a href="Jewelleries.php">Women's Jewelleries</a>							
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="dropdown1">
							<button class="dropbtn1">Phone and Tablets</button>
							<div class="dropdown1-content">
							<a href="SmartPhone.php">Smart Phones</a>
							<a href="SmartWatch.php">Smart Watch</a>
							<a href="Accesories.php">Accesories</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="dropdown1">
							<button class="dropbtn1">Home and Livings</button>
							<div class="dropdown1-content">
							<a href="Lighting.php">Lighting</a>
							<a href="Bedding.php">Bedding</a>
							<a href="Furniture.php">Furniture</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="dropdown1">
							<button class="dropbtn1">Computing and Gaming</button>
							<div class="dropdown1-content">
							<a href="laptop.php">Laptops</a>
							<a href="Storage.php">Storage</a>
							<a href="Monitor.php">Monitors</a>
							<a href="comOther.php">Others</a>
							</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="dropdown1">
							<button class="dropbtn1">Others</button>
							<div class="dropdown1-content">
							<a href="Auto.php">Automobiles</a>
							<a href="kid.php">KIDS</a>
							<a href="pet.php">Pets</a>
							</div>
							</div>
						</td>
					</tr>
				</table>
			</td>
			<td >
				<head>
					<script type="text/javascript">
						<!-->
						var image1=new Image()
						image1.src="slider_Pic/1.jpg"
						var image2=new Image()
						image2.src="slider_Pic/2.jpg"
						var image3=new Image()
						image3.src="slider_Pic/3.jpg"
						var image4=new Image()
						image4.src="slider_Pic/4.jpg"
						var image5=new Image()
						image5.src="slider_Pic/5.jpg"
						var image6=new Image()
						image6.src="slider_Pic/6.jpg"
						var image7=new Image()
						image7.src="slider_Pic/7.jpg"
						//-->
					</script>
				</head>
				<body>
					<img src="slider_Pic/1.png" name="slide" width="750" height="400">
					<script type="text/javascript">
						<!--
						var step=1
						function change(){
						document.images.slide.src=eval("image"+step+".src")
						if(step<7)
						step++
						else
						step=1
						setTimeout("change()",2000)
						}
						change()
						//window.setInterval(change, 1000);
						//-->
					</script>
				</body>
			</td>
		</tr>
	</table>
	<script type="text/javascript">
		function show1(){
		document.getElementById("brandsWeek").style.display="block";
		document.getElementById("fashionBrands").style.display="none";
		document.getElementById("electronicsBrands").style.display="none";
		document.getElementById("mobileBrands").style.display="none";

		}
		function show2(){
		//alert("s2");
		document.getElementById("brandsWeek").style.display="none";
		document.getElementById("fashionBrands").style.display="block";
		document.getElementById("electronicsBrands").style.display="none";
		document.getElementById("mobileBrands").style.display="none";

		}
		function show3(){
		//alert("s2");
		document.getElementById("brandsWeek").style.display="none";
		document.getElementById("fashionBrands").style.display="none";
		document.getElementById("electronicsBrands").style.display="block";
		document.getElementById("mobileBrands").style.display="none";

		}
		function show4(){
		//alert("s2");
		document.getElementById("brandsWeek").style.display="none";
		document.getElementById("fashionBrands").style.display="none";
		document.getElementById("electronicsBrands").style.display="none";
		document.getElementById("mobileBrands").style.display="block";

		}
	</script>
	<style>
		.brands{
			padding: 8px;
			font-size: 16px;
			border: none;
			cursor: pointer;
		}
	</style>
	<table  align='center' border="0" cellpadding="5" cellspacing="10">
		<tr>
			<td>
			<div class="brands" style="background-color: #4CAF50; color:white">
				<b><a onclick="show1()">BRANDS OF THE WEEK</a></b>
			</div>
			</td>
			<td>
			<div class="brands" style="background-color: #4CAF50; color:white">
				<b><a onclick="show2()">FASHION BRANDS</a></b>
			</div>	
			</td>
			<td>
			<div class="brands" style="background-color: #4CAF50; color:white">
				<b><a onclick="show3()">ELECTRONICS BRANDS</a></b>
			</div>
			</td>
			<td>
			<div class="brands" style="background-color: #4CAF50; color:white">
				<b><a onclick="show4()">MOBILE BRANDS</a></b>
			</div>
			</td>
		</tr>
	</table>
	<br/>
	<br/>
    <table id="brandsWeek" style="display:block" align='center'>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/linnex.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/samsung.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/LG.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/sony.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/bata.png">
				</a>
			</td>
		</tr>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/singer.png">
				</a>
			</td>
			<td valign = "center">
				<a href="apex.php">
				<img src="brands_Pic/apex.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/ecastisy.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/yellow.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/remix.png">
				</a>
			</td>
		</tr>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/asus.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/jennys.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/lenovo.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/dorjiBari.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/Miyako.png">
				</a>
			</td>
		</tr>
	</table>
	<table id="fashionBrands" style="display:none" align='center'>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/apex.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/ecastisy.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/bata.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/yellow.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/smartext.png">
				</a>
			</td>
		</tr>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/dorjiBari.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/remix.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/jennys.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/ck.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/latherex.png">
				</a>
			</td>
		</tr>
	</table>
	
	<table  id="electronicsBrands" style="display:none" align='center'>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/linnex.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/sony.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/samsung.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/LG.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/general.png">
				</a>
			</td>
		</tr>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/singer.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/Miyako.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/walton.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/panasonic.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/remix.png">
				</a>
			</td>
		</tr>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/lenovo.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/fujifilm.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/asus.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/hitachi.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/chigo.png">
				</a>
			</td>
		</tr>
	</table>
	<table  id="mobileBrands" style="display:none" align='center'>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/linnex.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/samsung.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/LG.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/walton.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/micromax.png">
				</a>
			</td>
		</tr>
		<tr>
			<td>
			<img src="space.PNG">
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/oppo.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/htc.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/mi.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/iphone.png">
				</a>
			</td>
			<td valign = "center">
				<a href="mobileBrands.php">
				<img src="brands_Pic/huawei.png">
				</a>
			</td>
		</tr>
	</table>
</content>
<br/>
<br/>
<br/>
<br/>
<?php 
require("footer.php");
?>
</body>
</html>




