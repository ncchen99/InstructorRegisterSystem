<?php require '../../config.php';
$connect = mysqli_connect($hostport, $username, $password, "account");
$columns = array('id', 'question','genre','options');
mysqli_set_charset($connect, "utf8");//設定編碼為utf-8
if(isset($_POST["question"], $_POST["genre"],$_POST["options"]))
{
 $question = mysqli_real_escape_string($connect, $_POST["question"]);
 $genre = mysqli_real_escape_string($connect, $_POST["genre"]);
 $options = mysqli_real_escape_string($connect, $_POST["options"]);
 $query = "INSERT INTO questions(question, genre, options ) VALUES('$question', '$genre' ,'$options')";
 mysqli_set_charset($connect, "utf8");//設定編碼為utf-8
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
