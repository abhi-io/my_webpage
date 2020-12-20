 <?php
 $event=NULL;
include 'link.php';
 $event=$_GET['pag'];
                   
                    ?>

					

<html>
<head>
	<link href="css/mystyles1.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main1.css" />
	</head>
	<body style='overflow:hidden'>

				<section class="wrapper style1">
				<div class="inner">

				
				
								
								<form method="post" action="act_reg.php">
									<div class="row uniform">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Name" required>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="email" id="email" value="" placeholder="Email" required>
										</div>
										
										

										<div class="12u$">
										<input type="hidden" name="eve" value="<?php echo htmlspecialchars($event);?>">
										<input type="text" name="institution_name" id="institution_id" value="" placeholder="Instituion Name" />
										</div>

										


									<div class="6u 12u$(xsmall)">
											<input type="text" name="stream" id="stream" value="" placeholder="stream" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="text" name="phn_number" id="phn_number" value="" placeholder="*Contact no." required>
										</div>

										

										
										

										<ul class="actions">
								
									    <li><input type=submit name='register'  class="button alt"></li>
										
								       </ul>


								</form>

						
								</div>
								</section>
			
							

								

		
	</body>
</html>