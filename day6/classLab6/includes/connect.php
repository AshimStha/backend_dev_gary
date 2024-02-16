<?php
// setting up the database connection
$connect = mysqli_connect("localhost", "root", "root", "webdevwithgary");

// if there is no connection
if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>