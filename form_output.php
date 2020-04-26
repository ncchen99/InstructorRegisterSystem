<?php
session_start();
?>

<?php require 'header.php'; ?>

<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>交通積分審核</h2>
        <?php
            $pdo = new PDO('mysql:host=whsh.site;port=3306;dbname=account;charset=utf8', 'ncchen', 'ncchen1234');
            $ans = '';
            $datetime = date('Y-m-d H:i:s');
            foreach ($pdo->query('select * from questions') as $row) {
                $ans .= $_REQUEST[$row['id']] . ' , ';
            }
            //$sql = $pdo->prepare('INSERT INTO answers (id , realname, datetime, ans) VALUES(:id, :realname, NOW(), :ans);');
            // $sql->execute([$_SESSION['user']['realname'], $date, $ans]);
            /*$sql->bindParam(':id', null); // PDOStatement::bindValue() is also possibly
            $sql->bindParam(':realname', $_SESSION['user']['realname']);
            $sql->bindParam(':ans', $ans);*/
            $sql=$pdo->prepare('insert into answers values(null, ?, ? ,?)');
            if ($sql->execute([$_SESSION['user']['realname'] , $datetime , $ans])) {
                echo '<p class="lead">謝謝填寫，我們已收到回應</p>';
            } else {
                echo '<p class="lead">謝謝填寫，程式無法儲存回應</p>';
            }
        ?>

    </div>
    <a href="http://whsh.site"><button class="btn btn-primary btn-lg btn-block" type="submit">回首頁</button></a>
    </form>
</div>
<?php require 'footer.php'; ?>