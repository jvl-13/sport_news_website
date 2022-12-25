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

    <title>Home</title>
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
                            <input class="form-control me-2" type="text" id="newsQuery" placeholder="Search news">
                            <button class="btn btn-outline-warning bg-warning" type="button" id="searchBtn">
                                <a style="text-decoration: none;" href="../php/search.php">Search</a>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <!-- News  -->
        <section class="container-fluid align-items-center px-5 mt-4">
            <div class="row">
                <div class="col-lg-4 lh-lg ps-2">
                    <h2 class="fs-3" style="font-family: var(--heading); font-weight: bold;">GET THE WORLD'S HIGHLIGHTS SPORT NEWS</h2>
    
                    <button class="btn btn-outline-warning" style="transition: background 1s ease">
                        <a style="text-decoration: none;" href="/pages/highlight.html" class="text-secondary">Know More</a>
                    </button>
    
                    <div class="p-3 ">
                        <?php include "../private/displaytitle.php" ?>
                    </div>
                </div>
    
                <div class="col-lg-8">
                    <div class="row row-cols-md-2 row-cols-sm-1 row-cols-1">
                        <div class="col overflow-hidden position-relative mb-4" >
                            <a href="content-news.html">
                                <img src="../../assests/sp.jpg" class="img-thumbnail d-block" alt=""/>
                            </a>
        
                            <div class="position-absolute " style="bottom: 0; left: 20px; right: 20px; padding: 10px 20px; line-height: 1.3; ">
                                <h2 class="text-light" style="font-weight: bold; padding: 10px 0; text-shadow: 0 0 2px #000; font-size: 18px;">Iran defeat not a true reflection of Wales | 'We want to finish on a high'</h2>
                                
                                <button class="btn btn-warning " style="transition: background 1s ease; font-size: 14px;">
                                    <a style="text-decoration: none;" href="content-news.html">Read More</a>
                                </button>
                                
                            </div>
                        </div>
        
                        <div class="col overflow-hidden position-relative mb-4" >
                            <a href="content-news.html">
                                <img src="../assests/sp.jpg" class="img-thumbnail d-block" alt=""/>
                            </a>

                            <div class="position-absolute " style="bottom: 0; left: 20px; right: 20px; padding: 10px 20px; line-height: 1.3; ">
                                <h2 class="text-light" style="font-weight: bold; padding: 10px 0; text-shadow: 0 0 2px #000; font-size: 18px;">Iran defeat not a true reflection of Wales | 'We want to finish on a high'</h2>
                                
                                <button class="btn btn-warning" style="transition: background 1s ease; font-size: 14px;">
                                    <a style="text-decoration: none;" href="content-news.html">Read More</a>
                                </button>
                                
                            </div>
                        </div>

                        <div class="col overflow-hidden position-relative mb-4" >
                            <a href="content-news.html">
                                <img src="../assests/sp.jpg" class="img-thumbnail d-block" alt=""/>
                            </a>

                            <div class="position-absolute " style="bottom: 0; left: 20px; right: 20px; padding: 10px 20px; line-height: 1.3; ">
                                <h2 class="text-light" style="font-weight: bold; padding: 10px 0; text-shadow: 0 0 2px #000; font-size: 18px;">Iran defeat not a true reflection of Wales | 'We want to finish on a high'</h2>
                                
                                <button class="btn btn-warning" style="transition: background 1s ease; font-size: 14px;">
                                    <a style="text-decoration: none;" href="content-news.html">Read More</a>
                                </button>
                                
                            </div>
                        </div>

                        <div class="col overflow-hidden position-relative mb-4" >
                            <a href="content-news.html">
                                <img src="../assests/sp.jpg" class="img-thumbnail d-block" alt=""/>
                            </a>

                            <div class="position-absolute " style="bottom: 0; left: 20px; right: 20px; padding: 10px 20px; line-height: 1.3; ">
                                <h2 class="text-light" style="font-weight: bold; padding: 10px 0; text-shadow: 0 0 2px #000; font-size: 18px;">Iran defeat not a true reflection of Wales | 'We want to finish on a high'</h2>
                                
                                <button class="btn btn-warning" style="transition: background 1s ease; font-size: 14px;">
                                    <a style="text-decoration: none;" href="content-news.html">Read More</a>
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <main class="container-fluid align-items-center px-5 my-4 ">
            <div class="row">
                <div class="col-lg-6">
                    <section class="">
                        <a href="/pages/categories.html" style="color:var(--primary-color)" id="football">
                            <h4 style="font-weight: bold; font-family: var(--heading);">FOOTBALL<span> >></span></h4>
                        </a>

                        <div class="mt-3">
                            <article>
                                <a href="content-news.html">
                                    <img src="../assests/sp.jpg" class="img-thumbnail"/>
                                </a>
        
                                <div class="mx-1">
                                    <a href="content-news.html">
                                        <h3 class="mt-2 d-block" style="font-size: 18px; font-family: var(--heading); height: 65px; overflow: hidden;">
                                            Iran defeat not a true reflection of Wales | 'We want to finish on a high' 
                                        </h3>
                                    </a>
                                    <p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px; height: 10px;">25 November 2022<span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px;"/> 100 views</span></p>
        
                                    <p style="font-size: 16px; text-align: justify; display: block; height: 95px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole, but his sensational opening goal was a reminder that he can still change a game in an instant. </p>
        
                                    <a href="content-news.html" style="color: var(--primary-color);">Read More<span> >></span></a>
                                </div>
                            </article>
                        </div>
        
                        <div class="row mt-4">
                            <article class="col-lg-6">
                                <a href="content-news.html">
                                    <img src="../assests/sp.jpg" class="img-thumbnail" />
                                </a>
        
                                <div>
                                    <a href="content-news.html">
                                        <h3 class="mt-2" style="font-size: 18px; font-family: var(--heading); height: 85px; overflow: hidden;">
                                            Iran defeat not a true reflection of Wales | 'We want to finish on a high' 
                                        </h3>
                                    </a>
                                    <p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px; height: 10px;">25 November 2022 <span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px;"/> 100 views</span></p>

                                    <p style="font-size: 16px; text-align: justify; display: block; height: 167px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole, but his sensational opening goal was a reminder that he can still change a game in an instant.</p>
        
                                    <a href="content-news.html" style="color: var(--primary-color);">Read More<span> >></span></a>
                                    
                                </div>
                            </article>
        
                            <article class="col-lg-6">
                                <a href="content-news.html">
                                    <img src="../assests/sp.jpg" class="img-thumbnail"/>
                                </a>
        
                                <div>
                                    <a href="content-news.html">
                                        <h3 class="mt-2" style="font-size: 18px; font-family: var(--heading); height: 85px; overflow: hidden;">
                                            Iran defeat not a true reflection of Wales | 'We want to finish on a high' 
                                        </h3>
                                    </a>
                                    <p class="d-block" style="font-family: var(--heading); font-weight:300; font-size: 14px; height: 10px;">25 November 2022 <span> <img src="../assests/eye.png" style="width: 20px; height: 20px; margin-bottom: 2px;"/> 100 views</span></p>

                                    <p style="font-size: 16px; text-align: justify; display: block; height: 167px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole, but his sensational opening goal was a reminder that he can still change a game in an instant.</p>
        
                                    <a href="content-news.html" style="color: var(--primary-color);">Read More<span> >></span></a>
                                    
                                </div>
                            </article>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6">
                    <section >
                        <a href="/pages/latest.html" style="color:var(--primary-color)">
                            <h4 style="font-weight: bold; font-family: var(--heading);">LATEST<span> >></span></h4>
                        </a>

                        <article class="row mt-3">
                            <h4 class="col-2 fs-6 align-self-center">Today</h4>
        
                            <div class="col-5 ">
                                <a href="content-news.html">
                                    <h2 class="" style="font-size: 17px; font-family: var(--heading); display: block; height: 83px; overflow: hidden; ">
                                        Iran defeat not a true reflection of Wales | 'We want to finish on a high' evening against Mexico at the endured a deeply
                                    </h2>
                                </a>
        
                                <p style="font-size: 14px; text-align: justify; display: block; height: 105px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole.</p>
                                <p style="font-size: 14px; height: 10px;"> <img src="../assests/eye.png" style="width: 20px; height: 20px;"/> 100 views</p>
                                <a style="font-size: 14px; color: var(--primary-color);" href="content-news.html">Read More<span> >></span></a>
                            </div>
                               
                            <div class="col-5 align-self-center">
                                <img src="../assests/sp.jpg" class="img-thumbnail "/>
                            </div>

                            <hr>
                        </article>
        
                        <article class="row">
                            <h4 class="col-2 fs-6 align-self-center">Today</h4>
        
                            <div class="col-5 ">
                                <a href="content-news.html">
                                    <h2 class="" style="font-size: 17px; font-family: var(--heading); display: block; height: 83px; overflow: hidden;">
                                        Iran defeat not a true reflection of Wales | 'We want to finish on a high' 
                                    </h2>
                                </a>
        
                                <p style="font-size: 14px; text-align: justify; display: block; height: 105px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole.</p>
                                <p style="font-size: 14px;  height: 10px;"> <img src="../assests/eye.png" style="width: 20px; height: 20px;"/> 100 views</p>
                                <a style="font-size: 14px; color: var(--primary-color);" href="content-news.html">Read More<span> >></span></a>
                            </div>
                               
                            <div class="col-5 align-self-center">
                                <img src="../assests/sp.jpg" class="img-thumbnail"/>
                            </div>

                            <hr>
                        </article>

                        <article class="row">
                            <h4 class="col-2 fs-6 align-self-center">Today</h4>
        
                            <div class="col-5 ">
                                <a href="content-news.html">
                                    <h2 class="" style="font-size: 17px; font-family: var(--heading); display: block; height: 83px; overflow: hidden;">
                                        Iran defeat not a true reflection of Wales | 'We want to finish on a high' evening against Mexico at the endured a deeply
                                    </h2>
                                </a>
        
                                <p style="font-size: 14px; text-align: justify; display: block; height: 105px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole.</p>
                                <p style="font-size: 14px;  height: 10px;"> <img src="../assests/eye.png" style="width: 20px; height: 20px;"/> 100 views</p>
                                <a style="font-size: 14px; color: var(--primary-color);" href="content-news.html">Read More<span> >></span></a>
                            </div>
                               
                            <div class="col-5 align-self-center">
                                <img src="../assests/sp.jpg" class="img-thumbnail"/>
                            </div>

                            <hr>
                        </article>

                        <article class="row">
                            <h4 class="col-2 fs-6 align-self-center">Today</h4>
        
                            <div class="col-5 ">
                                <a href="content-news.html">
                                    <h2 class="" style="font-size: 17px; font-family: var(--heading); display: block; height: 83px; overflow: hidden;">
                                        Iran defeat not a true reflection of Wales | 'We want to finish on a high' evening against Mexico at the endured a deeply
                                    </h2>
                                </a>
        
                                <p style="font-size: 14px; text-align: justify; display: block; height: 105px; overflow: hidden;">Lionel Messi had endured a deeply frustrating evening against Mexico at the Lusail Stadium, his struggles mirroring those of the Argentina team as a whole.</p>
                                <p style="font-size: 14px;  height: 10px;"> <img src="../assests/eye.png" style="width: 20px; height: 20px;"/> 100 views</p>
                                <a style="font-size: 14px; color: var(--primary-color);" href="content-news.html">Read More<span> >></span></a>
                            </div>
                               
                            <div class="col-5 align-self-center">
                                <img src="../assests/sp.jpg" class="img-thumbnail"/>
                            </div>

                            <hr>
                        </article>
                    </section>

                </div>
            </div>

            <!-- CRICKET -->

            <div>
                <div class="my-4">
                    <a href="/pages/categories.html" style="color:var(--primary-color)" id="cricket">
                        <h4 style="font-weight: bold; font-family: var(--heading);">CRICKET<span> >></span></h4>
                    </a>
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

            <!-- NBA -->

            <div>
                <div class="my-4">
                    <a href="/pages/categories.html" style="color:var(--primary-color)" id="nba">
                        <h4 style="font-weight: bold; font-family: var(--heading);">NBA<span> >></span></h4>
                    </a>
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
                            <a href="#">
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
            
        </main>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>