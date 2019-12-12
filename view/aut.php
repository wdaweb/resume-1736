<h3>新增自傳</h3>
<hr>
<form action="./api/add_aut.php" method="post" enctype="multipart/form-data" >
    <table>
        <tr>
            <td>履歷範本</td>
            <td>內容</td>
        </tr>  
        <tr>
            <td><input type="text" name="kind"value=""></td>
            <td><textarea  cols="50" rows="10" name="aut" id="aut"></textarea></td>
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