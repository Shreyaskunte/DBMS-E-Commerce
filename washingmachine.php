<hr style="height:100px;border:0;;color:black;background-color:#525252;">
<h1 style="padding: 20px 0 10px 70px; font-family: 'Anton', sans-serif;">WASHING MACHINES</h1>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>washing machine</title>
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
      
      #PRODUCTS {
        top: 200px;
        background-color:#525252
      }
      </style>
</head>
<body>

  <div id="mySidenav" class="sidenav">
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
              <img src="Products/Washing Machine/Bosch.jpeg" style="margin-left: 30px;" alt="Los Angeles" width="250px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/Bosch1.jpeg" style="margin-left: 30px;" alt="Chicago" width="250px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/Bosch2.jpeg" style="margin-left: 30px; margin-top: 20px;" alt="New York" width="250px" height="250px">
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
          $sql = "select * from products where productname ='Bosch'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
        <tr><h3>BOSCH</h3></tr>
        <tr>        <p>6 kg Fully Automatic Front Load with In-built Heater Silver  (WAB20267IN)</p>
</tr>
        <tr>        <h4>Highlights</h4>
</tr>
        <tr><p>
          Fully Automatic Front Load Washing Machines have Great Wash Quality with very less running cost <br>
          1000 rpm : Higher the spin speed, lower the drying time <br>
          6 kg : Great for Single/Couple <br>
        </p></tr>
        <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹24,399</h2>
</tr>
        <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 50px;">BUY</button>
</tr>
        <tr>       <button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 50px;">ORDER</button>
</tr>
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
              <img src="Products/Washing Machine/Godrej.jpeg" style="margin-left: 30px;" alt="Los Angeles" width="250px" height="340px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/Godrej1.jpeg" style="margin-left: 30px;"  alt="Chicago" width="250px" height="340px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/Godrej2.jpeg" style="margin-left: 30px;" alt="New York" width="290px" height="340px">
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
          $sql = "select * from products where productname ='Bosch'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
        <tr><h3>GODREJ</h3></tr>
        <tr>        <p>6.2 kg Fully Automatic Top Load Grey  (WT EON 620 A Gp Gr))</p>
</tr>
        <tr>        <h4>Highlights</h4>
</tr>
        <tr><p>
          Fully Automatic Top Load Washing Machines are ergonomically friendly and provide great wash quality <br>
          700 rpm : Higher the spin speed, lower the drying time <br>
          6.2 kg : Great for a family of 3 <br>
        </p></tr>
        <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹11,990</h2>
</tr>
        <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 40px;">BUY</button>
</tr>
        <tr>       <button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 40px;">ORDER</button>
</tr>
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
              <img src="Products/Washing Machine/LG.jpeg" style="margin-left: 30px;" alt="Los Angeles" width="250px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/LG1.jpeg" style="margin-left: 30px;" alt="Chicago" width="300px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/LG2.jpeg" style="margin-left: 30px;" alt="New York" width="250px" height="350px">
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
          $sql = "select * from products where productname ='Bosch'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>LG</h3>
</tr>
          <tr>        <p>8 kg 5 Star Fully Automatic Front Load with In-built Heater Silver  (FHM1208ZDL.ALSQEIL)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
          Fully Automatic Front Load Washing Machines have Great Wash Quality with very less running cost <br>
          1200 rpm : Higher the spin speed, lower the drying time <br>
          5 Star Rating <br>
          8 kg <br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹15,499</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">BUY</button>
</tr>
          <tr>       <button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">ORDER</button>
</tr></form>
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
              <img src="Products/Washing Machine/Whirlpool.jpeg" style="margin-left: 30px;" alt="Los Angeles" width="250px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/Whirlpool1.jpeg" alt="Chicago" style="margin-left: 30px;" width="250px" height="350px">
            </div>
            <div class="carousel-item">
              <img src="Products/Washing Machine/Whirlpool2.jpeg" style="margin-left: 30px;" alt="New York" width="250px" height="350px">
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
          $sql = "select * from products where productname ='Bosch'";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($result))
          {
        ?>
        <table style = "display:none;">
        <form action="billing.php" method="POST">
          <tr><input type="hidden" name="id" value="<?php echo $row['product_id'];?>"></tr>
          <?php } ?>
          <tr>        <h3>WHIRLPOOL</h3>
</tr>
          <tr>        <p>7 kg 5 Star, Hard Water wash Fully Automatic Top Load Grey  (WM ROYAL PLUS 7.0 GREY 5YMW)</p>
</tr>
          <tr>        <h4>Highlights</h4>
</tr>
          <tr><p>
          Fully Automatic Top Load Washing Machines are ergonomically friendly and provide great wash quality <br>
          740 rpm : Higher the spin speed, lower the drying time <br>
          Number of wash programs - 12 <br>
          5 Star Rating <br>
          7 kg <br>
        </p></tr>
          <tr>        <h2 style=" margin-top: 20px; font-family: 'Anton', sans-serif;">₹32,999</h2>
</tr>
          <tr>        <button type="submit" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">BUY</button>
</tr>
<tr><button type="button" data-toggle="modal" data-target="#RegisterModal" class="btn btn-primary ml-3" style="width: 30%; margin-top: 30px;">ORDER</button>
</tr></form>
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
                <option>BOSCH </option>
                <option>GODREJ</option>
                <option>LG</option>
                <option>WHIRLPOOL</option>
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