<?php session_start(); ?>
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

        <form class="w-50 mx-auto border p-4 rounded shadow" enctype="multipart/form-data" action="function/insert.php" method="post">

            <h2 class="text-center mb-4">Adding Products</h2>

            <div class="mb-3">
                <?php if (isset($_SESSION['errors']['name'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['errors']['name'] ?></div>
                <?php } ?>
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <?php if (isset($_SESSION['errors']['price'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['errors']['price'] ?></div>
                <?php } ?>
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control">
            </div>

            <div class="mb-3">
                <?php if (isset($_SESSION['errors']['sale'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['errors']['sale'] ?></div>
                <?php } ?>
                <label class="form-label">Sale</label>
                <input type="text" name="sale" class="form-control">
            </div>

            <div class="mb-3">
                <?php if (isset($_SESSION['errors']['count'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['errors']['count'] ?></div>
                <?php } ?>
                <label class="form-label">Count</label>
                <input type="text" name="count" class="form-control">
            </div>

            <div class="mb-3">
                <?php if (isset($_SESSION['errors']['category'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['errors']['category'] ?></div>
                <?php } ?>
                <label class="form-label">Catergory</label>
                <select class="form-select" name="category">
                    <option selected disabled>Choose Catergory</option>
                    <option value="laptop">Laptop</option>
                    <option value="phone">Phone</option>
                </select>
            </div>

            <div class="mb-3">
                <?php if (isset($_SESSION['errors']['image'])) { ?>
                    <div class="alert alert-danger"><?= $_SESSION['errors']['image'] ?></div>
                <?php } ?>
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <?php unset($_SESSION['errors']) ?>
            <button class="btn btn-primary w-100">Add Product</button>
        </form>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>