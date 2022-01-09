<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        a {
            display: inline-block;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            line-height: 25px;
            color: #ffff;
        }
    </style>
</head>
<body>
<div class="container-fluid" style="max-width: 1020px;margin: 0 auto;">    
    <h2 class="text-center my-5">Hien thi danh sach hien mau</h2>  
    <?php
        require_once 'src/views/template/error.php';
    ?>

   <button class="btn btn-primary my-3">
   <a href="index.php?controller=manage&action=add">
        Thêm mới sách
    </a>
   </button>
    
    <table id="recordListing" class="table text-center table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>                   
                <th>Sex</th>                    
                <th>Age</th>
                <th>Group</th>
                <th>Date</th>
                <th>Phone</th>  
                <th>Detail</th>              
                <th>Update</th>              
                <th>Delete</th>              
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($bloods)): ?>
                <?php foreach ($bloods AS $blood) : ?>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=manage&action=detail&id=" . $blood['bd_id'];
                    $urlEdit =
                        "index.php?controller=manage&action=edit&id=" . $blood['bd_id'];
                    $urlDelete =
                        "index.php?controller=manage&action=delete&id=" . $blood['bd_id'];
                    ?>
                    <tr>
                        <td style="font-weight: 600"><?php echo $blood['bd_id'] ?></td>
                        <td style="font-weight: 600"><?php echo $blood['bd_name'] ?></td>
                        <td style="font-weight: 600"><?php echo $blood['bd_sex'] ?></td>
                        <td style="font-weight: 600"><?php echo $blood['bd_age'] ?></td>
                        <td style="font-weight: 600"><?php echo $blood['bd_bgroup'] ?></td>
                        <td style="font-weight: 600"><?php echo $blood['bd_reg_date'] ?></td>
                        <td style="font-weight: 600"><?php echo $blood['bd_phone'] ?></td>
                        <td>
                            <button type="button" class="btn btn-info">
                                <a  href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-warning">
                                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                            </button>
                        </td>
                        <td>
                        <button class="btn btn-danger">
                            <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                            href="<?php echo $urlDelete?>">
                                Xóa
                            </a>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table>
    
</div>
</body>

</html>




