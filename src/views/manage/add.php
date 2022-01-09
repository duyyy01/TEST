<h1>
    Thêm mới blood
</h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Name :
    <input type="text" require name="txtName" value="" />
    <br />
    Sex :
    <input type="text" require name="txtSex" value="" />
    <br />
    Age :
    <input type="text" require name="txtAge" value="" />
    <br />
    Group :
    <input type="text" require name="txtGroup" value="" />
    <br />
    Date :
    <input type="text" require name="txtDate" value="" />
    <br />
    Phone :
    <input type="text" require name="txtPhone" value="" />
   
    <input type="submit" require name="submit" value="Save" />
</form>