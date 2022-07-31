<?php
session_start();
?>
<?php include('includes/header.php');?>

  <div class="container mt-5">

    <?php include('message.php'); ?>
    
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-reader">
        <h4>Hair Products
        <a href="index.php" class="btn btn-secondary float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">
        <form action="code.php" method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label>Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="mb-3">
                <label>Description</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="mb-3">
                <label>Quantity on Stock</label>
                <input type="text" name="quantity_on_stock" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" name="save_product" class="btn btn-primary">Save Product</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
  </div>
  <?php include('includes/footer.php');?>
