<hr style="height:100px;border:0;;color:black;background-color:#525252;">
<h1 style="padding: 20px 0 10px 70px; font-family: 'Anton', sans-serif;">MOBILES</h1>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>mobile</title>
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
    <a href="#" id="about">APPLE</a>
    <a href="#" id="blog">POCO</a>
    <a href="#" id="projects">SAMSUNG</a>
    <a href="#" id="contact">1+</a>
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
              <img src="Products/Phone/apple.jpeg" style="margin-left: 80px;" alt="Los Angeles" width="200px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/apple1.jpeg" style="margin-left: 80px;" alt="Chicago" width="200px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/apple2.jpeg" style="margin-left: 80px;" alt="New York" width="200px" height="450px">
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
          $sql = "select * from products where productname ='Apple SE'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
        <tr><h3>Apple iPhone SE</h3></tr>
        <tr><p4>(Black, 64 GB) (Includes EarPods, Power Adapter)</p></tr>
        <tr><h4>Highlights</h4></tr>
        <tr><p>
          64 GB ROM <br>
          11.94 cm (4.7 inch) Retina HD Display <br>
          12MP Rear Camera | 7MP Front Camera <br>
          A13 Bionic Chip with 3rd Gen Neural Engine Processor <br>
          Water and Dust Resistant (1 meter for Upto 30 minutes, IP67) <br>
          Fast Charge Capable <br>
          Wireless charging (Works with Qi Chargers | Qi Chargers are Sold Separately <br>
        </p></tr>
        <tr><h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹32,999</h2></tr>
        <tr><button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">BUY</button></tr>
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
              <img src="Products/Phone/poco.jpeg" style="margin-left: 80px;" alt="Los Angeles" width="200px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/poco1.jpeg" style="margin-left: 80px;"  alt="Chicago" width="200px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/poco2.jpeg" style="margin-left: 150px;" alt="New York" width="20px" height="450px">
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
          $sql = "select * from products where productname ='Apple SE'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr><h3>POCO X3</h3></tr>
          <tr><p>(Cobalt Blue, 64 GB)  (6 GB RAM)</p></tr>
          <tr><h4>Highlights</h4></tr>
          <tr><p>
          6 GB RAM | 64 GB ROM | Expandable Upto 512 GB <br>
          16.94 cm (6.67 inch) Full HD+ Display <br>
          64MP + 13MP + 2MP + 2MP | 20MP Front Camera <br>
          6000 mAh Lithium-ion Polymer Battery <br>
          Qualcomm Snapdragon 732G Processor <br>
        </p></tr>
        <tr><h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹16,999</h2></tr>
        <tr><button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 100px;">BUY</button></tr>
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
              <img src="Products/Phone/samsung.jpeg" style="margin-left: 80px;" alt="Los Angeles" width="200px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/samsung1.jpeg" style="margin-left: 80px;" alt="Chicago" width="200px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/samsung2.jpeg" style="margin-left: 80px;" alt="New York" width="200px" height="450px">
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
          $sql = "select * from products where productname ='Apple SE'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>Samsung Galaxy F41</h3>
</tr>
          <tr>        <p>(Fusion Blue, 64 GB)  (6 GB RAM)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>    
          <tr> <p>
          6 GB RAM | 64 GB ROM | Expandable Upto 512 GB <br>
          16.26 cm (6.4 inch) Full HD+ Display <br>
          64MP + 8MP + 5MP | 32MP Front Camera <br>
          6000 mAh Lithium-ion Battery <br>
          Exynos Octa Core Processor <br>
          Super AMOLED Display <br>
        </p></tr>
       <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹15,499</h2>
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
              <img src="Products/Phone/Oneplus.jpg" style="margin-left: 80px;" alt="Los Angeles" width="200px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/Oneplus1.jpg" alt="Chicago" style="margin-right: 250px;" width="400px" height="450px">
            </div>
            <div class="carousel-item">
              <img src="Products/Phone/Oneplus2.jpg" style="margin-left: 25px;" alt="New York" width="300px" height="450px">
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
          $sql = "select * from products where productname ='Apple SE'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>OnePlus Nord 5G</h3>
</tr>
          <tr>        <p>(Blue Marble, 8GB RAM, 128GB Storage)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
          48MP+8MP+5MP+2MP quad rear camera with 1080P Video at 30/60 fps, 4k 30fps | 32MP+8MP front dual camera with 4K video capture at 30/60 fps and 1080 video capture at 30/60 fps <br>
          6.44-inch 90Hz fluid Amoled display with 2400 x 1080 pixels resolution | 408ppi <br>
          Memory, Storage & SIM: 8GB RAM | 128GB internal memory | Dual SIM (nano+nano) | OnePlus Nord currently support dual 4G SIM Cards or a Single 5G SIM. 5G+4G support will be available via OTA update at a future date. <br>
          4115mAH lithium-ion battery | In-Display fingerprint sensor <br>
        </p></tr>
       <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹32,999</h2>
</tr>
       <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 50px;">BUY</button>
</tr>
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 50px;">ORDER</button></tr>
</form>  
        </table>
      </div>
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
                <option>Apple iPhone SE(Black, 64 GB) </option>
                <option>POCO X3(Cobalt Blue, 64 GB)</option>
                <option>Samsung Galaxy F41(Fusion Blue, 64 GB) </option>
                <option>OnePlus Nord 5G(Blue Marble, 8GB RAM, 128GB Storage)</option>
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