<?php 
// Write your SQL query
//Queries for Products whose Root Category is Bags
$querybag1 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Yves Saint Laurent" AND Root_Category="Bags"';
$querybag2 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Versace" AND Root_Category="Bags"';
$querybag3 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Valentino" AND Root_Category="Bags"';
$querybag4 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Tory Burch" AND Root_Category="Bags"';
$querybag5 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Tom Ford" AND Root_Category="Bags"';
$querybag6 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Stella McCartney" AND Root_Category="Bags"';
$querybag7 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Salvatore Ferragamo" AND Root_Category="Bags"';
$querybag8 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Roger Vivier" AND Root_Category="Bags"';
$querybag9 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Rimowa" AND Root_Category="Bags"';
$querybag10 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Prada" AND Root_Category="Bags"';
$querybag11 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Moynat" AND Root_Category="Bags"';
$querybag12 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Miu Miu" AND Root_Category="Bags"';
$querybag13 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Michael Kors" AND Root_Category="Bags"';
$querybag14 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "MCM" AND Root_Category="Bags"';
$querybag15 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Marni" AND Root_Category="Bags"';
$querybag16 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Loewe" AND Root_Category="Bags"';
$querybag17 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Hermes" AND Root_Category="Bags"';
$querybag18 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Gift Bags & Boxes" AND Root_Category="Bags"';
$querybag19 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Fendi" AND Root_Category="Bags"';
$querybag20 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Delvaux" AND Root_Category="Bags"';
$querybag21 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Christian Dior" AND Root_Category="Bags"';
$querybag22 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Boyy" AND Root_Category="Bags"';
$querybag23 ='SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Bottega Veneta" AND Root_Category="Bags"';


// Queries for Products whose Root Category is Jewelry

$queryjewl1 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Prada" AND Root_Category="Jewelry"';
$queryjewl2 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Yves Saint Laurent" AND Root_Category="Jewelry"';
$queryjewl3 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Versace" AND Root_Category="Jewelry"';
$queryjewl4 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Van Cleef & Arpels" AND Root_Category="Jewelry"';
$queryjewl5 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Valentino" AND Root_Category="Jewelry"';
$queryjewl6 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Tiffany & Co." AND Root_Category="Jewelry"';
$queryjewl7 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Piaget" AND Root_Category="Jewelry"';
$queryjewl8 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Pandora" AND Root_Category="Jewelry"';
$queryjewl9 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Other brands" AND Root_Category="Jewelry"';
$queryjewl10 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Miu Miu" AND Root_Category="Jewelry"';
$queryjewl11 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Messika" AND Root_Category="Jewelry"';
$queryjewl12 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Louis Vuitton" AND Root_Category="Jewelry"';
$queryjewl13 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Loewe" AND Root_Category="Jewelry"';
$queryjewl14 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Hermes" AND Root_Category="Jewelry"';
$queryjewl15 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Harry Winston" AND Root_Category="Jewelry"';
$queryjewl16 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Gucci" AND Root_Category="Jewelry"';
$queryjewl17 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Graff" AND Root_Category="Jewelry"';
$queryjewl18 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Givenchy" AND Root_Category="Jewelry"';
$queryjewl19 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Gevlar" AND Root_Category="Jewelry"';
$queryjewl20 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Fendi" AND Root_Category="Jewelry"';
$queryjewl21 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Dolce & Gabbana" AND Root_Category="Jewelry"';
$queryjewl22 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Christian Dior" AND Root_Category="Jewelry"';
$queryjewl23 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chopin" AND Root_Category="Jewelry"';
$queryjewl24 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chopard" AND Root_Category="Jewelry"';
$queryjewl25 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chloe" AND Root_Category="Jewelry"';
$queryjewl26 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chaumet" AND Root_Category="Jewelry"';
$queryjewl27 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chanel" AND Root_Category="Jewelry"';
$queryjewl28 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Celine" AND Root_Category="Jewelry"';
$queryjewl29 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Cartier" AND Root_Category="Jewelry"';
$queryjewl30 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Bvlgari" AND Root_Category="Jewelry"';
$queryjewl31 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Burberry" AND Root_Category="Jewelry"';
$queryjewl32 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Bottega Veneta" AND Root_Category="Jewelry"';
$queryjewl33 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Balenciaga" AND Root_Category="Jewelry"';
$queryjewl34 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "APM" AND Root_Category="Jewelry"';


// Queries for Products whose Root Category is Shoes
$queryshoe1 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Yves Saint Laurent" AND Root_Category="Shoes"';
$queryshoe2 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Yeezy" AND Root_Category="Shoes"';
$queryshoe3 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Versace" AND Root_Category="Shoes"';
$queryshoe4 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Valentino" AND Root_Category="Shoes"';
$queryshoe5 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "UGG" AND Root_Category="Shoes"';
$queryshoe6 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Tom Ford" AND Root_Category="Shoes"';
$queryshoe7 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Stuart Weitzman" AND Root_Category="Shoes"';
$queryshoe8 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Adidas" AND Root_Category="Shoes"';
$queryshoe9 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Sergio Rossi" AND Root_Category="Shoes"';
$queryshoe10 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Roger Vivier" AND Root_Category="Shoes"';
$queryshoe11 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Premiata" AND Root_Category="Shoes"';
$queryshoe12 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Prada" AND Root_Category="Shoes"';
$queryshoe13 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Dolce & Gabbana" AND Root_Category="Shoes"';
$queryshoe14 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Paris Texas" AND Root_Category="Shoes"';
$queryshoe15 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Nike" AND Root_Category="Shoes"';
$queryshoe16 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Nicholas Kirkwood" AND Root_Category="Shoes"';
$queryshoe17 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Miu Miu" AND Root_Category="Shoes"';
$queryshoe18 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Manolo Blahnik" AND Root_Category="Shoes"';
$queryshoe19 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Malone Souliers" AND Root_Category="Shoes"';
$queryshoe20 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Mach & Mach" AND Root_Category="Shoes"';
$queryshoe21 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Louis Vuitton" AND Root_Category="Shoes"';
$queryshoe22 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Fendi" AND Root_Category="Shoes"';
$queryshoe23 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Loro Piana" AND Root_Category="Shoes"';
$queryshoe24 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Loewe" AND Root_Category="Shoes"';
$queryshoe25 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Lanvin" AND Root_Category="Shoes"';
$queryshoe26 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Jil Sander" AND Root_Category="Shoes"';
$queryshoe27 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Hogan" AND Root_Category="Shoes"';
$queryshoe28 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Gucci" AND Root_Category="Shoes"';
$queryshoe29 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Goyard" AND Root_Category="Shoes"';
$queryshoe30 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Golden Goose" AND Root_Category="Shoes"';
$queryshoe31 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Christian Louboutin" AND Root_Category="Shoes"';
$queryshoe32 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chloe" AND Root_Category="Shoes"';
$queryshoe33 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Celine" AND Root_Category="Shoes"';
$queryshoe34 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "By Far" AND Root_Category="Shoes"';
$queryshoe35 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Burberry" AND Root_Category="Shoes"';
$queryshoe36 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Bottega Veneta" AND Root_Category="Shoes"';
$queryshoe37 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Balenciaga" AND Root_Category="Shoes"';
$queryshoe38 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Aquazzura" AND Root_Category="Shoes"';
$queryshoe39 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Amina Muaddi" AND Root_Category="Shoes"';
$queryshoe40 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Alexander Wang" AND Root_Category="Shoes"';

// Queries for Products whose Root Category is Watches
$querywatch1 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Versace" AND Root_Category="Watches"';
$querywatch2 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Van Cleef & Arpels" AND Root_Category="Watches"';
$querywatch3 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Vacheron Constatin" AND Root_Category="Watches"';
$querywatch4 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Tudor" AND Root_Category="Watches"';
$querywatch5 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Tissot" AND Root_Category="Watches"';
$querywatch6 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Tag Heuer" AND Root_Category="Watches"';
$querywatch7 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Swarovski" AND Root_Category="Watches"';
$querywatch8 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Sevenfriday" AND Root_Category="Watches"';
$querywatch9 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Rolex" AND Root_Category="Watches"';
$querywatch10 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Roger Dubois" AND Root_Category="Watches"';
$querywatch11 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Richard Mille" AND Root_Category="Watches"';
$querywatch12 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Rado" AND Root_Category="Watches"';
$querywatch13 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Piaget" AND Root_Category="Watches"';
$querywatch14 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Patek Philippe" AND Root_Category="Watches"';
$querywatch15 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Panerai" AND Root_Category="Watches"';
$querywatch16 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Omega" AND Root_Category="Watches"';
$querywatch17 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Mido" AND Root_Category="Watches"';
$querywatch18 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Louis Vuitton" AND Root_Category="Watches"';
$querywatch19 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Longines" AND Root_Category="Watches"';
$querywatch20 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Just Cavalli" AND Root_Category="Watches"';
$querywatch21 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Jaeger-LeCoultre" AND Root_Category="Watches"';
$querywatch22 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "IWC" AND Root_Category="Watches"';
$querywatch23 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Hublot" AND Root_Category="Watches"';
$querywatch24 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Hermes" AND Root_Category="Watches"';
$querywatch25 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Hamilton" AND Root_Category="Watches"';
$querywatch26 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Gucci" AND Root_Category="Watches"';
$querywatch27 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Franck Muller" AND Root_Category="Watches"';
$querywatch28 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Fendi" AND Root_Category="Watches"';
$querywatch29 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Christian Dior" AND Root_Category="Watches"';
$querywatch30 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Diesel" AND Root_Category="Watches"';
$querywatch31 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Corum" AND Root_Category="Watches"';
$querywatch32 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chopard" AND Root_Category="Watches"';
$querywatch33 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Chanel" AND Root_Category="Watches"';
$querywatch34 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Cartier" AND Root_Category="Watches"';
$querywatch35 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Bvlgari" AND Root_Category="Watches"';
$querywatch36 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Burberry" AND Root_Category="Watches"';
$querywatch37 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Breitling" AND Root_Category="Watches"';
$querywatch38 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Blancpain" AND Root_Category="Watches"';
$querywatch39 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Bell & Ross" AND Root_Category="Watches"';
$querywatch40 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Audemars Piguet" AND Root_Category="Watches"';
$querywatch41 = 'SELECT DISTINCT Grandchild_Category FROM products WHERE Brand_Name = "Armani" AND Root_Category="Watches"';


$randomquery = 'SELECT * FROM products ORDER BY RAND() LIMIT 10';
$randomquery1 = 'SELECT * FROM products ORDER BY RAND() LIMIT 10';
$randomquery2 = 'SELECT * FROM products ORDER BY RAND() LIMIT 10';


$result = $mysqli->query($randomquery);
$result1 = $mysqli->query($randomquery1);
$result2 = $mysqli->query($randomquery2);



//Execute the Bags Queries 
$resultbag1 = $mysqli->query($querybag1);
$resultbag2 = $mysqli->query($querybag2);
$resultbag3 = $mysqli->query($querybag3);
$resultbag4 = $mysqli->query($querybag4);
$resultbag5 = $mysqli->query($querybag5);
$resultbag6 = $mysqli->query($querybag6);
$resultbag7 = $mysqli->query($querybag7);
$resultbag8 = $mysqli->query($querybag8);
$resultbag9 = $mysqli->query($querybag9);
$resultbag10 = $mysqli->query($querybag10);
$resultbag11 = $mysqli->query($querybag11);
$resultbag12 = $mysqli->query($querybag12);
$resultbag13 = $mysqli->query($querybag13);
$resultbag14 = $mysqli->query($querybag14);
$resultbag15 = $mysqli->query($querybag15);
$resultbag16 = $mysqli->query($querybag16);
$resultbag17 = $mysqli->query($querybag17);
$resultbag18 = $mysqli->query($querybag18);
$resultbag19 = $mysqli->query($querybag19);
$resultbag20 = $mysqli->query($querybag20);
$resultbag21 = $mysqli->query($querybag21);
$resultbag22 = $mysqli->query($querybag22);
$resultbag23 = $mysqli->query($querybag23);


//Execute the Jewelry Queries 
$resultjewel1 = $mysqli->query($queryjewl1);
$resultjewel2 = $mysqli->query($queryjewl2);
$resultjewel3 = $mysqli->query($queryjewl3);
$resultjewel4 = $mysqli->query($queryjewl4);
$resultjewel5 = $mysqli->query($queryjewl5);
$resultjewel6 = $mysqli->query($queryjewl6);
$resultjewel7 = $mysqli->query($queryjewl7);
$resultjewel8 = $mysqli->query($queryjewl8);
$resultjewel9 = $mysqli->query($queryjewl9);
$resultjewel10 = $mysqli->query($queryjewl10);
$resultjewel11 = $mysqli->query($queryjewl11);
$resultjewel12 = $mysqli->query($queryjewl12);
$resultjewel13 = $mysqli->query($queryjewl13);
$resultjewel14 = $mysqli->query($queryjewl14);
$resultjewel15 = $mysqli->query($queryjewl15);
$resultjewel16 = $mysqli->query($queryjewl16);
$resultjewel17 = $mysqli->query($queryjewl17);
$resultjewel18 = $mysqli->query($queryjewl18);
$resultjewel19 = $mysqli->query($queryjewl19);
$resultjewel20 = $mysqli->query($queryjewl20);
$resultjewel21 = $mysqli->query($queryjewl21);
$resultjewel22 = $mysqli->query($queryjewl22);
$resultjewel23 = $mysqli->query($queryjewl23);
$resultjewel24 = $mysqli->query($queryjewl24);
$resultjewel25 = $mysqli->query($queryjewl25);
$resultjewel26 = $mysqli->query($queryjewl26);
$resultjewel27 = $mysqli->query($queryjewl27);
$resultjewel28 = $mysqli->query($queryjewl28);
$resultjewel29 = $mysqli->query($queryjewl29);
$resultjewel30 = $mysqli->query($queryjewl30);
$resultjewel31 = $mysqli->query($queryjewl31);
$resultjewel32 = $mysqli->query($queryjewl32);
$resultjewel33 = $mysqli->query($queryjewl33);
$resultjewel34 = $mysqli->query($queryjewl34);


//Execute the Shoe Queries 
$resultshoe1 = $mysqli->query($queryshoe1);
$resultshoe2 = $mysqli->query($queryshoe2);
$resultshoe3 = $mysqli->query($queryshoe3);
$resultshoe4 = $mysqli->query($queryshoe4);
$resultshoe5 = $mysqli->query($queryshoe5);
$resultshoe6 = $mysqli->query($queryshoe6);
$resultshoe7 = $mysqli->query($queryshoe7);
$resultshoe8 = $mysqli->query($queryshoe8);
$resultshoe9 = $mysqli->query($queryshoe9);
$resultshoe10 = $mysqli->query($queryshoe10);
$resultshoe11 = $mysqli->query($queryshoe11);
$resultshoe12 = $mysqli->query($queryshoe12);
$resultshoe13 = $mysqli->query($queryshoe13);
$resultshoe14 = $mysqli->query($queryshoe14);
$resultshoe15 = $mysqli->query($queryshoe15);
$resultshoe16 = $mysqli->query($queryshoe16);
$resultshoe17 = $mysqli->query($queryshoe17);
$resultshoe18 = $mysqli->query($queryshoe18);
$resultshoe19 = $mysqli->query($queryshoe19);
$resultshoe20 = $mysqli->query($queryshoe20);
$resultshoe21 = $mysqli->query($queryshoe21);
$resultshoe22 = $mysqli->query($queryshoe22);
$resultshoe23 = $mysqli->query($queryshoe23);
$resultshoe24 = $mysqli->query($queryshoe24);
$resultshoe25 = $mysqli->query($queryshoe25);
$resultshoe26 = $mysqli->query($queryshoe26);
$resultshoe27 = $mysqli->query($queryshoe27);
$resultshoe28 = $mysqli->query($queryshoe28);
$resultshoe29 = $mysqli->query($queryshoe29);
$resultshoe30 = $mysqli->query($queryshoe30);
$resultshoe31 = $mysqli->query($queryshoe31);
$resultshoe32 = $mysqli->query($queryshoe32);
$resultshoe33 = $mysqli->query($queryshoe33);
$resultshoe34 = $mysqli->query($queryshoe34);
$resultshoe35 = $mysqli->query($queryshoe35);
$resultshoe36 = $mysqli->query($queryshoe36);
$resultshoe37 = $mysqli->query($queryshoe37);
$resultshoe38 = $mysqli->query($queryshoe38);
$resultshoe39 = $mysqli->query($queryshoe39);
$resultshoe40 = $mysqli->query($queryshoe40);


//Execute the Watch Queries 
$resultswatch1 = $mysqli->query($querywatch1);
$resultswatch2 = $mysqli->query($querywatch2);
$resultswatch3 = $mysqli->query($querywatch3);
$resultswatch4 = $mysqli->query($querywatch4);
$resultswatch5 = $mysqli->query($querywatch5);
$resultswatch6 = $mysqli->query($querywatch6);
$resultswatch7 = $mysqli->query($querywatch7);
$resultswatch8 = $mysqli->query($querywatch8);
$resultswatch9 = $mysqli->query($querywatch9);
$resultswatch10 = $mysqli->query($querywatch10);
$resultswatch11 = $mysqli->query($querywatch11);
$resultswatch12 = $mysqli->query($querywatch12);
$resultswatch13 = $mysqli->query($querywatch13);
$resultswatch14 = $mysqli->query($querywatch14);
$resultswatch15 = $mysqli->query($querywatch15);
$resultswatch16 = $mysqli->query($querywatch16);
$resultswatch17 = $mysqli->query($querywatch17);
$resultswatch18 = $mysqli->query($querywatch18);
$resultswatch19 = $mysqli->query($querywatch19);
$resultswatch20 = $mysqli->query($querywatch20);
$resultswatch21 = $mysqli->query($querywatch21);
$resultswatch22 = $mysqli->query($querywatch22);
$resultswatch23 = $mysqli->query($querywatch23);
$resultswatch24 = $mysqli->query($querywatch24);
$resultswatch25 = $mysqli->query($querywatch25);
$resultswatch26 = $mysqli->query($querywatch26);
$resultswatch27 = $mysqli->query($querywatch27);
$resultswatch28 = $mysqli->query($querywatch28);
$resultswatch29 = $mysqli->query($querywatch29);
$resultswatch30 = $mysqli->query($querywatch30);
$resultswatch31 = $mysqli->query($querywatch31);
$resultswatch32 = $mysqli->query($querywatch32);
$resultswatch33 = $mysqli->query($querywatch33);
$resultswatch34 = $mysqli->query($querywatch34);
$resultswatch35 = $mysqli->query($querywatch35);
$resultswatch36 = $mysqli->query($querywatch36);
$resultswatch37 = $mysqli->query($querywatch37);
$resultswatch38 = $mysqli->query($querywatch38);
$resultswatch39 = $mysqli->query($querywatch39);
$resultswatch40 = $mysqli->query($querywatch40);
$resultswatch41 = $mysqli->query($querywatch41);

?>