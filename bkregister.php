<pre>

<?php
include("database.php");
print_r($GLOBALS);
$sql="INSERT INTO user (email, password, first_name, last_name, address, gender, phone, state, city) VALUES ('".$_REQUEST["email"]."', '".md5($_REQUEST["password"])."', '".$_REQUEST["firstname"]."', '".$_REQUEST["lastname"]."', '".$_REQUEST["address"]."', '".$_REQUEST["gender"]."', '".$_REQUEST["phone"]."', '".$_REQUEST["state"]."', '".$_REQUEST["nearestCity"]."');";
echo $sql;
if(insertData($sql)){
		header("Location:login.php");
		
	}
	else{
		header("Location:registration.php");
		
	}
?>

</pre>