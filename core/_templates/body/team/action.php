<?php

$db = new Unique("team", "-");

if (isset($_POST['add'])) {
    $u = implode(',', $_POST['members']);
    $members = $u . ",";

    $add_arr = array(
        "team_name" => Filter::input($_POST['team_name']),
        "leader_name" => Filter::input($_POST['leader_name']),
        "team_members" => Filter::input($members)
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