<?php
include('./includes/connect.php');
include('functions.php');

if (isset($_POST['users_submit'])) {
    $query = "Insert into users(name, email, password)
        values (
            '" . mysqli_real_escape_string($connect, $_POST['name']) . "',
                '" . mysqli_real_escape_string($connect, $_POST['email']) . "',
                '" . md5($_POST['password']) . "')";

    mysqli_query($connect, $query);
    set_message("User has been created!");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!--including the nav bar-->
    <div class="row">
        <?php include('reusables/nav.php') ?>
    </div>
    <div class="row">
        <div class="col">
            <?php echo get_message(); ?>
        </div>
    </div>
    <div class="row d-flex flex-column p-5">
        <div class="col">
            <h1>Manage Users</h1>
        </div>
        <div class="col">
            <!--An emoty action will cause the form to submit in itself-->
            <form method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        aria-describedby="password">
                </div>

                <button type="submit" name="users_submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>