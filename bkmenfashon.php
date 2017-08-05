<pre>
<?php
session_start();
include("database.php");
print_r($GLOBALS);

//INSERT INTO `iteam` (`pid`, `category`, `brand`, `color`, `price`, `discount`, `size`, `image`) VALUES (NULL, 'as', 'asd', 'asd', '5', '1', 'as', 'asd');
$sql="INSERT INTO iteam (type, brand, color, price, discount, size, image, category) VALUES ('".$_REQUEST["type"]."', '".$_REQUEST["brand"]."', '".$_REQUEST["description"]."', '".$_REQUEST["price"]."', '".$_REQUEST["discount"]."', '".$_REQUEST["size"]."', '".$_REQUEST["IName"]."', '".$_REQUEST["category"]."');";
echo $sql;
if(insertData($sql)){
	header("Location:AddItem.php");
}
else{
	header("Location:AddItem.php");
	
}
?>

</pre>