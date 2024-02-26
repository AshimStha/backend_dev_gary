<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YeahBuddy</title>

    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <!--The navigation menu-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">YeahBuddy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--The content display section-->
    <?php
    // setting up the database connection
    $connect = mysqli_connect("localhost", "root", "root", "webdevwithgary");
    // defining the sql query
    $query = "Select * from customers";

    // executing the query
    $customers = mysqli_query($connect, $query);

    // if there occurs any connection error, display the error
    if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
    }
    ?>

    <div class="container">
        <div class="row bg-secondary px-3 py-3">
            <?php
            foreach ($c as $customer) {
                if ($customer->row > 0) {
                    echo '<div class="col-md-4">
                            <div class="card' . $bgClass . ' d-flex flex-column align-items-center justify-content-center mb-2 text-white">
                                <img src="' . $customer['customerName'] . '" class="card-img-top" alt="Card image caption">
                                <div class="card-body">
                                    <h5 class="card-title">' . $customer['contactFirstName'] . '' . $customer['contactLastName'] . '</h5>
                                    <p class="card-text">Marks ' . $customer['phone'] . '</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                }
                else {
                    echo 'No data found!';
                }
            }
            ?>
        </div>
    </div>

    <!--Bootstrap JS for poppers and dropdowns functionalities-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>