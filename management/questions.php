<?php
session_start();
require '../config.php';
require 'header.php';
require 'navbar.php';
require 'assets/table_css.php';
if (!isset($_SESSION['user'])) {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'student') {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'teacher') {
    echo "<script language=JavaScript> alert('權限不足！') </script>";
    echo "<script>location='./index.php';</script>";
}
?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #343a40;
    }

    .box {
        /*width: 1270px;*/
        padding: 20px;
        background-color: #343a40;
        border: 0;
        border-radius: 5px;
        margin-top: 25px;
        box-sizing: border-box;
    }

    td {
        padding-right: 2%;
    }
</style>


</head>

<body>
    <div class="container box">
        <h1 align="center">問卷新增/修改</h1>
        <br />
        <div class="table-responsive">
            <br />
            <div align="right">
                <button type="button" name="add" id="add" class="btn btn-info">Add</button>
            </div>
            <br />
            <div id="alert_message"></div>
            <table id="user_data" style="width: 100%;">
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
                    url: "questions/fetch.php",
                    type: "POST"
                }
            });
        }

        function update_data(id, column_name, value) {
            $.ajax({
                url: "questions/update.php",
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
            html += '<td contenteditable ><select class="form-control bg-dark text-white" id="data3"><option>dropDownMenu</option><option>shortAnswerQuestions</option><option>yesNoQuestions</option></select></td>';
            html += '<td contenteditable id="data4"></td>';
            html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
            html += '</tr>';
            $('#user_data tbody').prepend(html);
        });


        $(document).on('click', '#insert', function() {
            var id = $('#data1').text();
            var question = $('#data2').text();
            var genre = $('#data3').val();
            var options = $('#data4').text();
            if ((question != '' &&
                    (genre == 'shortAnswerQuestions' || genre == 'yesNoQuestions')) || (question != '' &&
                    genre != '' && options != '')) {
                $.ajax({
                    url: "questions/insert.php",
                    method: "POST",
                    data: {
                        question: question,
                        genre: genre,
                        options: options
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
                    url: "questions/delete.php",
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