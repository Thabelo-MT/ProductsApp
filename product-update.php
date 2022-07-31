<?php
session_start();
require 'data.php';
?>
<?php include('includes/header.php');?>

  <div class="container mt-5">

    <?php include('message.php'); ?>
    
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-reader">
        <h4>Product Update
        <a href="index.php" class="btn btn-secondary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
    <!-- Update code-->
        <?php 
        if(isset($_GET['id']))
        {
            $product_id = mysqli_real_escape_string($con, $_GET['id']);
            $query ="SELECT * FROM products WHERE id='$product_id' ";
            $query_run = mysqli_query($con, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
                $product = mysqli_fetch_array($query_run);
                ?>
            <form action="code.php" method="POST">
                        
                        <input type="hidden" name="product_id" value="<?=$product['id'];?>">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" value="<?= $product['Name'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Price</label>
                            <input type="text" name="price" value="<?= $product['Price'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <input type="text" name="description" value="<?= $product['Description'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Quantity on Stock</label>
                            <input type="text" name="quantity_on_stock" value="<?= $product['quantity_on_stock'];?>" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="update_product"  class="btn btn-primary">Update Product</button>
                        </div>
            </form>            
            <?php
            }
            else
            {
                echo "<h4>No Id was found</h4>";
            }
        }
        ?>
    </div>
    </div>
    </div>
    </div>
  </div>
  <?php include('includes/footer.php');?>
