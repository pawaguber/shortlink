<?php
session_start();

$db_host = "localhost";
$db_user = "root";
$db_password = "password";
$db_base = "link";

$db = new mysqli($db_host, $db_user, $db_password, $db_base);

?>