<?php
// setting the database configuration
$connect = mysqli_connect("localhost","root","root","webdevwithgary");
if(mysqli_connect_error()) {
        die('Connection error: '. mysqli_connect_error());
    }