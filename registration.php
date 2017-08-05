<?php
	require("menu.php");
	include("registration.css");
?>
<!DOCTYPE html>
<html>


<body>
	<?php
	// define variables and set to empty values
	$emailErr =$passwordErr= $nameErr =$addressErr= $genderErr = $phoneErr = "";
	$email =$password = $name =$address = $gender  = $phone = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		echo $emailErr;
		  } 
		  else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
			  $emailErr = "Invalid email format";
			}
		  }
		if (empty($_POST["password"]) && strlen($_POST["password"])<7) {
		 $passwordErr = "Email is required";
		  }   
	  if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	  } else {
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		  $nameErr = "Only letters and white space allowed";
		}
	  }
	  if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	  } else {
		$gender = test_input($_POST["gender"]);
	  }
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>
	<br/>
	<br/>
	<center>
	<b>1.YOUR EMAIL</b>
	<hr/>
		<span class="error">* required field.</span><br/>
	  <form method ='post' action="bkregister.php">
		<div>
			<p>What is your Email Address ?</p><br/>
			 E-mail: <input class="email"type="email" name="email" placeholder="username@gmail.com">
			 <span class="error">* <?php echo $emailErr;?></span>

		</div>
		<div>
			Password: <input class="pw"type="password" name="password" placeholder="type your password">
			 <span class="error">* <?php echo $passwordErr;?></span>
		</div>
		<div>
			 Confirm Password: <input class="cpw"type="password" name="password" placeholder="re type your password">
		</div>
		 <hr/>
		<b>2.YOUR ADDRESS</b>
		<div>
			<label for="fname">First Name*</label>
			<input class="test4"type="text" id="fname" name="firstname" placeholder="Your name..">
			  <span class="error">* <?php echo $nameErr;?></span>

			
		</div>
		<div>	
			<label for="lname">Last Name*</label>
			<input class="test3"type="text" id="lname" name="lastname" placeholder="Your last name..">
			<span class="error">* <?php echo $nameErr;?></span>

		</div>
		<div>
			<label for="address">Address*</label>
			<input class="test2"type="text" id="address" name="address" placeholder="Your present address...">
		  <span class="error">* <?php echo $addressErr;?></span>
			
		</div>
		<div>	
			Gender:
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
		  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
		  <span class="error">* <?php echo $genderErr;?></span>
		  <br><br>
		</div>	
		<div>
			<label for="phone">Phone Number*</label>
			<input class="test1"type="text" id="phone" name="phone" placeholder="Your Phone Number...">
			<span class="error">* <?php echo $phoneErr;?></span>
		</div>
		<div>
			<label for="state">State/Region</label>
			<select id="state" name="state">
			  <option value="Dhaka">Dhaka</option>
			  <option value="Khulna">Khulna</option>
			  <option value="Chittagong">Chittagong</option>
			  <option value="Sylhet">Sylhet</option>
			  <option value="Sylhet">Rajshahi</option>
			  
			</select>
		</div>
		<div>
		<label for="city">City/Nearest ZOne</label>
			<input class="text"type="text" name="nearestCity" placeholder="Your nearest zone">
		</div>
		<div>
			<input type="checkbox" name="received" value="received"> I want to receive FnF Newsletter<br/> with best deals and offers
		</div>

		<div>
			<input class="submit"type="submit" value="SIGN UP">
		</div> 
	</form>
	</center>
	<br/>
	<br/>
	<br/>
	<br/>
		
	<?php 
	require("footer.php");
	?>
	<br/>
	<br/>
</body>

</html>