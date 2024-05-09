<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us:KIA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles.css">
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


  <div class="container">
    <h1 class="contact"> <b>Contact Us</b> </h1>
    <form action="contacthandler.php" onsubmit="return validate()" method="post" >
      <div class="message-div">

      <div class="mb-3">
        <br>
        <h4>My Information</h4>
        <br>
        <label for="name" class="form-label">Name</label>
        <input onblur="check1(this,'wrongname')" type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
        <br>
        <p id="wrongname"></p>
        
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input onblur="check1(this,'wrongmail')" type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
        <br>
        <p id="wrongmail"></p>
        
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input onblur="check1(this,'wrongphone')" type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone">
        <br>
        <p id="wrongphone"></p>
        
      </div>
      <div class="mb-3">
        <label for="subject" class="form-label">Message</label>
        <textarea onblur="check1(this,'wrongmsg')" class="form-control" name="subject" placeholder="Your Message" id="subject" rows="3"></textarea>
        <p id="wrongmsg"></p>
      </div>
     </div>
     <div class="mb-3 contact "><input class="btn btn-dark btn-lg" type="submit" value="submit" name="send"></div>
     
     </form>
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
  
  <script type="text/javascript">
    function validate()
    {
      var n = document.getElementById('name').value;
      var nREGEX = /^[a-zA-Z\s]{3,}$/
      var nResult = nREGEX.test(n);
      if(nResult == false)
      { document.getElementById("wrongname").innerHTML = "Please enter a valid name";
      document.getElementById("wrongname").style.color="red";
      document.getElementById("name").focus();
        return false;

      }
      else{
        document.getElementById("wrongname").innerHTML ="";

      }

      var m = document.getElementById('email').value;
      var mRGEX = /^[a-zA-Z0-9_\.]{2,}@[a-zA-Z]+.[a-zA-Z]+$/;
      var mResult = mRGEX.test(m);
      if(mResult == false)
      {
        document.getElementById('wrongmail').innerHTML="Please enter a valid email";
        document.getElementById("wrongmail").style.color="red";
        document.getElementById('email').focus();
        return false;
      }else{
        document.getElementById('wrongmail').innerHTML="";
      }
      var phoneNumber = document.getElementById('phone').value;
      var phoneRGEX = /^[0]{1}[1]{1}[0-2]{1}[0-9]{8}$/;            
      var phoneResult = phoneRGEX.test(phoneNumber);
      if(phoneResult == false)
      { document.getElementById('wrongphone').innerHTML="Please enter a valid phone number";
      document.getElementById("wrongphone").style.color="red";
      document.getElementById('phone').focus();
        return false;
      }
      else
    {
      document.getElementById('wrongphone').innerHTML="";
    }

   var m = document.getElementById('subject').value;
      
      if(!m)
      {
        document.getElementById('wrongmsg').innerHTML="Please enter a message";
        document.getElementById("wrongmsg").style.color="red";
        document.getElementById('subject').focus();
        return false;
      }else{
        document.getElementById('wrongmsg').innerHTML="";
      }
      

    }
    function check1(ob,name){
      if(ob.value==""){
        document.getElementById(name).innerHTML="Please enter This Field";
        document.getElementById(name).style.color="red";
      }
      else{
        document.getElementById(name).innerHTML="";
      
      }
    }
  </script>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
</body>

</html>