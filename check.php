<?php
	session_start();
	 if(!isset($_SESSION['user']))
    {
        include("menu1.php");
    }
	
	else
	{
        include("menu2.php");
    }
	

?>