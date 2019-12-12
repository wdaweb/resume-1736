<?php
include_once "../base.php";
$table=$_POST['table'];
$id=$_POST['id'];
$data=find($table,$id);
if(!empty($_FILES['file']['tmp_name'])){
    $data['name']=$_FILES['file']['name'];
    $data['type']=$_FILES['file']['type'];
    $data['path']="./file/".$_FILES['file']['name'];
   print_r( $data['path'] );
    move_uploaded_file($_FILES['file']['tmp_name'],"../file/".$data['name']);
    save($table,$data);

}
   
to("../admin.php?do=$table");
