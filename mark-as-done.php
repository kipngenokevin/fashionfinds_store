<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashionfinds_store";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$order_id = $_POST["order_id"];

// Prepare and execute SQL statement to mark the order as done
$stmt = $conn->prepare("UPDATE customer_orders SET done = TRUE WHERE id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();

// Close database connection
$stmt->close();
$conn->close();

// Redirect user back to

header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;
