<?php 
    // Check if the form has been submitted
   // Start the session
    session_start();

    // Get the session variable as an array
    //$cart = $_SESSION['cart'];

    // Use the session array in your PHP code
    //foreach ($cart as $item) {
    //echo $item['name'] . ': $' . $item['price'] . $item['price'] . '<br>';
    //}


  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
    
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
    <link rel="stylesheet" href="css/index.css" />
    <title>Fashion Finds Online Store</title>
</head>
<body>
    <section class="cart-products">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cart-table">
                        <table class="cart-table-table" id="carttable">
                            <tr>
                                <th>Item</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            <?php foreach ($_SESSION["cart"] as $item): ?>
                            <tr>
                                <td class="table-data"><img class="table-image"  src="<?php echo $item["image"]; ?>" alt=""></td>
                                <td class="table-data"><?php echo $item["name"]; ?></td>
                                <td class="table-data"><?php echo $item["quantity"]; ?></td>
                                <td class="table-data"><?php echo $item["price"]; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <br>
                        <hr>
                    </div>

                </div>

            </div>
    
        </div>
    </section>

  

      <div class="container">
            <div class="row">
                <div class="checkout-table">
                    <div class="checkout-section">
                        <table class="cart-table-table" id="carttable">
                            <tr>
                                <td>Subtotal</td>
                                <td>$ 450</td>
                            </tr>
                            <tr>
                                <td>Grand Total</td>
                                <td>$ 450</td>
                            </tr>
                        </table>
                        <button class="checkout-section-button">Checkout</button>
                        

                    </div>

                </div>

            </div>

      </div>

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


</body>
</html>