<?php

include "core/libs/load.php";
Session::start();

// print_r($_POST);
$id_1 = $_POST['id'];


Session::set('member1_id',$id);

$data = [];
$filter_name = unique::get_distinctdata();
foreach($filter_name as $key => $values){
    if($values['id'] != $id_1){
        $data[] = $values;
        

    }
}

echo json_encode($data);
    ?>



