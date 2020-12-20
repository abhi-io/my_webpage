 
<html>
<head>
	<link href="css/mystyles1.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main1.css" />
	</head>
	<body width="100%" style='overflow:hidden'>

				<section class="wrapper style1">
				<div width="96%" class="inner">

				
			
								
								<form method="post" action="#">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Name" required>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="email" id="email" value="" placeholder="Email" required>
										</div>
										
										

										<div class="6u 12u$(xsmall)">
										<input type="text" name="institution_name" id="institution_id" value="" placeholder="Instituion Name" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phn_number" id="phn_number" value="" placeholder="*Contact no." required>
										</div>

									<div class="6u$ 12u$(xsmall)">
										<textarea name="message" id="message" rows="4" placeholder="Message" required></textarea>
										</div>
										
										<div>
										<ul class="actions">
								
									    <li><input type=submit name='send'  class="button alt"></li>
										
								       </ul>
											</div>

								</form>
								<hr>
						</div>
								</div>
								</section>
			
							

								

		
	</body>
</html>


<?php
								include 'link.php';

								if(isset($_POST['send']))
								{
								  $name=$_POST['name'];
								 $email=$_POST['email'];
								 $institution_name=$_POST['institution_name'];
								 $phn_no=$_POST['phn_number'];
								 $text=$_POST['message'];

								   $sel=mysql_query("insert into contact values ('','$name','$phn_no','$email','$text')");
								 			if($sel)
							{
								echo "<h3>message sended successfully</h3>";
							}
							else
							{
								echo "<h3>message is not sended successfully . please retry</h3>";
							}
								
								}
						?>