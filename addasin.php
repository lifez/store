<?php
	ini_set('max_execution_time',0);
	$array_result = explode("\n", $_POST['asin']);
	mysql_connect("localhost","root","") or die ("Error: " . mysql_error());
	mysql_select_db("asin") or die ("Error: ". mysql_error());
	foreach ($array_result as $value) {
		$query = " INSERT IGNORE INTO id(asin)  VALUES ('$value') " ;
		mysql_query($query) or die ("Error: " . mysql_error());;
	}
	
?>