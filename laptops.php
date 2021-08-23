<style>
 @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Castoro&display=swap');

</style>

<hr style="height:100px;border:0;;color:black;background-color:#525252;">
<h1 style="padding: 20px 0 10px 70px; font-family: 'Anton', sans-serif;">LAPTOPS</h1>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>laptops</title>
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
      #products {
        top: 260px;
        background-color:#525252
      }
      </style>
</head>
<body>

  <div id="mySidenav" class="sidenav">
    <a href="#" id="about">Lenovo</a>
    <a href="#" id="blog">Apple</a>
    <a href="#" id="projects">DELL</a>
    <a href="#" id="contact">HP</a>
    <a href="productlist.php" id="Products">HOME</a>
  </div>
  
  <div style="margin-left:80px;">
    <h2>Hoverable Sidenav Buttons</h2>
    <p>Hover over the buttons in the left side navigation to open them.</p>
  </div>

  <div class="container">
    <div class="row" style="padding: 40px 0 40px 0;">
      <div class="col-sm-3 col-md-6 col-lg-4">
        <div id="demo" class="carousel slide" data-ride="carousel">

          <!-- Indicators
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul> -->
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Products/Laptop/lenovo.jpeg" alt="lenovo" width="340px" height="325px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/lenovo1.jpeg" alt="lenovo" width="340px" height="325px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/lenovo2.jpeg" alt="lenovo" width="340px" height="325px">
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
          $sql = "select * from products where productname ='Lenovo'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr><h3>Lenovo Ideapad L340 Core i7 9th Gen</h3></tr>
          <tr><p>(8 GB/1 TB HDD/256 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA Geforce GTX 1650/60 Hz) L340-15IRH Gaming Laptop  (15.6 inch, Granite Black, 2.19 kg)</p></tr>
          <tr><h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹70,990</h2></tr>
          <tr><button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 120px;" name = "buy">BUY</button></tr>
          <tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 120px;">ORDER</button></tr>
        </form>  
        </table>
      </div>
    </div>

    <div class="row" style="padding: 40px 0 40px 0;">
      <div class="col-sm-3 col-md-6 col-lg-4">
        <div id="demo1" class="carousel slide" data-ride="carousel">

          <!-- Indicators
          <ul class="carousel-indicators1">
            <li data-target="#demo1" data-slide-to="0" class="active"></li>
            <li data-target="#demo1" data-slide-to="1"></li>
            <li data-target="#demo1" data-slide-to="2"></li>
          </ul> -->
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Products/Laptop/apple.jpeg" style="margin-left: 10px;" alt="apple" width="300px" height="200px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/apple1.jpeg" alt="apple" width="300px" height="200px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/apple2.jpeg" alt="apple" width="300px" height="200px">
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
          $sql = "select * from products where productname ='Apple'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
        <tr><h3>Apple MacBook Air Core i5 5th Gen</h3></tr>
        <tr><p>(8 GB/128 GB SSD/Mac OS Sierra) MQD32HN/A A1466  (13.3 inch, Silver, 1.35 kg)</p></tr>
        <tr><h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹67,990</h2></tr>
        <tr><button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">BUY</button></tr>
        <tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">ORDER</button></tr>
        </form>  
        </table>
      </div>
    </div>
    <div class="row" style="padding: 40px 0 40px 0;">
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
              <img src="Products/Laptop/dell.jpeg" alt="dell" width="340px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/dell1.jpeg" style="padding-left: 10px;" alt="dell" width="340px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/dell2.jpeg" alt="dell" width="340px" height="250px">
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
          $sql = "select * from products where productname ='Dell'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
        <tr><h3>Dell Inspiron Ryzen 5 Quad Core 3500U</h3></tr>
        <tr><p>(8 GB/512 GB SSD/Windows 10 Home) Inspiron 3505 Laptop  (15.6 inch, Silver, 1.96 kg, With MS Office)</p></tr>
        <tr><h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹46,990</h2></tr>
        <tr><button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">BUY</button></tr>
        <tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">ORDER</button></tr>
        </form>  
        </table>
      </div>
    </div>

    <div class="row" style="padding: 40px 0 40px 0;">
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
              <img src="Products/Laptop/hp.jpeg" alt="Los Angeles" width="340px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/hp1.jpeg" alt="Chicago" width="340px" height="250px">
            </div>
            <div class="carousel-item">
              <img src="Products/Laptop/hp2.jpeg" alt="New York" width="340px" height="250px">
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
          $sql = "select * from products where productname ='Hp'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
        <tr><h3>HP 14 Core i5 10th Gen</h3></tr>
        <tr><p>(8 GB/512 GB SSD/Windows 10 Home) 14-ck2018TU Thin and Light Laptop  (14 inch, Jet Black, 1.47 kg, With MS Office)</p></tr>
        <tr><h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹47,490</h2></tr>
        <tr><button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">BUY</button></tr>
        <tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 60px;">ORDER</button></tr>
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
                <option>Lenovo Ideapad L340 Core i7 9th Gen </option>
                <option>Apple MacBook Air Core i5 5th Gen </option>
                <option>Dell Inspiron Ryzen 5 Quad Core 3500U </option>
                <option>HP 14 Core i5 10th Gen </option>
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