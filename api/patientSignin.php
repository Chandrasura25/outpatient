<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="patient.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>
    <div class="container">
        <header>Signin Form</header>
        <div class="form-outer">
            <form action="processPatientSignin.php" method="POST">
                <div class="page slidepage">
                    <div class="title">Login Details:</div>
                    <div class="field">
                        <div class="label">Email Address</div>
                        <input type="email" name="email" id="">
                    </div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input type="password" name="password" id="">
                    </div>
                    <div class="field nextBtn">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>