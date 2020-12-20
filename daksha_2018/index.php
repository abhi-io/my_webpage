<!DOCTYPE html>
<html lang="en">
<head>

<meta name="google-site-verification" content="wJAQI_7Da8hzexcWvf4msPNOO3WYEvWGj3NOOjakM_8" />
<meta name="keywords" content="Attingal, thiruvananthapuram, kerala, dakshayanthra, cultural fest, daksha, cea, ceal, ceadakshayanthra, ihrd, college fest, trivandrum, techfest, technical, arts, yanthra, DAKSHA YANTHRA, Daksha 2018, Daksha">
<meta name="DC.title" content="National level Cultural And Technical Fest" />

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
<link href="css/count.css" rel="stylesheet" type="text/css" />
<link href="css/slider.css" rel="stylesheet">
   <link href="2/thumbnail-slider.css" rel="stylesheet" type="text/css" />
   <script src="2/thumbnail-slider.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
</head>
<body>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><i class=""></i> Daksha Yanthra<strong></strong></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll">Home</a></li>
        <li><a href="#works-section" class="page-scroll">Events</a></li>
        <li><a href="#about-section" class="page-scroll">Gallery</a></li>
        <li><a href="#team-section" class="page-scroll">About Us</a></li>
		<li><a href="#services-section" class="page-scroll">Our Partners</a></li>
		 <li><a href="#teamo-section" class="page-scroll">Our Team</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->

<header class="text-center" name="home">
<div class="videoCont">
<video height="100%" width="100%" poster="images/banner.jpg" autoplay="true" loop>
        <source src="images/banner.mp4" type="video/mp4">
		<source src="images/banner.webm" type="video/webm">
    </video>
	</div>
 <!-- <div class="intro-text">
    <h1>Welcome to <strong>Daksha Yanthra</strong></h1>
    <p></p>
    </div>-->
	
</header>

<!-- Portfolio Section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Our Events</h2>
      <hr>
      <div class="clearfix"></div>
      <p></p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
           <!-- <li><a href="#" data-filter="*" class="active">All</a></li>-->
            <li><a href="#" data-filter=".web">Daksha</a></li>
            <li><a href="#" data-filter=".app">Yanthra</a></li>
         
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
	  
	  <?php
			include 'link.php';
			$sel1=mysql_query("select * from cultural");
			while($row=mysql_fetch_array($sel1))
				{
					$ak1=$row['image'];
					$nm=$row['name'];
					$nm5=strrev($nm);

				$nm4=base64_encode($nm5);
				$str=base64_encode($nm4);
	  ?>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg">
			
			
			
													
				<a href="generic.php?page=<?php echo htmlspecialchars($str);?>">
												
			
			
			
			
              <div class="hover-text">
                <h4><?php echo htmlspecialchars($nm);?></h4>
                <small></small>
                <div class="clearfix"></div>
              </div>
              <img src="admin/action/cultural/<?php echo htmlspecialchars($ak1);?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		
		<?php
		 }
		?>
		
		
  <?php
											include 'link.php';
											
											$sel24=mysql_query("select * from tech");
											while($row=mysql_fetch_array($sel24))
											{
												$ak24=$row['image'];
												$nm14=$row['name'];
												$nm54=strrev($nm14);

			$nm44=base64_encode($nm54);
			$str14=base64_encode($nm44);
		?>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> 
			
			<a href="generic.php?page=<?php echo htmlspecialchars($str14);?>">
												
			
			
              <div class="hover-text">
                <h4><?php echo htmlspecialchars($nm14);?></h4>
                <small></small>
                <div class="clearfix"></div>
              </div>
              <img src="admin/action/tech/<?php echo htmlspecialchars($ak24);?>" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
		
		<?php
											}
											?>
											
											
										

										
										
        
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<div id="about-section">
  <div class="container">
   
	<div id="works-section">
  <div class="container">	
		<div class="row row-content">
		   <div class="col-xs-12">
					   
			<div style="padding:1% 0;">
				<div id="thumbnail-slider">
					<div class="inner">
						<ul>
						
						<?php
				include 'link.php';
				 $sel=mysql_query("select * from slides");
							 while($row=mysql_fetch_array($sel))
								{
									$sli=$row['slide'];
									?>
							<li>
								<a class="thumb" href="admin/action/slider/<?php echo htmlspecialchars($sli);?>"></a>
							</li>
							<?php
								}
								?>
						</ul>
					</div>
				</div>
			</div>
		   
		   </div>
		 </div>
     </div>
	 </div>
		
		
		
		
		
		
	
  </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="section dark-bg">
  <div class="container">
	   <center>
		   <div id="clockdiv">
			<div>
				<span class="days"></span>
					<div class="smalltext">Days</div>
			</div>
			<div>
				<span class="hours"></span>
					<div class="smalltext">Hours</div>
			</div>
			<div>
				<span class="minutes"></span>
					<div class="smalltext">Minutes</div>
			</div>
			<div>
				<span class="seconds"></span>
					<div class="smalltext">Seconds</div>
					</div>
			</div>

	   </center>
  </div>
</div>
<!-- Team Section -->
<div id="team-section" class="text-center">
  <div class="container">

	   <div class="section-title text-center center">
		  <h2>About Us</h2>
		  <hr>
		  <div class="clearfix"></div>
		  <p></p>
		</div>
		<div class="row">
		  <div class="col-md-6"> <img src="img/about.jpg" class="img-responsive"> </div>
		  <div class="col-md-6">
			<div class="about-text">
			  <h4>Who We Are</h4>
			  <p>The cultural & Technical fest of College of Engineering, Attingal, DAKSHA YANTHRA serves as a well deserved break that though drains the students out of the physical energy and mentally gives them an energy boost that replenishes their minds with fruitful memories of fest.and that can be cherished and survived on until the college festivals comes around again.</p>
			  <h4>What We Do</h4>
			  <p>The fest provides an excellent platform to showcase all kinds of different talents ranging from arts,educational and sports. Winning an event however spectacular or ridiculous gives everyone somthing to boast about to the world.A shiny piece of metal awarded can skyrocket one's self esteem. We take this oppurtunity to do simple acts of kindness and expressing gratitude.</p>
			  
			</div>
		  </div>
		</div>
  
  </div>
</div>

<!-- Services Section -->
<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Our Partners</h2>
      <hr>
      <div class="clearfix"></div>
      <p></p>
    </div>
    <div class="space"></div>
	
	<?php
	$partners = array("", "Title Sponsors", "Partners", "Media Partners", "Radio Partners", "Online Partners");
	for($i=1;$i<6;$i++)
	{
		$result=mysql_query("select * from spons where type='$i'");
		if (mysql_num_rows($result)!=0)
		{
	
	?>
	
    <div class="row">
	<h3><?php echo $partners[$i]; ?></h3>
       <div class="portfolio-items">
        
	  <?php
			include 'link.php';
											
			$sel5=mysql_query("select * from spons where type='$i'");
			while($row=mysql_fetch_array($sel5))
				{
					$sp=$row['spon'];
		?>
		
		
		<div class="col-sm-6 col-md-3 col-lg-3 web" align="center">
          <div class="portfolio-item">
           <!-- <div class="hover-bg"> -->
              <div class="hover-text">
                <h4></h4>
                <small></small>
                <div class="clearfix"></div>
              </div><center>
              <img width=200 height=100 src="admin/action/spon/<?php echo htmlspecialchars($sp);?>"> </a> <!--</div>-->
			  </center>
			 </div>
			</div>
       
		
		
			
		<?php
			}
		?>
	         
		</div>
		</div>
		
		<?php
		}
	}
		?>
		
    </div>
  </div>
</div>


<!-- Team Section -->
<div id="teamo-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Meet the Team</h2>
      <hr>
      <p>A dream doesn't become reality through magic; it takes sweat,determination and hardwork</p>
    </div>
    <div id="row">
     
	 
	 <?php
					$i=0;
					include 'link.php';
					$tq="staff";
					$sel1=mysql_query("select * from team where type='$tq'");
while($row=mysql_fetch_array($sel1))
	{
		$i++;
		$bt1=$row['name'];
		$bt2=$row['image'];
		$bt3=$row['desig'];
		$bt4=$row['mob'];
	//	$at5=$row['mob'];
		$bt6=$row['whatsapp'];
		$bt7=$row['facebook'];
		$bt8=$row['twitter'];
		
		
	
					?>
	 
	 <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="admin/action/team/<?php echo htmlspecialchars($bt2);?>" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3><?php echo htmlspecialchars($bt1);?></h3>
            <p><?php echo htmlspecialchars($bt3);?></p>
            <p><b>mob: <?php echo htmlspecialchars($bt4);?></b></p>
          </div>
        </div>
      </div>
     
	 <?php
					}
					?>
					
					
					 <?php
					$i=0;
					include 'link.php';
					$tq1="student";
					$sel1=mysql_query("select * from team where type='$tq1'");
while($row=mysql_fetch_array($sel1))
	{
		$i++;
		$gt1=$row['name'];
		$gt2=$row['image'];
		$gt3=$row['desig'];
		$gt4=$row['mob'];
	//	$at5=$row['mob'];
		$gt6=$row['whatsapp'];
		$gt7=$row['facebook'];
		$gt8=$row['twitter'];
		
		
	
					?>
	 
	 <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="admin/action/team/<?php echo htmlspecialchars($gt2);?>" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3><?php echo htmlspecialchars($gt1);?></h3>
            <p><?php echo htmlspecialchars($gt3);?></p>
            <p><b>mob: <?php echo htmlspecialchars($gt4);?></b></p>
          </div>
        </div>
      </div>
     
	 <?php
					}
					?>
					
     
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
      <p></p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <a href="https://www.google.co.in/maps/place/College+of+Engineering,+Attingal/@8.6911593,76.8172719,17z/data=!3m1!4b1!4m5!3m4!1s0x3b05e9f7c21e1c27:0x4eccbc1e5eb91332!8m2!3d8.6911593!4d76.8194606"><i class="fa fa-map-marker"></i></a>
        <p>Attingal Medical Centre Road,<br>
           Attingal, Kerala 695101</p>
      </div>
      <div class="col-md-4"> <a href="mailto:dakshayanthra@gmail.com"><i class="fa fa-envelope-o"></i></a>
        <p>dakshayanthra@gmail.com</p>
      </div>
      <div class="col-md-4"> <a href="tel:0470 262 7400"><i class="fa fa-phone"></i></a>
        <p>0470 262 7400</p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
     
	 <section>
	
	<!--<iframe width="100%" height="100%" src="register.php" scrolling="no"></iframe>-->
	<embed height="600" width="100%" src="contact.php" scrolling="no" onload="resizeIframe(this)">	
   
    </section> 
	                    
	  
	  
	  
    </div>
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
      <p>Copyright &copy; College of Engineering Attingal</a></p>
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
<script src="js/count.js"></script>

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>
	<script src="js/jquery.countdown.js"></script>


</body>
</html>