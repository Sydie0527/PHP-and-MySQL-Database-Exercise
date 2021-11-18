<?php
$servername = "localhost";
$username = "uspfstudent"
$password = "1234567";
$dbname = "schooldb";

$conn = new mysql($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE MyGuest (
StudentIDNumber INT(6) UNSIGNED AUTTO_INCREMENT PRIMARY KEY,
StudentFamilyName VARCHAR(30),
StudentFirstName VARCHAR(30),
StudentMiddleName VARCHAR(30),
StudentEmailAddress VARCHAR(30),
StudentHomeAddress VARCHAR(30),
StudentMobileAddress VARCHAR(30),
StudentCourse VARCHAR NOT NULL(30);

if ($conn->quesry($sql) === TRUE){
	echo "Table MyGuest created successfully";
}else{
	echo "Error" . $conn->error;
}

$conn->close();
?>