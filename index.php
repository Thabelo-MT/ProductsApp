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
    <title>order products!</title>
  </head>
  
  <body>

    <div class="container mt-4">

      <?php include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Product Information
                <a href="products.php" class="btn btn-primary float-end">Add Product</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead class="table table-light">
                  <tr>  
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price(R)</th>
                    <th>Description</th>
                    <th>Quantity_on_Stock</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM products";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $product)
                        {
                          ?>
                          <tr>
                            <td><?= $product['id']; ?></td>
                            <td><?= $product['Name']; ?></td>
                            <td><?= $product['Price']; ?></td>
                            <td><?= $product['Description']; ?></td>
                            <td><?= $product['quantity_on_stock']; ?></td>
                            <td>
                              <a href="products-read.php?id=<?=$product['id'];?>" class="btn btn-info btn-sm">Read</a>
                              <a href="product-update.php?id=<?=$product['id'];?>" class="btn btn-success btn-sm">Update</a>
                              <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                          <?php
                        }
                    }
                    else{
                      echo "<h4>No record was found</h4>";
                    }
                  ?>
                  <tr>
                    <td>1</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>