<?php
session_start();
require_once '../model/UserModel.php';

if(isset($_SESSION['username'])) {
    header("Location: sach.php");
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userModel = new UserModel();
    $user = $userModel->getUserByUsernameAndPassword($username, $password);

    if($user !== null) {
        $_SESSION['username'] = $username;
        header("Location: sach.php");
        exit;
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}

require_once '../view/login.php';
?>
