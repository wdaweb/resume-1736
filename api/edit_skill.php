<?php include_once "../base.php";
 
$table=$_POST['table'];
echo $table;
foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        del($table,$id);
    }else{
        $data=find($table,$id);
        print_r( $data);
        $data['sort']=$_POST['sort'][$key];
        $data['depict']=$_POST['depict'][$key];
        $data['skill']=$_POST['skill'][$key];
        $data['sh']=(in_array($id,$_POST['sh']))?1:0;
        save($table,$data);
    }
}
to("../admin.php?do=$table");
?>
<!-- 繪圖
長期網路繪圖接案，合作廠商有 競舞娛樂、騰訊台灣分部等等。  客製化插圖、漫畫與社群圖素。
- Adobe Photoshop
- Adobe Photoshop
1

編輯 編輯
複製 複製
刪除 刪除
2
前端工程
有別一般網頁設計師，我是可以獨立串接API與撰寫前端框架的開發者，因此設計更能友善開發流程。
- HTML
- Javascript / jQuery
-CSS
-AJAX
-Boostarp
1

編輯 編輯
複製 複製
刪除 刪除
3
後端工程
精通php後端語言，了解前端基礎，撰寫web API，資料庫處理
-php
-SQL -->