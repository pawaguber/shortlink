<?php


require_once ('connect.php');


     $login = $_POST['login'];
     $password = $_POST['password'];

     $sql = $db->query("INSERT INTO profile (login, password) VALUES ('$login', '$password')");
	 
	 header('Location: ../profile.php');
 
?>