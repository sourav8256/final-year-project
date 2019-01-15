<?php

include_once "database.php";

try {

    $query = DB::query("SELECT * FROM poll_data");
    foreach($query as $row){
        $result['data'][] = $row;
    }
    //$result['data'] = $query;

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