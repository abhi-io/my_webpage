<?php

include '../link.php';
if(isset($_POST['b2']))
	{
	$nam=$_POST['nam'];
	$dat=$_POST['dat'];
	$des=$_POST['des'];
	$nm=$_POST['oldn'];
	$imm=$_POST['oldim'];
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
                  move_uploaded_file($file_tmp,"tline/".$new_name);
				  $ins=mysql_query("update timeline set name='$nam',date='$dat',image='$new_name',description='$des' where name='$nm'");
				 header("location:../admin.php");
         echo "Success";
      }else{
         print_r($errors);
		 
		  $ins=mysql_query("update timeline set name='$nam',date='$dat',image='$imm',description='$des' where name='$nm'");
				 header("location:../admin.php");
      }
	  
   }

	
?>