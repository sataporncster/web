<?php
session_start();
include('../pages/connect.php');
date_default_timezone_set("Asia/Bangkok"); 

$range_first = $_GET["range_first"];
$range_last = $_GET["range_last"];

echo "<meta http-equiv='refresh' content='0;url=report.php?range_first=$range_first&range_last=$range_last'>";

?>