<!DOCTYPE html>
<?php //include "ncoding.php"; ?>
<html>
<body>
<?php
$fbuid = $_POST["fbuid"];
$fbuid = htmlspecialchars($fbuid);

try {
	$conn = new PDO("sqlsrv:server = tcp:dsdbserver.database.windows.net,1433; Database = DSDB", "stenno", "MjKpkslpn4s");
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	$stmt = $conn->prepare("SELECT * FROM TestUser WHERE FBID = :fbuid");
	$stmt->bindParam(":fbuid", $fbuid);

	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC); 
	$result = $stmt->fetchAll();
	
	if (count($result) < 1){
		$stmt2 = $conn->prepare("INSERT INTO TestUser (FBID) VALUES (:fbuid)");
		$stmt2->bindParam(":fbuid", $fbuid);
		$stmt2-> execute();
		
		$stmt-> execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC); 
		$result = $stmt->fetchAll();
	}
	echo "Kinopunkte: ";
	echo $result[0]["Points"];

}
catch(PDOException $e){
	echo "Connection failed:" . $e->getMessage() . "<br>";
}
?>


</body>
</html>