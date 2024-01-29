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
        <h1 class="text-center">User Login</h1>
        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-12 col-xl-6">
                <!-- form -->
                <form action="" method="post">
                    <!-- email field -->
                    <div class="form-outline mb-4">
                        <label for="user_email" class="form-label">User Email</label>
                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter your email" autocomplete="off" required="required" />
                    </div>
                    <!-- password field -->
                    <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter your Password " autocomplete="off" required="required">
                    </div>
                    <!-- submit -->
                    <div class="mt-4 pt-2">
                        <input type="submit" class="bg-info py-2 px-3 border-0" name="user_login" value="Login">
                        <p class="small mt-2 pt-1 fw-bold mb-0">Don't have an account?<a class="text-danger"href="user_registration.php"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<!-- php code -->
<?php 

?>