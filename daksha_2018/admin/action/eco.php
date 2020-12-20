<?php
include '../link.php';

if(isset($_POST['b2']))
	{
	$j=$_POST['nam'];
	$q=$_POST['wow'];
	$k=$_POST['desig'];
	$l=$_POST['mob'];
	$m=$_POST['typ'];
	$n=$_POST['wtp'];
	$o=$_POST['fb'];
	$p=$_POST['tweet'];
	
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
			$query1=mysql_query("select * from team where name='$q'");
			while($row=mysql_fetch_array($query1))
				{
					$x=$row['image'];
				}
	 
	 $imgurl="team/{$x}";
	 unlink($imgurl);
	  
                  move_uploaded_file($file_tmp,"team/".$new_name);
				  
				   $sel=mysql_query("delete from team where name='$q'");
				   $ins=mysql_query("insert into team values('','$j','$new_name','$k','$l','$m','$n','$o','$p') ");
				
 
				 header("location:../admin.php");
         echo "Success";
      }else{
	  
	  
      }
	  
	   $query1=mysql_query("select * from team where name='$q'");
			while($row=mysql_fetch_array($query1))
				{
					$xy=$row['image'];
				}
          $sel=mysql_query("delete from team where name='$q'");
				   $ins=mysql_query("insert into team values('','$j','$xy','$k','$l','$m','$n','$o','$p') ");
				
								 header("location:../admin.php");
	  
   }
   ?>