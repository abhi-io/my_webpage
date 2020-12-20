<?php
session_start();
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
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
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
                        <img src="assets/img/logo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="action/logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li class="active-link">
                        <a href="admin.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                   
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Admin ! </strong>
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
                            <div class="row text-center pad-top">
                 
                 
                  
                  
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/viewp.php" >
 <i class="fa fa-users fa-5x"></i>
                      <h4>view participants</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                 
				 
				 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/ew.php" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>Edit Workshop</h4>
                      </a>
                      </div>
                     
                     
                  </div>
				  
				   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/dw.php" >
 <i class="fa fa-bell-o fa-5x"></i>
                      <h4>Delete Workshop</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  
              </div>
                 <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                 
				 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/aw.php" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>add workshop</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/ate.php" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>add tech events</h4>
                      </a>
                      </div>
                     
                     
                  </div>

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/dte.php" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>Delete tech events</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  
                     
              </div>   
                  <!-- /. ROW  -->    
                 <div class="row text-center pad-top">
                   
                 
                  
                  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/ete.php" >
 <i class="fa fa-gear fa-5x"></i>
                      <h4>Edit tech events</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				  
                      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/ace.php" >
 <i class="fa fa-bell-o fa-5x"></i>
                      <h4>Add cultural events</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
                     
					 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/dce.php" >
 <i class="fa fa-bell-o fa-5x"></i>
                      <h4>delete cultural events</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				  
				 
                  
              </div>
                 <!-- /. ROW  --> 

				                <div class="row text-center pad-top">
                 
                 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/dr.php" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Dispose Registration</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                 

                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/asl.php" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>Add slides</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/dsl.php" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>Delete Slides</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                     
              </div>   

				   <div class="row text-center pad-top">
				   
				  
				 
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/asp.php" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>Add Sponsers</h4>
                      </a>
                      </div>
                     
                     
                  </div>
				 
				 
				 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/dsp.php" >
 <i class="fa fa-clipboard fa-5x"></i>
                      <h4>Delete Sponsers</h4>
                      </a>
                      </div>
                     
                     
                  </div>
				 
				 
				  
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/aco.php" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Add Co-ordinator</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				 
				 </div>
				 
				  <div class="row text-center pad-top">
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/eco.php" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Edit Co-ordinator</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/dco.php" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>Delete Co-ordinator</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				  
				   
				  
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/help.php" >
 <i class="fa fa-lightbulb-o fa-5x"></i>
                      <h4>Read me</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				  
				  </div>
				 
				 <div class="row text-center pad-top">
				 
				 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/chp.php" >
 <i class="fa fa-user fa-5x"></i>
                      <h4>change password</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				  

				   <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/ece.php" >
							<i class="fa fa-bell-o fa-5x"></i>
                      <h4>Edit cultural events</h4>
                      </a>
                      </div>
                     
                     
                  </div> 
				 
				 <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="pages/msg.php" >
							<i class="fa fa-bell-o fa-5x"></i>
                      <h4>view messages</h4>
                      </a>
                      </div>
                     
                     
                  </div>
				 
				 </div>
				 
				 
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                       
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  college of engineering Attingal
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


<?php
}
else
{
	
	 header("location:../pages/login.php");
}
?>