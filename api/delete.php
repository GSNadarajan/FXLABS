<?php
include "../core/libs/load.php";

if(isset($_POST['id']) and is_numeric($_POST['id'])){
    $id = $_POST['id'];
    $type = $_POST['type'];
    $db = new Unique($type,"");
    if($db->DeleteBased('id',$id)){
        $data['success'] = true;
    }
    else{
        $data['success'] = false;
    }
echo json_encode($data);

} 