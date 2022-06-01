<?php

include_once ('connect.php');

if(isset($_POST["login"]) && isset($_POST["password"])) {

     $login = $_POST['login'];
	 print_r($login);
     $password = $_POST['password'];

     $sql = $db->query("SELECT * FROM profile WHERE login = '$login' and password ='$password'");
	 print_r($sql);
     if($sql->num_rows == 1){
         $data = $sql->fetch_assoc();
         $_SESSION['profile'] = [
             "id" => $data['id'],
             "login" => $data['login']
         ];
		 header('Location: ../profile.php');
     }else{
     echo "bye bye";
     }
    }
?>