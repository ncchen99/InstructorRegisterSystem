
<?php require '../../config.php';
$connect = mysqli_connect($hostport, $username, $password, "account");
mysqli_set_charset($connect, "utf8");//設定編碼為utf-8
if(isset($_POST["id"]))
{
 $query = "DELETE FROM users WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
