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
        }
    </style>
</head>
<body>
    <div class="container contact">    
    <h2 class="text-center my-3">Chi tieu nguoi hien mau</h2> 
    <button class="btn btn-primary my-3">
        <a href="index.php?controller=manage&action=index">Home</a> 
    </button>
    <div class="">        
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
                </tr>
            </thead>
            <?php if (!empty($blood)): ?>
            <tr>
                <td><?php echo $blood['bd_id'] ?></td>
                <td><?php echo $blood['bd_name'] ?></td>
                <td><?php echo $blood['bd_sex'] ?></td>
                <td><?php echo $blood['bd_age'] ?></td>
                <td><?php echo $blood['bd_bgroup'] ?></td>
                <td><?php echo $blood['bd_reg_date'] ?></td>
                <td><?php echo $blood['bd_phone'] ?></td>
            </tr>
            <?php else: ?>
            <tr>
                <td colspan="2">KHông có dữ liệu</td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
</body>


</html>


