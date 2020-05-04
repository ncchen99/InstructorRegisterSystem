<?php
session_start();
require '../config.php';
unset($_SESSION['user']);
$pdo = new PDO('mysql:host='.$host.';port=' .$port. ';dbname=account;charset=utf8', $username, $password);
$sql = $pdo->prepare('select * from users where username=? and passw=?');
$sql->execute([$_REQUEST['username'], $_REQUEST['pass']]);
foreach ($sql->fetchAll() as $row) {
    $_SESSION['user'] = [
        'username' => $row['username'],
        'passw' => $row['passw'],
        'realname' => $row['realname'],
        'authority' => $row['authority']];
}
if (isset($_SESSION['user'])) {
    if($_SESSION['user']['authority'] == 'student'){
        echo "<script>location='./../form.php';</script>";
    }else{
        echo "<script>location='./../management/index.php';</script>";
    }
} else {
    echo "<script language=JavaScript> alert('login not success') </script>";
    echo "<script>location='./index.php';</script>";
    //header("Location: index.php");
}
?>
