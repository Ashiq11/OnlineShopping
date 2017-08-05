<?php
	require("menu.php");
?>

<html>
	<head>
		<title>Friends And Family
		</title>
		<h3>Please Login<hr/></h3>
		
		<script>
		function val(){
			//alert("sss");
			var x = document.getElementById("id1").value;
			alert(x.length);
			if(x.length!=0 && document.getElementById("id2").value.length!=0){
				return true;
			}
			else{
			return false;
		    }
		
		}
		
		</script>
		
		
	</head>
	<br/><br/>
	<body>
	<form method="post" action="bklogin.php">
		<div align="center">
			<div><font size = "5">What is your Email Address?</font></div><br/>
			<input style = "height:30px; width:280px;" type = "text" id="id1" name = "email" placeholder="username@gmail.com" size ="35">
		</div>
		<br/>
		<div align="center">
		<p>
			<div><font size = "5">Enter your password</font></div><br/>
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input style = "height:30px; width:280px;" type = "password" id="id2" name = "password" size ="35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<br/><br/><input type="checkbox" name="received" value="received">Remeber Password<br/>
			<br/><input style = "height:30px; width:180px; color:white;background-color:orange;" type ="submit" size = "35" value = "Proceed" onclick="return val()">
			<br/><br/><a href="registration.php"><font size="3" color = "grey"><b> Forgot password? </b></font></a>
			<br/><p>New in Friends And Family? <a href="registration.php"><font size="2" color = "blue"><b>Sign-up now! </b></font></a>
			</p><br/>
		</p>	
		</div>
		
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
