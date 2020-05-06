<?php
session_start();
require '../config.php';
require 'header.php';
require 'navbar.php';
if (!isset($_SESSION['user'])) {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'student') {
    echo "<script>location='./../index.php';</script>";
} 
require 'assets/table_css.php';
?>
<style>
    .card-body {
        background-color: #343a40;
        background-image: linear-gradient(147deg, #343a40 0%, #343a40 100%);
    }
</style>

<div class="py-5">
    <div class="card rounded border-0">
        <div class="card-body p-5 bg-white rounded">
            <table id="example" style="width:100%" class="container">
                <thead>
                    <tr>
                        <th>名子</th>
                        <th>填寫時間</th>
                        <th>回應</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>