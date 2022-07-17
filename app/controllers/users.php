
<?php
include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
$username = "";
$admin = "" ;
$email = "";
$password = "";
$passwordConf = "";
function loginUser($user){
    $_SESSION['id'] = 1;
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] ='Your are logged in';
    $_SESSION['type'] ='success';
    if(isset($_POST['remember'])){
        setcookie('username' , $_POST['username'] , time() + 60*60*7);
    }
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    }
    else{
        $_SESSION['id'] = 1;
        header('location: ' . BASE_URL . '/index.php?id=1');
    }
    exit();
}

if(isset($_POST['register-btn']) || isset($_POST['create-admin'])){

    $errors = validateUser($_POST);
    if(count($errors) === 0){
        unset($_POST['register-btn'] , $_POST['passwordConf'], $_POST['remember'],$_POST['create-admin']);
        loginUser($user);
    }
    else{

        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0 ;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }


}


if(isset($_POST['login-btn'])){

    $errors = validateLogin($_POST);
    loginUser($user);
    if(count($errors) === 0){
        if($_POST['password']=="123456" &&  $_POST['user']=="Israt"){
           //log in user
            loginUser($user);
        }
        else{
            array_push($errors, 'Wrong Credentials');

        }

    }

    $username = $_POST['username'];
    $password = $_POST['password'];



}



?>
