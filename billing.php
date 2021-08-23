<?php
    include("bd.php");
?>

<?php
    $id = $_POST['id'];

    $sql = "delete from products where product_id='$id'";
    if(mysqli_query($conn,$sql))
    {
       echo "<script>alert('Product Billed.');</script>";
       header("refresh:1;url=productlist.php");
    }
    else
    {
        echo "<script>alert('Product Not in store please place order.');</script>";
        header("refresh:1;url=laptop.php");
    }
    
?>