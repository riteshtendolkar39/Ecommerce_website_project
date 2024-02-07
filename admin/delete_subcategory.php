<?php
if(isset($_GET['delete_subcategory'])){
    $delete_subcategory=$_GET['delete_subcategory'];

    $delete_query="delete from `subcat` where subcat_id=$delete_subcategory";
    $result=mysqli_query($con,$delete_query);
    if($result){
        echo "<script>alert('Sub-Category is been deleted successfully')</script>";
        echo "<script>window.open('./index.php?view_subcat','_self')</script>";
    }
}
?>