<?php include_once "../base.php";

 $table=$_POST['table'];

 echo $table;
if(!empty($_POST['company']) && !empty($_POST['title']) && !empty($_POST['job_on']) && !empty($_POST['job_out']) && !empty($_POST['exp']))
    $data["company"]=$_POST['company'];
    $data["title"]=$_POST['title'];
    $data["job_on"]=$_POST['job_on'];
    $data["job_out"]=$_POST['job_out'];
    $data["exp"]=$_POST['exp'];
   
 save($table,$data);
 to("../admin.php?do=$table");
?>



