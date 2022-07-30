<?php

require 'data.php';

if(isset($_POST['save_product']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $quantity_on_stock = mysqli_real_escape_string($con, $_POST['quantity_on_stock']);

    $query = "INSERT INTO products (name,price,description,quantity_on_stock) VALUES
        ('$name', '$price', '$description', '$quantity_on_stock')";

    $query_run = mysqli_query($con, $con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Product saved successfully";
        header("Location: products.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message'] = "Product NOT saved";
        header("Location: products.php");
        exit(0); 
    }
}
?>