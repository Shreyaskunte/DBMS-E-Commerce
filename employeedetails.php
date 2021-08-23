<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("bd.php");
    ?>
    <h1>Employee</h1>
    <table>
        <tr>
            <td>
                <?php
                    $sql = "select * from employee where email='shreyas@gmail.com'";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        $image = $row['img'];
                        echo "<img src='images/".$image."' width='50px' height = '50px'>";
                
                ?>
            </td>
            <td>
                <?php
                        echo $row['name'];
                ?>
            </td>
            <td>
                <?php
                        echo $row['email'];
                    }
                ?>
            </td>
        </tr>
    </table>  
</body>
</html> -->

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>
    <center>
    <h1>EMPLOYEE DETAILS</h1>

    <?php

        include("bd.php");

    ?>

    <table width = "20%" border = "10" cellpadding = "7" cellspacing = "7">

        <thead>

            <th><h2>Image</h2></th>
            <th><h2>Name</h2></th>
            <th><h2>Email</h2></th>

        </thead>

        <tr>
                <?php 

                    $sql = "select img,name,email from employee where email='shreyas@gmail.com'";

                    $result = mysqli_query($conn,$sql); 

                    while($row = mysqli_fetch_array($result)) 

                    {
                        ?>
                        <tr>
                        <td><h4><i><?php echo $row['img'];?></i></h4></td>
                        <td><h4><i><?php echo $row['name'];?></i></h4></td>
                        <td><h4><i><?php echo $row['email'];?></i></h4></td>
                        <!-- <td><h4><i><?php echo $row['seasons'];?></i></h4></td>
                        <td><h4><i><?php echo $row['available'];?></i></h4></td> -->
                        </tr>

                        <?php
                    }
                    

               ?>
        </tr>     

    </table>
    </center>  

</body>

</html>