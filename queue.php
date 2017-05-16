<?php

// Queue position
$position = '';

// Customer title
$title = '';

// Type of customer
$customer_type = '';

// First name of customer
$firstName = '';

// Last name of customer
$lastName = '';

// Full name of customer
$fullName = '';

// Service type
$service_type = '';

// Organisation name
$organisation_name = '';


// Add bootsrap 'has-danger' class when field is empty
$field_empty = '';


// If request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get field value from POST, returns null when empty
    $title = filter_input(INPUT_POST, 'title');
    $customer_type = filter_input(INPUT_POST, 'customer');
    if (is_null($firstName)) {
        $firstName = $customer_type;
    }
    else {
        $firstName = filter_input(INPUT_POST, 'firstname');
    }
    $lastName = filter_input(INPUT_POST, 'lastname');
    $organisation_name = filter_input(INPUT_POST, 'organisation_name');
    $service_type = filter_input(INPUT_POST, 'service_type');


    require_once 'connect.php';

    // check connection
    if($db->connect_errno){
        echo $db->connect_error;
    } else {

        $clean_title = $db->real_escape_string($title);
        $clean_customer_type = $db->real_escape_string($customer_type);
        $clean_firstName = $db->real_escape_string($firstName);
        $clean_lastName = $db->real_escape_string($lastName);
        $clean_fullName = $clean_title . ' ' . $clean_firstName . ' ' . $clean_lastName;
        $clean_service_type = $db->real_escape_string($service_type);
        $create_time = time();


        $insert = "INSERT INTO queue (customer_type, fullname, service_type, time_created)
                VALUES ('{$clean_customer_type}', '{$clean_fullName}', '{$clean_service_type}', '{$create_time}')";
        $insert_result = $db->query($insert);

        if($insert_result !== false) {
            // do nothing
        } else {
            echo $db->error;
        }
    }


}


/*
 * Function is used to select data from the database and
 * display in a table format
 */
function selectData() {


    require_once 'connect.php';

    // check connection
    if($db->connect_errno){
        echo $db->connect_error;
    } else {

        $currentTime = time();

        $select = "SELECT id, customer_type, fullname, service_type, time_created FROM queue;";
        $select_result = $db->query($select);

        if($select_result !== false) {
            while($row = $select_result->fetch_array()){

                $table_rows = '';

                // Customer waiting time
                $waitingTime = $currentTime - $row['time_created'];

                $date = new DateTime();

                $date->setTimestamp($waitingTime);
                $time_waiting = $date->format('H:i:s');

                $table_rows .= "<tr><th scope=\"row\">". $row['id'] ."</th><td>" . $row['customer_type'] ."</td><td>" . $row['fullname'] ."</td><td>" . $row['service_type'] . "</td><td>" .$time_waiting ."</td></tr>";

                print $table_rows;
            }

        } else {
            echo $db->error;
        }
    }


}
?>