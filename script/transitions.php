<?php

include_once ("connect.php");
$link_id = $_GET["id"];
$ip = $_SERVER['REMOTE_ADDR'];
print_r($link_id);
print_r($ip);

$db->query("UPDATE links SET transitions = transitions + 1 WHERE short_link = '$link_id'");
$sql = $db->query("SELECT * FROM transitions WHERE link_id = '$link_id' AND ip = '$ip'");
print_r($sql);


if($sql->num_rows < 1){
	$db->query("UPDATE links SET unique_transitions = unique_transitions + 1 WHERE short_link = '$link_id'");
	$db->query("INSERT INTO transitions (link_id, ip) VALUES ('$link_id', '$ip')");
}
?>