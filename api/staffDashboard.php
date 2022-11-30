<?php
require "classes/nurses.php";
require "classes/patients.php";
require "classes/users.php";
require "classes/vital.php";
session_start();
if(isset($_SESSION['nurse_details'])){
    $nurse_id = $_SESSION['nurse_details'][0]['nurse_id'];
    $nurse = new Nurses();
    $patient = new Patients();
    $user = new Users();
    $vit = new Vitals();
    $insert = $nurse->getInfo($nurse_id);
    $nurses = $nurse->getAllNurses();
    $patients = $patient->getAllPatients();
    $docs = $nurse->getAllDocs();
    $getAllDepts = $user->getAllDept();
    $vits = $vit->getAllVitals();
    $allDept =$getAllDepts['result'];
    $resp=[];
    $pat_id;
    if ($insert) {
        $resp = $insert['result'][0];
        $allnurses = $nurses['result'];
        $alldocs = $docs['result'];
        $allpatients = $patients['result'];
        $allVitals = $vits['result'];
    } else {
        $resp['success'] = false;
    }
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
    <title>Document</title>
    <link rel="stylesheet" href="staffDash.css">
</head>
<body>
    <div class="container" id="blur">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                        <span class="title"><?php echo $resp['dept_name']." ".$resp['firstname'];?></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li onclick="togglePop()">
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Add Biodata</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                        <span class="title">Record for Vital Sign</span>
                    </a>
                </li>
                <li>
                    <a href="treatmentH.php">
                        <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                        <span class="title">Treatment History</span>
                    </a>
                </li>
                <li onclick="toggleCon()">
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Consultation</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">View Profile</span>
                    </a>
                </li>
                <li>
                <form action="signout.php" method="post">
                <button type="submit" class="bg" name="signout">
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </button>
                </form>
                </li>
            </ul>
        </div>
        <!-- main container -->
        <div class="main">
          <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <div class="search">
                <label for="">
                    <input type="search" name="" placeholder="Search Here" id="search">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <div class="user">
                <img src="images/<?php echo $resp['profilePic'];?>" alt="">
            </div>
          </div>
          <!-- card -->
          <div class="cardBox">
            <div class="card">
               <div>
                <div class="numbers">150</div>
                <div class="cardName">Patients</div>
               </div> 
               <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
               </div>
            </div>
            <div class="card">
                <div>
                 <div class="numbers">30</div>
                 <div class="cardName">Awaiting Vitals</div>
                </div> 
                <div class="iconBx">
                 <ion-icon name="cart-outline"></ion-icon>
                </div>
             </div>
             <div class="card">
                <div>
                 <div class="numbers">104</div>
                 <div class="cardName">Consultation</div>
                </div> 
                <div class="iconBx">
                 <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
             </div>
             <div class="card">
                <div>
                 <div class="numbers">10</div>
                 <div class="cardName">Biodata</div>
                </div> 
                <div class="iconBx">
                 <ion-icon name="cash-outline"></ion-icon>
                </div>
             </div>
          </div>

          <div class="details">
               <!-- list -->
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Biodata</h2>
                    <a href="#" class="btn">View All</a>
                </div>
                <table id="l">
                    <thead>
                      <tr>
                       <td>Name</td>
                       <td>Submitted By</td>
                       <td>Date</td>
                       <td>Patient ID</td>
                       <td>Status</td>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        for ($i=0; $i < count($allpatients); $i++) { 
                            echo "
                            <tr>
                        <td>{$allpatients[$i]['patient_name']}</td>
                        <td>{$allpatients[$i]['firstname']}</td>
                        <td>{$allpatients[$i]['date']}</td>
                        <td>{$allpatients[$i]['card_id']}</td>
                        <td>
                        <div class='dropdown'>
                        <form method='POST' action='addVital.php'>
                        <input type='hidden' name='pat_id' value='{$allpatients[$i]['pat_id']}'>
                        <input type='hidden' name='pat_name' value='{$allpatients[$i]['patient_name']}'>
                        <button class='tryit' type='submit' name='submit'>Vital</button>
                        </form>
                        <form method='POST' action='addInject.php'>
                        <input type='hidden' name='pat_id' value='{$allpatients[$i]['pat_id']}'>
                        <input type='hidden' name='pat_name' value='{$allpatients[$i]['patient_name']}'>
                        <button class='tryit'>Injection</button>
                        </form>
                       </div>
                      </td>
                      </tr>
                      ";
                    };   
                ?>
                    </tbody>
                </table>
            </div>
            <!-- new customer -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Vitals</h2>
                </div>
                <table>
                    <?php
                    for ($i=0; $i < count($allVitals); $i++) { 
                        echo "
                        <tr>
                        <td><div class='imgBx'>
                        <p>weight: {$allVitals[$i]['weight']}</p>
                        <p>height: {$allVitals[$i]['height']}</p>
                        </div></td>
                        <td><h4>{$allVitals[$i]['patient_name']}<br><span>By Nurse {$allVitals[$i]['firstname']}</span></h4></td>
                        </tr>
                        ";
                    }
                    ?>
                </table>
            </div>
           </div>
        </div>
    </div>
    <div id="popup">
        <a href="#" onclick="togglePop()">X</a>
        <h2>Add Patient Biodata</h2>
       <form action="addRecord.php" method="post">
       <div class="form_group">
        <input type="input" name="card_id" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Patient Card ID</label>
        </div>
        <div class="form_group">
        <input type="input" name="patient_name" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Patient Name</label>
        </div>
        <div class="form_group">
        <input type="input" name="address" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Address</label>
        </div>
        <div class="form_group">
        <input type="input" name="age" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Age</label>
        </div>
        <div class="form_group">
        <input type="input" name="phoneNo" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Phone Number</label>
        </div>
        <div class="form_group">
        <input type="input" name="marital_status" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Marital Status</label>
        </div>
        <div class="form_group">
        <input type="input" name="blood_group" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Blood Group/Genotype</label>
        </div>
        <div class="form_group">
        <input type="input" name="nationality" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Nationality</label>
        </div>
        <div class="form_group">
        <input type="date" name="date" placeholder="Name" class="form_field">
        <input type="hidden" name="rec_id" value="<?php echo $resp['nurse_id'];?>">
        </div>
        <div class="form_group">
            <select name="nurse_id" id="" class="select">
                <option value="">Nurses Available</option>
                <?php
                for ($i=0; $i < count($allnurses); $i++) { 
                        echo "
                        <option value='{$allnurses[$i]['nurse_id']}'>{$allnurses[$i]['firstname']}</option>
                        ";
                    };   
                ?>
            </select>
        </div>
        <button class="btn" type="submit" name="submit">Continue</button>
       </form>
    </div>
    <div id="conup">
        <a href="#" onclick="toggleCon()">X</a>
        <h2>Create New Consultation</h2>
       <form action="consultation.php" method="post">
       <div class="form_group">
        <input type="input" name="card_id" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Patient Card ID</label>
        </div>
        <div class="form_group">
        <input type="date" name="date" placeholder="Name" class="form_field">
        <input type="hidden" name="doc_id" value="<?php echo $resp['nurse_id'];?>">
        <div class="form_group">
        <input type="input" name="referred" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Consultant referred</label>
        </div>
        <div class="form_group">
            <select name="dept_id" id="" class="select">
                <option value="">Appointed Departments</option>
                <?php
                 for ($i=0; $i < count($allDept); $i++) { 
                         echo "
                         <option value='{$allDept[$i]['dept_id']}'>{$allDept[$i]['dept_name']}</option>
                         ";
                     };   
                 ?>
            </select>
        <div class="form_group">
        <input type="input" name="app_desc" placeholder="Name" class="form_field">
        <label for="name" class="form_label">Appointment Description</label>
        </div>
        </div>
        <button class="btn mt" type="submit" name="submit">Save</button>
       </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
       let toggle = document.querySelector('.toggle');
       let navigation = document.querySelector('.navigation');
       let main = document.querySelector('.main');
       var blur= document.getElementById('blur');
       var popup= document.getElementById('popup');
       var conup= document.getElementById('conup');
       function togglePop(){
            blur.classList.toggle('active');
            popup.classList.toggle('active');
        }
        function toggleCon(){
            blur.classList.toggle('active');
            conup.classList.toggle('active');
        }
       toggle.onclick = function(){
        navigation.classList.toggle('active')
        main.classList.toggle('active')
       }

       let list = document.querySelectorAll('.navigation li');
       function activeLink(){
        list.forEach((item)=>
        item.classList.remove('hovered'));
        this.classList.add('hovered')
       } 
       list.forEach((item)=>
       item.addEventListener('mouseover',activeLink));
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script> 
     $(document).ready(function(){
         $("#search").on("keyup", function () {
             var value =$(this).val().toLowerCase();
             $ ("#l tr").filter(function(){
                 $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
             });
         });
     });
 </script>
</body>
</html>