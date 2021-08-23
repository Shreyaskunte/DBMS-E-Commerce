<!DOCTYPE html>

<html lang="en">
<head>
    <title>Productlist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productlist</title>
    <style>
      body {
        margin: 0;
        font-family: "Lato", sans-serif;
      }
      
      .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
      }
      
      .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
      }
       
      .sidebar a.active {
        background-color: #4CAF50;
        color: white;
      }
      
      .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
      }
      
      div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
      }
      
      @media screen and (max-width: 700px) {
        .sidebar {
          width: 100%;
          height: auto;
          position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
      }
      
      @media screen and (max-width: 400px) {
        .sidebar a {
          text-align: center;
          float: none;
        }
      }
      </style>
</head>
<body>
<nav id = "nav" class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand">
      <?php
        include("bd.php");
      ?>
      <?php
        $sql = "select * from employee where email='shreyas@gmail.com'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result))
        {
          $image = $row['img'];
          echo '<img src="images/'.$image.'" width="50px" height = "50px">';
        }
      ?>
  </a>
    <div class="dropdown show">
        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           MENU
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="employeedetails.php">Employee Details</a>
          <a class="dropdown-item" href="#">My Transactions</a>
          <a class="dropdown-item" href="help.php">Help</a>
          <a class="dropdown-item" href="login.html">Log Out</a>
        </div>
      </div>
    </div>  

    <form class="form-inline" action="/action_page.php" style="padding-left: 920px;">
      <input class="form-control mr-sm-2 dropdown dropbtn" type="text" placeholder="Search">
      <button class="btn btn-info" id = "myInput"  onclick="myFunction()" onkeyup="filterFunction()" type="submit">Search</button>
      <div id="myDropdown" class="dropdown-content">

        <!-- <a href="#laptops">laptops</a>
        <a href="#mobiles">mobiles</a>
        <a href="#washingmachines">washingmachines</a>
        <a href="#camera">camera</a>
        <a href="#Tv">Tv</a> -->

      </div>
    </form>
  </nav>
  <br>


  
      <!-- <h3></h3>
      <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
      <p>Only when the button is clicked, the navigation bar will be displayed.</p>
      <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.</p> -->
    
    <h1 style="padding: 20px 0 10px 270px; font-family: 'Anton', sans-serif;">WELCOME</h1>
    <p style="margin-left: 300px;">Our site provides the best products in the market and in the best price available.</p>
    <p style="margin-left: 300px;">We trust our customers and their customers.</p>
    <p style="margin-left: 300px;">Because "The most expensive thing in this world is Trust!!!"</p>
    <hr style="height:2px;border-width:0;color:black;background-color:gray">
    <div class="row">
      <img src="Wallpapers/Buildings/Intersecting lines.jpg" alt="image" style="width: 1536px; height: 600px; padding: 5px 5px 5px 5px;">
    </div>
    <hr style="height:2px;border-width:0;color:black;background-color:gray;">
    <h1 style="padding: 20px 0 10px 270px; font-family: 'Anton', sans-serif;">Products</h1>
    <div class="container" >
    <div class="row">
      <div class="col-sm-6">
        <div class="card1" style="width: 18rem; margin-top: 200px;">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="Products/Laptop/lenovo.jpeg"  class="d-block w-100" alt="Laptop" width="20px" height="220px">
                </div>
                <div class="carousel-item">
                  <img src="Products/Laptop/apple.jpeg" class="d-block w-100" alt="Laptop" width="20px" height="220px">
                </div>
                <div class="carousel-item">
                  <img src="Products/Laptop/dell.jpeg" class="d-block w-100" alt="Laptop" width="20px" height="220px">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>  
              <div  class="card-body" >
                <h3 class="card-title">LAPTOP</h3>
                <h5 style="font-family: 'Shadows Into Light', cursive;">FUN FACT:</h5>
                <p class="card-text">Do you know more than 12,000 laptops go missing at US airports a week!</p>
                <a href="laptops.php" class="btn btn-outline-primary">Show More</a>
              </div>
            </div>
          </div>         
        
        <div class="col-sm-6">
        <div class="card2" style="width: 18rem; margin-top: 20px;">
          <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Products/Phone/apple.jpeg" class="d-block w-100" alt="mypic" width="800px" height="640px">
              </div>
              <div class="carousel-item">
                <img src="Products/Phone/Oneplus.jpg" class="d-block w-100" alt="glass" width="800px" height="640px">
              </div>
              <div class="carousel-item">
                <img src="Products/Phone/poco.jpeg" class="d-block w-100" alt="chess" width="800px" height="640px">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="card-body">
            <h3 class="card-title">MOBILE</h3>
            <h5 style="font-family: 'Shadows Into Light', cursive;">FUN FACT:</h5>
            <p class="card-text">In 2012 Apple sold 340,000 phones per day.</p>
            <a href="mobiles.php" class="btn btn-outline-primary">Show More</a>
          </div>
        </div>
        </div>
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

    
  <div class="row">
    <div class = "col-sm-6">
    <div class="card3" style="width: 18rem; margin-top: 20px;">
      <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Products/Washing Machine/Godrej.jpeg" class="d-block w-100" alt="mypic" width="1080px" height="400px">
          </div>
          <div class="carousel-item">
            <img src="Products/Washing Machine/Bosch.jpeg" class="d-block w-100" alt="glass" width="1080px" height="400px">
          </div>
          <div class="carousel-item">
            <img src="Products/Washing Machine/LG.jpeg" class="d-block w-100" alt="chess" width="1080px" height="400px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    
        <div class="card-body">
          <h4 class="card-title">WASHING MACHINE</h4>
          <h5 style="font-family: 'Shadows Into Light', cursive;">FUN FACT:</h5>
        <p class="card-text">The first mass-marketed washing machine in the U.S. was called the THOR.</p>
        <a href="washingmachine.php" class="btn btn-outline-primary">Show More</a>
      </div>
    </div>
    </div>
  
    <div class = "col-sm-6">
    <div class="card4" style="width: 18rem; margin-top: 20px;">
      <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Products/Camera/canon.jpeg" class="d-block w-100" alt="mypic" width="1080px" height="250px">
          </div>
          <div class="carousel-item">
            <img src="Products/Camera/Gopro.jpg" class="d-block w-100" alt="glass" width="1080px" height="250px">
          </div>
          <div class="carousel-item">
            <img src="Products/Camera/Nikon.jpg" class="d-block w-100" alt="chess" width="1080px" height="250px">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>    
        <div class="card-body">
          <h4 class="card-title">CAMERA</h4>
          <h5 style="font-family: 'Shadows Into Light', cursive;">FUN FACT:</h5>
        <p class="card-text">The Daguerreotype Was the First Camera Capable of Recording an Image</p>
        <a href="camera.php" class="btn btn-outline-primary">Show More</a>
      </div>
    </div>
    </div>
    </div>
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">

      <div class="card5" style="width: 20rem; margin-top: 20px; margin-left: 315px;">
        <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Products/TV/oneplus.jpeg" class="d-block w-100" alt="mypic" width="435px" height="255px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/Panasonic.jpg" class="d-block w-100" alt="glass" width="435px" height="255px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/Sony.jpg" class="d-block w-100" alt="chess" width="435px" height="255px">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>       
         <div class="card-body">
          <h4 class="card-title">TELEVISIONS</h4>
          <h5 style="font-family: 'Shadows Into Light', cursive;">FUN FACT:</h5>
          <p class="card-text"> There is something called the “CSI effect”. Because of television crime dramas, jurors have unrealistic expectations of forensic science and investigation techniques.</p>
          <a href="tv.php" class="btn btn-outline-primary">Show More</a>
        </div>
      </div>

      
      <!-- <ul id="myUL">
        <a href="laptops.html">laptops</a>
        <a href="mobiles.html">mobiles</a>
      
        <a href="washingmachine.html">washingmachine</a>
        <a href="camera.html">camera</a>
      
        <a href="tv.html">tv</a></li>
      </ul>

      <script>
        function myFunction() {
            var input, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                //a = li[i].getElementsByTagName("a")[0];
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        </script> -->

    <section id="contact" style="margin-left: 800px; margin-top: 50px;">
      <div class="contact container">
          <h2>CONTACT INFO</h2>
          <table>
            <tr>
              <td><p><a href="https://www.facebook.com/ssk.kunte"><img src="Products/Handles/icons8-facebook-circled-50.png" alt="facebook.com"></a></p></td>
              <td><p><a href="https://www.instagram.com/shreyas_kunte/"><img src="Products/Handles/icons8-instagram-50.png" alt="instagram.com"></a></p></td>
              <td><p><a href="https://www.linkedin.com/in/shreyas-kunte-468212192/"><img src="Products/Handles/icons8-linkedin-50.png" alt="linkedin.com"></a></p></td>
              <td><p><a href="https://twitter.com/ShreyasKunteS1"><img src="Products/Handles/icons8-twitter-50.png" alt="twitter.com"></a></p></td>
              <td><p><a href="mailto:shreyaskunte613@gmail.com"><img src="Products/Handles/icons8-gmail-login-48.png" alt="twitter.com"></a></p></td>
            </tr>
          </table>

          <a href="newcontact.php">Click Here For More Info</a>
              
      </div>
    </section>

</body>
</html>