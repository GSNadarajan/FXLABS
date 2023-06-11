<?php

$db = new Unique("patent", "-");

if (isset($_POST['add'])) {
    
    $add_arr = array(
        "user_id" => Filter::input($_POST['user_id']),
        "name" => Filter::input($_POST['name']),
        "desc" => Filter::input($_POST['description']),
        "ref_url" => Filter::input($_POST['ref_url']),
        "applied_date" => Filter::input($_POST['appl_date']),
        "approval_date" => Filter::input($_POST['approv_date']),
        "status" => Filter::input($_POST['status']),
    );

    $result = $db->insert_data($add_arr);
    if ($result) {
        alert::insert();
    } else {
        alert::custom("Error in database");
    }
}


if (isset($_POST['update'])) {
    $update_arr = array(
        "id" => Filter::input($_POST['id']),
        "user_id" => Filter::input($_POST['user_id']),
        "name" => Filter::input($_POST['name']),
        "desc" => Filter::input($_POST['description']),
        "ref_url" => Filter::input($_POST['ref_url']),
        "applied_date" => Filter::input($_POST['appl_date']),
        "approval_date" => Filter::input($_POST['approv_date']),
        "status" => Filter::input($_POST['status']),   
    );
    $result = $db->update_data($update_arr);

    if ($result) {
        alert::update();
    } else {
        alert::custom("Error in database");
    }
}