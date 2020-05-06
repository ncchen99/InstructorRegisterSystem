
<script type="text/javascript" language="javascript">
  $(document).ready(function() {

    fetch_data();

    function fetch_data() {
      var dataTable = $('#user_data').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "users/fetch.php",
          type: "POST"
        }
      });
    }

    function update_data(id, column_name, value) {
      $.ajax({
        url: "users/update.php",
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
      html += '<td contenteditable ><select class="form-control bg-dark text-white solid " id="data5"><option>admin</option><option>teacher</option><option>student</option></select></td>';
      html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
      html += '</tr>';
      $('#user_data tbody').prepend(html);
    });

    /* $(function() {
      <select class="selectpicker"><option value="admin">admin</option><option value="teacher">teacher</option><option value="student">student</option></select>
      $('[id="data5"]').each(function() {
        var parent = $(this).parent(),
          text = ["admin", "teacher", "student"],
          select = function() {
            var returnstring = '';
            for (var i in text) {
              returnstring += "<option value='" + text[i] + "'>" + text[i] + "</option>";
            }
            return "<select>" + returnstring + "</select>";
          }();
        $(this).empty();
        parent.append(select);
      });
    }); */

    $(document).on('click', '#insert', function() {
      var id = $('#data1').text();
      var username = $('#data2').text();
      var password = $('#data3').text();
      var realname = $('#data4').text();
      var authority = $('#data5').val();
      if (username != '' &&
        password != '' &&
        realname != '' &&
        authority != '') {
        $.ajax({
          url: "users/insert.php",
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
        alert("未填寫完整！");
      }
    });

    $(document).on('click', '.delete', function() {
      var id = $(this).attr("id");
      if (confirm("你確定要移除這列?")) {
        $.ajax({
          url: "users/delete.php",
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