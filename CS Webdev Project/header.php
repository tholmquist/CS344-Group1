<?php
	$slashes = "";
	for($i = 0; $i < $folders; $i++){
		$slashes = $slashes."../";
	}
?>
<div id="mainnav">
	<a href="index.html"><img src="<?= $slashes ?>Assets/Home_Icon.bmp" alt="Home" title="Home"></a>
	<a href="index.html"><img src="<?= $slashes ?>Assets/Kids_Icon.bmp" alt="Kids" title="Kids"></a>
	<a href="index.html"><img src="<?= $slashes ?>Assets/College_Bound_Icon.bmp" alt="College-bound" title="College-bound"></a>
	<a href="index.html"><img src="<?= $slashes ?>Assets/Alums_Icon.bmp" alt="Alumni" title="Alumni"></a>
	Kids  First!
</div>