<hr style="height:100px;border:0;;color:black;background-color:#525252;">
<h1 style="padding: 20px 0 10px 80px; font-family: 'Anton', sans-serif;">TV</h1>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>TV</title>
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
        top: 40px;
        background-color: #525252
      }
      
      #blog {
        top: 100px;
        background-color:  #525252
      }
      
      #projects {
        top: 160px;
        background-color:#525252
      }
      
      #contact {
        top: 220px;
        background-color:#525252
      }
      #PRODUCTS {
        top: 280px;
        background-color:#525252
      }
      </style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="#" id="about">MI</a>
    <a href="#" id="blog">1+</a>
    <a href="#" id="projects">Pansonic</a>
    <a href="#" id="contact">Sony</a>
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
              <img src="Products/TV/MI.jpg" alt="Los Angeles" width="350px" height="255px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/MI1.jpg" style="margin-left: 30px;" alt="Chicago" width="350px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/MI2.jpg"  alt="New York" width="350px" height="350px">
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
          $sql = "select * from products where productname ='OnePlus TV'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>Mi TV</h3>
</tr>
          <tr>        <p4>4A PRO 80 cm (32 inches) HD Ready Android LED TV (Black) | With Data Saver</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
        Resolution: HD Ready Android TV (1366x768) | Refresh Rate: 60 hertz <br>
        Sound: 20 Watts Output | Dolby+ DTS-HD<br>
        Warranty Information: 1 year warranty on product and 1 year extra on Panel<br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹13,999</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">BUY</button>
</tr>
        
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">ORDER</button></tr>
</form>  
        </table>         </div>
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
              <img src="Products/TV/oneplus.jpeg"  alt="Los Angeles" width="350px" height="255px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/oneplus1.jpeg"  style="margin-right: 30px;" alt="Chicago" width="350px" height="255px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/oneplus2.jpeg"  alt="New York" width="350px" height="255px">
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
          $sql = "select * from products where productname ='Mi TV'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>OnePlus Y Series</h3>
</tr>
          <tr>        <p>80 cm (32 inches) HD Ready LED Smart Android TV 32Y1 (Black) (2020 Model)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
        Resolution: HD Ready (1366x768) | Refresh Rate: 60 hertz<br>
        Sound : 20 Watts Output | Dolby Audio<br>
        Design: Bezel-less | Screen/Body Ratio = 91.4%<br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹13,999</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 40px;">BUY</button>
</tr>
        
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 40px;">ORDER</button></tr>
</form>  
        </table>       </div>
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
              <img src="Products/TV/Panasonic.jpg" alt="Los Angeles" width="350px" height="255px">
            </div>5
            <div class="carousel-item">
              <img src="Products/TV/Panasonic1.jpg"  alt="Chicago" width="350px" height="305px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/Panasonic2.jpg"  alt="New York" width="350px" height="305px">
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
          $sql = "select * from products where productname ='Panasonic'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>Panasonic </h3>
</tr>
          <tr>        <p>147 cm (58 inches) 4K Ultra HD Certified Android Smart LED TV TH-58HX450DX (Black) (2020 Model)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
        Resolution: 4K Ultra HD (3840 x 2160) | Refresh Rate: 60 hertz <br>
        Sound : 20 Watts Output| Audio Link| V-Audio |DTS TruSurround<br>
        Warranty Information: 1 Year Standard Manufacturer Warranty by Panasonic from the Date of Purchase<br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹46,990</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">BUY</button>
</tr>
        
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">ORDER</button></tr>
</form>  
        </table>       </div>
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
              <img src="Products/TV/Sony.jpg"  alt="Los Angeles" width="350px" height="255px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/Sony1.jpg" alt="Chicago"  width="350px" height="255px">
            </div>
            <div class="carousel-item">
              <img src="Products/TV/Sony2.jpg"  alt="New York" width="350px" height="255px">
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
          $sql = "select * from products where productname ='Sony Bravia'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>Sony Bravia </h3>
</tr>
          <tr>        <p>125.7 cm (50 inches) Full HD LED Smart TV KLV-50W672G (Black) (2019 Model)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
        Resolution: Full HD (1920x1080) | Refresh Rate: 50 hertz<br>
        Sound: 20 Watts Output | Dynamic drive speaker: powerful sound, finely balanced<br>
        Display : HDR: a truly lifelike viewing experience | X-reality pro: rediscover every detail | X-protection pro: extra protection TV<br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹51,140</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">BUY</button>
</tr>
        
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">ORDER</button></tr>
</form>  
        </table>       </div>
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
                <option>Mi TV 4A PRO 80 cm (32 inches)</option>
                <option>OnePlus Y Series 80 cm (32 inches)</option>
                <option>Panasonic 147 cm (58 inches)</option>
                <option>Sony Bravia 125.7 cm (50 inches) </option>
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