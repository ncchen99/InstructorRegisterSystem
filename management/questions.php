<?php
session_start();
require '../config.php';
require 'header.php';
require 'navbar.php';
require 'assets/table_css.php';
require 'assets/mobile_table_questions.php';
if (!isset($_SESSION['user'])) {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'student') {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'teacher') {
    echo "<script language=JavaScript> alert('權限不足！') </script>";
    echo "<script>location='./index.php';</script>";
}
?>

<div class="box">
    <h1 align="center">問卷新增/修改</h1>
    <br/>
    <div class="table-responsive">
        <br/>
        <div align="right">
            <button type="button" name="add" id="add" class="btn btn-info">Add</button>
        </div>
        <br/>
        <div id="alert_message"></div>
        <table id="user_data" style="width: 100%;" class="container">
            <thead>
                <tr>
                    <th>#</th>
                    <th>question</th>
                    <th>genre</th>
                    <th>options</th>
                    <th>edit</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<?php
require 'footer.php';
require 'questions/js.php';
?>

