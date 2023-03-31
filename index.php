<?php
// Include the database connector
require_once('database/db.php');

require('database/queries.php')

//Queries for Products whose Root Category is Jewelry

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="css/index.css"/>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS FONTS FROM GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;600;700;800;900&display=swap" rel="stylesheet">

    <title>Fashion Finds Online Store</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.webp" alt="Logo"/>

        </div>
        <nav class="nav">
            <span class="nav-link">HOME</span>

           
            <div class="dropdown">
                <span class="nav-link">BAGS <i class="material-icons">&#xe313;</i></span>
                <div class="dropdown-content">
                     <div class="nav-drop">
                            <span class="brand_name">Yves Saint Laurent</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag1)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>


                     <div class="nav-drop">
                            <span class="brand_name">Christian Dior</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag21)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Fendi</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag19)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     

                     <div class="nav-drop">
                            <span class="brand_name">Hermes</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag17)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Prada</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag10)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Bottega Veneta</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag23)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Loewe</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag16)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     

                     <div class="nav-drop">
                            <span class="brand_name">Miu Miu</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag12)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Valentino</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag3)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Versace</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag2)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Tory Burch</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag4)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Tom Ford</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag5)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Stella McCartney</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag6)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Salvatore Ferragamo</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag7)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Roger Vivier</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag8)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Rimowa</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag9)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     

                     <div class="nav-drop">
                            <span class="brand_name">Moynat</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag11)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                    

                     <div class="nav-drop">
                            <span class="brand_name">Michael Kors</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag13)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">MCM</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag14)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     <div class="nav-drop">
                            <span class="brand_name">Marni</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag15)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                    

                     

                     <div class="nav-drop">
                            <span class="brand_name">Gift Bags & Boxes</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag18)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                     

                     <div class="nav-drop">
                            <span class="brand_name">Delvaux</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag20)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                    

                     <div class="nav-drop">
                            <span class="brand_name">Boyy</span>
                            <?php while($row = mysqli_fetch_assoc($resultbag22)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                     </div>

                    

                </div>
            </div>
            


            <div class="dropdown">
                <span class="nav-link">JEWELRY  <i class="material-icons">&#xe313;</i></span>
                    <div class="dropdown-content">
                        <!-- Sample content 1 -->
                        <div class="nav-drop">
                                <span class="brand_name">Prada</span>
                                <?php while($row = mysqli_fetch_assoc($resultjewel1)) { ?>
                                <div class="child_categories">
                                    <a 
                                    href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                                </div> 
                                <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Chanel</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel27)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>  

                        <div class="nav-drop">
                            <span class="brand_name">Christian Dior</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel22)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Yves Saint Laurent</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel2)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>     

                        <div class="nav-drop">
                            <span class="brand_name">Versace</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel3)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Van Cleef & Arpels</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel4)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Valentino</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel5)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   



                        <div class="nav-drop">
                            <span class="brand_name">Tiffany & Co.</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel6)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Piaget</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel7)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>  
                        
                        
                        <div class="nav-drop">
                            <span class="brand_name">Bvlgari</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel30)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div> 

                        <div class="nav-drop">
                            <span class="brand_name">Pandora</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel8)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Other brands</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel9)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Miu Miu</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel10)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Messika</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel11)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Louis Vuitton</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel12)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Loewe</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel13)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Hermes</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel14)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Harry Winston</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel15)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Gucci</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel16)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Graff</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel17)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Givenchy</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel18)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Gevlar</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel19)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Fendi</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel20)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Dolce & Gabbana</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel21)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        

                        <div class="nav-drop">
                            <span class="brand_name">Chopin</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel23)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Chopard</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel24)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Chloe</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel25)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Chaumet</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel26)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                         

                        <div class="nav-drop">
                            <span class="brand_name">Celine</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel28)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Cartier</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel29)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   
  

                        <div class="nav-drop">
                            <span class="brand_name">Burberry</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel31)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Bottega Veneta</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel32)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">Balenciaga</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel33)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   

                        <div class="nav-drop">
                            <span class="brand_name">APM</span>
                            <?php while($row = mysqli_fetch_assoc($resultjewel34)) { ?>
                            <div class="child_categories">
                                <a 
                                href="bags.php?query=SELECT * FROM products WHERE GrandChild_Category = '<?php echo $row['Grandchild_Category']; ?>'"><?php echo $row['Grandchild_Category']; ?></a>
                            </div> 
                            <?php } ?> 
                        </div>   
                        
                        

                    </div>
            </div>

            <div class="dropdown">
                <span class="nav-link">SHOES  <i class="material-icons">&#xe313;</i></span>
                <div class="dropdown-content">
                    <span class="nav-drop"></span>
                    <span class="nav-drop"></span>
                    <span class="nav-drop"></span>
                </div>
            </div>
            <div class="dropdown">
                <span class="nav-link">WATCHES  <i class="material-icons">&#xe313;</i></span>
                <div class="dropdown-content">
                    <span class="nav-drop"></span>
                    <span class="nav-drop"></span>
                    <span class="nav-drop"></span>
                </div>
            </div>
            <div class="icons">
                <form class="icons-form">
                    <input type="text" id="fname" name="fname" placeholder="search">
                    <button class="search-button">SEARCH</button>
                </form>
                <div class="cart">                
                    <img src="img/cart.png" class="cart-icon" width="35" height="35"/>
                    <span class="cart-counter">1</span>
                    <div class="cart-items">
                    <div class="item">
                        <img src="img/icons8-bag-48.png" alt="product"/>
                        <span>Chanel Classic Handbag ajdoijoiajfoakpoa kfposkfmfamoai</span>
                        <span>Price</span>
                        <img src="img/icons8-trash-can-24.png" width="24">
                    </div>
                    <div class="item">
                        <img src="img/icons8-bag-48.png" alt="product"/>
                        <span>Chanel Classic Handbag</span>
                        <span>Price</span>
                        <img src="img/icons8-trash-can-24.png" width="24">
                    </div>
                </div>
                </div>
                
            </div>
        </nav>
    </header>

    <!-- Slider Element -->
    <div class ="slideshow">

        <div class="slideshow-container">
            <div class="slide">
                <img src="img/img1.jpg" alt="Slide 1">
                <div class="slide-text">
                    <h2>Payment Made Easy</h2>
                    <p>Purchase our products from the comfort of your home</p>
                    <button class="slide-button">Buy Now</button>
                </div>
            </div>
            <div class="slide">
                <img src="img/img2.jpg" alt="Slide 2">
                <div class="slide-text">
                    <h2>High Quality</h2>
                    <p>Exceptional, stylish and affordable</p>
                    <button class="slide-button">Buy Now</button>
                </div>
            </div>
            <div class="slide">
                <img src="img/slide3.jpg" alt="Slide 3">
                <div class="slide-text">
                    <h2>Discounted Prices</h2>
                    <p>Find your favorites at a considerably affordable prices</p>
                    <button class="slide-button">Buy Now</button>
                </div>
            </div>
        </div>

    </div>

    <!-- BODY ELEMENT -->

    <div class="body-element">

        <!-- LIVE SLIDESHOW ELEMENT-->
       

        <div class="body-section">

            <!-- FEATURED PRODUCTS SECTION -->
            <h2>Featured Products</h2>
            <div class="featured-products">
                
                <div class="product-container">
                    <img src="https://cdn11.bigcommerce.com/s-u1vaaqdywl/images/stencil/320w/products/21654/22156/wsxc1678985496200_0__45508.1678975570.jpg?c=1" alt="Product Image"/>
                    <div class="item-description">
                        <span class="brand-name">Chanel</span>
                        <p class="product-name">Chanel 23C Camellia Quilted Denim Heart Crush Small Classic Flap</p>
                        <div class="prices">
                            <span class="price">USD 500</span>
                            <span class="sale-price">USD 210</span>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <img src="https://cdn11.bigcommerce.com/s-u1vaaqdywl/images/stencil/320w/products/3639/3971/bvjo35lawi__61921.1678294825.jpg?c=1" alt="Product Image"/>
                    <div class="item-description">
                        <span class="brand-name">Chanel</span>
                        <p class="product-name">Chanel 23C Camellia Quilted Denim Heart Crush Small Classic Flap</p>
                        <div class="prices">
                            <span class="price">USD 500</span>
                            <span class="sale-price">USD 210</span>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <img src="https://cdn11.bigcommerce.com/s-u1vaaqdywl/images/stencil/320w/products/3639/3971/bvjo35lawi__61921.1678294825.jpg?c=1" alt="Product Image"/>
                    <div class="item-description">
                        <span class="brand-name">Chanel</span>
                        <p class="product-name">Chanel 23C Camellia Quilted Denim Heart Crush Small Classic Flap</p>
                        <div class="prices">
                            <span class="price">USD 500</span>
                            <span class="sale-price">USD 210</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- MOST POPULAR PRODUCTS SECTION -->
            <h2>Popular Products</h2>
            <div class="featured-products">
                <div class="product-container">
                    <img src="https://cdn11.bigcommerce.com/s-u1vaaqdywl/images/stencil/320w/products/21654/22156/wsxc1678985496200_0__45508.1678975570.jpg?c=1" alt="Product Image"/>
                    <div class="item-description">
                        <span class="brand-name">Chanel</span>
                        <p class="product-name">Chanel 23C Camellia Quilted Denim Heart Crush Small Classic Flap</p>
                        <div class="prices">
                            <span class="price">USD 500</span>
                            <span class="sale-price">USD 210</span>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <img src="https://cdn11.bigcommerce.com/s-u1vaaqdywl/images/stencil/320w/products/21654/22156/wsxc1678985496200_0__45508.1678975570.jpg?c=1" alt="Product Image"/>
                    <div class="item-description">
                        <span class="brand-name">Chanel</span>
                        <p class="product-name">Chanel 23C Camellia Quilted Denim Heart Crush Small Classic Flap</p>
                        <div class="prices">
                            <span class="price">USD 500</span>
                            <span class="sale-price">USD 210</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NEW PRODUCTS SECTION -->
            <h2>New Products</h2>
            <div class="featured-products">
            <div class="product-container">
                    <img src="https://cdn11.bigcommerce.com/s-u1vaaqdywl/images/stencil/320w/products/21654/22156/wsxc1678985496200_0__45508.1678975570.jpg?c=1" alt="Product Image"/>
                    <div class="item-description">
                        <span class="brand-name">Chanel</span>
                        <p class="product-name">Chanel 23C Camellia Quilted Denim Heart Crush Small Classic Flap</p>
                        <div class="prices">
                            <span class="price">USD 500</span>
                            <span class="sale-price">USD 210</span>
                        </div>
                    </div>
                </div>
                <div class="product-container">
                    <img src="https://cdn11.bigcommerce.com/s-u1vaaqdywl/images/stencil/320w/products/21654/22156/wsxc1678985496200_0__45508.1678975570.jpg?c=1" alt="Product Image"/>
                    <div class="item-description">
                        <span class="brand-name">Chanel</span>
                        <p class="product-name">Chanel 23C Camellia Quilted Denim Heart Crush Small Classic Flap</p>
                        <div class="prices">
                            <span class="price">USD 500</span>
                            <span class="sale-price">USD 210</span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CONTACT US BANNER -->

            <div class="contact-us-banner">
                <!--<img src="https://images.pexels.com/photos/414660/pexels-photo-414660.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Contact us"/>-->
                <div class="contact-us-text">
                    <h2>Can't find what you are looking for?</h2>
                    <p>We update our catalogue regularly. Whether it is new products,
                        or more photos...Please don't hesitate to contact us with your inquiries. </p>
                    </p>
                    <button class="slide-button"> Contact Us</button>

                </div>

            </div>
            
           
        </div>


    </div>

    <!-- FOOTER ELEMENT -->
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



    <!-- Javascript Code For Slideshow-->

    <script>
        const slides = document.querySelectorAll(".slide");

        let index = 0;
        setInterval(() => {
        slides[index].classList.remove("active");
        index = (index + 1) % slides.length;
        slides[index].classList.add("active");
        }, 12000);
        

    </script>
    
    
</body>
</html>