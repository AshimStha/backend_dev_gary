<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $id = $_GET["id"];
    // Including the db connection
    include('../includes/connect.php');
    $query = "SELECT * FROM students WHERE `id` = '$id'";
    $student = mysqli_query($connect, $query);
    if (!$student) {
        // Handle the query error here, for example:
        die("Error: " . mysqli_error($connect));
    }
    $result = $student->fetch_assoc();
    ?>

    <div class="container">
        <!-- Including the nav bar -->
        <div class="row">
            <?php include('reusables/nav.php') ?>
        </div>

        <div class="row">
            <div class="col">
                <h1 class="display-4 mt-5 mb-4">
                    Update Student Details
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form method="POST" action="updateStudent.php">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First Name"
                            value="<?php echo $result['fname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last Name"
                            value="<?php echo $result['lname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks" aria-describedby="Marks"
                            value="<?php echo $result['marks']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="img_url" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="img_url" name="img_url" aria-describedby="Image URL"
                            value="<?php echo $result['img_url']; ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update Student</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>