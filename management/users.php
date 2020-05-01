<?php
require 'header.php';
require 'navbar.php';
?>
<style>
  body {
    margin: 0;
    padding: 0;
    background-color: #343a40;
  }

  .box {
    width: 1270px;
    padding: 20px;
    background-color:#343a40;
    border: 0;
    border-radius: 5px;
    margin-top: 25px;
    box-sizing: border-box;
  }
</style>


</head>

<body>
  <div class="container box">
    <h1 align="center">使用者設定</h1>
    <br />
    <div class="table-responsive">
      <br />
      <div align="right">
        <button type="button" name="add" id="add" class="btn btn-info">Add</button>
      </div>
      <br />
      <div id="alert_message"></div>
      <table id="user_data" class="table table-bordered table-striped">
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
?>
<script type="text/javascript" language="javascript">
  $(document).ready(function() {

    fetch_data();

    function fetch_data() {
      var dataTable = $('#user_data').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "fetch.php",
          type: "POST"
        }
      });
    }

    function update_data(id, column_name, value) {
      $.ajax({
        url: "update.php",
        method: "POST",
        data: {
          id: id,
          column_name: column_name,
          value: value
        },
        success: function(data) {
          $('#user_data').DataTable().destroy();
          fetch_data();
          $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
        }
      });
      setInterval(function() {
        $('#alert_message').html('');
      }, 5000);
    }

    $(document).on('blur', '.update', function() {
      var id = $(this).data("id");
      var column_name = $(this).data("column");
      var value = $(this).text();
      update_data(id, column_name, value);
    });

    $('#add').click(function() {
      var html = '<tr>';
      html += '<td contenteditable id="data1"></td>';
      html += '<td contenteditable id="data2"></td>';
      html += '<td contenteditable id="data3"></td>';
      html += '<td contenteditable id="data4"></td>';
      html += '<td contenteditable id="data5"></td>';
      html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
      html += '</tr>';
      $('#user_data tbody').prepend(html);
    });

    $(document).on('click', '#insert', function() {
      var id = $('#data1').text();
      var username = $('#data2').text();
      var password = $('#data3').text();
      var realname = $('#data4').text();
      var authority = $('#data5').text();
      if (username != '' &&
        password != '' &&
        realname != '' &&
        authority != '') {
        $.ajax({
          url: "insert.php",
          method: "POST",
          data: {
            username: username,
            password: password,
            realname: realname,
            authority: authority
          },
          success: function(data) {
            $('#user_data').DataTable().destroy();
            fetch_data();
            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
          }
        });
        setInterval(function() {
          $('#alert_message').html('');
        }, 5000);
      } else {
        alert("Both Fields is required");
      }
    });

    $(document).on('click', '.delete', function() {
      var id = $(this).attr("id");
      if (confirm("Are you sure you want to remove this?")) {
        $.ajax({
          url: "delete.php",
          method: "POST",
          data: {
            id: id
          },
          success: function(data) {
            $('#user_data').DataTable().destroy();
            fetch_data();
            $('#alert_message').html('<div class="alert alert-success">' + data + '</div>');
          }
        });
        setInterval(function() {
          $('#alert_message').html('');
        }, 5000);
      }
    });
  });
</script>