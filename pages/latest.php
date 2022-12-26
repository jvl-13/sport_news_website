<?php
    session_start();
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

    <title>Latest</title>
</head>
<body class="m-0 p-0">

    <div  class="container-fluid m-0 p-0">

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
                                <a class="nav-link" aria-current="page" href="../php/home.php" id="soccer" >Sport</a>
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
                            <input class="form-control me-2" type="text" id="newsQuery" name="newsQuery" placeholder="Search news">
                            <button class="btn btn-outline-warning bg-warning" type="button" id="searchBtn">
                                <a style="text-decoration: none;" href="../php/search.php" onclick="this.href = this.href +'?query=' + document.getElementById('newsQuery').value;">Search</a>
                            </button>
                        </form>
                        <?php
                            if($_SESSION['auth'] == 0) {
                        ?>
                        <button style="margin-left: 40px" class="btn btn-outline-warning " type="button" id="searchBtn">
                            <a style="text-decoration: none; color: white;" href="../php/signup.php">Sign up</a>
                        </button>

                        <button class="btn btn-outline-warning bg-warning mx-2 " type="button" id="searchBtn">
                            <a style="text-decoration: none;" href="../php/login.php">Sign in</a>
                        </button>

                        <?php
                        }
                        else {
                        ?>
                        <p class="text-white mt-3 " style="margin-left: 40px"><?php echo $_SESSION['login-user'];?></p>

                        <a class="text-white" style="margin-left: 16px;"  href="../private/logout.php">Logout<span> <img src="../assests/logout.png" style="width: 20px; height: 20px; margin-bottom: 2px;"/></span></a>
                        <?php
                        }
                        ?>  
                    </div>
                </div>
            </nav>
        </div>



        <div class="container-fluid align-items-center px-5 mt-4">

            <h2 class="my-3" style="font-weight: bold; font-family: var(--heading); color: var(--primary-color);">TODAY LATEST NEWS</h2>

            <!-- top 1 highlight -->
            <div class="row row-cols-sm-1 row-cols-1">
                

            

            </div>

            <hr>
            <?php
                include "../private/connectDB.php";
                    $today = strval(date("m/d/Y")); 
                    $date_created = new \MongoDB\BSON\UTCDateTime(strtotime($today)*1000);
                    
                    $filter = ['published' => $date_created];
                    $options = ['sort' => ['timestamp' => -1], 'limit'=>4];

                    $query = new MongoDB\Driver\Query($filter, $options);

                    $rows = $conn->executeQuery($db, $query); // $mongo contains the connection object to MongoDB

                    foreach($rows as $r){
                        echo '<article class="row mt-3">
                        <h4 class="col-2 fs-6 align-self-center">'.date("d/m/Y", intval($r->{'published'}->__toString())/1000).'</h4>

                        <div class="col-5 ">
                            <p style="font-size: 14px; height: 10px;"> <img src="../assests/eye.png" style="width: 20px; height: 20px;"/>'.$r->{'view'}.' views</p>
                            <a href="../php/content-news.php?prop_id='.$r->{'_id'}.'">
                                <h2 class="" style="font-size: 17px; font-family: var(--heading); display: block; height: 83px; overflow: hidden; ">'.
                                    $r->{'title'}.
                                '</h2>
                            </a>

                            <p style="font-size: 14px; text-align: justify; display: block; height: 105px; overflow: hidden;">'.$r->{'text'}.'</p>
                            
                            <a style="font-size: 14px; color: var(--primary-color);" href="../php/content-news.php?prop_id='.$r->{'_id'}.'">Read More<span> >></span></a>
                        </div>
                        
                        <div class="col-5 align-self-center">
                            <img src="'.$r->{'main_image'}.'" class="img-thumbnail "/>
                        </div>

                        <hr>
                    </article>';   
                    }
                ?>
            <div class="row row-cols-1 row-cols-md-1 row-cols-sm-1 my-5">
                
                

            </div>

        </div>

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

    </div>
    
    



</body>
</html>