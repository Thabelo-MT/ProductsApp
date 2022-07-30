<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  
  <body>

  <div class="container mt-5">
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-reader">
        <h4>Products
        <a href="index.php" class="btn btn-danger float-end">BACK</a>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>