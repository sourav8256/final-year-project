<?php

include_once "database.php";

$_GET['username'] = "new username";
$_GET['vid'] = 25;
$_GET['carbon'] = 45;
$_GET['sulphur'] = 69;
$_GET['serial'] = 15;

$result['vid'] = $_GET['vid'];

try {

$query = DB::insertUpdate('poll_data', array(
  'serial' => !empty($_GET['serial']) ? $_GET['serial']:null,
  'username' => $_GET['username'],
  'vid' => $_GET['vid'],
  'carbon' => $_GET['carbon'],
  'sulphur' => $_GET['sulphur'],
));

} catch(Exception $e) {
    $result['result'] = 0;
    $result['message'] = $e->getMessage();
}

if($query){
    $result['result'] = 1;
    $result['message'] = "values saved successfully";
} else {
    
    $result['result'] = 0;
    $result['message'] = "values not saved there has been an error.";
}

echo json_encode($result);

?>