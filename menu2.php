<?php
include ("menu.css");
?>
<html>
	<head>
		<title>Friends And Family</title>
	</head>
	
	<body>
		<header style="height:12em;">
<div class="cc" >			
			<table  style="width:100%" border="0" cellpadding="20" cellspacing="0">
				<tr>
					<center>
						<h1><span style="background-color:orange"><text style="color:white;"> Friends and Family.Com.bd</text></span></h1>
					</center>
				</tr>
				<tr>
					<td align = 'left'>
						<?php 
							date_default_timezone_set("Asia/Dhaka");
							echo "<p align=\"RIGHT\">"."<b>". date("l")."</b>"."&nbsp;&nbsp;&nbsp"."<b>".date("Y-m-d ")."</b>"."</p>";			
						?>
					</td>
					
					<td align = 'center'>
						<div class="dropdown" style="float:left;">
						  <button class="dropbtn"><a href="FnF_Home.php" style="color:white">Home</a></button>
						</div>		
					</td>
					
					<td align = 'center'>
						<a>
							<input class="search"type ="text" name="search" id="search" placeholder="Search for Products, Brands and Categories" size="40"> <input class="searchb" type ="Submit" name="search" id="search" value="Search"  >
						</a>
					</td>
					
					<td align = 'center'>
						<div class="dropdown" style="float:left;">
						  <button class="dropbtn">Contact Us</button>
						  <div class="dropdown-content" style="left:0;"><br/>
							<b>Call Us Now</b><br/>
							16242<br/>
							<a href="help.php"><font color = "blue">FnF Help center </font> </a><br/>
							<a href="whyshop.php"><font color = "blue">Why Shop on FnF ?</font></a><br/>
							<a href="howtoshop.php"><font color = "blue">How to shop on FnF ?</font></a><br/>
							<br/>
							<span align="center"><b>Track Your Order</b></span><br/>
							<p>Your order number: <br/>
							<input type ="order" name="order_number" id="order" ><br/>
							Your email: <br/>
							<input type="email" name="user_email" placeholder="username@gmail.com">
							<br/>
							<br/>
							<input type="submit" value="TRACK" style="font-size:12pt;color:white;background-color:green;border:2px solid #336600;padding:3px">
							</p>
						  </div>
						</div>						
					</td>
					
					<td align = 'center'>
						<div class="dropdown" style="float:left;">
						  <button class="dropbtn">Your Account</button>
						  <div class="dropdown-content" style="left:0;">
							<br/>
							<input type="hidden" value="LOGIN" onclick="window.location.href='login.php'" size="30" style="height:25px; width:100px; color:white;background-color:orange;">
							<input type="button" value="LOGOUT" onclick="window.location.href='logout.php'" size="30" style="height:25px; width:100px; color:white;background-color:orange;">
							<p> New in Friends And Family? <a href="registration.php"><font size="3" color = "blue"><b>Sign-up now! </b></font></a>
							<br/>
							<br/>
							<span align="center"><b>Track Your Order</b></span><br/><br/>
							Your order number: <br/>
							<input type ="order" name="order_number" id="order" ><br/>
							Your email: <br/>
							<input type="email" name="user_email" placeholder="username@gmail.com">
							<br/>
							<br/>
							<input type="submit" value="TRACK" style="font-size:12pt;color:white;background-color:green;border:2px solid #336600;padding:3px">
							</p>
						</div>							
					</td>
					
					<td align = 'center'>
						<table>
							<tr>
								<td align = 'center'>
									<div class="dropdown" style="float:left;">
										<button class="dropbtn"><a href="cart.php" style="color:white">Cart</a></button>
									</div>										
								</td>
								<td align = 'center'>
									<img src="01.png" width="60" height="60" align="right">
								</td>
							</tr>
						</table>
						
					</td>
					
				</tr>	
				
			</table>
			</div>
		</header>
	</body>