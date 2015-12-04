<?php
	$slashes = "";
	for($i = 0; $i < $folders; $i++){
		$slashes = $slashes."../";
	}
?>
<div id="mainnav">
	<a class="houseLink" href="<?= $slashes ?>index.php"><img src="<?= $slashes ?>Assets/Home_Icon.bmp" alt="Home" title="Home" class="house"></a>
	<a class="kidsLink" href="<?= $slashes ?>kids.php"><img src="<?= $slashes ?>Assets/Kids_Icon.bmp" alt="Kids" title="Kids" class="kids"></a>
	<a class="collegeLink" href="<?= $slashes ?>CollegeBound/cbhome.php"><img src="<?= $slashes ?>Assets/College_Bound_Icon.bmp" alt="College-bound" title="College-bound" class="college"></a>
	<a class="alumniLink" href="<?= $slashes ?>alumni.php"><img src="<?= $slashes ?>Assets/Alums_Icon.bmp" alt="Alumni" title="Alumni" class="alumni"></a>
	<a class="involvedLink" href="<?= $slashes ?>getInvolved.php"><img src="<?= $slashes ?>Assets/Involve_Icon.bmp" alt="GetInvoled" title="Get Involved" class="involved"></a>
	Kids  First!
</div>