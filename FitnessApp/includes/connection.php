<?php
// setting up the database connection
$connect = mysqli_connect("localhost", "root", "root", "webdevwithgary");

// if there is a connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}