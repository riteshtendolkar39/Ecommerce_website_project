<?php
include('include/connect.php');
include('functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Shopping Ecommerce Website</title>

    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css files-->
    <link rel="stylesheet" href="style.css">


    <style>
        .cart_img {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }
        .logo{
    width:3%;
    height:3%;
    border-radius:25px;
}
    </style>
</head>

<body>
    <!-- navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="./images/logo.jpg" alt="" class="logo">
                <a class="navbar-brand ms-2 text-secondary" href="index.php">Books</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="display_all.php">All Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <?php
            if(isset($_SESSION['user_email'])){
              echo "            <li class='nav-item'>
              <a class='nav-link' href='./user/Profile.php'>My Profile</a>
            </li>";
            }else{
              echo "            <li class='nav-item'>
              <a class='nav-link' href='./user/user_registration.php'>Register</a>
            </li>";
            }
            ?>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?></sup></a>
                        </li>

                    </ul>
                    <form class="d-flex" role="login">
                    <?php
            // $username = substr($_SESSION["user_email"], 0, strpos($_SESSION["user_email"], '@'));


            if (!isset($_SESSION['user_email'])) {
              echo " <button type='submit' class='btn btn-outline-success'><a class='nav-link' href='./user/user_login.php'>Login</a></button>
              
              </form>
                            </ul>
                        </div>
                    </div>
                </nav>
                            <nav class='navbar navbar-expand-lg navbar-dark bg-secondary'>
                            <ul class='navbar-nav me-auto'>
                              <li class='nav-item'>
                                <a href='#' class='nav-link'>Welcome Guest</a>
                              </li>
                            </ul>
                          </nav>";
            } else {
                            //username
            $user_ip = getIPAddress();
            $select_query_name = "select * from `user_table` where user_ip='$user_ip'";
            $result_name = mysqli_query($con, $select_query_name);
            $row_name = mysqli_fetch_assoc($result_name);
            $username = $row_name['username'];
              echo "
                            </form>
                            </ul>
                        </div>
                    </div>
                </nav>
                            <nav class='navbar navbar-expand-lg navbar-dark bg-secondary'>
                            <ul class='navbar-nav me-auto'>
                              <li class='nav-item'>
                                <a href='#' class='nav-link'>Welcome " . $username . "</a>
                              </li>
                              <li class='nav-item ms-2'>
                                <a href='./user/logout.php' class='nav-link'>Logout</a>
                              </li>
                            </ul>
                          </nav>";
            }

            ?>
                    </form>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- calling cart function -->
        <?php cart(); ?>


        <!--second child-->
        <div class="text-center bg-light mt-5 text-primary">
            <h1>Online Book Shop</h1>
        </div>


        <!-- third child cart-table -->
        <div class="container mt-5">
            <div class="row">
                <form action="" method="post">
                    <table class="table table-bordered text-center">
                            <!-- php code to display dynamic data  -->
                            <?php
                            $get_ip_address = getIPAddress();
                            $total_price = 0;
                            $cart_query = "Select * from `cart_details` where ip_address='$get_ip_address'";
                            $result = mysqli_query($con, $cart_query);
                            $result_count = mysqli_num_rows($result);
                            if ($result_count > 0) {
                                echo "                        <thead>
                                <tr>
                                    <th>Book Title</th>
                                    <th>Book Image</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Remove</th>
                                    <th colspan='2'>Operations</th>
                                </tr>
                             </thead> <tbody>";
                                while ($row = mysqli_fetch_array($result)) {
                                    $product_id = $row['product_id'];
                                    $select_products = "Select * from `products` where product_id=$product_id";
                                    $result_products = mysqli_query($con, $select_products);
                                    while ($row_product = mysqli_fetch_array($result_products)) {
                                        $product_price = array($row_product['product_price']);
                                        $product_title = $row_product['product_title'];
                                        $price_table = $row_product['product_price'];
                                        $product_image = $row_product['product_image'];
                                        $product_value = array_sum($product_price);
                                        $total_price += $product_value;



                            ?>
                                        <tr>
                                            <td> <?php echo "$product_title"; ?></td>
                                            <td><img src="./admin/product_images/<?php echo "$product_image"; ?>" alt="" class="cart_img"></td>
                                            <td><input type="text" name="qty" class="form-input w-50"></td>
                                            <?php
                                            // update cart
                                            $get_ip_address = getIPAddress();
                                            // echo $get_ip_address;
                                            if (isset($_POST['update_cart'])) {
                                                $quantities = $_POST['qty'];
                                                $update_cart = "update `cart_details` set quantity=$quantities where ip_address='$get_ip_address'";
                                                $result_update = mysqli_query($con, $update_cart);
                                                $total_price = $total_price * $quantities;
                                            }

                                            ?>
                                            <td><?php echo "$price_table"; ?></td>
                                            <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
                                            <td>
                                                <input type="submit" value="Update Cart" class="bg-info mx-3 px-3 py-2 border-0" name="update_cart">
                                                <input type="submit" value="Remove Cart" class="bg-info px-3 mx-3 py-2 border-0" name="remove_cart">
                                            </td>
                                        </tr>

                            <?php
                                    }
                                }
                            } else {
                                echo "<h2 class='text-center text-danger'>Cart is Empty</h2>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- subtotal  -->
                    <div class="d-flex mb-5">

                        <?php
                        $get_ip_address = getIPAddress();
                        // $total_price = 0;
                        $cart_query = "Select * from `cart_details` where ip_address='$get_ip_address'";
                        $result = mysqli_query($con, $cart_query);
                        $result_count = mysqli_num_rows($result);
                        if ($result_count > 0) {
                            echo "<h4 class='px-3'>Subtotal:<strong class='text-info'>$total_price /- </strong></h4>
                                <input type='submit' value='Continue Shopping' class='bg-info px-3 mx-3 py-2 border-0' name='continue_shopping'>                                
                                <button class='bg-secondary p-3 py-2 border-0'><a href='./user/checkout.php' class='text-light text-decoration-none'>Checkout</a></button>'";
                        } else {
                            echo "<input type='submit' value='Continue Shopping' class='bg-info px-3 mx-3 py-2 border-0' name='continue_shopping'>";
                        }
                        if (isset($_POST['continue_shopping'])) {
                            echo "<script>window.open('index.php','_self')</script>";
                        }
                        ?>
                    </div>
            </div>
        </div>
        </form>

        <!-- function to remove items -->
        <?php
        function remove_cart_item()
        {
            global $con;
            if (isset($_POST['remove_cart'])) {
                foreach ($_POST['removeitem'] as $remove_id) {
                    echo $remove_id;
                    $delete_query = "Delete from `cart_details` where product_id=$remove_id";
                    $run_delete = mysqli_query($con, $delete_query);
                    if ($run_delete) {
                        echo "<script>window.open('cart.php','_self')</script>";
                    }
                }
            }
        }
        $remove_item = remove_cart_item();
        echo $remove_item
        ?>

        <!--last child-->
        <?php include('./footer/footer.php') ?>



        <!-- bootstrap js link-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>