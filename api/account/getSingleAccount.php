<?php

include_once "../database.php";


$account = DB::queryFirstRow("SELECT * FROM account_data WHERE vid=%s", $_GET['vid']);

echo json_encode($result);

?>