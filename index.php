<html>
<head>
<title>Asin Store</title>
</head>
<?php
	$condb = mysql_connect("localhost","root","");
	mysql_connect("localhost","root","") or die ("Error: " . mysql_error());
	mysql_select_db("asin") or die ("Error: ". mysql_error());
	$sql = "SELECT * FROM id";
	$result = mysql_query($sql,$condb);
	$total = mysql_num_rows($result);
	echo $total;
?>
	<form action="addasin.php" method="post" name="formasin">
		<textarea  name="asin" cols="20" rows=""></textarea>
		<input type="submit" name="submit" value="submit" />
	</form>
	<form method="post" name="rowasin">
		<input type="int" name="x"></input>
		<input type="int" name="y"></input>
		<input type="submit" name="submit2"></input>
	</form>	
	<?php
	$x = $_POST['x'];
	$y = $_POST['y'];
	mysql_connect("localhost","root","") or die ("Error: " . mysql_error());
	mysql_select_db("asin") or die ("Error: ". mysql_error());
	if (isset($x,$y)) {
		$result = mysql_query("SELECT * FROM id LIMIT ".$x.",".$y);
		while ($row = mysql_fetch_array($result)) {
			echo $row['asin']."</br>";
			
		}
		
	}
	?>


</html>