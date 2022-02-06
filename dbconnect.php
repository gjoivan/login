<?php
$hostname = "localhost";
$user_name = "root";
$pass_word = "";
$database_name = "user";


$connection = new mysqli($hostname, $user_name, $pass_word, $database_name);
$connection->set_charset('utf8');

?>