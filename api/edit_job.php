<?php
include_once "../base.php";
$table=$_POST['table'];
foreach($_POST['id'] as $key =>$id){
    if(!empty($_POST['id'])){  
    $data=find($table,$id);

    
    $data['pos']=$_POST['pos'];
    $data['indu']=$_POST['indu'];
    $data['working']=$_POST['working'];
    $data['money1']=$_POST['money1'];
    $data['money2']=$_POST['money2'];
    $data['loca']=$_POST['loca'];
    
    save($table,$data);
     }     
}
to("../admin.php?do=$table");

?>
