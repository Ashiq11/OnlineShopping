<!DOCTYPE html>
<?php session_start(); ?>
<html>

<style>
input[type=text], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: orange;
}

div {
    border-radius: 5px;
    background-color: white;
    padding: 20px;
}
.error {color: #FF0000;}
</style>
<body>
<?php
	// define variables and set to empty values
	$nameErr = $emailErr = $genderErr = $addressErr = "";
	
	//$_SESSION['address']=$address;

	$firstname=$lastname = $email = $gender = $address = $phone =$state=$nearestCity ="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		echo $_POST["email"];
		$_SESSION['email']=$_POST["email"];
	  if (empty($_POST["firstname"])) {
		$nameErr = "Name is required";
	  } else {
		$firstname = test_input($_POST["firstname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
		  $nameErr = "Only letters and white space allowed"; 
		}
	  }
	  if (empty($_POST["lastname"])) {
		$nameErr = "Name is required";
	  } else {
		$lastname = test_input($_POST["lastname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
		  $nameErr = "Only letters and white space allowed"; 
		}
	  }
	  
	  if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	  } else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailErr = "Invalid email format"; 
		}
	  }

	  if (empty($_POST["address"])) {
		$address = "Address is required";
	  } else {
		$address = test_input($_POST["address"]);
	  }
	  if (empty($_POST["phone"])) {
		$phone = "";
	  } else {
		$phone = test_input($_POST["phone"]);
	  }
	  if (empty($_POST["state"])) {
		$state = "";
	  } else {
		$state = test_input($_POST["state"]);
	  }
	  if (empty($_POST["nearestCity"])) {
		$nearestCity = "";
	  } else {
		$nearestCity = test_input($_POST["nearestCity"]);
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
	<center>
	<b>1.YOUR EMAIL</b>
	<hr/>
	  <form method ='post' action="index.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div>
			<p>What is your Email Address ?</p><br/>
			 E-mail: <input type="email" name="email" placeholder="username@gmail.com">
			 <span class="error">* <?php echo $emailErr;?></span>

		</div>
		 <hr/>
		<b>2.YOUR ADDRESS</b>
		<div>
			<label for="fname">First Name*</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name..">
			  <span class="error">* <?php echo $nameErr;?></span>

			
		</div>
		<div>	
			<label for="lname">Last Name*</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last name..">
			<span class="error">* <?php echo $nameErr;?></span>

		</div>
		<div>
			<label for="address">Address*</label>
			<input type="text" id="address" name="address" placeholder="Your present address...">
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
			<input type="text" id="phone" name="phone" placeholder="Your Phone Number...">
			
		</div>
		<div>
			<label for="state">State/Region*</label>
			<select id="state" name="state">
			  <option value="Dhaka">Dhaka</option>
			  <option value="Khulna">Khulna</option>
			  <option value="Chittagong">Chittagong</option>
			  <option value="Sylhet">Sylhet</option>
			  <option value="Sylhet">Rajshahi</option>
			  
			</select>
		</div>
		<div>
		<label for="city">City/Nearest ZOne*</label>
			<input type="text" name="nearestCity" placeholder="Your nearest zone">
		</div>
		<div>
			<input type="checkbox" name="received" value="received"> I want to receive FnF Newsletter<br/> with best deals and offers
		</div>

		<div>
			<input type="submit" value="CHECK & PLACE ORDER" action="index.php">
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
</body>

</html>


