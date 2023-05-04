<?php

ob_start();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $removeIndex = $_POST["remove_index"];
    removeFromCart($removeIndex);
}

removeFromCart($index);

header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;



function removeFromCart($index) {
    // Check if the cart exists in the session
    if (!isset($_SESSION["cart"])) {
        // If the cart doesn't exist, return early
        return;
    }

    // Remove the item from the cart at the given index
    unset($_SESSION["cart"][$index]);

    // Reset the keys of the cart array
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
}

ob_end_flush();
?>