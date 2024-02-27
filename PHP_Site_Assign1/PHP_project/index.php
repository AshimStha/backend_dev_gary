<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <?php
    include("inc/connect.php");
    include("inc/nav.php");

    // This query uses a join statement to join customers and orders tables to get the data from both the tables
    $query = 'SELECT customers.customerNumber, customers.custImgURL, customers.customerName, customers.phone, customers.addressLine1, customers.country, customers.creditLimit, orders.orderNumber, orders.orderDate, orders.status
    FROM customers, orders
    WHERE customers.customerNumber = orders.customerNumber;
    ';
    $customers = mysqli_query($connect, $query);
    ?>

    <h1 class="display-6 my-4 pb-2 text-bg-danger text-center fw-bold">Customer orders</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex flex-wrap justify-content-between">
                <?php
                foreach ($customers as $customer) {
                    echo '
                        <div class="card mb-5" style="width: 18rem;">
                            <img src="' . $customer['custImgURL'] . '" class="card-img-top" alt="' . $customer['customerName'] . '"/>
                            <div class="card-body">
                                <h5 class="card-title">' . $customer['customerName'] . '</h5>
                                <p class="card-text">Phone: ' . $customer['phone'] . '</p>
                                <p class="card-text">Address: ' . $customer['addressLine1'] . '</p>
                                <p class="card-text">Country: ' . $customer['country'] . '</p>
                                <p class="card-text">Limit: ' . $customer['creditLimit'] . '</p>
                                <p class="card-text">Order Quantity: ' . $customer['quantityOrdered'] . '</p>
                                <p class="card-text">Date ordered: ' . $customer['orderDate'] . '</p>
                                <p class="card-text">Status: ' . $customer['status'] . '</p>
                                <a href="' . $customer['customerName'] . '" class="btn btn-primary">Click me</a>
                            </div>
                            <div class="card-footer"></div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!--Bootstrap link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>