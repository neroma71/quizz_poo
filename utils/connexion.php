<?php
$dns = "mysql:host=localhost;dbname=quizz-poo";
$user = "root";
$password = "";

try {
    $db = new PDO ($dns,$user,$password);
} catch (Exception $message) {
    echo "il y a un souci <br>" . "<pre>$message</pre>";
}