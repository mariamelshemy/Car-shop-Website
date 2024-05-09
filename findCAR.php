<!doctype html>
<html lang="en">

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <title>Find Your Car:KIA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark" id="nav1">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="https://i.postimg.cc/T1Q4Lpz0/8502879737274729992-1.png" alt=""
          width="30" height="30" class="logoimg"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-nav">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="home.php">Home</a>
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



  <div class="backgr_image cintainer">
    <div class="form1">
      <pre class="find"> <h1><b>Find your car </b></h1></pre>
      <form  onsubmit="return Validate()" action="carhandler.php" method="post">

        <select name="model" id="model" class="options " >
          <option  disabled selected hidden value="1">Model</option>
          <option value="picanto">picanto</option>
          <option value="sportage">sportage</option>
          <option value="cerato">cerato</option>
        </select>

        <select name="year" id="year" width="30" class="options" >
          <option disabled selected hidden value="1">Year</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
        </select>

        <select name="color" id="color" width="30" class="options" >
          <option disabled selected hidden value="1">Color</option>
          <option value="red">red </option>
          <option value="black">black</option>
          <option value="white">white</option>
        </select><br>


        <input class="btn btn-dark btn-lg" type="submit" value="search"  name="send"></div>
      </form>
      

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

    <script type="text/javascript">
    function Validate() {
        var model = document.getElementById("model");
        var color = document.getElementById("color");
        var year = document.getElementById("year");
        if (model.value==1 || color.value==1 || year.value==1) {
           alert("please enter all the requirments");
            return false;
        }
        
        return true;
    }
</script>
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>

</body>

</html>