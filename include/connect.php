<?php
require_once 'dbinfo.php';

$connect = mysqli_connect(servername, username, password, dbname);
if (!$connect) {
    die('There is no connection bro');
}

$products = mysqli_query($connect, "SELECT * FROM `products`");
$products = mysqli_fetch_all($products);
