<!DOCTYPE html>
<?php include "ncoding.php"; ?>
<html>
<body>
<?php
$fname = $_POST["fn"];
$lname = $_POST["ln"];

$fname = htmlspecialchars($fname);
$lname = htmlspecialchars($lname);

try {
	$conn = new PDO("sqlsrv:server = tcp:eteater.database.windows.net,1433; Database = eteaterdb", "stenno", "MjKpkslpn4s");
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	$stmt2 = $conn->prepare("SELECT * FROM Devs WHERE FirstName = :firstname AND LastName = :lastname COLLATE Latin1_General_CS_AS");
	$stmt2->bindParam(":firstname", $fname);
	$stmt2->bindParam(":lastname", $lname);

	$stmt2->execute();
	$stmt2->setFetchMode(PDO::FETCH_ASSOC); 
	$result = $stmt2->fetchAll();
	echo "Devs: ";
	echo $result[0]["FirstName"] . " ";
	echo $result[0]["LastName"] . " ";
	echo $result[0]["ID"] . " ";
	echo $fname;
}
catch(PDOException $e){
	echo "Connection failed:" . $e->getMessage() . "<br>";
}
?>


</body>
</html>
