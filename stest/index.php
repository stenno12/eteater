<!DOCTYPE html>
<?php //include "ncoding.php"; ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Testleht</title>
	<link rel="stylesheet" type="text/css" href="stiil.css">
</head>
<body>

	<div id="site_name">ELEKTRITEATER</div>
	<ul class="nav">
		<li><a class="active" href="index.php"><b>FILMID</b></a></li>
		<li><a href="kinokava.html"><b>KINOKAVA</b></a></li>
		<li><a href="info.html"><b>INFO</b></a></li>
		<li><a href="test.html"><b>TEST</b></a></li>
	</ul>
	
	<div class="content">
	
<?php
try {
	$conn = new PDO("sqlsrv:server = tcp:dsdbserver.database.windows.net,1433; Database = DSDB", "stenno", "MjKpkslpn4s");
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	$stmt = $conn->prepare("SELECT * FROM TestFilm");

	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	$result = $stmt->fetchAll();
	
	foreach ($result as $value){
		echo '<img class="pic2" src="' . $value['PictureLocation'] . '">';
		echo $value["Name"] . "<br><br>";
		echo $value["DescriptionData"] . "<br><br>";
		echo '<div class="divclear"></div>';
		echo $value["DescriptionLong"];
		echo "<hr>";
	}

}
catch(PDOException $e){
	echo "Connection failed:" . $e->getMessage() . "<br>";
}
?>
	


	</div>
</body>
</html>