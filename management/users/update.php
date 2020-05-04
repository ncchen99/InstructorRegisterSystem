<?php require '../../config.php';
$connect = mysqli_connect($hostport, $username, $password, "account");
mysqli_set_charset($connect, "utf8");//設定編碼為utf-8
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 if($_POST["column_name"] =="password"){
    $_POST["column_name"] = "passw";
 }
 $query = "UPDATE users SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
