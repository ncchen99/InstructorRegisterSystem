
<?php
$connect = mysqli_connect("whsh.site:3306", "ncchen", "ncchen1234", "account");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM users WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
