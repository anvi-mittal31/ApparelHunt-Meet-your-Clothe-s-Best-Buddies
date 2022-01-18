<?php
    $xml = simplexml_load_file("data.xml");
 if (isset($_POST['submit'])) {
     $username=$_POST["username"];
     $password=$_POST["password"];

         if ($password==$xml->password) {
            header("location:ProductAdd.php");
             exit();
         }
         else{
             echo "Error";
         }    
 }
?>
