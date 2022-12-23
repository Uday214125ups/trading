<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Complex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="skull-solid.svg" type="image/icon type"> 
  </head>
  <body>
    <?php
if (isset($_POST['query'])) {

  $qemail=$_POST['qemail'];
  $qname=$_Post['qname'];
  $qtext=$_POST['qtext'];
  session_start();

  $con = new mysqli('localhost', 'root', '', 'udml');
  
  if ($con->connect_error)
  {die ("connection failed");
  }

  $q = "INSERT INTO queries values('$qname','$qmail','$qtext')";

  $result = $con->query($q);
  if ($result) {

    header("location:success.php");
} 


else {
 echo $con->error;
  
}

session_destroy();

}
    ?>
   
    <header>

        <div class="header_img">


    <nav class="navbar navbar-expand-lg Navbaar fixed-top">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5 text-center">
                <li class="nav-item">
                    <a class="nav-link active" style="color:white;" href="#home">Home</a>
                  </li>
                 
                  
               

                  <li class="nav-item">
                    <a class="nav-link active" style="color:white;" href="#about">About Us</a>
                  </li>
              
                  
                  <li class="nav-item">
                    <a class="nav-link" style="color:white;" href="#contact">Contact Us</a>
                  </li>
                

            </ul>
          </div>
        </div>
      </nav>
      
      
        <div class="glow" id="home">
        <br>
            <h2 >Hey I am</h2>
            <h1 >Uday Pratap Singh<h1>
            <h2 >this is my login page</h2>
           <br>
            <a href="customer_login.php"><button class="btn btn-warning btn-lg">Login</button></a>
              
            
            <a href="select_signup.php"><button class="btn btn-warning btn-lg">Sign Up</button></a>
            </div>

      </div>
      
      </header>
  
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white Footer mt-800">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <br>
              
              <p>
                Hello I am Uday Pratap Singh
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
           
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3" id="contact">
              <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i>Agra , Ag 282007 , UP , India</p>
              <p><i class="fas fa-envelope mr-3"></i> udml211@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> 8534084958 </p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
  
              <!-- Facebook -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #3b5998"
                 href="#!"
                 role="button"
                 ><i class="fab fa-facebook-f"></i
                ></a>
  
              <!-- Twitter -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #55acee"
                 href="#!"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
  
              <!-- Google -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #dd4b39"
                 href="#!"
                 role="button"
                 ><i class="fab fa-google"></i
                ></a>
  
              <!-- Instagram -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #ac2bac"
                 href="#!"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
  
              <!-- Linkedin -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #0082ca"
                 href="#!"
                 role="button"
                 ><i class="fab fa-linkedin-in"></i
                ></a>
              <!-- Github -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #000814"
                 href="#!"
                 role="button"
                 ><i class="fab fa-github"></i
                ></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2022 Copyright:
        <a class="text-white" href="https://luvkush8941.github.io/Coffee_Website/"
           >UDML.com</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  
    
    <script src="main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

   

  </body>
</html>