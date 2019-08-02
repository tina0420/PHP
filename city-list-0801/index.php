<?php
include "./layout/header.php";
include "./class/city.php";
// 新增城市物件
$city = new City();
$stmt = $city->getAllCity();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print_r($data);
?>
<!-- container start-->
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
                    <?php foreach($data as $row):?>
                    <tr>
                        <td><?= $row["city_name"]?></td>
                        <td><?= $row["population"]?></td>
                        <td><?= $row["country_code"]?></td>
                        <td>
                            <a href="edit.php?id=<?= $row["id"]?>" class="btn btn-outline-info">
                                <i class="far fa-edit"></i>
                            </a>
                            <button delete-id="<?= $row["id"]?>" class="btn btn-outline-warning delete-btn">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <div class='alert alert-info'>No data found.</div>
        </div>
    </div>
</div>
<!-- container end-->
<?php
include "./layout/footer.php";
?>