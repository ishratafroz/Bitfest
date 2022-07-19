<?php
include("path.php");
session_start();
if(isset($_POST['remember'])){
    setcookie('username' , $_POST['username'] , time() - 60*60*7);
}
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);
session_destroy();

header('location: ' . BASE_URL . '/index.php?id=5');