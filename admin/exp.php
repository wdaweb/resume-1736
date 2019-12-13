<div class="title">工作經歷</div>
   <div class="content">
       <div class="content_">    
<form action="./api/edit_exp.php" method="post">
                <?php
               $table="exp";
               $rows=all($table);
                foreach($rows as $u){
                ?>
                    <table>
                    <tr>
                        <td>公司名稱&emsp;</td>
                        <td> <input type="text" name="company[]" id="company" value="<?=$u['company'];?>"></td>
                    </tr>  
                    <tr>  
                        <td>職位</td>
                        <td> <input type="text" name="title[]" id="title" value="<?=$u['title'];?>"></td>
                    </tr>  
                    <tr> 
                        <td>年資</td>
                        <td> <input type="date" name="job_on[]" id="job_on" value="<?=$u['job_on'];?>"> ~ <input type="date" name="job_out[]" id="job_out" value="<?=$u['job_out'];?>"></td>
                    </tr> 
                    <tr>   
                        <td>經歷</td>
                        <td><textarea  cols="80" rows="10" name="exp[]" id="exp"><?=$u['exp'];?></textarea></td>
                        <td>顯示</td>
                        <td><input type="checkbox" name="sh[]" value="<?=$u['id'];?>" <?=($u['sh']==1)?"checked":"";?>></td>
                        <td>刪除</td>
                        <td><input type="checkbox" name="del[]" value="<?=$u['id'];?>"></td><br>
                        <input type="hidden" name="id[]" value="<?=$u['id'];?>">
                    <tr>   
                     
                    </table>
                <?php
                }
                ?>
                    <table>
                    <tr>
                            <input type="hidden" name="table" value="<?=$table;?>">
                            <td><input type="button" value="新增" onclick="op('#cover','#cvr','./view/exp.php?table=<?=$table;?>')"></td>    
                            <td><input type="submit" value="編輯">&emsp;<i class="fas fa-pencil-alt"></i></td>    
                        </tr>
                    </table>
            </form>
        </div>
    </div>
