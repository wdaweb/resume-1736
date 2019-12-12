<?php include_once "../base.php";
 
 $table=$_POST['table'];
echo $table;
 foreach($_POST['id'] as $key =>$id){
     if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
         del($table,$id);
     }else{
         $data=find($table,$id);
         $data['company']=$_POST['company'][$key];
         $data['title']=$_POST['title'][$key];
         $data['job_on']=$_POST['job_on'][$key];
         $data['job_out']=$_POST['job_out'][$key];
         $data['exp']=$_POST['exp'][$key];
        
         $data['sh']=(in_array($id,$_POST['sh']))?1:0;
         save($table,$data);
     }
 }
 to("../admin.php?do=$table");
 ?>
