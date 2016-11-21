<!DOCTYPE html>
<html>
<head>
	<title>Tugas 1</title>
</head>
<body>
<?php
$link = mysql_connect('localhost','root','') or die('Could not connect: '.mysql_error());
echo "Connected succesfully";
echo "<br><br>";
mysql_select_db('ShowRoomMobil') or die('Could not select database');
	$query = 'SELECT * FROM mobil';
	$result = mysql_query($query) or die ('Query failed :'.mysql_error());
	echo "<h1>Metode MYSQL_BOTH</h1>";
	
	while($line = mysql_fetch_array($result, MYSQL_BOTH)){
		echo $line[0]." ".$line[1]." ".$line['Model']." ".$line['Tipe']	;
		echo "<br>";
	}
	
?>
</body>
</html>