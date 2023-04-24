<?php

// Include the database connector
require_once('database/db.php');
$query = $_GET['query'];
echo $query;
$result = $mysqli->query($query);

//include('database/queries.php');


//Queries for Products whose Root Category is Jewelry

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSS FONTS FROM GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Fashion Finds Online Store</title>
</head>
<body>
    <div class="top-banner">
        <p>"We do not just deliver a product, We deliver an experience!" </p>
    </div>
   
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <section class="item-container">
        <div class="item">
            <div class="item-image">
                <img src="<?php echo $row["Thumbnail"]; ?>" alt=""/>
            </div>
            <div class="item-description">
                <h2><?php echo $row["Product_Name"]; ?></h2>
                <h3><?php echo $row["Brand_Name"]; ?></h3>
                <p><?php echo $row["Product_Description"]; ?></p>

               

                 <!-- PHP CODE TO ADD ITEM TO CART -->
                    <form method="post" class="add-to-cart-form" action="add-to-cart.php">

                        

                        
                        <label for="quantity">Quantity:</label>

                        <!-- Quantity -->
                        <input type="number" name="quantity" id="quantity" value="1" min="1" onchange="updatePrice()">

                        <!-- Price -->
                        <input type="hidden" id="price" name="price" value="<?php echo $row["Sale_Price"]; ?>">
                        <input type="hidden" id="input_price" name="input_price" value="<?php echo $row["Sale_Price"]; ?>">

                        <!-- Product Name -->
                        <input type="hidden" id="product_name" name="product_name" value="<?php echo $row["Product_Name"]; ?>">
                         <!-- Product Image -->
                         <input type="hidden" id="product_image" name="product_image" value="<?php echo $row["Thumbnail"]; ?>">


                        <div class ="item-price-section">

                            
                            <p>Price: $ <span id="total_price"><?php echo $row["Sale_Price"]; ?></span> </p>
                           

                        </div>

                        <button type="submit" class="add-to-cart">Add To Cart</button>
                    </form>



               
                <div class="social-links">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-whatsapp"></a>
                </div>

            </div>

           

        </div>
    </section>
    <?php } ?>

    <footer>
            <div class="navigate">
                <h3>Navigate</h3>
                <a href="">Payment</a>
                <a href="">Pages</a>
                <a href="">Contact Us</a>
            </div>

            <div class="categories">
                <h3>Categories</h3>
                <a href="">Bags</a>
                <a href="">Jewelry</a>
                <a href="">Shoes</a>
                <a href="">Watches</a>  
            </div>

            <div class="popular-brands">
                <a href="">Chanel</a>
                <a href="">Valentino</a>
                <a href="">Christian Dior</a>
                <a href="">Cartier</a>
                <a href="">Longines</a>
                <a href="">Hermes</a>
                <a href="">Prada</a>
                <a href="">Bvlgari</a>
                <a href="">Rolex</a>            

            </div>
            <div class="info">
                <span><i>Paris, France</i></span>
                

            </div>
            <div class="subscribe">
                <span>Subscribe To Our Newsletter</span>
                <span>Get the latest updates on new products and upcoming sales</span>
                <div class="subscribe-email">
                    <input id="email-address" type="email" />
                    <button class="slide-button">Subscribe</button>

                </div>
                

            </div>

    </footer>

    <script>
       
        function updatePrice() {
        // Get the price and quantity inputs
        const priceInput = document.querySelector('input[name="price"]');
        const quantityInput = document.querySelector('input[name="quantity"]');

        // Calculate the total price using the PHP function
        const totalPrice = price.value * quantityInput.value;

        console.log(totalPrice);
        document.querySelector('#total_price').textContent = totalPrice.toFixed(2);

        document.querySelector('#input_price').value = totalPrice.toFixed(2);
        


        // Update the total price element with the new value
       
        }
        
        
       
    </script>



</body>

</html>