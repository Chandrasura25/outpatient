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
          <div>
        <h2 class='display-6 text-center text-uppercase fw-bold'>Add <?php echo $p_name;?> Vital Signs</h2>
       <form action="processAddVital.php" method="post">
        <input type="input" name="weight" placeholder="Weight" class="form-control mb-2">
        <input type="input" name="height" placeholder="Height" class="form-control mb-2">
        <input type="input" name="Temp" placeholder="Temp" class="form-control mb-2">
        <input type="input" name="blood_pressure" placeholder="Blood Pressure" class="form-control mb-2">
        <input type="input" name="pulse_rate" placeholder="Pulse Rate" class="form-control mb-2">
        <input type="date" name="date" placeholder="Name" class="form-control mb-2">
        <input type="hidden" name="rec_id" value="<?php echo $nurse_id?>">
        <input type="hidden" name="pat_id" value="<?php echo $p_id?>">
            <select name="doc_id" id="" class="form-select">
                <option value="">Doctors Available</option>
                <?php
                for ($i=0; $i < count($alldocs); $i++) { 
                        echo "
                        <option value='{$alldocs[$i]['nurse_id']}'>{$alldocs[$i]['firstname']}</option>
                        ";
                    };   
                ?>
            </select>
        </div>
        <button class="btn btn-success my-2" type="submit" name="submit">Continue</button>
       </form>
    </div>
            </div>
        </div>
    </div>
</body>
</html>