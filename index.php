<?php 
require "config.php";
require "function.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-md-auto mt-3">
			// Logo
			<div class="logo"></div>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md-auto">
			// Counter
			<div class="counter text-center shadow border text-white p-2 font-weight-bold text-uppercase mt-3"><?= $ip; ?> |  <?php 
			if( $online == true ) {
			 ?>Online <?= $player; ?>
			 <?php 
			}else{
			  ?>
			  <p class="text-danger">Offline</p>
			<?php } ?>
			 </div>
		</div>
	</div>
	<br><br>
	<div class="row d-flex justify-content-center">
		// Item / Body
		<div class="col-md-3">
			<a href="<?= $forum; ?>"><img class="sel-anim" src="<?= $img_forum; ?>"></a>
		</div>
		<div class="col-md-3">
			<a href="<?= $vote; ?>"><img class="sel-anim" src="<?= $img_vote; ?>"></a>
		</div>
		<div class="col-md-3">
			<a href="<?= $guide; ?>"><img class="sel-anim" src="<?= $img_guide; ?>"></a>
		</div>
	</div>
</div>
</body>
</html>