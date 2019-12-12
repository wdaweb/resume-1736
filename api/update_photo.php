<?php
include_once "../base.php";
$table=$_POST['table'];
$id=$_POST['id'];
$data=find($table,$id);
if(!empty($_FILES['photo']['tmp_name'])){
    $data['photo']="./photo/".$_FILES['photo']['name'];
    
    move_uploaded_file($_FILES['photo']['tmp_name'],".".$data['photo']);
    save($table,$data);

}
to("../admin.php?do=$table");
