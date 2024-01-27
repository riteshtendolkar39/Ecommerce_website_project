<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--css files-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid my-3">
        <h1 class="text-center">New User Registration</h1>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <!-- form -->
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username fields -->
                    <div class="form-outline mb-4">
                        <label for="user_username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="user_username" id="user_username" placeholder="Enter your username" autocomplete="off" required="required" />
                    </div>
                    <!-- email field -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">User Email</label>
                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter your email" autocomplete="off" required="required" />
                    </div>
                    <!-- image field -->
                    <div class="form-outline mb-4">
                        <label for="user_image" class="form-label">User image</label>
                        <input type="file" class="form-control" name="user_image" id="user_image" required="required" />
                    </div>
                    <!-- password field -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter your Password " autocomplete="off" required="required">
                    </div>
                    <!-- confirm password field -->
                    <div class="form-outline mb-4">
                        <label for="conf_user_password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="conf_user_password" id="conf_user_password" placeholder="Enter your confirm Password " autocomplete="off" required="required">
                    </div>

                    <!-- address field -->
                    <div class="form-outline mb-4">
                        <label for="user_address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="user_address" id="user_address" placeholder="Enter your address" autocomplete="off" required="required">
                    </div>
                    <!-- contact field -->
                    <div class="form-outline mb-4">
                        <label for="user_contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" name="user_contact" id="user_contact" placeholder="Enter your mobile number" autocomplete="off" required="required">
                    </div>

                    <!-- submit -->
                    <div class="mt-4 pt-2">
                        <input type="submit" class="bg-info py-2 px-3 border-0" name="user_register" value="Register">
                        <p class="small mt-2 pt-1 fw-bold mb-0">Already have an account?<a class="text-danger"href="user_login.php"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>