
<div class="title">個人資料</div>
    <div class="content">
        <div class="photo">
        <?php
                $table="photo";
                $rows=all($table,['sh'=>'1']);
                foreach($rows as $u){
        ?>
            <img src="<?=$u['photo'];?>" style="width:300px;height:310px;border-radius:50%;">
        <?php
                }
                ?>
               <input type="button" value="大頭照上傳" onclick="op('#cover','#cvr','./view/photo.php?table=<?=$table;?>')">
            </div>
        <div class="">
           <div style="position:relative;left:550px;top:-300px;font-size:1.5em;line-height:60px;"> <form  method="post">
                <?php
                $table="data";
               $rows=all($table);
                foreach($rows as $u){
                ?>
                    <table >
                        <tr>
                            <td>姓&emsp;&emsp;名</td> 
                            <td><?=$u['name'];?></td>
                        </tr>
                        <tr>
                            <td>性&emsp;&emsp;別</td>
                            <td><?=$u['gender'];?></td>
                        </tr>
                    
                        <tr>
                            <td>出生年月日&emsp;</td>
                            <td><?=$u['birth'];?></td>
                        </tr>
                        <tr>
                            <td>信&emsp;&emsp;箱</td>
                            <td><?=$u['email'];?></td>
                        </tr>
                        <tr>
                            <td>電&emsp;&emsp;話</td>
                            <td><?=$u['tel'];?></td>
                        </tr>
                        <tr>
                            <td>地&emsp;&emsp;址</td>
                            <td><?=$u['addr'];?></td>
                        </tr>
                        <tr>
                            <td>最高學歷&emsp;</td>
                            <td><?=$u['edu'];?></td>
                        </tr>
                    </table>
                <?php
                }
                ?>
                    <table>
                        <tr>
                            <td><input type="button" value="編輯" onclick="op('#cover','#cvr','./view/data.php')">&emsp;<i class="fas fa-pencil-alt"></i></td>    
                            
                        </tr>
                    </table>
            </form>
            </div>
        </div>
    </div>

