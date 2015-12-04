<?php $folders = 0;?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Kids First - Get Involved</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body class="kidsLink">
	<?php
		include 'header.php';
	?>
	
	<div id="sidenav">
		Top
		<br>
		Kids First Hours/Location
		<br>
		Who works there?
		<br>
		What is there?
		<br>
		Rules
		<br>
	</div>

	<div id="maincontent">
		<img src="Pictures/IMG_7194.jpg">
		<div class="text">
			Kids first is open from 2:30 PM through 6:30 PM. Monday to Thursday. Located in 
			the center of the Maplewood community area. 
		</div>

		<div class="text" id="who">
			Kids First is staffed by all volunteers. Alumni, WSU students, and others are all 
			welcome to volunteer. For more information on volunteering go to the<a href="<?= $slashes ?>getInvolved.php" title="Volunteer">Volunteer</a> page.
		</div>
		<img src="Pictures/IMG_7196.jpg">
		<div class="text" id="who">
			The Kids First Center has many activities for kids to participate in. 
		</div>
	</div>


</body>

</html>