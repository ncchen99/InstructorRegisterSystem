<?php
session_start();
?>

<?php require '../header.php'; ?>

<?php
unset($_SESSION['user']);
$pdo = new PDO('mysql:host=whsh.site;port=3306;dbname=account;charset=utf8', 'ncchen', 'ncchen1234');
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
    echo "<script>location='./../form.php';</script>";
} else {
    echo "<script language=JavaScript> alert('login not success') </script>";
    echo "<script>location='./index.php';</script>";
    //header("Location: index.php");
}
?>
<?php require '../footer.php'; ?>