<style>
    td{
        border-bottom:2px solid gray;
}
</style>
<?php include_once "../base.php"?>
<form action="./api/edit_data.php" method="post">
                <?php
                $table="data";
               $rows=all($table);
                foreach($rows as $u){
                ?>
                    <table>
                        <tr>
                            <td>姓名</td> 
                            <td><input type="text" name="name" id="name" value="<?=$u['name'];?>"></td>
                        </tr>
                        <tr>
                            <td>性別</td>
                            <td><input type="text" name="gender" id="gender" value="<?=$u['gender'];?>"></td>
                        </tr>
                    
                        <tr>
                            <td>出生年月日</td>
                            <td><input type="date" name="birth" id="birth" value="<?=$u['birth'];?>"></td>
                        </tr>
                        <tr>
                            <td>信箱</td>
                            <td><input type="text" name="email" id="email" value="<?=$u['email'];?>"></td>
                        </tr>
                        <tr>
                            <td>電話</td>
                            <td><input type="text" name="tel" id="tel" value="<?=$u['tel'];?>"></td>
                        </tr>
                        <tr>
                            <td>地址</td>
                            <td><input type="text" name="addr" id="addr" value="<?=$u['addr'];?>"></td>
                        </tr>
                        <tr>
                            <td>最高學歷</td>
                            <td><input type="text" name="edu" id="edu" value="<?=$u['edu'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$u['id'];?>">
                        </tr>
                    </table>
                <?php
                }
                ?>
                    <table>
                        <tr>
                        <input type="hidden" name="table" value="<?=$table;?>">
                        <td><input type="submit" value="更新"><input type="reset" value="重置"></td>    
                        </tr>
                    </table>
            </form>