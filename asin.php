<?php
	$array_result = explode("\n", $_GET['asin']);
	foreach ($array_result as $value) {
		echo $value;
		
	}
?>