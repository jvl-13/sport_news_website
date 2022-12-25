<?php
    $text_query = $_GET['query'];
    include "../private/search.php";
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

    <title>Search</title>
</head>
<body class="m-0 p-0" >
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
                            <input class="form-control me-2" type="text" id="newsQuery" placeholder="Search news">
                            <button class="btn btn-outline-warning bg-warning" type="button" id="searchBtn">
                                <a style="text-decoration: none;" href="/php/search.php">Search</a>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>



        <div class="container-fluid align-items-center px-5 mt-4">
            <h2 class="my-3" style="font-weight: bold; font-family: var(--heading); color: var(--primary-color);">SEARCH</h2>

            <div class="row row-cols-1 row-cols-md-1 row-cols-sm-1 mb-5">
                <?php
                    foreach ($cursor as $document) {
                        echo '<div class="col-lg-4 mb-3">'.
                            '<a href="content-news.php?prop_id='.$document->{'_id'}.'">'.
                                '<img src="'.$document->{'main_image'}.'" class="img-thumbnail d-block" alt=""/>'.
                            '</a>'.
                            
                            '<div>'.
                                '<a href="content-news.php?prop_id='.$document->{'_id'}.'">'.
                                    '<h2 class="d-block mt-2" style="font-size: 18px; font-family: var(--heading); height: 65px; overflow: hidden;">'.
                                    $document->{'title'}.
                                    '</h2>'.
                                '</a>'.
            
                                '<p style="font-size: 16px; text-align: justify; display: block; height: 117px; overflow: hidden;">'.$document->{'text'}.'</p>'.
                                '<p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px; height: 10px;">'.$document->{'published'}.'<span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px;"/>'.$document->{'view'}.'</span></p>'.
                                '<a style="font-size: 14px; color: var(--primary-color);" href="content-news.php?prop_id='.$document->{'_id'}.'">Read More<span> >></span></a>'.
                            '</div>'.
                        '</div>';
                    };
                ?>
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



    
</body>
</html>