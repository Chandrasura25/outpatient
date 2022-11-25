<?php
require "classes/users.php";
$user = new Users();
$getAllDepts = $user->getAllDept();
$allDept =$getAllDepts['result'];
?>
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
            <div class="col-8 mx-auto shadow-sm mt-5 rounded">
                <div class="row justify-space-between gap-5 bg-light">
                    <div class="col-md-4 bg-info bg">
                    </div>
                    <div class="col-md-6">
                        <div class="mx-auto mt-4">
                            <form action="processNurseSignup.php" method="post" enctype="multipart/form-data">
                            <h4 class="display-6 text-center text-uppercase fw-bold">Staff Registration Form</h4>
                            <div class="d-flex gap-2">
                                <div>
                                    <label for="" class="text-uppercase">Firstname</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>
                                <div>
                                   <label for="" class="text-uppercase">Lastname</label>
                                    <input type="text" name="lastname" class="form-control">
                                </div>
                            </div>
                            <div class="my-3">
                                <div>
                                    <label for="" class="text-uppercase">Department</label>
                                    <select name="dept_id" id="" class="form-select">
                                        <option value="">Department</option>
                                      <?php
                                      for ($i=0; $i < count($allDept); $i++) { 
                                              echo "
                                              <option value='{$allDept[$i]['dept_id']}'>{$allDept[$i]['dept_name']}</option>
                                              ";
                                          };   
                                      ?>
                                      </select>
                                </div>
                            </div>
                            <div class="d-flex gap-2 my-3 down">
                                <div>
                                    <label for="" class="text-uppercase">Email Address</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div>
                                   <label for="" class="text-uppercase">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="my-3">
                                <div>
                                    <label for="" class="text-uppercase">Profile Picture</label>
                                    <input type="file" name="myFile" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex gap-2 my-3 down">
                                <div>
                                    <label for="" class="text-uppercase">Phone Number</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>
                                <div>
                                   <label for="" class="text-uppercase">Address</label>
                                   <input type="text" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="d-flex my-2 justify-content-between down">
                                <p class="signup text-uppercase">Already have an account? <a href="nurseSignin.php" class="text-decoration-none">Sign In.</a></p>
                                <button class="btn btn-info text-light" type="submit" name="submit">Register</button>
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
