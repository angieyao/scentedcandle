<?php
	session_start();
	$cID = $_SESSION['cID'];
	$pName = $_GET['pName'];
	$pPrice = $_GET['pPrice'];
	$pNum = $_GET['pNum'];

	$con = new mysqli("localhost", "root", "ivymiho0624", "project2");

		if ($con->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

	$rsql = "SELECT * FROM list WHERE pName = '$pName' AND cID=$cID";
	$result = $con->query($rsql);
	$nowpNum; $in = 0;
	if($row = $result->fetch_assoc()){
		$nowpNum = $row['pNum'];
		$nowpNum = $nowpNum + 1;
		$in = 1;
	}
	if($in)
		$wsql = "UPDATE list SET pNum = '$nowpNum' WHERE pName = '$pName' AND cID=$cID ";
	else
		$wsql = "INSERT INTO list (cID, pName, pPrice, pNum) VALUES ('$cID','$pName','$pPrice','$pNum')";

	$con->query($wsql);

	header("Location: full-width.php");
?>