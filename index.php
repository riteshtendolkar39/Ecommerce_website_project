<?php
include('include/connect.php');
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
</head>

<body>
  <!-- navbar-->
  <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg bg-info">
      <div class="container-fluid">
        <img src="./images/logo.jpg" alt="" class="logo">
        <a class="navbar-brand" href="#">Books</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total Price:100/-</a>
            </li>

          </ul>
          <form class="d-flex" role="login">
            <a class="nav-link disabled" aria-disabled="true">
              <button class="btn btn-outline-success" type="submit">Login</button></a>
          </form>
          </ul>
        </div>
      </div>
    </nav>


    <!--second child-->
    <div class="title">
      <h1>If you want to make intelligent, get books from here</h1>
      <p>Shop now!</p>
    </div>


    <!--third child-->
    <!--products-->
    <div class="row mt-5">
      <div class="col-md-2 bg-secondary  p-0">
        <!-- category -->
        <ul class="navbar-nav  me-auto text-center ">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light ">
              <h4>Categories</h4>
            </a>
          </li>
          <?php
          $select_category = "select * from `categories`";
          $result_category = mysqli_query($con, $select_category);
          while ($row_data = mysqli_fetch_assoc($result_category)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<li class='nav-item'>
            <a href='index.php?category=$category_id' class='nav-link text-light '>$category_title</a>
              </li>";
          }
          ?>
        </ul>
        <!-- sub-categories -->
        <ul class="navbar-nav  me-auto text-center ">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light ">
              <h4>Sub Categories</h4>
            </a>
          </li>
          <?php
          $select_subcat = "select * from `subcat`";
          $result_subcat = mysqli_query($con, $select_subcat);
          while ($row_data = mysqli_fetch_assoc($result_subcat)) {
            $subcat_title = $row_data['subcat_title'];
            $subcat_id = $row_data['subcat_id'];
            echo "<li class='nav-item'>
            <a href='index.php?sub-category=$subcat_id' class='nav-link text-light '>$subcat_title</a>
            </li>";
          }
          ?>
        </ul>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-3 mt-3 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_3/english_grammar.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">Modern PHP: New Features and Good Practices</h5>
                <p class="card-text">Price:3,500</p>
                <p class="card-text">By: Josh Lockhart</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_2/modern_php.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">English Grammar for Dummies</h5>
                <p class="card-text">Price:2,000</p>
                <p class="card-text">By: Geraldine Woods</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_4/english_dummies.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">The Joy of PHP: A Beginner's Guide to Programming</h5>
                <p class="card-text">Price:2,500</p>
                <p class="card-text">By: Alan Forbes</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-3 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_4/english_dummies.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">The Joy of PHP: A Beginner's Guide to Programming</h5>
                <p class="card-text">Price:2,500</p>
                <p class="card-text">By: Alan Forbes</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_1/the_joy_of_php.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">English Grammar in Use</h5>
                <p class="card-text">Price:2,500</p>
                <p class="card-text">By: Raymond Murphy, Surai Pongtongcharoen</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mt-2 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_1/the_joy_of_php.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">English Grammar in Use</h5>
                <p class="card-text">Price:2,500</p>
                <p class="card-text">By: Raymond Murphy, Surai Pongtongcharoen</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_1/the_joy_of_php.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">English Grammar in Use</h5>
                <p class="card-text">Price:2,500</p>
                <p class="card-text">By: Raymond Murphy, Surai Pongtongcharoen</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-2">
            <div class="card" style="width: 18rem;">
              <img src="./images/product_1/the_joy_of_php.jpg" class="card-img-top w-100 book-cover" alt="...">
              <div class="card-body">
                <h5 class="card-title">English Grammar in Use</h5>
                <p class="card-text">Price:2,500</p>
                <p class="card-text">By: Raymond Murphy, Surai Pongtongcharoen</p>
                <a href="#" class="btn btn-primary">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--last child-->
    <div class="bg-info text-center p-3">
      <p>Copyright © Books 2024 Developed By: Ritesh & Vinod</p>
    </div>
  </div>



  <!-- bootstrap js link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>