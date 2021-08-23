<hr style="height:100px;border:0;;color:black;background-color:#525252;">
<h1 style="padding: 20px 0 10px 70px; font-family: 'Anton', sans-serif;">CAMERAS</h1>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>camera</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    
   
    <style>
      #mySidenav a {
        position: absolute;
        margin-top: 100px;
        left: -80px;
        transition: 0.3s;
        padding: 15px;
        width: 100px;
        text-decoration: none;
        font-size: 20px;
        color: white;
        border-radius: 0 5px 5px 0;
      }
      
      #mySidenav a:hover {
        left: 0;
      }
      
      #about {
        top: 20px;
        background-color: #525252
      }
      
      #blog {
        top: 80px;
        background-color:  #525252
      }
      
      #projects {
        top: 140px;
        background-color:#525252
      }
      
      #contact {
        top: 200px;
        background-color:#525252
      }
      #PRODUCTS {
        top: 260px;
        background-color:#525252
      }
      </style>
</head>
<body>

  <div id="mySidenav" class="sidenav">
    <a href="#" id="about">CANON</a>
    <a href="#" id="blog">GOPRO</a>
    <a href="#" id="projects">NIKON</a>
    <a href="#" id="contact">SONY</a>
    <a href="productlist.php" id="PRODUCTS">HOME</a>
  </div>
  
  <div style="margin-left:80px;">
    <h2>Hoverable Sidenav Buttons</h2>
    <p>Hover over the buttons in the left side navigation to open them.</p>
  </div>

  <div class="container">
    <div class="row" style="padding: 50px 0 50px 0;">
      <div class="col-sm-3 col-md-6 col-lg-4">
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Products/Camera/canon.jpeg" style="margin-left: 30px;" alt="Los Angeles" width="250px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/canon1.jpeg" style="margin-left: 30px;" alt="Chicago" width="250px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/canon2.jpeg" style="margin-left: 30px;" alt="New York" width="285px" height="250px">
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <div class="col-sm-9 col-md-6 col-lg-8">
      <?php
          include('bd.php');
        ?>
        <?php
          $sql = "select * from products where productname ='Canon'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>Canon EOS 200D II DSLR</h3>
</tr>
          <tr>        <p4>Camera Body with Single Lens 18 - 55 mm f/4 - 5.6 IS STM  (Black)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
            Effective Pixels: 24.1 MP <br>
            Sensor Type: CMOS <br>
            WiFi Available <br>
            Full HD <br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹52,995</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">BUY</button>
</tr>
          <tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">ORDER</button></tr>
          </form>  
        </table>         
      </div>
    </div>

    <div class="row" style="padding: 50px 0 50px 0;">
      <div class="col-sm-3 col-md-6 col-lg-4">
        <div id="demo1" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <!-- <ul class="carousel-indicators1">
            <li data-target="#demo1" data-slide-to="0" class="active"></li>
            <li data-target="#demo1" data-slide-to="1"></li>
            <li data-target="#demo1" data-slide-to="2"></li>
          </ul> -->
          
          <!-- The slideshow -->
          <div class="carousel-inner" style="margin-bottom: 50px;">
            <div class="carousel-item active">
              <img src="Products/Camera/Gopro.jpg" style="margin-right: 20px;" alt="Los Angeles" width="350px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/Gopro1.jpg" style="margin-right: 50px;" alt="Chicago" width="400px" height="400px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/Gopro2.jpg" style="margin-right: 20px;" alt="New York" width="350px" height="350px">
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo1" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo1" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <div class="col-sm-9 col-md-6 col-lg-8">
      <?php
          include('bd.php');
        ?>
        <?php
          $sql = "select * from products where productname ='GoPro'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>GoPro Hero</h3>
</tr>
          <tr>        <p>8 Black CHDHX-801 12 MP Action Camera</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
          Visible screen diagonal : 2" / 5 cm <br>
          Optical Sensor Resolution	12 MP <br>
          Max Resolution	12 MP <br>
          Battery Cell Composition	Lithium-Air <br>
          Min Focal Length	15.1 <br>
          Standing screen display size	1.95 Inches <br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹28,950</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 100px;">BUY</button>
</tr>
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 100px;">ORDER</button></tr>
</form>  
        </table> 
      </div>
    </div>
    <div class="row" style="padding: 50px 0 50px 0;">
      <div class="col-sm-3 col-md-6 col-lg-4">
        <div id="demo2" class="carousel slide" data-ride="carousel">

          <!-- Indicators
          <ul class="carousel-indicators2">
            <li data-target="#demo2" data-slide-to="0" class="active"></li>
            <li data-target="#demo2" data-slide-to="1"></li>
            <li data-target="#demo2" data-slide-to="2"></li>
          </ul> -->
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Products/Camera/Nikon.jpg" style="margin-left: 70px;" alt="Los Angeles" width="250px" height="225px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/Nikon1.jpg" style="margin-left: 80px;" alt="Chicago" width="250px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/Nikon2.jpg" style="margin-left: 80px;" alt="New York" width="250px" height="250px">
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo2" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo2" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <div class="col-sm-9 col-md-6 col-lg-8">
      <?php
          include('bd.php');
        ?>
        <?php
          $sql = "select * from products where productname ='Nikon'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>Nikon D5600</h3>
</tr>
          <tr>        <p>AF-P 18-55 mm + AF-P 70-300 mm VR Kit with Bag and 16GB Memory Card Free</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
          Details at its finest <br>
          Seize split-second moments <br>
          Discover a fresh point of view <br>
          Intuitively designed for easy handling <br>
          Cinematic brilliance <br>
          Share your creations on-the-go
          24.2 effective megapixels, an Expeed 4 image-processing engine and an ISO range of 100-25600 that captures beautiful and vibrant imagery
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹64,000</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 80px;">BUY</button>
</tr>
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 80px;">ORDER</button></tr>
</form>  
        </table>     
      </div>
    </div>

    <div class="row" style="padding: 50px 0 50px 0;">
      <div class="col-sm-3 col-md-6 col-lg-4">
        <div id="demo3" class="carousel slide" data-ride="carousel">

          <!-- Indicators
          <ul class="carousel-indicators3">
            <li data-target="#demo3" data-slide-to="0" class="active"></li>
            <li data-target="#demo3" data-slide-to="1"></li>
            <li data-target="#demo3" data-slide-to="2"></li>
          </ul> -->
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Products/Camera/Sony.jpg" style="margin-left: 25px;" alt="Los Angeles" width="275px" height="200px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/Sony1.jpg" alt="Chicago" style="margin-left:50px;" width="250px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Camera/Sony2.jpg" style="margin-left: 25px;" alt="New York" width="275px" height="250px">
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#demo3" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo3" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
      <div class="col-sm-9 col-md-6 col-lg-8">
      <?php
          include('bd.php');
        ?>
        <?php
          $sql = "select * from products where productname ='Sony'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>Sony Alpha ILCE 6600M </h3>
</tr>
          <tr>        <p>24.2 MP Mirrorless Camera with 18-135 mm Zoom Lens (APS-C Sensor, Fastest Auto Focus, Real-time Eye AF, Real-time Tracking, 4K Vlogging Camera, Tiltable LCD)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
        5 Axis Optical Image stabilisation<br>
        Real time eye AF for still / Video and Animal Eye AF<br>
        Real time tracking<br>
        World fastest 0.02 Sec AF speed with 425 phase detection and contrast points<br>
        24.2MP, EXMOR CMOS sensor with outstanding light sensitivity<br>
        True-to-life 4K HDR (HLG) movie recording<br>
        High-capacity Z battery supports long-duration shooting<br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹1,34,999</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 50px;">BUY</button>
</tr>
        
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 50px;">ORDER</button></tr>
</form>  
        </table>           </div>
    </div>
  </div>

  <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="RegisterModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="RegisterModalLabel">Order Details:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            <form action="loginshop.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name" style="font-weight: bold;">Product Name:</label>
              <select class="form-control" name="ProductName" placeholder="Product Name">
                <option>--- Select Product ---</option>
                <option>Canon EOS 200D II DSLR </option>
                <option>GoPro Hero</option>
                <option>Nikon D5600</option>
                <option>Sony Alpha ILCE 6600M</option>
              </select>
            </div>
            <div class="form-group">
              <label for="email" style="font-weight: bold;">Product Price:</label>
              <input type="number" class="form-control" placeholder="Enter Price" name="productPrice">
            </div>
            <div class="form-group">
              <label for="pwd" style="font-weight: bold;">Employee ID:</label>
              <input type="number" class="form-control" placeholder="Enter Employee ID" name="employeeid">
            </div>
            <div class="form-group">
              <label for="name" style="font-weight: bold;">Godown Name:</label>
              <select class="form-control" name="GodownName" placeholder="Godown Name">
                <option>--- Select Godown ---</option>
                <option>Pai International</option>
                <option>Electronics Ltd</option>
                <option>Metro Gadgets</option>
              </select>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Place Order</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>   
</body>
</html>