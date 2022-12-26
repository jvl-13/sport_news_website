<?php
    session_start();
    include "../private/connectDB.php";
    if($_GET['prop_id']) $_SESSION['newsid'] = $_GET['prop_id'];

    $prop_id = new MongoDB\BSON\ObjectID($_SESSION['newsid']);
	$filter = ['_id' => $prop_id];
	$options = [
    ];

	$query = new MongoDB\Driver\Query($filter, $options);

	$rows = $conn->executeQuery($db, $query); // $mongo contains the connection object to MongoDB
    $result = "";
    foreach($rows as $document) $result = $document;
    
    $viewcount = 0;
    //$viewcount = $result->{'thread'}->{'participants_count'};
    $viewcount = $result->{'view'};
    $viewcount++;
    $bulk = new MongoDB\Driver\BulkWrite;
    $bulk->update(
        ['_id' => $prop_id],
        ['$set' => [
            'view' => $viewcount
            ]
        ],
    );
    $catch_view = $conn->executeBulkWrite($db, $bulk);
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

    <title>Content news</title>
</head>
<body class="m-0 p-0">
    <div class="container-fluid m-0 p-0">

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

        <!-- Content -->

        <div class="container-fluid align-items-center px-5 mt-4 " ">
            <!-- Title -->
            <div class="">
                <h1 style="font-weight: bold; font-family: var(--heading); ">
                    <?php echo $result->{'title'};?>
                </h1>
            </div>

            <!-- Author & date & view -->
            <div class="my-4"  >
                <p style="font-weight: bold;">Posted by <?php echo $result->{'author'};?></p>
                <p><?php echo date("d/m/Y", intval($result->{'published'}->__toString())/1000)?><span style="margin-left: 12px;"> <img class="" src="../assests/eye.png" style="width: 20px; height: 20px;"/> <?php echo $result->{'view'};?> Views</span></p>
            </div>

            <div>
                <?php
                    //echo '<img src='.$result->{'thread'}->{'main_image'}.' class="img-thumbnail">';
                    echo '<img src='.$result->{'main_image'}.' class="img-thumbnail">';
                ?>
            </div>
            <!-- Summary -->
            <div >
                <p class="fs-5 my-4" >
                <?php
                    echo nl2br($result->{'text'});
                ?>
                </p>
            </div>
        
            <!-- Comment -->
            <form action="../private/addcomment.php" method="POST">
                <div class="my-5">
                <div>
                    <p style="font-weight: 600;">Add comment</p>
                    <textarea style="width: 100%; height: 100px;" placeholder="Write your comment here..." name="comment"></textarea>
                    <?php
                        if($_SESSION['auth'] == 0 ) echo '<p>Please <a href="../php/login.php">login here</a> to comment.</p>';
                        else { ?>
                            <button class="btn btn-outline-warning bg-warning text-dark mt-2" type="submit">Comment</button>
                        <?php }
                    ?>
                </div>
            </form>
            <?php include "../private/displaycomment.php" ?>
            <!-- Relative news -->
            
            <div class="mb-4">
                <h5 style="font-family: var(--heading); color: var(--primary-color);">Relative news</h5>
                <div class="row row-cols-md-2 row-cols-sm-1 row-cols-1 row-cols-lg-4 mt-4">
                    <div class="col-lg-3">
                        <a href="content-news.html">
                            <img src="../assests/sp.jpg" class="img-thumbnail"/>
                        </a>
                        <a href="content-news.html" >
                            <h2 class="mt-2" style="font-size: 16px; font-family: var(--heading);">
                                Iran defeat not a true reflection of Wales | 'We want to finish on a high'
                            </h2>
                        </a>
                        <p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px;">25 November 2022<span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px; margin-left: 10px;"/> 100 views</span></p>

                    </div>

                    <div class="col-lg-3 ">
                        <a href="content-news.html">
                            <img src="../assests/sp.jpg" class="img-thumbnail"/>
                        </a>
                        <a href="content-news.html">
                            <h2 class="mt-2" style="font-size: 16px; font-family: var(--heading);">
                                Iran defeat not a true reflection of Wales | 'We want to finish on a high'
                            </h2>
                        </a>
                        <p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px;">25 November 2022<span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px; margin-left: 10px;"/> 100 views</span></p>

                    </div>

                    <div class="col-lg-3 ">
                        <a href="content-news.html">
                            <img src="../assests/sp.jpg" class="img-thumbnail"/>
                        </a>
                        <a href="content-news.html">
                            <h2 class="mt-2" style="font-size: 16px; font-family: var(--heading);">
                                Iran defeat not a true reflection of Wales | 'We want to finish on a high'
                            </h2>
                        </a>
                        <p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px;">25 November 2022<span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px; margin-left: 10px;"/> 100 views</span></p>

                    </div>

                    <div class="col-lg-3 ">
                        <a href="content-news.html">
                            <img src="../assests/sp.jpg" class="img-thumbnail"/>
                        </a>
                        <a href="content-news.html">
                            <h2 class="mt-2" style="font-size: 16px; font-family: var(--heading);">
                                Iran defeat not a true reflection of Wales | 'We want to finish on a high'
                            </h2>
                        </a>
                        <p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px;">25 November 2022<span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px; margin-left: 10px;"/> 100 views</span></p>

                    </div>
                    
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>