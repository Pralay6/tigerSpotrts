
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  
  



  <title>TIGER SPORTS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
 

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
   
  
      

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


      
</head>

<body>



  <!-- ======= Top Bar ======= -->
 
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
	 
        <i class="icofont-phone"></i> +91 7083139111
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sun: 11:00 AM - 10:00 PM</span>
      </div>
      <div class="languages">
        <ul>
          <li><a href="#">TIGER SPORTS </a></li>
        </ul>
      </div>
    </div>
  </div>


 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">TIGER SPORTS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
     <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
 




  <!--Header-->
  <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="book-a-table text-center"><a href="index.php">Home</a></li>
          </ul>
      </nav>


    <nav class="nav-menu d-none d-lg-block">
        <ul>  
        
          

             <?php    
      
      if(isset($_SESSION["logindata"])){?>
            <li class="book-a-table text-center"><a href="logout.php">LOGOUT</a></li>
            <?php	
      }else{
        ?>
            <li class="book-a-table text-center"><a href="login.php">LOGIN / SIGN UP </a></li>
            <li class="book-a-table text-center"><a href="admin/index.php">ADMIN LOGIN </a></li>
            <?php
	}

  $count=0;
  if(isset($_SESSION['pro_cart'])){
    $count=count($_SESSION['pro_cart']);
  }
?>

<!--
<a href="mycart.php" class="book-a-table text-center">
       <span class="d-none d-md-inline">My Cart </span>
       <span class="badge badge-secondary badge-pill"><?php echo $count;?></span>
      </a>-->


      <li class="book-a-table text-center"><a href="mycart.php">CART <?php echo $count;?></a></li>		  
		   <li class="book-a-table text-center"><a href="feedback.php">FEEDBACK</a></li>

           </ul>
      </nav>
     
    </div>
  </header><!-- End Header -->







        
           