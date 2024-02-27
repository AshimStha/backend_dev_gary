<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Employees</title>
</head>

<body>
    <?php
    include("connect.php");
    include("nav.php");
    $query = 'SELECT * FROM employees';
    $employees = mysqli_query($connect, $query);
    ?>

    <h1 class="display-6 my-4 pb-2 text-bg-danger text-center fw-bold">Employees</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex flex-wrap justify-content-between">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($employees as $employee) {
                            echo '
                                <tr>
                                    <td>' . $employee['employeeNumber'] . '</td>
                                    <td>' . $employee['firstName'] . '</td>
                                    <td>' . $employee['lastName'] . '</td>
                                    <td>' . $employee['email'] . '</td>
                                    <td>' . $employee['jobTitle'] . '</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--Bootstrap link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>