<?php
   echo"<pre>";
   print_r($_POST);//(Super Global variable so writw in capital method) //only for checking purpose
    $a=$_GET['value1'];
    $b=$_GET['value2'];

    echo  $a+$b."<br>"; 
    echo $a-$b."<br>";
    echo $a*$b."<br>";
    echo $a/$b."<br>";
?>     