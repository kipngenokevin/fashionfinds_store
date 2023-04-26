<?php 
       
       

  
    // Check if the form has been submitted
        addToCart();

       // Redirect to the cart page
       header("Location: cart.php"); // Redirect to home page if not set
       exit;
    
    // Function to add items to the cart
        // Function to add items to the cart
        function addToCart() {
        // Start the session to access the cart
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the values from the form using the $_POST superglobal array
            $product_name = $_POST["product_name"];
            $product_price = $_POST["input_price"];
            $quantity = $_POST["quantity"];
            $image = $_POST["product_image"];

            echo $product_price;
            echo $product_name;

            // Create an array to store the product information
            $product = array(
                "name" => $product_name,
                "price" => $product_price,
                "quantity" => $quantity,
                "image" => $image
            );

            // Check if the cart already exists in the session
            if (!isset($_SESSION["cart"])) {
                // If the cart doesn't exist, create an empty array
                $_SESSION["cart"] = array();
            }

            // Check if the product is already in the cart
            foreach ($_SESSION["cart"] as $key => $item) {
                if ($item["name"] === $product_name) {
                    // Update the quantity of the existing item
                   
                    $_SESSION["cart"][$key]["quantity"] += $quantity;
                    return;
                }
            }
            // Add the product to the cart
            array_push($_SESSION["cart"], $product);
            $num_items = count($_SESSION["cart"]);
            echo '<script>alert("Item added to cart!");</script>';
        } 
    }

  

  
?>