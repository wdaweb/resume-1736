<?php
    include_once "../base.php";
    $table=$_POST['table'];
    if(!empty($_FILES) && $_FILES['photo']['error']==0){
        $type=$_FILES['photo']['type'];
        $filename=$_FILES['photo']['name'];
        $path= $filename;
        move_uploaded_file($_FILES['photo']['tmp_name'], "../photo/" .$path);
        echo $path;
    }
    
$sql="insert into photo (`photo`) values ('./photo/$path')";
$result=$pdo->exec($sql);
echo $sql;
if($result==1){
    echo "上傳成功";
}else{
    echo "失敗";
}
header("location:"."../admin.php?do=$table")
?>