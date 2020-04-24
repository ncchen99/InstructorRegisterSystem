<?php
session_start();
unset($_SESSION['user']);
$pdo=new PDO('mysql:host=whsh.site;port=3306;dbname=account;charset=utf8','ncchen', 'ncchen1234');
$sql=$pdo->prepare('select * from users where username=? and passw=?');
$sql->execute([$_REQUEST['username'], $_REQUEST['pass']]);
foreach ($sql->fetchAll() as $row) {
	$_SESSION['user']=[
		'username'=>$row['username'], 
		'passw'=>$row['passw']];
}
if (isset($_SESSION['user'])) {
	$_SESSION['loginWrong'] = True;
	header("Location:../form.php");
} else {
	echo "<script language=JavaScript> alert('login not success') </script>";
	echo "<script>location='./index.php';</script>"; 
	$_SESSION['loginWrong'] = False;
	//header("Location: index.php");	
}
?>

