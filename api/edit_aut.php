 <?php include_once "../base.php";
 
 $table=$_POST['table'];
echo $table;
 foreach($_POST['id'] as $key =>$id){
     if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
         del($table,$id);
     }else{
         $data=find($table,$id);
         $data['kind']=$_POST['kind'][$key];
         $data['aut']=$_POST['aut'][$key];
         $data['sh']=(in_array($id,$_POST['sh']))?1:0;
         save($table,$data);
     }
 }
 to("../admin.php?do=$table");
 ?>
 