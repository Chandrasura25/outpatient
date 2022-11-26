<?php
require "classes/users.php";
require "classes/nurses.php";
session_start();
if(isset($_SESSION['user_details'])){
    $user_id = $_SESSION['user_details'][0]['user_id'];
    $user = new Users();
    $staffs= new Nurses();
    $insert = $user->getInfo($user_id);
    $all = $staffs->getAllStaffs();
    $resp=[];
    if ($insert) {
        $resp = $insert['result'][0];
        $allstaffs =$all['result'];
    } else {
        $resp['success'] = false;
    }
}
else{
    header('Location: signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="patientDash.css">
</head>
<body>
   <div class="container">
   <header>
        <a href="#" class="logo"><img src="./assets/logo.png" alt=""></a>
        <div class="toggle">
            <i class="name"><?php echo $resp['username'];?></i>
        </div>
    </header>
    <div class="slider">
        <div class="slide slide1">
            <div class="caption">
                <h2>Slide1</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum veritatis culpa iure. Aut sed eos, blanditiis recusandae excepturi doloribus quia quod voluptas rem. Doloremque dicta ipsam saepe eaque soluta cupiditate!</p>
            </div>
        </div>
        <div class="slide slide2">
            <div class="caption">
                <h2>Slide2</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum veritatis culpa iure. Aut sed eos, blanditiis recusandae excepturi doloribus quia quod voluptas rem. Doloremque dicta ipsam saepe eaque soluta cupiditate!</p>
            </div>
        </div>
        <div class="slide slide3">
            <div class="caption">
                <h2>Slide3</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum veritatis culpa iure. Aut sed eos, blanditiis recusandae excepturi doloribus quia quod voluptas rem. Doloremque dicta ipsam saepe eaque soluta cupiditate!</p>
            </div>
        </div>
        <div class="slide slide4">
            <div class="caption">
                <h2>Slide4</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum veritatis culpa iure. Aut sed eos, blanditiis recusandae excepturi doloribus quia quod voluptas rem. Doloremque dicta ipsam saepe eaque soluta cupiditate!</p>
            </div>
        </div>
        <div class="slide slide1">
            <div class="caption">
                <h2>Slide1</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum veritatis culpa iure. Aut sed eos, blanditiis recusandae excepturi doloribus quia quod voluptas rem. Doloremque dicta ipsam saepe eaque soluta cupiditate!</p>
            </div>
        </div>
    </div>
    <div class="available">
        <div class="row"> 
            <?php
            for ($i=0; $i < count($allstaffs); $i++) { 
              echo "
              <div class='card'>
              <div class='imgBx'>
                 <img src='images/{$allstaffs[$i]['profilePic']}' alt=''>
              </div>
              <div class='content'>
                 <div class='details'>
                   <h2>{$allstaffs[$i]['firstname']} {$allstaffs[$i]['lastname']}<br><span>{$allstaffs[$i]['dept_name']}</span></h2>  
                   
                 </div>
              </div>
             </div>";
            }
            ?>
        </div>
    </div>
   </div> 
</body>
</html>