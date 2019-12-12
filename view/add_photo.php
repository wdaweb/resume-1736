<h3>圖片新增上傳</h3>
<form action="./api/add_photo.php" method="post" enctype="multipart/form-data">
    檔案: <input type="file" name="photo"><br>
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="submit" value="上傳">
</form>