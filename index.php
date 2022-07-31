<?php
  session_start();
  require 'data.php';
?>
<?php include('includes/header.php');?>

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
              <table class="table table-bordered table-dark table-striped">
                <thead class="table table-dark">
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
                              <form action="code.php" method="POST" class="d-inline">
                                  <button type="submit" name="delete_product" value="<?=$product['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                              </form>
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
    <?php include('includes/footer.php');?>
