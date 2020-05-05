<?php require '../../config.php';
$connect = mysqli_connect($hostport, $username, $password, "account");
$columns = array('id', 'username','passw','realname','authority');
mysqli_set_charset($connect, "utf8");//設定編碼為utf-8
if(isset($_POST["username"], $_POST["password"],$_POST["realname"],$_POST["authority"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 $realname = mysqli_real_escape_string($connect, $_POST["realname"]);
 $authority = mysqli_real_escape_string($connect, $_POST["authority"]);
 $query = "INSERT INTO users(username, passw, realname , authority) VALUES('$username', '$password' ,'$realname' ,'$authority')";
 mysqli_set_charset($connect, "utf8");//設定編碼為utf-8
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }else{
    echo 'Something Went Wrong!';
 }
}
?>
