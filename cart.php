<?php 
    // Check if the form has been submitted
   // Start the session
require_once('database/db.php');

include('database/queries.php');
 
    session_start();

if (!isset($_SESSION["cart"])) {
    // If the cart doesn't exist, create an empty array
    $_SESSION["cart"] = array();
}

if (isset($_SESSION["cart"])) {
    // Get the number of items in the cart
    $num_items = count($_SESSION["cart"]);
} else {
    $num_items = 0;
}
    
     //Get the session variable as an array
   

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
<header>
       
       <div class="logo">
           <img src="img/logo.webp" alt="Logo" />

       </div>
       <nav class="nav">
       <span class="nav-link"> <a href="index.php">HOME</a></span>


           <div class="dropdown">
           <span class="nav-link">BAGS <i class="material-icons">&#xe313;</i></span>
               <div class="dropdown-content">

                   <div class="nav-drop">
                       <span class="brand_name">Yves Saint Laurent</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag1)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>


                   <div class="nav-drop">
                       <span class="brand_name">Christian Dior</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag21)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Fendi</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag19)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Hermes</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag17)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Prada</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag10)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Bottega Veneta</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag23)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Loewe</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag16)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Miu Miu</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag12)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Valentino</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag3)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Versace</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag2)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Tory Burch</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag4)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Tom Ford</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag5)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Stella McCartney</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag6)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Salvatore Ferragamo</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag7)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Roger Vivier</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag8)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Rimowa</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag9)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Moynat</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag11)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Michael Kors</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag13)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">MCM</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag14)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Marni</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag15)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>





                   <div class="nav-drop">
                       <span class="brand_name">Gift Bags & Boxes</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag18)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Delvaux</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag20)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Boyy</span>
                       <?php while($row = mysqli_fetch_assoc($resultbag22)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



               </div>
           </div>



           <div class="dropdown">
           <span class="nav-link">JEWELRY <i class="material-icons">&#xe313;</i></span>
               <div class="dropdown-content">
                   <!-- Sample content 1 -->
                   <div class="nav-drop">
                       <span class="brand_name">Prada</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel1)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Chanel</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel27)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Christian Dior</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel22)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Yves Saint Laurent</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel2)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Versace</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel3)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Van Cleef & Arpels</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel4)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Valentino</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel5)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Tiffany & Co.</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel6)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Piaget</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel7)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>


                   <div class="nav-drop">
                       <span class="brand_name">Bvlgari</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel30)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Pandora</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel8)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Other brands</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel9)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Miu Miu</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel10)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Messika</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel11)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Louis Vuitton</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel12)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Loewe</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel13)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Hermes</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel14)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Harry Winston</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel15)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Gucci</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel16)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Graff</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel17)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Givenchy</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel18)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Gevlar</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel19)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Fendi</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel20)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Dolce & Gabbana</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel21)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Chopin</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel23)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Chopard</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel24)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Chloe</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel25)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Chaumet</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel26)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Celine</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel28)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Cartier</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel29)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>


                   <div class="nav-drop">
                       <span class="brand_name">Burberry</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel31)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Bottega Veneta</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel32)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Balenciaga</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel33)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">APM</span>
                       <?php while($row = mysqli_fetch_assoc($resultjewel34)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



               </div>
           </div>

           <div class="dropdown">
           <span class="nav-link">SHOES <i class="material-icons">&#xe313;</i></span>
               <div class="dropdown-content">

                   <div class="nav-drop">
                       <span class="brand_name">Christian Louboutin</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe31)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Yves Saint Laurent</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe1)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Yeezy</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe2)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Versace</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe3)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Valentino</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe4)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">UGG</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe5)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Tom Ford</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe6)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Stuart Weitzman</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe7)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Adidas</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe8)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Sergio Rossi</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe9)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Roger Vivier</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe10)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Premiata</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe11)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Prada</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe12)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Dolce & Gabbana</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe13)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Paris Texas</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe14)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Nike</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe15)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Nicholas Kirkwood</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe16)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Miu Miu</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe17)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Manolo Blahnik</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe18)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Malone Souliers</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe19)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Mach & Mach</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe20)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Louis Vuitton</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe21)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Fendi</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe22)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Loro Piana</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe23)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Loewe</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe24)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Lanvin</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe25)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Jil Sander</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe26)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Hogan</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe27)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Gucci</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe28)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Goyard</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe29)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Golden Goose</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe30)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



                   <div class="nav-drop">
                       <span class="brand_name">Chloe</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe32)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Celine</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe33)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">By Far</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe34)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Burberry</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe35)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Bottega Veneta</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe36)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Balenciaga</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe37)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Aquazzura</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe38)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Amina Muaddi</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe39)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>

                   <div class="nav-drop">
                       <span class="brand_name">Alexander Wang</span>
                       <?php while($row = mysqli_fetch_assoc($resultshoe40)) { ?>
                       <div class="child_categories">
                           <a
                               href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                               <?php echo $row['Grandchild_Category']; ?>
                           </a>
                       </div>
                       <?php } ?>
                   </div>



               </div>
           </div>

           <div class="dropdown">
           <span class="nav-link">WATCHES <i class="material-icons">&#xe313;</i></span>
               <div class="dropdown-content">
                       <div class="nav-drop">
                           <span class="brand_name">Versace</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch1)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Van Cleef & Arpels</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch2)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Vacheron Constatin</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch3)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Rolex</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch9)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Tudor</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch4)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Tissot</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch5)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Tag Heuer</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch6)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Swarovski</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch7)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Sevenfriday</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch8)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                     

                       <div class="nav-drop">
                           <span class="brand_name">Roger Dubois</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch10)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Richard Mille</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch11)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Rado</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch12)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Piaget</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch13)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Patek Philippe</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch14)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Panerai</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch15)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Omega</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch16)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Mido</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch17)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Louis Vuitton</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch18)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Longines</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch19)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Just Cavalli</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch20)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Jaeger-LeCoultre</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch21)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">IWC</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch22)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Hublot</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch23)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Hermes</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch24)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Hamilton</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch25)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Gucci</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch26)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Franck Muller</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch27)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Fendi</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch28)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Christian Dior</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch29)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Diesel</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch30)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Corum</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch31)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Chopard</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch32)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Chanel</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch33)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Cartier</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch34)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Bvlgari</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch35)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Burberry</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch36)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Breitling</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch37)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Blancpain</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch38)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Bell & Ross</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch39)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Audemars Piguet</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch40)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>

                       <div class="nav-drop">
                           <span class="brand_name">Armani</span>
                           <?php while($row = mysqli_fetch_assoc($resultswatch41)) { ?>
                           <div class="child_categories">
                               <a
                                   href="product.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'">
                                   <?php echo $row['Grandchild_Category']; ?>
                               </a>
                           </div>
                           <?php } ?>
                       </div>
               </div>
           </div>

           
           <div class="icons">
               <form class="icons-form">
                   <input type="text" id="fname" name="fname" placeholder="search">
                   <button class="search-button">SEARCH</button>
               </form>
               <div class="cart">
                   
                       <img src="img/cart.png" class="cart-icon" width="35" height="35" />
                       <span class="cart-counter"><?php echo $num_items; ?></span>
                       <div class="cart-items">
                       <?php foreach ($_SESSION["cart"] as $item): ?>
                           <div class="item">
                               <img src="<?php echo $item["image"]; ?>" alt="product" class="img-responsive" width="80px"/>
                               <span><?php echo $item["name"]; ?></span>
                               <span><?php echo $item["price"]; ?></span>
                               <form method="post" action="remove-from-cart.php">
                                   <input type="hidden" name="remove_index" value="0">
                                   <button style="border:none;" type="submit"><img src="img/icons8-trash-can-24.png" width="24"></button>
                               </form>
                           </div>
                       <?php endforeach; ?>
                       </div>
                   
               </div>

           </div>
       </nav>
   </header>
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
                                <th>Remove</th>
                            </tr>
                            <?php foreach ($_SESSION["cart"] as $item): ?>
                            <tr>
                                <td class="table-data"><img class="table-image"  src="<?php echo $item["image"]; ?>" alt=""></td>
                                <td class="table-data"><?php echo $item["name"]; ?></td>
                                <td class="table-data"><?php echo $item["quantity"]; ?></td>
                                <td class="table-data"><?php echo $item["price"]; ?></td>

                                <!-- Example usage in HTML -->
                                <td>
                                <form method="post" action="remove-from-cart.php">
                                    <input type="hidden" name="remove_index" value="0">
                                    <button  class="checkout-section-button" type="submit">Remove from cart</button>
                                </form>
                                </td>
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