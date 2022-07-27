<?php
include 'include/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container p-5">

    <h2 class="text-center">Product</h2>
        <table class="table">
        <thead class="table-warning">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            </tr>
        </thead>
 <?php
foreach ($products as $product) {
    echo '<tbody>
        <tr>
        <th scope="row">' . $product[0] . '</th>
        <td>' . $product[1] . '</td>
        <td>' . $product[3] . '</td>
        <td>' . $product[2] . '</td>
        <td>' . '<th scope="col"><a href="include/update.php?id=' . $product[0] . ' " class="btn btn-warning btn-sm">Update</a></th>' . '</td>
        <td>' . '<th scope="col"><a href="include/delete.php?id=' . $product[0] . ' " class="btn btn-danger btn-sm">Delete</a></th>' . '</td>
        </tr>
           ';
}
?>
 </table>
    <h2 class="text-center">Add new product</h2>
 <div class="mx-auto w-25 my-4">
    <form action="include/create.php" method="POST">
        <div class="col">
            <p class="fw-bold">Tittle</p>
            <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
        <div class="col">
            <p class="fw-bold">Description</p>
            <textarea class="form-control" placeholder="description" name="description"></textarea>
        </div>
         <div class="col">
            <p class="fw-bold">Price</p>
            <input type="number" class="form-control" placeholder="Price" name="price"></input>
        </div>
        <button type="submit" class="btn btn-success my-3">Add new product</button>
        </form>
</div>

</div>




</body>
</html>
