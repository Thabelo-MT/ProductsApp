<?php
session_start();
require 'data.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Read Product Information</title>
  </head>
  
  <body>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>