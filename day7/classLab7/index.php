<?php
// including the connection
include('../includes/connect.php');
include('../includes/functions.php');

if (isset($_POST['login'])) {
    // defining the sql query
    $query = 'Select * 
        from students
        where email = "' . $_POST['email'] . '"
        and password = "' . $_POST['password'] . '"
        limit 1';

    // executing the query
    $result = mysqli_query($connect, $query);


    if (mysqli_num_rows($result)) {
        $record = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $record['id'];
        header('location: admin/index.php');
        die();
    } else {
        set_message("Incorrect username/password!");
        header('location: index.php');
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!--including the nav bar-->
    <div class="row">
        <?php include('reusables/nav.php') ?>
    </div>
    <div class="row d-flex flex-column p-5">
        <div class="col">
            <h1>Log In</h1>
        </div>
        <div class="col">
            <!--An emoty action will cause the form to submit in itself-->
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>