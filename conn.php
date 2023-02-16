<?php

$conn = new mysqli('localhost', 'root', '', 'PagerBagusDB');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>