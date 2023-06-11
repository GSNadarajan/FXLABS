<?php

include "core/libs/load.php";
Session::start();

// print_r($_POST);
$id_one = $_POST['id_1'];
$id_two = $_POST['id_2'];
$id_three = $_POST['id_3'];


// Session::set('member1_id',$id);



$data = [];
$filter_name = unique::get_distinctdata();
foreach($filter_name as $key => $values){
    if($values['id'] != $id_one && $values['id'] != $id_two && $values['id'] != $id_three){
        $data[] = $values;
        

    }
}

echo json_encode($data);
    ?>



