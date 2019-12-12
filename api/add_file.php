<?php
    include_once "../base.php";
    $table=$_POST['table'];
    if(!empty($_FILES) && $_FILES['file']['error']==0){
        $note=$_POST['note'];
        $type=$_FILES['file']['type'];
        $filename=$_FILES['file']['name'];
        $path= $filename;
        move_uploaded_file($_FILES['file']['tmp_name'], "../file/" .$path);
        echo $path;
    }
    
$sql="insert into file (`name`,`type`,`path`,`note`) values ('$filename','$type','./file/$path','$note')";
$result=$pdo->exec($sql);
echo $sql;
if($result==1){
    echo "上傳成功";
}else{
    echo "失敗";
}
to("../admin.php?do=$table");
?>