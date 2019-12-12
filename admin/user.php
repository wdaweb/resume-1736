<div class="title">管理帳戶</div>
    <div class="content">
        <div class="content_">
        <form action="./api/edit_user.php" method="post">
            <?php
            $table="user";
            $rows=all($table);
                foreach($rows as $u){
            ?>
                <table>
                    <tr>
                        <td>帳號</td>
                        <td>密碼</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="acc" value="<?=$u['acc'];?>"></td>
                        <td><input type="password" name="pw" value="<?=$u['pw'];?>"></td>
                        <input type="hidden" name="id[]" value="<?=$u['id'];?>">
                    </tr>
                    <tr>
                        <input type="hidden" name="table" value="<?=$table;?>">
                        <td><input type="submit" value="編輯"><input type="reset" value="重置">&emsp;<i class="fas fa-pencil-alt"></i></td>    
                    </tr>
                </table>
            <?php
            }
            ?>
            </form> 
        </div>
    </div>
