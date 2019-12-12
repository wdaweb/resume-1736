<h3>檔案新增上傳</h3>
<form action="./api/add_file.php" method="post" enctype="multipart/form-data">
    檔案: <input type="file" name="file"><br>
    說明: <input type="text" name="note">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="submit" value="上傳">
</form>