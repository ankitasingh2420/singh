<?php
$name = $_REQUEST['name'];
$mob = $_REQUEST['mob'];
$con = mysqli_connect('localhost','root','','demo');
$sql = "INSERT INTO `student` (`name`, `mob`) VALUES ('$name', '$mob')";
$res = mysqli_query($con,$sql);
header("Location:read.php");
?>