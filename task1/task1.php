<?php
/**
 * You need to develop a script which will parse json files or strings and return parsed data as an array.
 * The script should be extendable for new data types. Please use Object Oriented Approach.
 */
//Task 1
$response = array();
$response["error"] = FALSE;
$response["application"]  = array();

$applicants = array(
    'list' => array(
        'Application_ID' => 1,
        'Fullname' => 'Lynford Lagondi',
        'Position' => 'Junior Programmer',
        'Location' => 'Negros Oriental',
        'php_experience' => 5
    ));

foreach ($applicants as $task_one){
    $tmp = array();
    array_push($response["application"], $task_one);
}

echo json_encode($response);