<?php
$id = $_REQUEST['id'];
$con = mysqli_connect('localhost','root','','demo');
$sql = "DELETE FROM `student` WHERE `student`.`id` = '$id'";
$res = mysqli_query($con,$sql);
header("Location:read.php");
?>