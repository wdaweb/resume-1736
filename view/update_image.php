<h2>圖片更新上傳</h2>
<form action="./api/update_image.php" method="post" enctype="multipart/form-data">
    檔案: <input type="file" name="file" ><br>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
    <input type="submit" value="上傳">
    <input type="reset" value="重置">
</form>