<?php
session_start();
require 'config.php';
require 'header.php';
if (!isset($_SESSION['user'])) {
    echo "<script>location='./index.php';</script>";
}
?>

<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>交通積分審核</h2>
        <?php
        $pdo = new PDO('mysql:host='.$host.';port=' .$port. ';dbname=account;charset=utf8', $username, $password);
        $ans = '';
        $legal = True;
        date_default_timezone_set("Asia/Taipei");
        $datetime = date('Y-m-d H:i:s');
        foreach ($pdo->query('select * from questions') as $row) {
            if (!strpos($_REQUEST[$row['id']], ',')) {
                if (!isset($_REQUEST[$row['id']])) {
                    $legal = False;
                }
                $ans .= $_REQUEST[$row['id']] . ' , ';
            } else {
                $legal = False;
            }
        }
        if ($legal) {
            $sql = $pdo->prepare('insert into answers values(null, ?, ? ,?)');
            if ($sql->execute([$_SESSION['user']['realname'], $datetime, $ans])) {
                echo '<p class="lead">謝謝填寫，我們已收到回應</p>';
            } else {
                echo '<p class="lead">謝謝填寫，程式無法儲存回應</p>';
            }
        } else {
            echo '<p class="lead">填寫內容包含 " , " 程式無法正確儲存，請重填</p>';
        }
        ?>
    </div>

    <div class="row">
        <div class="col">
            <a href="index.php"> <button class="btn btn-primary btn-lg btn-block" type="submit">回首頁</button></a>
        </div>
        <div class="col">
            <form action="logout.php" method="post">
                <button class="btn btn-primary btn-lg btn-block" type="submit">登出</button>
            </form>
        </div>
    </div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <small>如果你直接回首頁，下次就不用重新登入！</small>
    <?php require 'footer.php'; ?>
