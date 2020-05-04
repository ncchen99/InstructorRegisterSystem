<?php require '../config.php';
session_start();
require 'header.php';
require 'navbar.php';
require 'assets/table_css.php';
if (!isset($_SESSION['user'])) {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'student')
    echo "<script>location='./../index.php';</script>";
?>



<div class="table-ncc">
    <h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">回應</pan>
    </h1>
</div>


<table class="container">
    <thead>
        <tr>
            <th>
                <h1>名子</h1>
            </th>
            <th>
                <h1>填寫時間</h1>
            </th>
            <?php
            $pdo = new PDO('mysql:host='.$host.';port=' .$port. ';dbname=account;charset=utf8', $username, $password);
            foreach ($pdo->query('select * from questions') as $row) {
                echo '<th>
                <h1>', $row['question'], '</h1>
                </th>';
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $pdo = new PDO('mysql:host='.$host.';port=' .$port. ';dbname=account;charset=utf8', $username, $password);
        foreach ($pdo->query('select * from answers ORDER BY `datetime`') as $row) {
            echo '<tr>
            <td>', $row['realname'], '</td>
            <td>', $row['datetime'], '</td>';
            $anwsers = explode(",", $row['ans']);
            array_pop($anwsers);
            foreach ($anwsers as $ans) {
                echo '<td>', $ans, '</td>';
            }
            echo '<tr>';
        }
        ?>
    </tbody>
</table>


<?php require '../footer.php'; ?>