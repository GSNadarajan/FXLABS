<?php

$db = new Unique("user", "-");

if (isset($_POST['add'])) {
    
    $add_arr = array(
        "name" => Filter::input($_POST['name']),
        "register_no" => Filter::input($_POST['register_no']),
        "dept_id" => Filter::input($_POST['dept']),
        "email" => Filter::input($_POST['email']),
        "phone" => Filter::input($_POST['phone']),
        "lab_name" => Filter::input($_POST['lab']),


        
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
        "name" => Filter::input($_POST['name']),
        "dept_id" => Filter::input($_POST['dept']),
        "email" => Filter::input($_POST['email']),
        "phone" => Filter::input($_POST['phone']),
        "lab_name" => Filter::input($_POST['lab']),        
    );
    $result = $db->update_data($update_arr);

    if ($result) {
        alert::update();
    } else {
        alert::custom("Error in database");
    }
}