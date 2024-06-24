<?php
	$host = "sql7.freesqldatabase.com";
	$user = "sql7715661";
	$pass = "bSEp5wLZjM";
	$db = "sql7715661";
	
	$conn = mysqli_connect($host, $user, $pass, $db);
		
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	
	$imie = $_POST["imie"];
	$email = $_POST["email"];
	$tresc = $_POST["tresc"];
	
	$sql = "INSERT INTO EmailList (imie, mail, tresc) VALUES ('".$imie."', '".$email."', '".$tresc."')";
	
	mysqli_query($conn, $sql);
	
	header("Location: index.html");
?>