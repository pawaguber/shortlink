<?php

include_once('connect.php');


$data = [
    "name" => $_POST["text"]
];

if ($_POST["name"] !== "") {


    if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["name"])) {

        if (!preg_match("/pavlobakum.fun/", $_POST["name"])) {

            $short_link = uniqid();
			
            $date = date("Y-m-d H:i:s");
            if ($_SESSION["profile"]) {
                $id_owner = $_SESSION["profile"]["id"];
            } else {
                $id_owner = '0';
            }
            $sql = $db->query("INSERT INTO links (full_link, short_link, date, transitions, unique_transitions, id_owner) VALUES ('" . $_POST["name"] . "', '$short_link', '$date', '0', '0', '$id_owner')");

            echo "http://pavlobakum.fun/short/href.php?id={$short_link}";

        } else {
            echo 'This link dont support';
        }

    } else {
        echo 'Your link is bad';
    }

} else {
    echo 'Your link is empty :(';
}
?>