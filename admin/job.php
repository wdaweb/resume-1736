<div class="title">期望工作</div>
    <div class="content">
        <div class="content_">
        <form action="./api/edit_job.php" method="post">
                <?php
                   $table="job";
                   $rows=all($table);
                    foreach($rows as $u){
                ?>
                    <table>
                        <tr>
                            <td>希望獲得的職位:</td>
                            <td><input type="text" name="pos" id="pos" value="<?=$u['pos']; ?>" > </td>
                        </tr>
                        <tr>
                            <td>所屬的產業是:</td>
                            <td><input type="text" name="indu" id="indu" value="<?=$u['indu']; ?>"></td>
                        </tr>
                        <tr>
                            <td>最快可上班日:</td>
                            <td>錄取後，<input type="data" name="working" id="working" value="<?=$u['working']; ?>"></td>
                        </tr>
                        <tr>
                            <td>你期望的月薪區間是:</td>
                            <td><input type="text" name="money1" value="<?=$u['money1'];?>" style="width:285px">  ~  <input type="text" name="money2"  value="<?=$u['money2'];?>"style="width:285px"></td>
                        </tr>
                        <tr>
                            <td>您期望的工作地點是:</td>
                            <td><input type="text" name="loca" id="loca" value="<?=$u['loca']; ?>"></td>
                            <input type="hidden" name="id[]" value="<?=$u['id'];?>">
                        </tr>                        
                    </table>
                <?php
                }
                ?> 
                <table>
                    <tr>
                        <input type="hidden" name="table" value="<?=$table;?>">
                        <td><input type="submit" value="編輯"><input type="reset" value="重置"> &emsp;<i class="fas fa-pencil-alt"></i>    </td>      
                         
                    </tr>
                </table>
            </form>      
        </div>
    </div>

