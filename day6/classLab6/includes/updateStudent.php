<?php
include('../includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $marks = $_POST["marks"];
    $img_url = $_POST["img_url"];

    $query = "UPDATE students SET `fname`='$fname', `lname`='$lname', `marks`='$marks', `imgURL`='$img_url' WHERE `id`='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        // Redirect to a success page or any other relevant page
        header("Location: success.php");
        exit;
    } else {
        // Handle the error
        die("Error updating student details: " . mysqli_error($connect));
    }
}
?>
