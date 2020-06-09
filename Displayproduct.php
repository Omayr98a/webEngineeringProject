<?php
error_reporting(0);
$connn = mysqli_connect('localhost','root','','user-information');

	
	
	
	
	$sql = "select * from 'tblproducts' ";

	$query=mysqli_query($connn,$sql);
	






?>



<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>



	<div class="container">
		<div class="col-lg-12">
			<br><br>
	       <h1 class="text-warning text-center" > Display Table Data </h1>




	       <table class="table table-striped table-hover table-bordered ">

	       	<tr class="bg-dark text-white text-center">
	       		<th> Product iD</th>
	       		<th> Product Name</th>
	       		<th> Product Price</th>
	       		<th> Product Code</th>
	       		<th> Product Stock</th>
	       		<th> Product Discount</th>
	       		<th> Product sizes/th>
	       		<th> Product Details</th>
	       		<th> Product Image</th>
	       		<th> Delete</th>
	       		<th> Update</th>
	       	</tr>
<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','user-information');

	
	
	
	
	$sql = "select * from`tblproducts`";

	$query=mysqli_query($connn,$sql);



	While($res=mysqli_fetch_array($query)){
	






?>


	       	<tr class="text-center">

	       		<td><?php echo $res['ProductID']; ?></td>
	       		<td> <?php echo $res['ProductName']; ?></td>
	       		<td> <?php echo $res['ProductPrice']; ?></td>
	       		<td> <?php echo $res['ProductCode']; ?></td>
	       		<td> <?php echo $res['ProductInStock']; ?></td>
	       		<td> <?php echo $res['ProductDiscount']; ?></td>
	       		<td> <?php echo $res['ProductSizeses']; ?></td>
	       		<td> <?php echo $res['ProductDetails']; ?></td>
	       		<td> <img src=" <?php echo $res['ProductImage'];?> " height="100px" width="100px" > </td>
	       		<td><button class="btn-danger btn"> <a href="deleteproduct.php?ID=<?php echo $res['ProductID']; ?>" class="text-white" > Delete</a></button></td>
	       		<td> <button class="btn-primary btn"> <a href="updateproduct.php?ID=<?php echo $res['ProductID']; ?>" class="text-white" > Update</a></button></td>
	       		
           </tr>

<?php
           }
?>

	       	
	       	
	       </table>
			
		</div>
		
	</div>

</body>
</html>