<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-danger">Edit Products</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline m-auto w-50 mb-4">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" id="product_title" name="product_title" class="form-control" required="required">
            </div>
            <div class="form-outline m-auto w-50 mb-4">
                <label for="product_desc" class="form-label">Product Description</label>
                <input type="text" id="product_desc" name="product_desc" class="form-control" required="required">
            </div>
            <div class="form-outline m-auto w-50 mb-4">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" id="product_keywords" name="product_keywords" class="form-control" required="required">
            </div>
            <div class="form-outline m-auto w-50 mb-4">
            <label for="product_category" class="form-label">Product Categories</label>
                <select name="product_category" class="form-select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-outline m-auto w-50 mb-4">
            <label for="product_subcategory" class="form-label">Product Sub-Categories</label>
                <select name="product_subcategory" class="form-select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-outline m-auto w-50 mb-4">
                <label for="product_image" class="form-label">Product Image</label>
                <div class="d-flex">
                <input type="file" id="product_image" name="product_image" class="form-control w-90 m-auto" required="required">
                <img src="./product_images/modern_php.jpg" alt="" class="product_img">
                </div>
            </div>
            <div class="form-outline m-auto w-50 mb-4">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" id="product_price" name="product_price" class="form-control" required="required">
            </div>
            <div class="m-auto w-50">
                <input type="submit" name="edit_product" class="btn btn-info px-3 mb-3" value="Update Product">
            </div>
        </form>
    </div>
</body>
</html>