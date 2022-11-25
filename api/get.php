<?php
require "classes/nurses.php";
$user = new Nurses();
$getAllUsers = $user->getAllNurses();
print_r($getAllUsers['result']);
//  echo json_encode($getAllUsers);
?>