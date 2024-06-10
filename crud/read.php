<?php
$con = mysqli_connect('localhost','root','','demo');
$sql = "SELECT * FROM `student`";
$res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
 font-family: arial, sans-serif;
 border-collapse: collapse;
 width: 100%;
}
td, th {
 border: 1px solid #dddddd;
 text-align: left;
 padding: 8px;
}
tr:nth-child(even) {
 background-color: #dddddd;
}
</style>
</head>
<body>
<h2><a href="add.php">Add Records</a></h2>
<table>
 <tr>
 <th>ID</th>
 <th>Name</th>
 <th>Mobile</th>
 <th>Edit</th>
 <th>Delete</th>
 </tr>
<?php while($row = mysqli_fetch_assoc($res)) { 
$id = $row['id'];
?>
 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['mob']; ?></td>
 <td>Edit</td>
 <td><a href="delete.php?id=<?php echo $id;?>">Delete</a></td>
 <td><a href="update.php?id=<?php echo $id;?>">Update</a></td>

 </tr>
<?php } ?> 
 
</table>
</body>
</html>