<h3>圖片新增上傳</h3>
<form action="./api/add_image.php" method="post" enctype="multipart/form-data">
    檔案: <input type="file" name="image"><br>
    說明: <input type="text" name="note">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="submit" value="上傳">
</form>