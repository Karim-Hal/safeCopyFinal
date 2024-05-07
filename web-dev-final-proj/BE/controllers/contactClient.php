<?php

require_once ('../models/contactDB.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fn= $_POST['name'];
    $ln= $_POST['surname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];

    insert_into_DB($fn, $ln, $email, $subject, $body);


    header("Location: ../../FE/contactClient.php");
    exit();
}

?>
