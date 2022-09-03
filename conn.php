<?php

$conn = new mysqli('localhost', 'root', '', 'foodies');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>