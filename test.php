<?php
// include ""
include "core/libs/load.php";
echo '<pre>';
$result = explode(",","43,44,45,46");
$empty = [];
foreach($result as $key => $values){
    // console::log($values);
    $user = new Unique('user',$values);
    $result = $user->getTotalBased('id',$values);
    $empty[] = $result;
    
    // $empty[] = $user->getTotalBased("id",$id);
    
}

$names = "";
// print_r($empty);


foreach($empty as $data => $name){

    $names .= $name[0]['name'].",";
}

echo $names;

echo "</pre>";