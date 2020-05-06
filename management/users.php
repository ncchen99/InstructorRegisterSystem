<?php
session_start();
require '../config.php';
require 'header.php';
require 'assets/table_css.php';
require 'assets/mobile_table_users.php';
require 'navbar.php';
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
  <h1 align="center">使用者設定</h1>
  <br />
  <div align="right">
    <button type="button" name="add" id="add" class="btn btn-info">Add</button>
  </div>
  <br />
  <div id="alert_message"></div>
  <div class="table-responsive">
    <table id="user_data" style="width: 100%;" class="container">
      <thead>
        <tr>
          <th>#</th>
          <th>username</th>
          <th>password</th>
          <th>realname</th>
          <th>authority</th>
          <th>edit</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
</body>

</html>

<?php
require 'footer.php';
require 'users/js.php';
?>