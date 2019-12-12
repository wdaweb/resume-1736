 <?php include_once "../base.php";

 $table=$_POST['table'];

 echo $table;
if(!empty($_POST['kind']) && !empty($_POST['aut']))
    $data["kind"]=$_POST['kind'];
    $data["aut"]=$_POST['aut'];
 save($table,$data);
 to("../admin.php?do=$table");
?>