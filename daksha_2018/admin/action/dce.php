<?php

include '../link.php';
if(isset($_POST['b1']))
	{
	$nam=$_POST['nam'];
	
	}
	 
	 $query1=mysql_query("select * from cultural where name='$nam'");
	while($row=mysql_fetch_array($query1))
	{
	$x=$row['image'];
	 }
	 
	 $imgurl="cultural/{$x}";
	 unlink($imgurl);

	 $sel=mysql_query("delete from cultural where name='$nam'");
	 header("location:../admin.php");
?>