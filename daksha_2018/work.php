<?php
$flg=0;
foreach($_GET as $loc=>$page)
$_GET[$loc]=base64_decode(urldecode($page));
$nam7=$_GET['page'];
$nam8=base64_decode(urldecode($nam7));
$nam=strrev($nam8);
$msg1=NULL;
$msg2=NULL;
$img=NULL;
?>
<?php
include 'link.php';


$ch1=mysql_query("select * from work where name='$nam'");


if(mysql_num_rows($ch1)>0)
{



	
$sel2=mysql_query("select * from work where name='$nam'");
while($row=mysql_fetch_array($sel2))
	{
		$msg2=$row['description'];
		$im=$row['image'];
		$lnk=$row['link'];
	}
	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DAKSHA YANTHRA</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
	
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php" background=black><i class="fa fa-sun-o"></i> Daksha Yanthra<strong></strong></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->



<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo "$nam";?></h2>
      <hr>
      <div class="clearfix"></div>
      <p></p>
    </div>
    <div class="row">
	
      <div class="col-md-6"> <img src="admin/action/work/<?php echo htmlspecialchars($im);?>" class="img-responsive"> </div>
	
	
      <div class="col-md-6">
        <div class="about-text">
          <h4></h4>
          <p><?php echo "$msg2";?></p>
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Achievements Section -->

<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
  <div class="section-title center">
      <h2>Register here</h2>
      <hr>
      
    </div>
  
    <section>
	
	<iframe src="<?php echo htmlspecialchars($lnk);?>" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
	
   
    </section>
  </div>
</div>
</div>
<div id="social-section">
  <div class="container">
    <div class="social">
       <ul>
	  
	<?php 
		$nam7='facebook';
		$self=mysql_query("select link from links where item='$nam7'");
		while($rown=mysql_fetch_array($self))
			{
				$comz=$rown['link'];
			}
						
	?>
	  
        <li><a href="http://<?php echo htmlspecialchars($comz);?>"><i class="fa fa-facebook"></i></a></li>
		
	<?php 
		$nam16='twitter';
		$selg=mysql_query("select link from links where item='$nam16'");
		while($rowe=mysql_fetch_array($selg))
			{
				$comx=$rowe['link'];
			}
						
	?>
		
        <li><a href="http://<?php echo htmlspecialchars($comx);?>"><i class="fa fa-twitter"></i></a></li>
       
	<?php 
		$nam19='instagram';
		$selg1=mysql_query("select link from links where item='$nam19'");
		while($rowe1=mysql_fetch_array($selg1))
			{
				$coc1=$rowe1['link'];
			}
						
	?>
	   
        <li><a href="http://<?php echo htmlspecialchars($coc1);?>"><i class="fa fa-instagram"></i></a></li>
		
	<?php 
		$nam22='linkedin';
		$selg2=mysql_query("select link from links where item='$nam22'");
		while($rowe2=mysql_fetch_array($selg2))
			{
				$coc2=$rowe2['link'];
			}
						
	?>
		
        <li><a href="http://<?php echo htmlspecialchars($coc2);?>"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <div class="fnav">
      <p>Copyright &copy; college of engineering Attingal</a></p>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>


<?php
}
else
{
 header("location:index.php");
}

?>
