<?php

session_start();

$mysql = new mysqli("localhost", "root", "", "oxfam");

$id = $_POST['id'];
$stock = $_POST['stock'];
$quantity = $_POST['quantity'];

$new_quantity = $stock + $quantity;


$query = "update inventory set quantity = $new_quantity where item_id = $id";

mysqli_query($mysql, $query)
        or die(mysqli_error($mysql));


echo "Updated Stock";
