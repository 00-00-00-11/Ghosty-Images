<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ghostylh_uploads";
$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error) {
    die($con->connect_error);
}
?>