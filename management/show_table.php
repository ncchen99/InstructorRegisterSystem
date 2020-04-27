<?php
session_start();
require '../header.php';
?>
<style>
    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

    body {
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
        line-height: 1.42em;
        color: #A7A1AE;
        background-color: #1F2739;
    }

    h1 {
        font-size: 3em;
        font-weight: 300;
        line-height: 1em;
        text-align: center;
        color: #4DC3FA;
    }

    h2 {
        font-size: 1em;
        font-weight: 300;
        text-align: center;
        display: block;
        line-height: 1em;
        padding-bottom: 2em;
        color: #FB667A;
    }

    h2 a {
        font-weight: 700;
        text-transform: uppercase;
        color: #FB667A;
        text-decoration: none;
    }

    .blue {
        color: #185875;
    }

    .yellow {
        color: #FFF842;
    }

    .container th h1 {
        font-weight: bold;
        font-size: 1em;
        text-align: left;
        color: #185875;
    }

    .container td {
        font-weight: normal;
        font-size: 1em;
        -webkit-box-shadow: 0 2px 2px -2px #0E1119;
        -moz-box-shadow: 0 2px 2px -2px #0E1119;
        box-shadow: 0 2px 2px -2px #0E1119;
    }

    .container {
        text-align: left;
        overflow: hidden;
        width: 80%;
        margin: 0 auto;
        display: table;
        padding: 0 0 8em 0;
    }

    .container td,
    .container th {
        padding-bottom: 2%;
        padding-top: 2%;
        padding-left: 2%;
    }

    /* Background-color of the odd rows */
    .container tr:nth-child(odd) {
        background-color: #323C50;
    }

    /* Background-color of the even rows */
    .container tr:nth-child(even) {
        background-color: #2C3446;
    }

    .container th {
        background-color: #1F2739;
    }

    .container td:first-child {
        color: #FB667A;
    }

    .container tr:hover {
        background-color: #464A52;
        -webkit-box-shadow: 0 6px 6px -6px #0E1119;
        -moz-box-shadow: 0 6px 6px -6px #0E1119;
        box-shadow: 0 6px 6px -6px #0E1119;
    }

    .container td:hover {
        background-color: #FFF842;
        color: #403E10;
        font-weight: bold;

        box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
        transform: translate3d(6px, -6px, 0);

        transition-delay: 0s;
        transition-duration: 0.4s;
        transition-property: all;
        transition-timing-function: line;
    }

    .table-ncc{
        margin: 30px;
    }
    @media (max-width: 800px) {

        .container td:nth-child(4),
        .container th:nth-child(4) {
            display: none;
        }
    }
</style>


</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="show_table.php">
        <img src="../assets/todo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="show_table.php">查看回應 <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">新增/刪除問題</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">使用者設定</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SQL指令</a>
            </li>
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
                <h1>',$row['question'],'</h1>
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
            <td>',$row['realname'],'</td>
            <td>',$row['datetime'],'</td>';
            $anwsers = explode(",", $row['ans']);
            array_pop($anwsers);
            foreach ($anwsers as $ans) {
                echo '<td>',$ans,'</td>';
            }
            echo '<tr>';
        }
        ?>
    </tbody>
</table>


<?php require '../footer.php'; ?>