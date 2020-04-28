<?php
session_start();
require 'header.php';
if (!isset($_SESSION['user'])) {
    echo "<script>location='./../index.php';</script>";
} else if ($_SESSION['user']['authority'] == 'student')
    echo "<script>location='./../index.php';</script>";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="show_table.php">
        <img src="../assets/todo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="show_table.php">查看回應</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">新增/刪除問題</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">使用者設定</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sql_execution.php">SQL指令<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link" href="../logout.php">登出</a></li>
        </ul>
    </div>
</nav>

<style>
    .table-ncc {
        margin: 30px;
    }
</style>


<div class="container">
    <div class="bs-docs-section">
            <h1><span class="blue">&lt;</span>SQL<span class="blue">&gt;</span> <span class="yellow">指令</pan>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1 id="tables">Tables</h1>
                </div>

                <div class="bs-component">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Type</th>
                                <th scope="col">Column heading</th>
                                <th scope="col">Column heading</th>
                                <th scope="col">Column heading</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <th scope="row">Active</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr>
                                <th scope="row">Default</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-primary">
                                <th scope="row">Primary</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-secondary">
                                <th scope="row">Secondary</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-success">
                                <th scope="row">Success</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-danger">
                                <th scope="row">Danger</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-warning">
                                <th scope="row">Warning</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Info</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-light">
                                <th scope="row">Light</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-dark">
                                <th scope="row">Dark</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /example -->
            </div>
        </div>
    </div>
</div>

<?php require '../footer.php'; ?>