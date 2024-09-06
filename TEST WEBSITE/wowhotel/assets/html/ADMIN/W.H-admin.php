<?php

    include("connection.php")


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="image/icon" href="../../BG/WOW-LOGO/MAIN LOGO.png" rel="icon">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?event=Poppins:100,100i,250,250i,300,300i,250,800i,500,500i,600,600i,700,700i,250,800i,900,900i&display=swap" rel="stylesheet">

    <title>ADMIN | WOW Hotels - Cubao</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.css">

    <link rel="stylesheet" href="../../css/W-H-login-admin.design.css">

    </head>
    
    <body>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../../../index.html" class="logo">WOW<em> Hotels</em></a>
                        
                        <ul class="nav">
                            <li class="main-nav-btn"><a href="../../../index.html">Home</a></li>
                            <li class="main-nav-btn"><a href="../../../about.html">About Us</a></li>   
                            <li class="main-nav-btn"><a href="../../../our-room.html">Room</a></li>
                            <li class="main-nav-btn"><a href="../../../events.html">Events</a></li>
                            <li class="main-nav-btn"><a href="../../../contact.html">Contact</a></li>
                        </ul>        
                        
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!--Main Banner Area Start-->
    <div class="container-tiles">
      <input type="checkbox" id="check">
      <div class="login form">
        <header>ADMIN Login</header>


        <form name="form" action="Login.php" method="POST">
          <br><br>

          <!--USER-->
          <label for="post" class="reg-label">USERNAME</label>
          <input type="text" id="user" name="user" placeholder="Enter your username">

          <!--PASS-->
          <label for="post" class="reg-label">PASSWORD</label>
          <input type="password" id="pass" name="pass" placeholder="Enter your password">

          <a href="#">Forgot password?</a>
          <input type="submit" class="button" value="Login" name="submit"/>
        </form>
    </div>

    <!-- jQuery -->
    <script src="../../js/jquery-2.1.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../../js/scrollreveal.min.js"></script>
    <script src="../../js/waypoints.min.js"></script>
    <script src="../../js/jquery.counterup.min.js"></script>
    <script src="../../js/imgfix.min.js"></script> 
    <script src="../../js/mixitup.js"></script> 
    <script src="../../js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="../../js/custom.js"></script>

  </body>
</html>