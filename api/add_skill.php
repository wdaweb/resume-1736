<?php include_once "../base.php";

 $table=$_POST['table'];

 echo $table;
if(!empty($_POST['sort']) && !empty($_POST['depict']) && !empty($_POST['skill']) )
    $data["sort"]=$_POST['sort'];
    $data["depict"]=$_POST['depict'];
    $data["skill"]=$_POST['skill'];
 save($table,$data);
 to("../admin.php?do=$table");
?>