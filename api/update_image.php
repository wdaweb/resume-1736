<?php
include_once "../base.php";
$table=$_POST['table'];
$id=$_POST['id'];
$data=find($table,$id);
if(!empty($_FILES['file']['tmp_name'])){
    $data['image']="./image/".$_FILES['file']['name'];
    
    move_uploaded_file($_FILES['file']['tmp_name'],".".$data['image']);
    save($table,$data);

}
to("../admin.php?do=$table");
