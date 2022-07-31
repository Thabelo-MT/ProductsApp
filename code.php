<?php
session_start();
require 'data.php';

// Update Button
if(isset($_POST['update_product']))
{
    $product_id = mysqli_real_escape_string($con, $_POST['product_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $quantity_on_stock = mysqli_real_escape_string($con, $_POST['quantity_on_stock']);

    $query = "UPDATE products SET name='$name', price='$price', description='$description', quantity_on_stock='$quantity_on_stock' 
            WHERE id='$product_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Product updated successfully";
        header("Location: index.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message'] = "Product is NOT updated";
        header("Location: index.php");
        exit(0); 
    }
}
// Save Button
if(isset($_POST['save_product']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $quantity_on_stock = mysqli_real_escape_string($con, $_POST['quantity_on_stock']);

    $query = "INSERT INTO products (name,price,description,quantity_on_stock) VALUES
        ('$name', '$price', '$description', '$quantity_on_stock')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Product saved successfully";
        header("Location: products.php");
        exit(0);
    }
    else 
    {
        $_SESSION['message'] = "Product is NOT saved";
        header("Location: products.php");
        exit(0); 
    }
}
?>