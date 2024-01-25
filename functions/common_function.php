<?php
include('./include/connect.php');

//displaying products
function getproducts()
{
    global $con;

    // condition to check isset or not
    if(!isset($_GET['category'])){
    if(!isset($_GET['sub-category'])){
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
}
}

//getting unique categories
function get_unqiue_category()
{
    global $con;

    // condition to check isset or not
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];
    $select_query = "select * from `products` where category_id=$category_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
        echo"<h2 class='text-center text-danger'>No stock for this category</h2>";
    }

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
}

//getting unique sub-categories
function get_unqiue_subcategory()
{
    global $con;

    // condition to check isset or not
    if(isset($_GET['sub-category'])){
        $category_id=$_GET['sub-category'];
    $select_query = "select * from `products` where subcat_id=$category_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows=mysqli_num_rows($result_query);
    if($num_of_rows==0)
    {
        echo"<h2 class='text-center text-danger'>No stock available for this sub-category</h2>";
    }

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

//searching products
function search_products(){
  global $con;
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
  $search_query="Select * from `products` where product_keywords like '%$search_data_value%'";
  $result_query = mysqli_query($con, $search_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0)
  {
      echo"<h2 class='text-center text-danger'>No results match<br>No products found on this category!</h2>";
  }
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
}
?>