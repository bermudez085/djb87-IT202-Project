<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Gourmet Foods and Snacks</title></head>
<body>
   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
</body>


</html>
