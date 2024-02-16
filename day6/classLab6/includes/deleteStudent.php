<?php
// print_r($_POST);

// isset = checks if the variable is set or not (used for validation)
if (isset($_GET['delete'])) {
    // declaring variables that use the name attribute from the form
    $id = $_GET['id'];

    // including the db connection
    include('../includes/connect.php');

    // defining the sql query for insert
    $query = "Delete from students where `id` = '$id'";

    // executing the query
    $students = mysqli_query($connect, $query);

    if ($students) {
        echo "Success";
    } else {
        echo "Failed: " . mysqli_error($connect);
    }
}
else {
    echo "You can not be here!";
}

?>