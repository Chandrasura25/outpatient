<?php
require "classes/nurses.php";
session_start();
if(isset($_SESSION['nurse_details'])){
    $nurse_id = $_SESSION['nurse_details'][0]['nurse_id'];
    $nurse = new Nurses();
    $docs = $nurse->getAllDocs();
        $alldocs = $docs['result'];
        $p_name = $_POST['pat_name'];
        $p_id = $_POST['pat_id'];
    
}
else{
    header('Location: nurseSignup.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
         <div class="col-md-6 shadow-sm mx-auto mt-5">
        <h2 class='display-6 text-center text-uppercase fw-bold'><?php echo $p_name;?> Injection Prescription</h2>
       <form action="processInject.php" method="post">
        <div class="row mb-2">
            <div class="col-md-4">
                <label for="">Doctor Injection Prescription</label>
            </div>
            <div class="col-md-8">
                <input type="input" name="description" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4">
                <textarea name="comment" id="" class='form-control'></textarea>
            </div>
            <div class="col-md-8">
            <label for="" class="display-6">Acknowledge comment</label>
            </div>
        </div>
        <input type="hidden" name="rec_id" value="<?php echo $nurse_id?>">
        <input type="hidden" name="p_id" value="<?php echo $p_id?>">
        <div class="d-flex gap-5">
         <a href='staffDashboard.php' class="btn btn-danger my-2 text-decoration-none" type="submit" name="cancel">Cancel</a>
         <button class="btn btn-success my-2" type="submit" name="submit">Save</button>
        </div>
       </form>
            </div>
        </div>
    </div>
</body>
</html>