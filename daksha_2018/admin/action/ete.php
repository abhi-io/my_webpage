<?php
include '../link.php';

if(isset($_POST['b2']))
	{
	$lsn=$_POST['nam'];
	
	$lar=$_POST['des'];
	$pup=$_POST['wow'];
	
	}
	
	if(isset($_FILES['image']))
	   {
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	  $new_name="$file_name";
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 5242880){
         $errors[]='File size must be excately 5 MB';
      }
      
      if(empty($errors)==true){
			$query1=mysql_query("select * from tech where name='$pup'");
			while($row=mysql_fetch_array($query1))
				{
					$x=$row['image'];
				}
	 
	 $imgurl="tech/{$x}";
	 unlink($imgurl);
	  
                  move_uploaded_file($file_tmp,"tech/".$new_name);
				  
				   $sel=mysql_query("delete from tech where name='$pup'");
				   $ins=mysql_query("insert into tech values('','$lsn','$lar','$new_name') ");
				
 
				 header("location:../admin.php");
         echo "Success";
      }else{
	  
	  
      }
	   $query1=mysql_query("select * from tech where name='$pup'");
			while($row=mysql_fetch_array($query1))
				{
					$xy=$row['image'];
				}
          $sel=mysql_query("delete from tech where name='$pup'");
				   $ins=mysql_query("insert into tech values('','$lsn','$lar','$xy') ");
								 header("location:../admin.php");
   }
   ?>