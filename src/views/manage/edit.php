<div style="color: red">
    <?php echo $error; ?>
</div>
<form action="" method="post">
    Name :
    <input type="text" require name="txtName" value="<?php echo isset($_POST['txtName']) ? $_POST['txtName'] : $blood['bd_name']?>"/>
    <br>
    Sex :
    <input type="text" require name="txtSex" value="<?php echo isset($_POST['txtSex']) ? $_POST['txtSex'] : $blood['bd_sex']?>" />
    <br>
    Age :
    <input type="text" require name="txtAge" value="<?php echo isset($_POST['txtAge']) ? $_POST['txtAge'] : $blood['bd_age']?>" />
    <br>
    Group :
    <input type="text" require name="txtGroup" value="<?php echo isset($_POST['txtGroup']) ? $_POST['txtGroup'] : $blood['bd_bgroup']?>" />
    <br>
    Date :
    <input type="text" require name="txtDate" value="<?php echo isset($_POST['txtDate']) ? $_POST['txtDate'] : $blood['bd_reg_date']?>" />
    <br>
    Phone :
    <input type="text" require name="txtPhone" value="<?php echo isset($_POST['txtPhone']) ? $_POST['txtPhone'] : $blood['bd_phone']?>" />
    <br>
    <input type="submit" name="submit" value="Update" />
</form>