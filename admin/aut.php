<div class="title">自傳</div>
   <div class="content">
       <div class="content_">
            <form action="./api/edit_aut.php" method="post">
                    <table>
                        <tr>
                            <td>履歷範本</td>
                            <td>內容</td>
                            <td>顯示</td>
                            <td>刪除</td>
                        </tr>
                <?php
                $table="aut";
                $rows=all($table);
                foreach($rows as $u){
                ?>
                        <tr>
                            <td ><input type="text" name="kind[]"value="<?=$u['kind'];?>"></td>
                            <td ><textarea name="aut[]" id="aut"><?=$u['aut'];?></textarea></td>
                            <td><input type="checkbox" name="sh[]" value="<?=$u['id'];?>" <?=($u['sh']==1)?"checked":"";?>></td>
                            <td><input type="checkbox" name="del[]" value="<?=$u['id'];?>"></td><br>
                            <input type="hidden" name="id[]" value="<?=$u['id'];?>">

                        </tr>
                    </table>
                <?php
                }
                ?>
                    <table>
                        <tr>
                            <input type="hidden" name="table" value="<?=$table;?>">
                            <td><input type="button" value="新增" onclick="op('#cover','#cvr','./view/aut.php?table=<?=$table;?>')"></td>    
                            <td><input type="submit" value="編輯">&emsp;<i class="fas fa-pencil-alt"></i></td>    
                        </tr>
                    </table>
            </form>
        </div>
    </div>
 