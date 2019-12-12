<?php include_once "../base.php"?>
<form action="./api/add_exp.php" method="post" >
                    <table>
                    <tr>
                        <td>公司名稱</td>
                        <td> <input type="text" name="company" id="company" value=""></td>
                    </tr>  
                    <tr>  
                        <td>職位</td>
                        <td> <input type="text" name="title" id="title" value=""></td>
                    </tr>  
                    <tr> 
                        <td>年資</td>
                        <td> <input type="date" name="job_on" id="job_on" value=""> ~ <input type="date" name="job_out" id="job_out" value="<?=$u['job_out'];?>"></td>
                    </tr> 
                    <tr>   
                        <td>經歷</td>
                        <td><textarea  cols="80" rows="10" name="exp" id="exp"></textarea></td>
                    <tr>    
                    </table>

                    <table>
                        <tr>
                        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
                         <td><input type="submit" value="新增"> <input type="reset" value="重置"></td>  
                        </tr>
                    </table>
            </form>