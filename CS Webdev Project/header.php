<?php
	$slashes = "";
	for($i = 0; $i < $folders; $i++){
		$slashes = $slashes."../";
	}
?>
<div id="mainnav">
	<a href="index.php"><img src="<?= $slashes ?>Assets/Home_Icon.bmp" alt="Home" title="Home"></a>
	<a href="about.php"><img src="<?= $slashes ?>Assets/Kids_Icon.bmp" alt="Kids" title="Kids"></a>
	<a href="CollegeBound/cbhome.php"><img src="<?= $slashes ?>Assets/College_Bound_Icon.bmp" alt="College-bound" title="College-bound"></a>
	<a href="alumni.php"><img src="<?= $slashes ?>Assets/Alums_Icon.bmp" alt="Alumni" title="Alumni"></a>
	<a href="getInvolved.php"><img src="<?= $slashes ?>Assets/Involve_Icon.bmp" alt="GetInvoled" title="Get Involved"></a>
	Kids  First!
</div>