<?php
require "classes/vital.php";
session_start();
if(isset($_SESSION['nurse_details'])){
    $vit = new Vitals();
    $vits = $vit->getAllVitals();
    $allVitals = $vits['result'];
}
else{
    header('Location: nurseSignin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Treatment History</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-3 mb-5 fw-bold text-uppercase display-5"><u>Available Record of Vital Sign</u></h3>
        <div class="table-responsive-sm mt-4">
            <table class="table table-hover table-border">
                    <thead>
                      <th> <b>Weight(Kg)</b></th>
                      <th><b>Height(m)</b></th>
                      <th><b>Blood pressure(mmHg)</b></th>
                      <th><b>Pulse Rate(b/m)</b></th>
                      <th><b>Patient Names</b></th>
                      <th><b>Nurses</b></th>
                    </thead>
                  <tbody>
                  <?php
                    for ($i=0; $i < count($allVitals); $i++) { 
                        echo "
                        <tr>
                        <td>{$allVitals[$i]['weight']}</td>
                        <td>{$allVitals[$i]['height']}</td>
                        <td>{$allVitals[$i]['blood_pressure']}</td>
                        <td>{$allVitals[$i]['temp']}</td>
                        <td>{$allVitals[$i]['patient_name']}</td>
                        <td>By Nurse {$allVitals[$i]['firstname']}</td>
                        </tr>
                        ";
                    }
                    ?>
                  </tbody>
            </table>
          </div>
    </div>
</body>