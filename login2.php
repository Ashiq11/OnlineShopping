<?php
	require("menu.php");
?>
<html>
	<head>
		<title>Friends And Family
		</title>
		<h3>Please Login<hr/></h3>
	</head>
	<br/><br/>
	<body>
		<div align="center">
		<p>
			<div><font size = "5">Enter your password</font></div><br/>
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input style = "height:30px; width:280px;" type = "password" name = "email" size ="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="login.php"><font size="2" color = "purple"><b> Change email? </b></font></a>
			<br/><br/><input type="checkbox" name="received" value="received">Remeber Password<br/>
			<br/><input style = "height:30px; width:180px; color:white;background-color:orange;" type ="button" name = "proceed" size = "35" value = "Proceed" onclick="window.location.href='Admin/AdminHome.php'">
			<br/><br/><a href="registration.php"><font size="3" color = "grey"><b> Forgot password? </b></font></a>
			<br/><p>New in Friends And Family? <a href="registration.php"><font size="2" color = "blue"><b>Sign-up now! </b></font></a>
			</p><br/>
		</p>	
		</div>
	</body>
	<br/>
	<br/>
	<br/>
	<br/>
	<?php 
	require("footer.php");
	?>
</html>

