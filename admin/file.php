<div class="title">檔案資訊</div>
    <div class="content">
        <div class="content_">
            <form action="./api/edit_file.php" method="post">
                <table>
                    <tr>
                        <td>縮圖</td>
                        <td>說明</td>
                        <td>首次上傳</td>
                        <td>顯示</td>
                        <td>刪除</td>               
                    </tr>   
                <?php
                $table="file";
                $rows=all($table);
                foreach($rows as $u){
                ?>                         
                    <tr>
                        <td><img src="<?=$u['path'];?>" style="width:200px;height:150px;"></td>
                        <td><input type="text" name="note[]" value="<?=$u['note'];?>"></td>
                        <td><?=$u['create_time'];?></td>
                        <td><input type="checkbox" name="sh[]" value="<?=$u['id'];?>" <?=($u['sh']==1)?"checked":"";?>></td>
                        <td><input type="checkbox" name="del[]" value="<?=$u['id'];?>"></td>
                        <td><input type="button" value="更新檔案" onclick="op('#cover','#cvr','./view/update_file.php?id=<?=$u['id'];?>&table=<?=$table;?>')"></td>
                        <td><input type="hidden" name="id[]" value="<?=$u['id'];?>"></td>
                    </tr>
                <?php
                }
                ?>            
                </table>

                <table>
                    <tr>
                        <input type="hidden" name="table" value="<?=$table;?>">
                        <td><input type="button" value="新增檔案" onclick="op('#cover','#cvr','./view/add_file.php?table=<?=$table;?>')"></td>
                        <td><input type="submit" value="編輯"><input type="reset" value="重置">&emsp;<i class="fas fa-pencil-alt"></i></td>
                    </tr>
                </table>
            </form>
        </div>
    <div>

