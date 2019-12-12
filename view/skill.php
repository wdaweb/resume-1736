<h3>新增技能</h3>
<hr>
<form action="./api/add_skill.php" method="post" enctype="multipart/form-data" >
    <table>
        <tr>
            <td>類型</td>
            <td>描述</td>
            <td>技能工具</td>
        </tr>  
        <tr>
            <td><input type="text" name="sort"value=""></td>
            <td><textarea  cols="50" rows="10" name="depict"></textarea></td>
            <td><input type="text" name="skill"value=""></td>
        </tr> 
        
        <tr class="cent">
            <td colspan="2">
                <input type="hidden" name="table" value="<?=$_GET['table'];?>">
                <input type="submit" value="新增">
                <input type="reset" value="重置">
            </td>
            
        </tr>
    </table>

</form>