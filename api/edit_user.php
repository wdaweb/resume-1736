<?php
include_once "../base.php";
$table=$_POST['table'];
foreach($_POST['id'] as $key =>$id){
    if(!empty($_POST['id'])){  
    $data=find($table,$id);

    
    $data['acc']=$_POST['acc'];
    $data['pw']=$_POST['pw'];
    save($table,$data);
     } 
}
to("../admin.php?do=$table");
    
?>