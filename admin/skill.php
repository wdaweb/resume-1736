<div class="title">技能項目</div>
   <div class="content">
       <div class="content_">
            <form action="./api/edit_skill.php" method="post">
                <table>
                <tr>
                    <td>類型</td>
                    <td>描述</td>
                    <td>技能工具</td>
                    <td>顯示</td>
                    <td>刪除</td>
                </tr>
                <?php
                $table="skill";
                $rows=all($table);
                foreach($rows as $u){      
                    ?>
            <tr>
                    <td><input type="text" name="sort[]" value="<?=$u['sort'];?>"></td>
                    <td><textarea  cols="50" rows="10" name="depict[]" ><?=$u['depict'];?></textarea></td>
                    <td><input type="text" name="skill[]" value="<?=$u['skill'];?>"></td>
                    <td><input type="checkbox" name="sh[]" value="<?=$u['id'];?>" <?=($u['sh']==1)?"checked":"";?>></td>
                    <td><input type="checkbox" name="del[]" value="<?=$u['id'];?>"></td><br>
                    <input type="hidden" name="id[]" value="<?=$u['id'];?>">
            </tr> 
            <?php
                }
            ?>               
                </table>
                <table>
                    <tr>
                        <input type="hidden" name="table" value="<?=$table;?>">
                        <td><input type="button" value="新增" onclick="op('#cover','#cvr','./view/skill.php?table=<?=$table;?>')"></td>    
                        <td><input type="submit" value="編輯"><input type="reset" value="重置">&emsp;<i class="fas fa-pencil-alt"></i></td>  
                    </tr>
                </table>
            </form>
        </div>
    </div>
