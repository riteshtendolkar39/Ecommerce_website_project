<?php
include('./include/connect.php');

//displaying products
function getproducts()
{
    global $con;
    $select_query = "select * from `products` order by rand() limit 0,5";
    $result_query = mysqli_query($con, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_author = $row['product_author'];
        $product_image = $row['product_image'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $subcat_id = $row['subcat_id'];
        echo "        <div class='col-md-4 mb-2'>
      <div class='card' style='width: 18rem;'>
        <img src='./admin/product_images/$product_image' class='card-img-top' alt'...'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <p class='card-text'>Price: $product_price</p>
          <p class='card-text'>By: $product_author</p>
          <a href='#' class='btn btn-info'>Add to cart</a>
          <a href='#' class='btn btn-secondary'>View more</a>
        </div>
      </div>
    </div>";
    }
}
//display categories in sidenav
function getcategories()
{
    global $con;
    $select_category = "select * from `categories`";
    $result_category = mysqli_query($con, $select_category);
    while ($row_data = mysqli_fetch_assoc($result_category)) {
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<li class='nav-item'>
          <a href='index.php?category=$category_id' class='nav-link text-light '>$category_title</a>
            </li>";
    }
}
//display subcategories in sidenav
function getsubcategories()
{
    global $con;
    $select_subcat = "select * from `subcat`";
    $result_subcat = mysqli_query($con, $select_subcat);
    while ($row_data = mysqli_fetch_assoc($result_subcat)) {
        $subcat_title = $row_data['subcat_title'];
        $subcat_id = $row_data['subcat_id'];
        echo "<li class='nav-item'>
          <a href='index.php?sub-category=$subcat_id' class='nav-link text-light '>$subcat_title</a>
          </li>";
    }
}
?>