<?php include_once "../base.php"?>
<div class="title">圖片管理</div>
    <div class="content">
        <div class="content_">
            <form action="./api/edit_photo.php" method="post">
                <table>
                    <tr>
                        <td>大頭照圖片</td>
                        <td>顯示</td>
                        <td>刪除</td>
                    </tr>   
                <?php
             $table="photo";
             $rows=all($table);
                foreach($rows as $u){
                ?>                         
                    <tr>
                        <td><img src="<?=$u['photo'];?>" style="width:300px;height:350px;"> </td>
                        <td><input type="radio" name="sh" value="<?=$u['id'];?>" <?=($u['sh']==1)?"checked":"";?>></td>
                        <td><input type="checkbox" name="del[]" value="<?=$u['id'];?>"></td>
                        <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','./view/update_photo.php?id=<?=$u['id'];?>&table=<?=$table;?>')"></td>
                        <td><input type="hidden" name="id[]" value="<?=$u['id'];?>"></td>

                    </tr>
                <?php
                }
                ?>            
                </table>

                <table>
                    <tr>
                        <td><input type="hidden" name="table" value="<?=$table;?>"></td>
                        <td><input type="button" value="新增圖片" onclick="op('#cover','#cvr','./view/add_photo.php?table=<?=$table;?>')"></td>
                        <td><input type="submit" value="編輯"><input type="reset" value="重置"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>