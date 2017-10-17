<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/DBConn.php");
$con = new DBConn();
$sql = "SELECT * FROM temp";
$tests = $con->getRecords($sql,true,array());
print_r($tests);


?>