<?php
error_reporting(0);
$connn = mysqli_connect('localhost','root','','user-information');

if (!$connn) {
    echo "Not connected!";
}else{
echo "connected  ";}

if (isset($_POST['submit'])) {
  
  
  $productid = $_POST['product_id'];
  $name = $_POST['product_name'];
  $price = $_POST['product_price'];
  
  $code = $_POST['product_code'];
  $stock = $_POST['product_stock'];
  $discount = $_POST['percentage_discount'];
  $sizes = $_POST['sizes'];
  $Description = $_POST['product_description'];
/*
  $files=$_FILES['Picture'];
  $filnename=$files['name'];
  $fileerror=$files['error'];
  $filetmp=$files['tmp_name'];


  $fileext=explode('.', $filename);
  $filecheck=strtolower(end($filename));

  $fileexstored= array('png','jpg','jpeg');

  if(in_array($filecheck, $fileexstored)){

      $destinationfile='upload/'.$filename;
      move_uploaded_file($filetmp, $destinationfile);

  }
 $destinationfile='upload/'.$filename;
      move_uploaded_file($filetmp, $destinationfile);
  
  */
  $image_info = $_FILES['Picture'];

      $image_name = $image_info['name'];
      $image_tmp_name = $image_info['tmp_name'];

      $folder = "upload/";

      $full_path = $folder . $image_name;
      move_uploaded_file($image_info['tmp_name'],$full_path);
       $img_path = $full_path;  
    


 
  
  $sql2 = "INSERT into tblproducts (ProductID, ProductName, ProductPrice, ProductCode, ProductInStock, ProductDiscount, ProductSizeses, ProductDetails, ProductImage) VALUES ( '$productid',' $name','$price','$code',' $stock','$discount','$sizes',' $Description','$img_path')";
  


if(!mysqli_query ($connn, $sql2)) {
  
  echo 'Not inserted!';
  
}
else{
  echo "Record Inserted!";
}


}

?>


<!doctype html>
<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<!------ Include the above in your HEAD tag ---------->
<body>

   
<form class="form-horizontal" method="POST" enctype="multipart/form-data" >
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name_fr">PRODUCT PRICE</label>  
  <div class="col-md-4">
  <input id="product_name_fr" name="product_price" placeholder="PRODUCT DESCRIPTION FR" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">PRODUCT CODE</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="product_code" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">PRODUCT STOCK</label>  
  <div class="col-md-4">
  <input id="product_weight" name="product_stock" placeholder="PRODUCT WEIGHT" class="form-control input-md" required="" type="text">
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount"> DISCOUNT</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="stock_alert">SIZES</label>  
  <div class="col-md-4">
  <input id="stock_alert" name="sizes" placeholder="STOCK ALERT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">image</label>
  <div class="col-md-4">
    <input id="filebutton" name="Picture" class="input-file" type="file">
  </div>
</div>


    
 

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>

</fieldset>
</form>
</body>
</html>