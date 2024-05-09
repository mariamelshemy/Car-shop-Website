<!doctype html>
<html lang="en">

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <title>Home:KIA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark" id="nav1">
    <div class="container-fluid" >
      <a class="navbar-brand" href="#"><img src="https://i.postimg.cc/T1Q4Lpz0/8502879737274729992-1.png" alt="" width="30" height="30" class="logoimg"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-nav">
            <li class="nav-item" >
              <a class="nav-link active " aria-current="page" href="home.php" >Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="locations.php">Find Your Dealer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact.php">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Find Your
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="findCAR.php">Find Your Car</a></li>
                  <li><a class="dropdown-item" href="find-truck.php">Find Your Truck</a></li>
                  
                </ul>
              </li>
            
            </ul>
               
          </div>
        </div>
      </nav>



  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/60e6d5e56c72a1625740773.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/62d7edeae26651658318314444.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">

          <h2>The all new kia sportage 2022</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/6155a80222d481633003522.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h2>The all new kia xceed 2022</h2>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-fluid">
    <div class="row ">

      <div class="col ">
        <div class="card center-card card-find" style="width:400px ">
          <img class="card-img-top" src="images/2021-kia-stinger_landing-3.jpg" alt="Card image">
          <div class="card-body">
            <a href="findCAR.php" class="btn btn-primary btn-center" style="left: 35%;" id="bt1">Find Your Car</a>
          </div>
        </div>
      </div>

      <div class="col ">
        <div class="card center-card card-find" style="width:400px">
          <img class="card-img-top" src="images/Kia-Pickup-Truck-2022-2.jpg" alt="Card image">
          <div class="card-body">

            <a href="find-truck.php" class="btn btn-primary btn-center" style="left: 35%;" id="bt1">Find Your Truck</a>
          </div>
        </div>
      </div>



    </div>
  </div>
  </div>


  <footer>
    <div class="row">
      <div class="col">
        <img src="images/yBBW3VqKmcd2VXY72noNq8.jpg" class="logo" alt="">

      </div>



      <div class="col">
        <h3>Discover KIA</h3>
        <ul>
          <li><a href="our_story.php">Our story</a></li>
          <li><a href="about_us.php">News and Events</a></li>
        </ul>
      </div>

      <div class="col">
        <h3>Shopping tools</h3>
        <ul>
          <li><a href="locations.php">Find a location</a></li>
          <li><a href="findCAR.php">Find Your Car</a></li>
          <li><a href="find-truck.php">Find Your Truck</a></li>

        </ul>
      </div>


    </div>
  </footer>






  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
</body>

</html>