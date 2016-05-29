<!DOCTYPE html>
<html lang="lt">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	
	<meta name="viewport" content="width=1050">

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	
	<link href="css/site.css" rel="stylesheet">
	
	<link href="js/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet">
	<link href="js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css" rel="stylesheet">

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>

	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="js/site.js"></script>

</head>
<body>

<!--[if lt IE 9]>
<div class="browser-warning">Jūs naudojate pasenusią naršyklę, todėl šis puslapis gali būti atvaizduojamai neteisingai. Rekomenduojame <a target="_blank" href="http://browsehappy.com/">atnaujinti savo interneto naršyklę</a> ir apsilankyti dar kartą!</div>
<![endif]-->

<header class="site-header">

	<?php include('templates/components/site-header.php') ?>

</header>

<main class="site-main">
	
	<div class="container">
	
		<div class="row">
		
			<div class="col-xs-12">
			
				<div class="trow trow-full trow-top site-main-trow">

					<?php if (isset($_GET['template']) && $_GET['template'] == 'homepage') { ?>
						
						<?php include('templates/components/site-aside-homepage.php') ?>
						
					<?php } else { ?>

						<?php include('templates/components/site-aside-default.php') ?>
					
					<?php } ?>
					
					<div class="site-content">
					
						<?php

							if (isset($_GET['template'])) {
								
								include('templates/pages/'.$_GET['template'].'.php');
								
							} else {
								
								include('templates/pages/homepage.php');
								
							}

						?>
					
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
		
</main>

<footer class="site-footer">

	<?php include('templates/components/site-footer.php') ?>

</footer>

</body>
</html>