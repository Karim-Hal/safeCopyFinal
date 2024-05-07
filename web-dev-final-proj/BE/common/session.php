<?php
session_start();

function ensureLoggedInCMS(){
    if (!isset($_SESSION['logged-in'])){

        header('Location:login.php');
        exit;
    }
}

function ensureLoggedInIndex(){
    if (!isset($_SESSION['logged-in'])){

        header('Location:CMS/login.php');
        exit;
    }

}

?>