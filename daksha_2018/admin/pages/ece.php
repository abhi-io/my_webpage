
<?php
session_start();
if($_SESSION['usertype']=="admin")
{
?>	




<?php
$x=NULL;
$y=NULL;
$z=NULL;
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
                     <h2>Edit Cultural Events</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              <?php
			  include '../link.php';
			  echo '<table class="table table-striped table-bordered table-hover">';
                            echo '<thead>';
                                echo '<tr>';
                                    
                                    echo '<th>';
									echo "events";
									echo '</th>';
									echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
							
							 include '../link.php';
							 $sel=mysql_query("select * from cultural");
							 while($row=mysql_fetch_array($sel))
								{
							 
                                echo '<tr>';
                                echo'<td>';
								echo $row['name'];
								echo '</td>';
								}
			  
			  ?>
			  <form method="post" enctype="multipart/form-data">
	<table border="0" style="width:100%">
	<tr>
	<td style="width:20%">
	<label for="name">Event to Edit</label>
	</td>
	<td style="width:*%">
    <input type="text" id="name" name="nam">
	</td>
	 </tr>
	  </table>
	  <input type="submit" value="Submit" name="b1">
  </form>  
  <?php
  
  if(isset($_POST['b1']))
	{
	$nam=$_POST['nam'];
	
	
	 
	 $query1=mysql_query("select * from cultural where name='$nam'");
	while($row=mysql_fetch_array($query1))
	{
	$x=$row['name'];
	$y=$row['description'];
	$z=$row['image'];
	}}
  
  ?>
  
			  <form method="post" action="../action/ece.php" enctype="multipart/form-data">
	<table border="0" style="width:100%">
	<tr>
	<td style="width:20%">
	<label for="name">Name</label>
	</td>
	<td style="width:*%">
	<input type="hidden" value="<?php echo htmlspecialchars($x);?>" name="wow">
    <input type="text" value="<?php echo htmlspecialchars($x);?>" id="name" name="nam">
	</td>
	 </tr>
	 <tr>
	 <td style="width:20%">
	<label for="image">image:</label>
	</td>
	<td style="width:*%">
	<br><img width=200 height=150 src="../action/cultural/<?php echo htmlspecialchars($z);?>">
	 <br><input type="file" name="image" id="filetoupload">
	 </td>
	 </tr>
			 </table>
<br>
<label>description</label><br>
<textarea id="address" name="des"
rows="5"
cols="100"><?php echo htmlspecialchars($y);?></textarea>
  <br>
<input type="submit" value="Submit" name="b2">
  </form>  
			  
			  
			  
			  
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