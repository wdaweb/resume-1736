<?php
    include_once "../base.php";
    $table=$_POST['table'];
    if(!empty($_FILES) && $_FILES['image']['error']==0){
        $note=$_POST['note'];
        $type=$_FILES['image']['type'];
        $filename=$_FILES['image']['name'];
        $path= $filename;
        move_uploaded_file($_FILES['image']['tmp_name'], "../image/" .$path);
        echo $path;
    }
    
$sql="insert into image (`image`,`note`) values ('./image/$path','$note')";
$result=$pdo->exec($sql);
echo $sql;
if($result==1){
    echo "上傳成功";
}else{
    echo "失敗";
}
header("location:"."../admin.php?do=$table")
?>