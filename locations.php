<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
  <title>Location:KIA</title>
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

  <div class="container main-div">
    <h1 style="margin-top: 10px;">Find Location</h1>
    <div class="search-div">
      <div class="input-group rounded">

        <input type="text" onkeyup="myFunction()" id="loc" class="form-control rounded" placeholder="Please type your government" aria-label="Search"
          aria-describedby="search-addon" />
          <button class="btn btn-dark btn-lg" type="button" value="search" onclick="check();myFunction();count()"  >Go
            </button>
      </div>
      <p id="msg"></p>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <img src="" alt="">
          </div>
          <div class="col">
            Column
          </div>
          <div class="col">
            Column
          </div>
        </div>
      </div>
    </div>
    <div class="list-div" id="div1">
      <p id="res">Search Result:</p>
      <table class="table table-bordered" id="table1">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Address / Phone</th>
            <th scope="col">Opening Hours</th>
            <th scope="col">Seervice Category</th>
          </tr>
        </thead>
        <tbody id="tbody1">
          <tr>
            <th scope="row">Cairo</th>
            <td>Heliopolis
              <br><br>
              Address: 3 Roxy Square - Heliopolis
              <br><br>
              Hotline: 19542</td>
            <td>8 am to 8 pm</td>
            <td>Service</td>
          </tr>
          <tr>
            <th scope="row">Cairo</th>
            <td>Kattameya
              <br><br>
              Address: Al-Marwaha Square, the beginning of Ain Sokhna Road - behind the Mohamed Zaki Katameya Showroom
              <br><br>
              Hotline : 19542

            </td>
            <td>8 am to 4:30 pm</td>
            <td>Service</td>
          </tr>
          <tr>
            <th scope="row">Cairo</th>
            <td>Mokattam
              <br><br>
              Address: Autostrad Road - the beginning of the ascending road to Mokattam - in front of El Kalaa
              <br><br>
              Hotline : 19542</td>
            <td>8 am to 5 pm</td>
            <td>Service</td>
          </tr>
          <tr>
            <th scope="row">Cairo</th>
            <td>New Cairo
              <br><br>
              Address: Inside Mobil Gas Station, Fifth Settlement - Akhenaton Mall, next to Al-Hamad Mosque
              <br><br>
              Holine : 19542

            </td>
            <td>8 am to 5 pm</td>
            <td>Service</td>
          </tr>
          <tr>
            <th scope="row">Cairo</th>
            <td>Abu Rawash
              <br><br>
              Address: Km 28 Cairo-Alexandria Desert Road, ketaa 99 - behind the Smart Village - Abu Rawash
              <br><br>
              Hotline : 19542</td>
            <td>8 am to 3:30 pm</td>
            <td>Shop</td>
          </tr>
          <tr>
            <th scope="row">Cairo</th>
            <td>Sheikh Zayed
              <br><br>
              Address: July 26 axis, Chill Out gas station, Al Khamayel city - Sheikh Zayed
              <br><br>
              Hotline : 19542</td>
            <td>8 am to 6 pm</td>
            <td>Shop</td>
          </tr>
          <tr>
            <th scope="row">Alexandria</th>
            <td>Miami
              <br><br>
              Address: Inside Mobil Gas Station - Miami 257 El Horreya St.
              <br><br>
              Mobile : 01550044804</td>
            <td>8 am to 5 pm</td>
            <td>Shop</td>
          </tr>
          <tr>
            <th scope="row">Alexandria</th>
            <td>El-Amereya
              <br><br>
              Address: Km 24 Alexandria Cairo Desert Road, next to the Pepsi factory - ElAmereya
              <br><br>
              Hotline : 19542</td>
            <td>8 am to 5 pm</td>
            <td>Shop</td>
          </tr>

          <tr>
            <th scope="row">Alexandria</th>
            <td>Smouha
              <br><br>
              Address: Canal El Mahmodia st Tribal Side, Smoha
              <br><br>
              Hotline : 19542</td>
            <td>8 am to 5 pm</td>
            <td>Service</td>
          </tr>
          <tr>
            <th scope="row">Alexandria</th>
            <td>El-Amereya
              <br><br>
              Address: Km 24 Alexandria Cairo Desert Road, next to the Pepsi factory - ElAmereya
              <br><br>
              Hotline : 19542</td>
            <td>8 am to 5 pm</td>
            <td>Shop</td>
          </tr>
          <tr>
            <th scope="row">Alexandria</th>
            <td>Smouha
              <br> <br>
              Address: Canal El Mahmodia st Tribal Side, Smoha
              <br>
              <br>
              Hotline : 19542</td>
            <td>8 am to 5 pm</td>
            <td>Shop</td>
          </tr>
          <tr>
            <th scope="row">Alexandria</th>
            <td>Asyut
              <br>
              <br>
              Address: 55 Hilali Street
              <br>
              <br>
              Hotline : 19542</td>
            <td>8 am to 5 pm</td>
            <td>Shop</td>
          </tr>
        </tbody>
      </table>
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
  <script type="text/javascript">
     
        function check(){
          var m = document.getElementById('loc').value;
         if(!m)
        {
          document.getElementById('msg').innerHTML="Please enter a location";
          document.getElementById("msg").style.color="red";
          document.getElementById('loc').focus();
          return false;
          
        }else{

          document.getElementById('msg').innerHTML="";
        }}
        function myFunction() {
         // Declare variables
        var input, filter, ul, li, a, i, txtValue,c=0;
       input = document.getElementById('loc');
       filter = input.value.toUpperCase();
      ul = document.getElementById("tbody1");
      
      li = ul.getElementsByTagName('tr');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("th")[0];
    txtValue = a.textContent || a.innerText ;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
      
    } else {
      li[i].style.display = "none";
    }
   
  }
 

}
function count(){
  var ul,li,c=0;
     ul = document.getElementById("tbody1");
      
      li = ul.getElementsByTagName('tr');
  for (i = 0; i < li.length; i++) {
  if(li[i].style.display == ""){
      c++;
    }

} document.getElementById("res").innerHTML="Search Result: "+c;
}
      
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  
</body>

</html>