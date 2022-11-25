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
          <div class="col-md-7 shadow-sm mx-auto mt-5">
           <h2 class='fs-3 text-center text-uppercase fw-bold'>Create New Treatment History</h2>
            <form action="processTreatment.php" method="post">
                <div class="row gap-2 mb-2">
                    <div class="col-md-3">
                        <label for="">Description Writeups</label>
                    </div>
                    <div class="col-md-3">
                        <textarea name="" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-primary">Save To Treatment History</button>
                    </div>
                </div>
                <div class="row gap-2 mb-2">
                    <div class="col-md-3">
                        <label for="">Drug Prescription</label>
                    </div>
                    <div class="col-md-3">
                        <textarea name="" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-primary">Submit To Pharmacy</button>
                    </div>
                </div>
                <div class="row gap-2 mb-2">
                    <div class="col-md-3">
                        <label for="">Symptoms</label>
                    </div>
                    <div class="col-md-3">
                        <textarea name="" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-primary">Save To Treatment History</button>
                    </div>
                </div>
                <div class="row gap-2 mb-2">
                    <div class="col-md-3">
                        <label for="">Injection Prescription</label>
                    </div>
                    <div class="col-md-3">
                        <textarea name="" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-primary">Submit To Nurse</button>
                    </div>
                </div>
                <div class="row gap-2 mb-2">
                    <div class="col-md-3">
                        <label for="">Document Laboratory Test</label>
                    </div>
                    <div class="col-md-3">
                        <textarea name="" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-primary">Submit To Laboratory Unit</button>
                    </div>
                </div>
            </form>
           </div>
        </div>
    </div>
</body>
</html>