<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and For Loops</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid bg-secondary">
        <div class="row">
            <div class="col bg-danger d-flex align-items-center justify-content-center">
                <p class="fs-4 text-white fw-bold d-flex align-items-center ">List of company staffs</p>
            </div>
        </div>
        <div class="row">
            <?php
            function getUsers()
            {
                $url = "https://jsonplaceholder.typicode.com/users";
                $data = file_get_contents($url);
                return json_decode($data, true);
            }

            $users = getUsers();


            for ($i = 0; $i < count($users); $i++) {
                echo '<div class="col-md-3 d-flex align-items-center justify-content-center">
                        <div class="card my-3" style="width: 18rem">
                            <img src="https://www.icachef.co.za/wp-content/uploads/2019/01/ICA_Profile-Place-Holder.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Name: ' . $users[$i]['name'] . '</h4>
                                <h5 class="card-title">Username: ' . $users[$i]['username'] . '</h5>
                                <h6 class="card-title">Email: ' . $users[$i]['email'] . '</h6>
                                <p class="card-text">Phone: ' . $users[$i]['phone'] . '</p>
                                <a href=' . $users[$i]['website'] . ' class="btn btn-primary">Check URL</a>
                            </div>
                        </div>
                    </div>';
            }


            ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>