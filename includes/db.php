<?php 
// connection using php data object (PDO)

$con = "mysql:host=localhost;dbname=acadamics";

try {
	// object constructor of instance of PDO class
	$pdo = new PDO($con,'root','localH@01test');
	
} catch (PDOException $e) {
	echo $e -> getMassage();
	
}



 ?>