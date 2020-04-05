<?php
$servername = "khost.ch";
$username = "versusvirus";
$password = "38jGdd_3";
$dbname="VersusVirus";

//try {
	$conn = mysqli_connect("$servername", "$username", "$password", "$dbname") or die("Could not connect to the database");
    //$conn = new PDO("mysql:host=$servername;dbname=VersusVirus", $username, $password);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//var_dump($conn);
   // }
//catch()
//    {
//    echo "Connection failed: " . $e->getMessage();
//    }
?> 