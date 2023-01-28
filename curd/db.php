<?php
    $servername='sql205.epizy.com';
    $username='epiz_32829096';
    $password='weP4JHKA6fYz';
    $dbname = "epiz_32829096_users";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
