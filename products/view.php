<?php
session_start();

require 'function/connection.php';

$query = "select * from products";

$run = mysqli_query($connection, $query);

$Products = mysqli_fetch_all($run, MYSQLI_ASSOC);

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

    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
    <?php }
    unset($_SESSION['success']) ?>

    <a href="add.php" class="btn btn-primary m-5">Add Product</a>

    <div class="container-fluid mt-5">

        <table class="table w-100 table-bordered table-hover text-center align-middle ">

            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Sale</th>
                    <th>Count</th>
                    <th>Category</th>
                    <th>image</th>
                    <th>Edit/Delete</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach ($Products as $key => $value) { ?>
                    <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['price'] ?></td>
                        <td><?= $value['sale'] ?></td>
                        <td><?= $value['count'] ?></td>
                        <td><?= $value['category'] ?></td>
                        <td><img style="width: 90px;height:90px;" src="images/<?= $value['image'] ?>" alt=""></td>

                        <td>
                            <a href="edit.php?id=<?= $value['id'] ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $value['id'] ?>">
                                DELETE
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop<?= $value['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">DELETE USER</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure that you want to delete <?= $value['name'] ?>?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                                            <!-- <button type="button" class="btn btn-danger"></button> -->
                                            <a href="function/delete.php?id=<?= $value['id'] ?>" class="btn btn-danger">DELETE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>