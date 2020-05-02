<?php
//fetch.php
header('Content-Type: application/json; charset=UTF-8');

$connect = mysqli_connect("whsh.site:3306", "ncchen", "ncchen1234", "account");
mysqli_set_charset($connect, "utf8");//設定編碼為utf-8
$columns = array('id', 'username','passw','realname','authority');

$query = "SELECT * FROM users";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE id LIKE "%'.$_POST["search"]["value"].'%" 
 OR username LIKE "%'.$_POST["search"]["value"].'%" 
 OR passw LIKE "%'.$_POST["search"]["value"].'%" 
 OR realname LIKE "%'.$_POST["search"]["value"].'%" 
 OR authority LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="id">' . $row["id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="username">' . $row["username"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="password">' . $row["passw"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="realname">' . $row["realname"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="authority">' . $row["authority"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM users";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
