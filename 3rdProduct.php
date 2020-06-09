<?php


session_start();

if(!isset($_SESSION['user'])){
  header('location:newLogin.php');
}





?>











                                             <!-- HTML Code -->




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="1stProduct.css">
      <!--Footer-->
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
<link rel="stylesheet" href="aboutUS.css">
<link href="1stProduct.js">      
 
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
      <a class="navbar-brand" rel="nofollow" target="_blank" href="homePage.php" style="text-transform: uppercase;"> <img src="logo%204.png" height="" width="240px" > </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="homePage.html">Home
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
          </li>
          </ul>
      </div>
    </div>
  </nav>
</div>
      
    
                                                  <!--Product Details-->
    
    
    <hr><hr>
    <div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="Blazer%20new%201.jpg" /></div>
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><b>Blazer</b></h3>    
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>Price</small></h6>
                    <h3 style="margin-top:0px;">U$S 35,000</h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                         <h6 class="title-price"><small>Product In stock</small></h6>
                         <h4> <span>Yes</span></h4>
                         <h6 class="title-price"><small>Discount</small></h6>
                        <h4><span>No</span></h4>
                         <h6 class="title-price"><small>Procode Code</small></h6>
                        <h4><span>25283</span></h4>
                        
                    </div>
                  
                                  
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Buy</button>
                        
                    </div>                                        
                </div>                              
        
						
						
						
						
					
				
						
					</div>
                    
                    
                    <div class="col-xs-9">
                    <ul class="menu-items">
                        
                    </ul>
                    <div style="width:100%;border-top:1px solid silver">
                        
                        <h8 class="h3"><B>Product Details </B> </h8>
                        <p style="padding:15px;">
                            <small><h3>The legend continues</h3>
                            Five distinct trims. Four exhilarating powertrains. One legend. The 2020 Camaro is here to deliver the kind of bold design, precision thrills and advanced performance technology that can only be experienced behind the wheel of this iconic sports car.
                            </small>
                        </p>
                        
                            <ul><small>
                                <li>Shock or Satin Steel Metallic</li>
                                <li>20-inch blade-design aluminum wheels</li>
                                <li>Gray RS and SS badges</li>
                                <li>Black fuel door with visible carbon-fiber insert</li>
                                <li>Painted Carbon Flash Metallic mirrors</li>
                                <li> Heated and ventilated front seats</li>
                                <li> RECARO® performance seats  </li>
                                <li>     Heated steering wheel  </li>
                                <li>    Power seats with Memory Package </li>
                                <li>     Red seat belts </li>
                                <li>     Sueded steering wheel and shifter </li>
                                  <li>   Aluminum driving pedals  </li>
                            </small> </ul>  
                        
                    </div>

				</div>
			</div>
		</div>
        </div>
    
               


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
          
      
      <!--Footer-->
      
      
      <div class="content">
</div>
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="homePage.html"> <img src="logo%204.png" height="" width="240px" ></a></h2>
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