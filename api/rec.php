<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Laboratory test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center mt-5 mb-4"><u>Upload Test Result</u></h3>
            <form action="">
                <div class="form-group-row col-md-3 mb-3">
                    <input type="file" class="form-control-file border" name="file" required>
                </div>
                <div class="form-group-row col-md-3 mb-3">
                        <label for="testcat">Lab test categories:</label>
                        <select selected id="testcat" class="form-control" required>
                        <option selected value="" required>Choose...</option>
                        <option value="full blood count">Full blood count</option>
                        <option value="liver functioning test">Liver functioning test</option>
                        <option value="fasting blood count">Fasting blood count</option>
                        <option value="RSV">RSV</option>
                        <option value="Hbtest">Hbtest</option>
                        <option value="ultrasound">Ultrasound</option>
                        <option value="chest x-ray">Chest x-ray</option>
                        <option value="widal test">Widal test</option>
                       </select>
                </div>
                <div class="form-group-row col-md-6 mb-3">
                    <label for="scr">Scientist comment and recommendation:</label>
                    <textarea name="" id="scr" cols="30" rows="6" class="form-control"></textarea>
                </div>
                
                <div class="form-group-row col-md-3 mb-3">
                    <label for="docDuty">Doctor on duty:</label>
                    <select selected id="docDuty" class="form-control" required>
                    <option selected value="" required>Choose...</option>
                    <option value="Doctor 1">Doctor 1</option>
                    <option value="Doctor 2">Doctor 2</option>
                    <option value="Doctor 3">Doctor 3</option>
                   </select>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <a href="staffDashboard.php" class="text-decoration-none">
                    <button type="cancelled" type="button" class="btn btn-danger">Cancelled</button></a>
                </div>
        </form>
    </div>
</body>

