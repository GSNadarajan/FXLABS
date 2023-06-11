<?php

// include "core/libs/load.php";
include "../core/libs/load.php";
Session::start();

// print_r($_POST);
$reg_no = $_POST['reg_no'];


Session::set('reg_no',$reg_no);


$user_name = unique::getNameBasedId('',$reg_no);

if($user_name){
    echo json_encode($user_name);

}
else{
    echo json_encode([
        ["name" => "user not found !"]
    ]);
}
    ?>



