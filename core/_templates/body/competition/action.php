<?php

$db = new Unique("competition", "-");

if (isset($_POST['add'])) {
    
    $add_arr = array(
        
        "name" => Filter::input($_POST['name']),
        "type" => Filter::input($_POST['type']),
        "date" => Filter::input($_POST['date']),
        "organizer" => Filter::input($_POST['org']),
        "reporting_idea" => Filter::input($_POST['report_idea']),
        "venue" => Filter::input($_POST['venue']),
        "review" => Filter::input($_POST['review']),



        
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
        "type" => Filter::input($_POST['type']),
        "date" => Filter::input($_POST['date']),
        "organizer" => Filter::input($_POST['org']),
        "reporting_idea" => Filter::input($_POST['report_idea']),
        "venue" => Filter::input($_POST['venue']),
        "review" => Filter::input($_POST['review']),    
    );
    $result = $db->update_data($update_arr);

    if ($result) {
        alert::update();
    } else {
        alert::custom("Error in database");
    }
}