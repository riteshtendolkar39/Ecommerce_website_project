<?php
include('../include/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }

        .footer {
            position: absolute;
            bottom: 0;
        }
        body{
            overflow-x:hidden;
        }
        .product_img{
            width:100px;
            object-fit:contain;
        }
    </style>
</head>

<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpg" class="logo op">
                <nav class="navbar navbar-expand-lg bg-info">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-3">Manage Details</h3>
        </div>

        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#"><img src="../images/avatar.png" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="mx-1"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button class="mx-1"><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button class="mx-1"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class="mx-1"><a href="index.php?insert_subcat" class="nav-link text-light bg-info my-1">Insert Sub-Categories</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">View Sub-Categories</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>

        <!--forth child-->
        <div class="container my-3">
            <?php
            if (isset($_GET['insert_category'])) {
                include('insert_category.php');
            }
            if (isset($_GET['insert_subcat'])) {
                include('insert_subcat.php');
            }
            if (isset($_GET['view_products'])) {
                include('./view_products.php');
            }
            if (isset($_GET['edit_products'])) {
                include('./edit_products.php');
            }
            ?>
        </div>
        <!--last child-->
        <!-- <div class="bg-info text-white py-3 text-center footer">
            <p>Copyright © Books 2024 Developed By: Ritesh & Vinod</p>
        </div> -->
        <?php include('../footer/footer.php') ?>
    </div>
    <!-- bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>