<!DOCTYPE html>
<?php //include "ncoding.php"; ?>
<html>
<body>
<?php
$phpDate = $_REQUEST["phpDate"];

$phpDate = htmlspecialchars($phpDate);

try {
	$conn = new PDO("sqlsrv:server = tcp:dsdbserver.database.windows.net,1433; Database = DSDB", "stenno", "MjKpkslpn4s");
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	$stmt = $conn->prepare("SELECT COUNT(*) AS Sm FROM TestShowing WHERE StartDate = :date");
	$stmt->bindParam(":date", $phpDate);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	$result = $stmt->fetchAll();
	
	$stmt2 = $conn->prepare("SELECT TestShowing.ID, Name, StartTime, StartDate, Tickets, PictureLocation FROM 
	                         TestFilm, TestShowing WHERE TestFilm.ID = TestShowing.FilmID AND StartDate = :date");
	$stmt2->bindParam(":date", $phpDate);
	$stmt2->execute();
	$stmt2->setFetchMode(PDO::FETCH_ASSOC); 
	$result2 = $stmt2->fetchAll();
	
	echo "Valitud päeval seansse: " . $result[0]["Sm"] . "<br><br>";
	foreach ($result2 as $value){
		echo '<img class="pic2" src="' . $value['PictureLocation'] . '">';
		echo "<b>" . $value["Name"]. "</b>" . "<br><br>";
		echo "Algus: " . substr($value["StartTime"], 0, 5) . "<br><br>";
		echo "Pileteid: " . $value["Tickets"] . "<br><br>";
		echo '<div class="divclear"></div>';
		echo "<hr>";
	}
}
catch(PDOException $e){
	echo "Connection failed:" . $e->getMessage() . "<br>";
}
?>


</body>
</html>