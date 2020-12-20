<?php

include '../link.php';
if(isset($_POST['b1']))
	{
	$nam=$_POST['nam'];
	
	$des=$_POST['desig'];
	$mb=$_POST['mob'];
	$ty=$_POST['typ'];
	$wat=$_POST['wtp'];
	$fb=$_POST['fb'];
	$tw=$_POST['tweet'];
	
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
                  move_uploaded_file($file_tmp,"team/".$new_name);
				  $ins=mysql_query("insert into team values('','$nam','$new_name','$des','$mb','$ty','$wat','$fb','$tw') ");
				 header("location:../admin.php");
         echo "Success";
      }else{
         print_r($errors);
      }
   }

	
?>