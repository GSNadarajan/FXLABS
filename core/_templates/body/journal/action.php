<?php

$db = new Unique("journal", "-");

if (isset($_POST['add'])) {
    console::log($_POST);
    
    $add_arr = array(
        "register_no" => Filter::input($_POST['register_no']),
        "name" => Filter::input($_POST['name']),
        "topic" => Filter::input($_POST['topic']),
        "desc" => Filter::input($_POST['description']),
        "published" => Filter::input($_POST['published']),
        // "applied_date" => Filter::input($_POST['appl_date']),
        // "approval_date" => Filter::input($_POST['approv_date']),
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
        "topic" => Filter::input($_POST['topic']),
        "desc" => Filter::input($_POST['description']),
        "published" => Filter::input($_POST['published']),
        // "applied_date" => Filter::input($_POST['appl_date']),
        // "approval_date" => Filter::input($_POST['approv_date']),
        "status" => Filter::input($_POST['status']),  
    );
    $result = $db->update_data($update_arr);

    if ($result) {
        alert::update();
    } else {
        alert::custom("Error in database");
    }
}