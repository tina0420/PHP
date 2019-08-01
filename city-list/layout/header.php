<?php
include "./config/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>City List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/litera/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./index.php">City List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="./create.php">新增資料</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
        <div class="input-group">
            <input class="form-control" type="text" name="search-input" placeholder="城市名 / 國家代碼">
            <span class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">
                <i class="fa fa-search"></i>
            </button>
            </span>
        </div>
        </form>
    </div>
    </nav>
<!-- header end -->