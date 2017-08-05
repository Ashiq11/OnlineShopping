<pre>
<?php
if(strlen($_REQUEST["email"])!=0 && strlen($_REQUEST["password"])!=0){
session_start();
include("database.php");
print_r($GLOBALS);
$sql="select * from user where email='".$_REQUEST["email"]."'";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);

if($jsonData[0]["password"]==md5($_REQUEST["password"]))
{
	$_SESSION["uid"]=$jsonData[0]["uid"];
	$_SESSION["flag"]=1;
	echo $_SESSION["uid"];
	header("Location:FnF_Home.php");
	echo "asdasdasd";
	
}

$sql="select * from admin where email='".$_REQUEST["email"]."'";
$jsonData1= getJSONFromDB($sql);
$jsonData1 = json_decode($jsonData1, true);
print_r($GLOBALS);
if($jsonData1[0]["password"]==($_REQUEST["password"]))
{
	$_SESSION["aid"]=$jsonData[0]["aid"];
	header("Location:AdminHome.php");
	echo "asdasdasd";
	
}



else{
	header("Location:login.php");
	
	
}
}

else{
	header("Location:login.php");
}
?>
</pre>