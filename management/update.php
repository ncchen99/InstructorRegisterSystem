<?php
$connect = mysqli_connect("whsh.site:3306", "ncchen", "ncchen1234", "account");
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
