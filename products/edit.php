<?php
session_start();
$id = $_GET['id'];
require 'function/connection.php';
$query = "select * from products where `id`=$id";
$run = mysqli_query($connection, $query);
$product = mysqli_fetch_assoc($run);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <form class="w-50 mx-auto border p-4 rounded shadow" enctype="multipart/form-data" action="function/update.php?id=<?= $id ?>" method="post">

            <h2 class="text-center mb-4">Editing Products</h2>

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" value="<?= $product['price'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Sale</label>
                <input type="text" name="sale" value="<?= $product['sale'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Count</label>
                <input type="text" name="count" value="<?= $product['count'] ?>" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Catergory</label>
                <select class="form-select" name="category">
                    <option selected disabled>Choose Catergory</option>
                    <option <?php if ($product['category'] == 'laptop') {
                                echo "selected";
                            } ?> value="laptop">Laptop</option>
                    <option <?php if ($product['category'] == 'phone') {
                                echo "selected";
                            } ?> value="phone">Phone</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-primary w-100">Edit Product</button>
        </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>