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
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <div class="">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                    <p class="text-white-50">Hi Admin!</p>
                    <p class="text-white-50 mb-5">Please enter your login and password!</p>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typeEmailX">Email</label>
                        <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                    </div>
      
                    <div class="form-outline form-white mb-4">
                        <label class="form-label" for="typePasswordX">Password</label>
                        <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                    </div>
    
                    <a href="/pages/dashboard.html">
                        <button class="btn btn-outline-light btn-lg px-5 mt-4" type="submit">Login</button>
                    </a>
      
                    <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div> -->
      
                  </div>
      
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
</body>
</html>