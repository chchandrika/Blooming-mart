<?php
include 'connect.php';

// Retrieve data from POST request
$customer_name = $_POST['customer_name'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$quantity = $_POST['quantity'];

// Insert order data into the database
$sql = "INSERT INTO orders (customer_name, product_name, product_price, quantity) 
        VALUES ('$customer_name', '$product_name', '$product_price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "New order placed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
