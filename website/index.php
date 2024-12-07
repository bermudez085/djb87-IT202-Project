<?php
// Name: Daniel Bermudez
// Date: 10/4/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
session_start();
include("GourmetFoodscategory.php");
include("GourmetFoodsproduct.php");
?>
<!DOCTYPE html>
<html>
<!-- 
Name: Daniel Bermudez
// Date: 10/4/2024
// Course Name and Section : IT-202-005
// Assignment Name and Email : Phase 1 Assignment: Login and Logout / djb87@njit.edu
-->

<head>
    <title>Gourmet Foods and Snacks</title>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
    <link rel="icon" type="image/png" href="images/Logo.png"><script language="javascript" type="text/javascript">
   function getRealTime() {
       // retrieve the DOM objects to place the content
       var domcategories = document.getElementById("categorycount");
       var domitems = document.getElementById("itemcount");
       var domlistpricetotal = document.getElementById("listpricetotal");
       var domwholesalepricetotal = document.getElementById("wholesalepricetotal");
       //send the GET request to retrieve the data
       var request = new XMLHttpRequest();
       request.open("GET", "realtime.php", true);
       request.onreadystatechange = function() {
           if (request.readyState == 4 && request.status == 200) {
               //parse the XML document to get each data element
               var xmldoc = request.responseXML;
               var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
               var categories = xmlcategories.childNodes[0].nodeValue;
               var xmlitems = xmldoc.getElementsByTagName("items")[0];
               var items = xmlitems.childNodes[0].nodeValue;
               var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
               var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
               var xmlwholesalepricetotal = xmldoc.getElementsByTagName("wholesalepricetotal")[0];
               var wholesalepricetotal = xmlwholesalepricetotal.childNodes[0].nodeValue;
               domcategories.innerHTML = categories;
               domitems.innerHTML = items;
               domlistpricetotal.innerHTML = listpricetotal;
               domwholesalepricetotal.innerHTML = wholesalepricetotal;
           }
       };
       request.send();
   }
</script>




</head>

<body>
<header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 375px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>

    <section id="container">
        <main>
            <?php
            if (isset($_REQUEST['content'])) {
                include($_REQUEST['content'] . ".inc.php");
            } else {
                include("main.inc.php");
            }
            
            ?>
            <aside>
           <?php include("aside.inc.php"); ?>
           <script language="javascript" type="text/javascript" )>
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
       </aside>
        </main>
    </section>
    <footer>
       <?php include("footer.inc.php"); ?>
   </footer>

</body>
</html>