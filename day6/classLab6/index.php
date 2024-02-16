<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <?php
    // setting up the database connection
    $connect = mysqli_connect("localhost", "root", "root", "webdevwithgary");
    // defining the sql query
    $query = "Select * from students";

    // executing the query
    $students = mysqli_query($connect, $query);


    // if there occurs any connection error, display the error
    if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
    } 
    ?>

    <div class="container-fluid">
        <!--including the nav bar-->
        <div class="row">
            <?php include('reusables/nav.php') ?>
        </div>

        <div class="row bg-secondary px-3 py-3">

            <?php
            foreach ($students as $student) {
                if ($student['marks'] < 50) {
                    $bgClass = 'bg-danger';
                } else {
                    $bgClass = 'bg-success';
                }
                echo '<div class="col-md-4">
                <div class="card' . $bgClass . ' d-flex flex-column align-items-center justify-content-center mb-2 text-white">
                    <img src="' . $student['imageURL'] . '" class="card-img-top" alt="Card image caption">
                    <div class="card-body">
                        <h5 class="card-title">' . $student['fname'] . '' . $student['lname'] . '</h5>
                        <p class="card-text">Marks ' . $student['marks'] . '</p>
                    </div>
                    <div class="card-footer d-flex align-items-center">
                        <form method="GET" action="includes/updateStudent.php">
                            <input type="hidden" value="'. $student['id'] .'" />
                            <button type="submit" name="edit" class="btn btn-sm btn-success">Update</button>
                        </form>
                        <form method="GET" action="includes/deleteStudent.php">
                            <input type="hidden" name="id" value="'. $student['id'] .'" />
                            <button type="submit" name="delete" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>';
            }
            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>