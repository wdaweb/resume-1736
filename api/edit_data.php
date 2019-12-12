<?php
include_once "../base.php";
$table=$_POST['table'];
foreach($_POST['id'] as $key =>$id){
    if(!empty($_POST['id'])){  
    $data=find($table,$id);

    
    $data['name']=$_POST['name'];
    $data['gender']=$_POST['gender'];
    $data['birth']=$_POST['birth'];
    $data['email']=$_POST['email'];
    $data['tel']=$_POST['tel'];
    $data['addr']=$_POST['addr'];
    $data['edu']=$_POST['edu'];
    save($table,$data);
     } 
}
to("../admin.php?do=$table");
    
?>