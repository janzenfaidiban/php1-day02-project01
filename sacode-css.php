<?php 
	// variables
	$title = "SaCode";
	$tagLine = "#LearnToCode";
	$website = "https://sacode.web.id";
	$instagram = "https://instagram.com/sacode.official";
	$developer = "Janzen Faidiban";
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>

	<!-- start .card-panel -->
	<div class="card-panel">

		<h1><?php echo $title; ?></h1>
		<i><?php echo $tagLine; ?></i>

	</div>
	<!-- end .card-panel -->


	<!-- start .container -->
	<div class="container">
		
		<!-- start .card-panel -->
		<div class="card-panel">

			<h1><?php echo $title; ?></h1>
			<i><?php echo $tagLine; ?></i>

		</div>
		<!-- end .card-panel -->

	</div>
	<!-- end .container -->


	<!-- start .container -->
	<div class="container">
		
		<!-- start .card-panel -->
		<div class="card-panel">

			<ul>
				<li>
					Website : <b><?php echo $website; ?></b>
				</li>
				<li>
					Instagram : <b><?php echo $instagram; ?></b>
				</li>
				<li>
					Developer : <b><?php echo $developer; ?></b>
				</li>
			</ul>

		</div>
		<!-- end .card-panel -->

	</div>
	<!-- end .container -->

</body>
</html>