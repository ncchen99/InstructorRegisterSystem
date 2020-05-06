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