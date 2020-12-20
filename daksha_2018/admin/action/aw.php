<?php

include '../link.php';
if(isset($_POST['b1']))
	{
	$nam=$_POST['nam'];
	$des=$_POST['des'];
	$lnk=$_POST['link'];
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
                  move_uploaded_file($file_tmp,"work/".$new_name);
				  $ins=mysql_query("insert into work values('','$nam','$des','$new_name','$lnk') ");
				 header("location:../admin.php");
         echo "Success";
      }else{
         print_r($errors);
      }
   }

	
?>