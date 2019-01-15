<?php

include_once "database.php";


$account = DB::queryFirstRow("SELECT * FROM poll_data WHERE vid=%s", $_GET['vid']);

echo json_encode($result);

?>