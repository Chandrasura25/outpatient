<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="nurse.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 mx-auto shadow-sm mt-5 rounded">
                <div class="row justify-space-between gap-5 bg-light mt-5">
                    <div class="col-md-5 bg">
                    </div>
                    <div class="col-md-6">
                        <div class="mx-auto mt-4">
                            <form action="processNurseSignin.php" method="post">
                            <h4 class="display-6 text-center text-uppercase fw-bold">Staff Signin Form</h4>
                            <div class="my-3">
                                <div>
                                    <label for="" class="text-uppercase">Email Address</label>
                                    <input type="email"  name="email" class="form-control">
                                </div>
                            </div>
                            <div class="my-3">
                                <div>
                                   <label for="" class="text-uppercase">Password</label>
                                    <input type="password"  name="password" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex my-2 justify-content-between">
                                <p class="signup text-uppercase">Don't have an account? <a href="nurseSignup.php" class="text-decoration-none">Sign Up.</a></p>
                            </div>
                            <div class="d-flex justify-content-end my-2">
                                <button class="btn btn-success text-light" name="submit" type="submit">Login</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
