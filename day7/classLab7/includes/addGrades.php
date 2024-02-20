<?php
// print_r($_POST);

// isset = checks if the variable is set or not (used for validation)
if (isset($_POST['grades'])) {
    // declaring variables that use the name attribute from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $img_url = $_POST['img_url'];

    // including the db connection
    include('../includes/connect.php');

    // defining the sql query for insert
    // the mysqli_real_escape_string($connect, $fname) is the sanitization against sql injection

    /**
     * takes 2 parameters:
     *  - $connect -> connection string
     *  - $fname -> the table data variable
     */
    $query = "Insert into students (fname, lname, marks, imageURL) 
            values (
                '" . mysqli_real_escape_string($connect, $fname) . "',
                '" . mysqli_real_escape_string($connect, $lname) . "',
                '" . mysqli_real_escape_string($connect, $marks) . "',
                '" . mysqli_real_escape_string($connect, $img_url) . "')";

    // executing the query
    $students = mysqli_query($connect, $query);

    if ($students) {
        echo "Success";
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
} else {
    echo "You can not be here!";
}

?>