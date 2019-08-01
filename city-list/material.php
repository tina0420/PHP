<!-- header start -->
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
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered table-hover" id="city-table">
                    <thead>
                        <tr>
                            <th scope="col" width="30%">城市名字</th>
                            <th scope="col" width="25%">城市人口</th>
                            <th scope="col" width="25%">國家代碼</th>
                            <th scope="col" width="20%">編輯/刪除</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Taipei</td>
                            <td>3000000</td>
                            <td>TWN</td>
                            <td>
                                <a href="edit.php?id=1" class="btn btn-outline-info">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button delete-id="1" class="btn btn-outline-warning delete-btn">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tainan</td>
                            <td>2300000</td>
                            <td>TWN</td>
                            <td>
                                <a href="edit.php?id=2" class="btn btn-outline-info">
                                    <i class="far fa-edit"></i>
                                </a>
                                <button delete-id="2" class="btn btn-outline-warning delete-btn">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class='alert alert-info'>No data found.</div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-xs-12">
                <form action="create.php" method="POST">
                    <div class="form-group">
                        <label class="col-form-label" for="city-name">城市名</label>
                        <input type="text" class="form-control" name="city-name" id="city-name">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label" for="city-population">城市人口</label>
                        <input type="text" class="form-control" name="city-population" id="city-population">
                    </div>
                    <div class="form-group">
                        <label for="country-code">國家代碼</label>
                        <select class="form-control" name="country-code" id="country-code">
                            <option value="TWN">TWN</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">新增</button>
                    <a href="#" class="btn btn-outline-secondary">回首頁</a>
                </form>
            </div>
        </div>
    </div>
