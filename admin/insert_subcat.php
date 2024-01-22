<?php
include('../include/connect.php');
if (isset($_POST['insert_subcat'])) {
    $subcategory_title = $_POST['subcat_title'];

    //select data from database
    $select_query = "select * from `subcat` where subcat_title='$subcategory_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('This sub category is present inside the database')</script>";
    } else {
        $insert_query = "insert into `subcat` (subcat_title) values ('$subcategory_title')";
        $result = mysqli_query($con, $insert_query);
        if ($result) {
            echo "<script>alert('Sub-Category has been inserted successfully')</script>";
        }
    }
}
?>
<h2 class="text-center">Insert Sub-Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="subcat_title" placeholder="Insert Sub-Categories">
    </div>
    <div class="input-group w-10 mb-2">
        <input type="submit" class="bg-info p-2 my-3 border-0" name="insert_subcat" value="Insert Sub-Categories">
    </div>
</form>