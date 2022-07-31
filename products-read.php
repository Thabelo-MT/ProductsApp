<?php
session_start();
require 'data.php';
?>
<?php include('includes/header.php');?>

  <div class="container mt-5">
    
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-reader">
        <h4>Read Product Information
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
                        <input type="hidden" name="product_id" value="<?=$product['id'];?>">
                        <div class="mb-3">
                            <label>Name</label>
                            <p class="form-control">
                                <?= $product['Name'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Price</label>
                            <p class="form-control">
                                <?= $product['Price'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Description</label>
                            <p class="form-control">
                                <?= $product['Description'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>Quantity on Stock</label>
                            <p class="form-control">
                                <?= $product['quantity_on_stock'];?>
                            </p>
                        </div>         
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
  