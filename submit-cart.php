<?php
require_once('database/db.php');
session_start();

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $total_price = $_POST["total_price"];
    $cart = $_POST["cart"];


     //Connect to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fashionfinds_store";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 



    // Prepare and execute SQL statement to insert order into database
    $stmt = $conn->prepare("INSERT INTO customer_orders (name, email, address, total_price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $name, $email, $address, $total_price);
    $stmt->execute();

    // Get the ID of the order that was just inserted
    $order_id = $conn->insert_id;

    // Prepare and execute SQL statement to insert each item in the cart into the order_items table
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_name, price, quantity) VALUES (?, ?, ?, ?)");
    foreach ($cart as $item) {
        $stmt->bind_param("isdd", $order_id, $item["name"], $item["price"], $item["quantity"]);
        $stmt->execute();
    }

    // Close database connection
    $stmt->close();
    $conn->close();

    // Clear the cart
    unset($_SESSION["cart"]);

    // Redirect user to a thank you page
    header("Location: thank-you.php");
    exit;
}
