<?php include_once 'config/init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Klook Travel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-body">
		 <!-- Slider Wrapper -->
	    <header>
	    	<div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel" data-interval="6000">
	    		 <div class="carousel-inner" role="listbox">
		          <!-- Slide One -->
		          <div class="carousel-item active" style="background-image: url('images/vxcjhqicqpoah4moqiok.jpg')">
		          </div>
		          <!-- Slide Two  -->
		          <div class="carousel-item" style="background-image: url('images/lcw0rg0sjecvl98nbxbx.jpg')">
		          </div>
		          <!-- Slide Three -->
		          <div class="carousel-item" style="background-image: url('images/kzvhzffu1ui6couulqey.jpg')">
		          </div>
		          <!-- Slide Four-->
		          <div class="carousel-item" style="background-image: url('images/izyoy326gtkkvxiiqyck.jpg')">
		          </div>
		        </div>
		        
		        <!-- nav bar -->
					 <nav class="navbar  fixed-top navbar-expand-lg navbar-light bg-dark">
						  <a class="navbar-brand" href="#">KLOOK</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav ml-auto">
						      <li class="nav-item active">
						        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <div>Language dropdown</div>
						        </div>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD
						        </a>
						        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						          <div>Currency dropdown</div>
						        </div>
						      </li>
						        <li class="nav-item">
						        <a class="nav-link" href="#"><i class="fa fa-cart-plus"></i></a>
						      </li>
						       <li class="nav-item">
						        <a class="nav-link" href="login-signup.php">
							        <?php
										if (isset($_SESSION['username'])){
											$customerName = $_SESSION['username'];
											echo $customerName;
											}
										else{
											echo "Log in";
										}
									?>
											
								</a>
						      </li>

						      <li class="nav-item">
						        <a class="nav-link" href="login-signup.php" tabindex="-1" aria-disabled="true">
						        	<?php
										if (isset($_SESSION['username'])){
											$customerName = $_SESSION['username'];
											echo "";
										}
										else{
											echo "Sign Up";
										}
									?>
								</a>
						      </li>
						    </ul>
						    
						  </div>
					</nav>
		        	<div class="row main-text hidden-sm">
	
		        			<h1>YOURS TO EXPLORE</h1>
		        			<h3>Discover and book amazing things to do at exclusive prices</h3>
		        			<div class="form-box">
		        			<form>
		        					
				        		<input type="text" class="form-control" id="searchvalue" placeholder="Search by destination, activity or attraction" name="searchName" required >
				        		<button class="btn btn-danger" id="search_btn" data-gatag="Main Page|Search"><i class="fa fa-search"></i></button>
		
			        		</form>
		        				
		        		</div>
                  	</div>
		        		
		        	</div>
		        </div>
		      </div>
		    </header>
			    <!-- main  -->

	      <!-- Javascript -->
	    <script src="js/jquery-3.3.1.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>
