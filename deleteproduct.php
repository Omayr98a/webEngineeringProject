





<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','user-information');




$id=$_GET['ID'];


$Q="DELETE FROM `tblproducts` WHERE ProductID=$id ";

mysqli_query($conn,$Q);


header('location:Displayproduct.php');






?>






