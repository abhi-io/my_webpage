<?php

include '../link.php';
if(isset($_POST['b1']))
	{
	$nam=$_POST['nam'];
	
	}
	 
	 $query1=mysql_query("select * from tech where name='$nam'");
	while($row=mysql_fetch_array($query1))
	{
	$x=$row['image'];
	 }
	 
	 $imgurl="tech/{$x}";
	 unlink($imgurl);

	 $sel=mysql_query("delete from tech where name='$nam'");
	 header("location:../admin.php");
?>