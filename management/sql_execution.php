<?php
session_start();
require 'header.php';
if (!isset($_SESSION['user'])) {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'student')
    echo "<script>location='./../index.php';</script>";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="show_table.php">
        <img src="../assets/todo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="show_table.php">查看回應</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">新增/刪除問題</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">使用者設定</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sql_execution.php">SQL指令<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="../logout.php">登出</a></li>
        </ul>
    </div>
</nav>
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
            $pdo = new PDO('mysql:host=whsh.site;port=3306;dbname=account;charset=utf8', 'ncchen', 'ncchen1234');
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
        $pdo = new PDO('mysql:host=whsh.site;port=3306;dbname=account;charset=utf8', 'ncchen', 'ncchen1234');
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
