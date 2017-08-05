<?php
	require("menu.php");
	
	include("database.php");
	session_start();
	
	

$sql="SELECT * FROM iteam WHERE pid='".$_SESSION["pid"]."'";
$jsonData= getJSONFromDB($sql);
$jsonData = json_decode($jsonData, true);
//print_r($GLOBALS);
	
?>
<html>
<style>
	.picture img{
		width:200px;
		height:200px;
    cursor: -moz-zoom-in; 
    cursor: -webkit-zoom-in; 
    cursor: zoom-in;
	}
</style>
				
<table align="center"  border="0" cellpadding="20" cellspacing="0">
	<tr>
	<div style="width=100% height=100 color:white">
		<td>
		<div align="center" class="picture">
			<img src="<?php echo $jsonData[0]["image"];?>"  alt="Mountain View">
		</div>
		</td>
		<td>
		<div><font size = "4"><?php echo $jsonData[0]["type"];?></font></div><br/>
		<div><font size = "4"><?php echo $jsonData[0]["brand"];?></font></div><br/><br/>
		<div><font size = "3">Size</font>
		<select>
			<?php
			
			echo"<option value=>";echo $jsonData[0]["size"];echo"</option>";
			
			?>
				
				
		</select>
		</div>
		<br/>
		<div><font size = "4"><b><?php echo "TK ";echo $jsonData[0]["price"];?></b></font></div>
		<?php echo "Discount ";echo $jsonData[0]["discount"];echo"%"?></div>
		</td>
		</div>
	</tr>
	</table>
	
	<br/>
	<div align="center">
	<input type="button" value="BUY NOW!" onclick="window.location.href='Cart.php'"  size="30" style="height:25px; width:200px; color:white;background-color:orange;">
	</div>
	<br/>
	<br/>
	<br/>
	<br/>
</html>
<?php 
require("footer.php");
?>
