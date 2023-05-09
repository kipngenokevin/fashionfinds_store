<?php
// Start session and connect to MySQL database
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashionfinds_store";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];

	// Hash the password for security
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Prepare and execute SQL statement to insert user into database
	$stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
	$stmt->bind_param("sss", $username, $hashed_password, $email);
	$stmt->execute();

	// Redirect user to login page
	header("Location: login.php");
	exit;
}

// Close database connection
$conn->close();
?>
