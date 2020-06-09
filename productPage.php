<?php


session_start();

if(!isset($_SESSION['user'])){
  header('location:newLogin.php');
}





?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="homePage.css">
      <!--Footer-->
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
<link rel="stylesheet" href="productPage.css">
 
  </head>
    
          
          <!--Body-->
        
<body>
    
    
    
    
    
    
      
    
    
                                          <!--Navbar+Header-->
    


<div class="fixed-top">
  <header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>

        </div>
       </div>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
    <div class="container">
      <a class="navbar-brand" rel="nofollow" target="_blank" href="homePage.php" style="text-transform: uppercase;"> <img src="logo%204.png" height="" width="240px" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="homePage.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="aboutUS.php" >About Us</a>
          </li>

         <li class="nav-item">
            <a class="nav-link" href="productPage.php">Products</a>
          </li>

           <li class="nav-item">
            <a class="nav-link" href="Displayproduct.php">Display</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ProductpageFordatabase.php">Add Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </ul>
      </div>
    </div>
  </nav>
</div>
    
                                                  <!--Product Details -->
    
    
    
    
    
    
    
    
 


<div class="container">
    <margin top:100px></margin>
    <h3 class="h3"><B>Our Products</B> </h3>
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="1stProduct.php">
                        <img class="pic-1" src="Impala%20Pinterest.jpg">
                        <img class="pic-2" src="Impala-pinterest-2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="1stProduct.html" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="1stProduct.html" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="1stProduct.php"><b>Buy</b></a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="1stProduct.php">Impala</a></h3>
                    <span class="price">$28,000</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
              <div class="product-image2">
                  <a href="2ndProduct.php">
                      <img class="pic-1" src="Camaro-pinterest-5.jpg">
                      <img class="pic-2" src="Camaro-pinterest-6.jpg">
                  </a>
                  <ul class="social">
                      <li><a href="2ndProduct.html" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <li><a href="2ndProduct.html" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  </ul>
                  <a class="add-to-cart" href="2ndProduct.php">Buy</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="2ndProduct.php">Camaro</a></h3>
                    <span class="price">$30,000</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid2">
                <div class="product-image2">
                    <a href="3rdProduct.php">
                        <img class="pic-1" src="Blazer-pinterest-5.jpg">
                        <img class="pic-2" src="Blazer-pinterest-6.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="3rdProduct.html" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                       
                        <li><a href="3rdProduct.html" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a class="add-to-cart" href="3rdProduct.php">Buy</a>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="3rdProduct.php">Blazer</a></h3>
                    <span class="price">$35,000</span>
                </div>
            </div>
        </div>

    </div>
</div>
<hr>

<div class="container">
   
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="4thProduct.php">
                        <img class="pic-1" src="Corvette-Pinterest-2.jpg">
                        <img class="pic-2" src="Corvette-Pinterest-3.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="4thProduct.html"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="4thProduct.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="4thProduct.php">Corvette ZR-1</a></h3>
                    <div class="price">
                        $134,000
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="5thProduct.php">
                        <img class="pic-1" src="grandsport7.jpg">
                        <img class="pic-2" src="grandsport8.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="5thProduct.html"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="5thProduct.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="5thProduct.php">Corvette Stingray</a></h3>
                    <div class="price">
                        $55,000
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="6thProduct.php">
                        <img class="pic-1" src="Motosport3.jpg">
                        <img class="pic-2" src="Motosport2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="6thProduct.html"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="6thProduct.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="6thProduct.php">Motosport</a></h3>
                    <div class="price">
                        $65,000
                    </div>
                    
                </div>
            </div>
        </div>

<hr>
    </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
                                        <!--Footer-->
      
      
      <div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="homePage.html"><img src="logo%204.png" height="" width="240px" > </a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="homePage.html">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="aboutUS.html">Company Information</a></li>
                        <li><a href="Contact.html">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default"><a href="Contact.html">Contact us</a></button>
                </div>
            </div>
        </div>
        
    </footer>
  

  
        
        
        
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>