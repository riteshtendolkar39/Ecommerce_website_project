<?php
include('./include/connect.php');

//displaying products
function getproducts()
{
  global $con;

  // condition to check isset or not
  if (!isset($_GET['category'])) {
    if (!isset($_GET['sub-category'])) {
      $select_query = "select * from `products` order by rand() limit 0,3";
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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
        </div>
      </div>
    </div>";
      }
    }
  }
}


//getting all products
function get_all_products()
{
  global $con;

  // condition to check isset or not
  if (!isset($_GET['category'])) {
    if (!isset($_GET['sub-category'])) {
      $select_query = "select * from `products` order by rand()";
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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
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
  if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    $select_query = "select * from `products` where category_id=$category_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
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
  if (isset($_GET['sub-category'])) {
    $category_id = $_GET['sub-category'];
    $select_query = "select * from `products` where subcat_id=$category_id";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No stock available for this sub-category</h2>";
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
          <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
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
function search_products()
{
  global $con;
  if (isset($_GET['search_data_product'])) {
    $search_data_value = $_GET['search_data'];
    $search_query = "Select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='text-center text-danger'>No results match<br>No products found on this category!</h2>";
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
        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
        </div>
    </div>
  </div>";
    }
  }
}

// view product details based on category
function view()
{
  // global $con;
  // if (isset($_GET['product_id'])) {
  //   $product_id = $_GET['product_id'];

  //   // First, get the category of the product
  //   $select_query = "SELECT category_id FROM `products` WHERE product_id = $product_id";
  //   $result = $con->query($select_query);

  //   if ($result->num_rows > 0) {
  //     // Fetch the category_id
  //     $row = $result->fetch_assoc();
  //     $category_id = $row["category_id"];

  //     // Now, get the related products from the same category
  //     $sql = "SELECT * FROM `products` WHERE category_id = $category_id AND product_id != $product_id";
  //     $result = $con->query($sql);

  //     if ($result->num_rows > 0) {
  //       // Output data of each row
  //       while ($row = $result->fetch_assoc()) {
  //         $product_title = $row['product_title'];
  //         $product_description = $row['product_description'];
  //         $product_author = $row['product_author'];
  //         $product_image = $row['product_image'];
  //         $product_price = $row['product_price'];
  //         echo "        <div class='col-md-4 mb-2'>
  //           <div class='card' style='width: 18rem;'>
  //             <img src='./admin/product_images/$product_image' class='card-img-top' alt'...'>
  //             <div class='card-body'>
  //               <h5 class='card-title'>$product_title</h5>
  //               <p class='card-text'>$product_description</p>
  //               <p class='card-text'>Price: $product_price</p>
  //               <p class='card-text'>By: $product_author</p>
  //               <a href='#' class='btn btn-info'>Add to cart</a>
  //               <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
  //             </div>
  //           </div>
  //         </div>";
  //       }
  //     } else {
  //       echo "No related products found.";
  //     }
  //   } else {
  //     echo "No product found with product_id: $product_id";
  //   }

  //   $con->close();
  // }
}





//view details based on product_id
function view_details()
{
  global $con;
  if (isset($_GET['product_id'])) {
    if (!isset($_GET['category'])) {
      if (!isset($_GET['sub-category'])) {
        $product_id = $_GET['product_id'];
        $select_query = "select * from `products` where product_id=$product_id";
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
          echo "                <div class='row'>
          <div class='col-md-4'>
              <!-- card -->
              <div class='row g-0 bg-body-secondary position-relative'>
                  <div class='col-md-6 mb-md-0 p-md-4'>
                      <img src='./admin/product_images/$product_image' class='w-100' alt='...'>
                  </div>
                  <div class='col-md-6 p-4 ps-md-0'>
                      <h5 class='mt-0'>$product_title</h5>
                      <p>$product_description</p>
                      <p>Price: $product_price</p>
                      <p>By: $product_author</p>
                      <a href='#' class='btn btn-info'>Add to cart</a>
                      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Go Home</a>
                  </div>
              </div>
          </div>";
        }
      }
    }
  }
}

//view related product based on category and subcategory
function view_related()
{
  // Database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mystore";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Assume product_id is 1
  if (isset($_GET['product_id'])) {
    $product_id = intval($_GET['product_id']);

    // Fetch category_id and subcat_id
    $sql = "SELECT category_id, subcat_id FROM `products` WHERE product_id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Fetch the category_id and subcat_id
      $row = $result->fetch_assoc();
      $category_id = $row["category_id"];
      $subcategory_id = $row["subcat_id"];

      // Fetch related products
      $sql = "SELECT product_id, product_title, product_description, product_author, product_image, product_price FROM `products` WHERE (category_id = $category_id OR subcat_id = $subcategory_id) AND product_id != $product_id";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
          echo "<div class='col-md-8'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <h4 class='text-center text-info mb-5'>Related Products</h4>
                            </div>
                            <div class='col-md-6'>
                                <div class='card' style='width: 18rem;'>
                                    <img src='./admin/product_images/" . $row["product_image"] . "' class='card-img-top' alt='...'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>" . $row["product_title"] . "</h5>
                                        <p class='card-text'>" . $row["product_description"] . "</p>
                                        <p class='card-text'>Price: " . $row["product_price"] . "</p>
                                        <p class='card-text'>By: " . $row["product_author"] . "</p>
                                        <a href='#' class='btn btn-info'>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>";
        }
      } else {
        echo "No related products found.";
      }
    } else {
      echo "Product not found.";
    }
  }

  // Close connection
  $conn->close();
}

function view_detail()
{
  global $con;
  // condition to check isset or not
  if(isset($_GET['product_id']))
  {
    if(!isset($_GET['category']))
    {
        if(!isset($_GET['subcategory']))
        {
          $product_id=$_GET['product_id'];
          $select_query="select * from `products` where product_id=$product_id";
          $result_query=mysqli_query($con,$select_query);
          while($row=mysqli_fetch_assoc($result_query))
          {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_author = $row['product_author'];
            $product_image = $row['product_image'];
            $product_price = $row['product_price'];
            $category_id = $row['category_id'];
            $subcat_id = $row['subcat_id'];
            echo "                <div class='row'>
            <div class='col-md-4'>
                <!-- card -->
                <div class='row g-0 bg-body-secondary position-relative'>
                    <div class='col-md-6 mb-md-0 p-md-4 '>
                        <img src='./admin/product_images/$product_image' class='w-100' alt='...'>
                    </div>
                    <div class='col-md-6 p-4 ps-md-0'>
                        <h5 class='mt-0'>$product_title</h5>
                        <p>$product_description</p>
                        <p>Price: $product_price</p>
                        <p>By: $product_author</p>
                        <a href='#' class='btn btn-info'>Add to cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>Go Home</a>
                    </div>
                </div>
            </div>";

            echo "<div class='col-md-7'>
            <!-- related card -->
            <div class='row'>
                <div class='col-md-12'>
                    <h4 class='text-center mt-1 text-info mb-5'>Related Products</h4>
                </div>";
              if(isset($_GET['product_id']))
              {
                $product_id=intval($_GET['product_id']);
                $select_query="select category_id,subcat_id from `products` where product_id=$product_id ";
                $result_query=mysqli_query($con,$select_query);
                $num_of_rows=mysqli_num_rows($result_query);
                // echo " <h4 class='text-center mt-1 text-info'>Related Products</h4>";
                if($num_of_rows>0)
                {
                  $row=mysqli_fetch_assoc($result_query);
                  $category_id=$row['category_id'];
                  $subcategory_id=$row['subcat_id'];

                  //related products
                  $select_query="select * from `products` where (category_id=$category_id OR subcat_id=$subcategory_id ) AND product_id!=$product_id order by rand() limit 0,2 ";
                  $result_query=mysqli_query($con,$select_query);

                  if($num_of_rows>0)
                  {
                    while($row=mysqli_fetch_assoc($result_query))
                      {
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_author=$row['product_author'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        $category_id=$row['category_id'];
                        $subcategory_id=$row['subcat_id'];
                        echo "
                        <div class='col-md-6 mb-3'>
                        <div class='card' style='width: 18rem;' >
                          <img src='./admin/product_images/$product_image' class='card-img-top' alt='$product_title'>
                          <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_author</p>
                            <a href='#' class='btn btn-info'>Add to cart</a>
                            <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                          </div>
                        </div>
                      </div>";
                      }
                  }
                }
              }
              echo "</div></div>";
          }
        }
    }
  }
}
?>