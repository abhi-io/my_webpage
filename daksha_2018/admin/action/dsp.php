<?php

include '../link.php';
if(isset($_POST['b1']))
	{
	$nam=$_POST['nam'];
	
	}
	 
	
	 
	 $imgurl="spon/{$nam}";
	 unlink($imgurl);

	 $sel=mysql_query("delete from spons where spon='$nam'");
	 header("location:../admin.php");
?>