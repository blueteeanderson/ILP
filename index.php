<?php
require_once($_SERVER['DOCUMENT_ROOT']."/includes/DBConn.php");
$con = new DBConn();
$sql = "SELECT * FROM test";
$tests = $con->getRecords($sql,true,array());
print_r($tests);
?>