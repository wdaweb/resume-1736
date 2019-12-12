<div class="title">圖片管理</div>
    <div class="content">
        <div class="content_">
            <form action="./api/edit_image.php" method="post">
                <table>
                    <tr>
                        <td>網頁用圖片</td>
                        <td>說明</td>
                        <td>顯示</td>
                        <td>刪除</td>
                    </tr>   
                <?php
             $table="image";
             $rows=all($table);
                foreach($rows as $u){
                ?>                         
                    <tr>
                        <td><img src="<?=$u['image'];?>" style="width:300px;height:200px;"> </td>
                        <td><input type="text" name="note[]" value="<?=$u['note'];?>"></input></td>
                        <td><input type="checkbox" name="sh[]" value="<?=$u['id'];?>" <?=($u['sh']==1)?"checked":"";?>></td>
                        <td><input type="checkbox" name="del[]" value="<?=$u['id'];?>"></td>
                        <td><input type="button" value="更新圖片" onclick="op('#cover','#cvr','./view/update_image.php?id=<?=$u['id'];?>&table=<?=$table;?>')"></td>
                        <td><input type="hidden" name="id[]" value="<?=$u['id'];?>"></td>

                    </tr>
                <?php
                }
                ?>            
                </table>

                <table>
                    <tr>
                        <td><input type="hidden" name="table" value="<?=$table;?>"></td>
                        <td><input type="button" value="新增圖片" onclick="op('#cover','#cvr','./view/add_image.php?table=<?=$table;?>')"></td>
                        <td><input type="submit" value="編輯"><input type="reset" value="重置">&emsp;<i class="fas fa-pencil-alt"></i></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

