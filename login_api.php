<?php 
include_once "base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];




$sql="select * from user where acc='$acc' && pw='$pw'";
//  echo $sql;
$data=$pdo->query($sql)->fetch();

if(!empty($data)){
    echo "登入成功";
    // to("../admin.php?do=data");
    header("location:admin.php");
}else{
    // echo "<script>alert('帳號密碼有誤')</script>";
    header("location:login.php");
}
?>