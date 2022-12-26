<?php
					// If the user had an invalid username/password combination prompt this alert
  if ($_GET['errcode'] == 1 ){
      echo '<p class="alert alert-danger">&nbsp</span>Oops! Wrong username/password combination</p> ';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/109d641836.js" crossorigin="anonymous"></script>
    <!-- style css -->
    <link href="../global.css" rel="stylesheet">

    
    <title>Login</title>
</head>
<body class="bg-warning">
        <!-- navbar -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid mx-4">
              <a class="navbar-brand fs-2" style="color: white; font-weight: bold; text-decoration: none;" href="../php/home.php"><span class="text-warning">S</span style="text-color: white; ">News</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a  class="nav-link" aria-current="page" href="../php/home.php" id="soccer" >Sport</a>
                      </li>
                      <!-- <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="#ranking" id="ranking">Ranking</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="#esport" id="esport">E-Sport</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="#match" id="match">Match</a>
                      </li> -->
                      <!-- <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="#highlights" id="highlights">Highlights</a>
                      </li> -->
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="../php/highlight.php" id="highlight">Highlight</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="../php/latest.php" id="latest">Latest</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="../php/categories.php" id="categories">Categories</a>
                      </li>
                      <!-- <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="#other" id="other">Other</a>
                      </li> -->
                  </ul>
                  <form class="d-flex">
                      <input class="form-control me-2" type="text" id="newsQuery" placeholder="Search news">
                      <button class="btn btn-outline-warning bg-warning" type="button" id="searchBtn">
                          <a style="text-decoration: none;" href="../php/search.php">Search</a>
                      </button>
                  </form>

                  <button style="margin-left: 80px" class="btn btn-outline-warning " type="button" id="searchBtn">
                      <a style="text-decoration: none; color: white;" href="../php/signup.php">Sign up</a>
                  </button>

                  <button class="btn btn-outline-warning bg-warning mx-2 " type="button" id="searchBtn">
                      <a style="text-decoration: none;" href="../php/login.php">Sign in</a>
                  </button>
              </div>
          </div>
      </nav>
    </div>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  <form action="../private/login.php" method="POST">
                    <div class="">
        
                      <h2 class="fw-bold mb-2 text-uppercase">Sign in</h2>
                      <!-- <p class="text-white-50">Hi Admin!</p> -->
                      <p class="text-white-50 mb-5">Please enter your username and password!</p>
        
                      <div class="form-outline form-white mb-4">
                          <label class="form-label" for="typeEmailX">Email</label>
                          <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email" />
                      </div>
        
                      <div class="form-outline form-white mb-4">
                          <label class="form-label" for="typePasswordX">Password</label>
                          <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                      </div>

                      <button type="submit" class="btn btn-outline-light btn-lg px-5 mt-4">Sign in</button>
                      
        
                      <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                      </div> -->
        
                    </div>
                  </form>
      
                  <!-- <div>
                    <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                    </p>
                  </div> -->
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- FOOTER -->

      <footer class="text-center text-white bg-dark" >
        <!-- Grid container -->

        <div class="container pt-4">
          <!-- Section: Social media -->
          <a class="fs-2" style="color: white; font-weight: bold; text-decoration: none;" href="#"><span class="text-warning">S</span style="text-color: white; ">News</a>

          <section class="mb-4">
            <!-- Facebook -->

            <a
              class="btn btn-link btn-floating btn-lg text-white m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>

            <!-- Twitter -->
            <a
              class="btn btn-link btn-floating btn-lg text-white m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="white"
              ><i class="fab fa-twitter"></i
            ></a>

            <!-- Google -->
            <a
              class="btn btn-link btn-floating btn-lg text-white m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="white"
              ><i class="fab fa-google"></i
            ></a>

            <!-- Instagram -->
            <a
              class="btn btn-link btn-floating btn-lg text-white m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="white"
              ><i class="fab fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a
              class="btn btn-link btn-floating btn-lg text-white m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="white"
              ><i class="fab fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
              class="btn btn-link btn-floating btn-lg text-white m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="white"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="#">SNews</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>