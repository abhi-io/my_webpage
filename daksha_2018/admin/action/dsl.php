<?php

include '../link.php';
if(isset($_POST['b1']))
	{
	$nam=$_POST['nam'];
	
	}
	 
	
	 
	 $imgurl="slider/{$nam}";
	 unlink($imgurl);

	 $sel=mysql_query("delete from slides where slide='$nam'");
	 header("location:../admin.php");
?>