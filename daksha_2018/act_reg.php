<?php
								include 'link.php';

								if(isset($_POST['register']))
								{
								  
								 $name=$_POST['name'];
								 $email=$_POST['email'];
								 $institution_name=$_POST['institution_name'];
								 $phn_no=$_POST['phn_number'];
								 $event=$_POST['eve'];

								
								 $insert=mysql_query("insert into register values ('','$name',  '$institution_name',  ' $phn_no', ' $email', '$event')");
								
							echo '<script>window.top.location.href="index.php";</script>';
								 
								 
								 //header("location:index.php");
								}
								
								?>
							
							
							