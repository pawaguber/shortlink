<?php

include_once ('script/connect.php');
include_once ('script/transitions.php');

$id = $_GET["id"];

 $sql = $db->query("SELECT full_link FROM links WHERE short_link = '$id'");
 $row = $sql->fetch_array();
 
 header('Location: '.$row['full_link']);
?>