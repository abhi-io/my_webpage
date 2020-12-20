<?php
session_start();
$unam=$_SESSION['username'];
$pword=$_SESSION['password'];
if($_SESSION['usertype']=="admin")
{
?>	





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="../assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="../action/logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="../admin.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                   
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Change password</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
			  
			  <form method="post" >
			  New password:
<input value="PASSWORD" name="p1" type="password" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
<br><br> Confirm password:
<input value="CONFIRM PASSWORD" name="p2" type="password" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
	<input type="submit" value="change" name="b1">
		</form>	
		</body>
		</html>
<?php

 include '../link.php';
 
 if(isset($_POST['b1']))
	{
	
	$pass1=$_POST["p1"];
	$pass2=$_POST["p2"];
	
	if($pass1==$pass2)
	{
	$ins=mysql_query("update user set pword='$pass1' where uname='$unam'");
	 header("location:../action/logout.php");
	}
	else
	{
	//header("location:"chp.php");
	}
	}
?>		
			  
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  College of engineering Attingal
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>



<?php
}
else
{
	
	  header("location:../../pages/login.php");
}
?>