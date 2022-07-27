<?php
include_once 'connect.php';

$product_id = $_GET['id'];

$products = mysqli_query($connect, "SELECT * FROM `products` WHERE id = '$product_id'");
$products = mysqli_fetch_assoc($products);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<h2 class="text-center">Update product</h2>
 <div class="mx-auto w-25 my-4">
    <form action="updating.php" method="POST">
        <div class="col">
            <p class="fw-bold">Tittle</p>
            <input type="hidden" name="id" value="<?=$products['id']?>">
            <input type="text" class="form-control" placeholder="Title" name="title" value="<?=$products['title']?>">
        </div>
        <div class="col">
            <p class="fw-bold">Description</p>
            <textarea class="form-control" placeholder="description" name="description"><?=$products['description']?></textarea>
        </div>
         <div class="col">
            <p class="fw-bold">Price</p>
            <input type="number" class="form-control" placeholder="Price" name="price" value="<?=$products['price']?>"></input>
        </div>
        <button type="submit" class="btn btn-warning my-3">Update product</button>
        </form>


</body>
</html>
