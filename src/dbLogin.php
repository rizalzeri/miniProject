<?php
    $db_host = 'localhost';
    $db_database= 'burjo';
    $db_username = 'root';
    $db_password = '';

    // connect database
    $db = new mysqli($db_host, $db_username, $db_password, $db_database);
    if ($db->connect_errno){
        die ("Could not connect to the database: <br />". $db->connect_error);
    }

function test_input($data){
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
