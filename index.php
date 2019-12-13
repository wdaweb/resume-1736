<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resumes</title>
    <meta name="title" content="resumes">
    <meta name="description" content="resumes">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/css.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <i class="fas fa-home"></i> 首頁
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                        <i class="fas fa-tools"></i> 登入
                        </a>
                    </li>
                 </ul>
            </div>
        </div>
    </nav>
    <div class="container" id="content">     
            <div class="col-12 my-3">
                <h1 class="text-center text-info">個人介紹</h1>
                <hr class="bg-info">
            </div>
        <div class="row resumes">
            <div class="col-12 col-md-5 my-3">
            <?php
                $table="photo";
                $rows=all($table,['sh'=>'1']);
                foreach($rows as $u){
            ?>
                <img src="<?=$u['photo'];?>" style="width:250px;height:260px;border-radius:50%;">
            <?php
            }
            ?>
            </div>
            <div class="col-12 col-md-7 my-3 text-info align-self-center">
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
                  
            </div>
        </div>
            <div class="col-12 my-3">
                <h1 class="text-center text-info">工作經歷</h1>
                <hr class="bg-info">
            </div>
        <div class=" resumes ">
            <div class="col-12 my-3 text-info align-self-center">
                
                <?php
               $table="exp";
               $rows=all($table);
                foreach($rows as $u){
                ?>
                    <table>
                    <tr>
                        <td style="width:150px;">公司名稱&emsp;</td>
                        <td> <?=$u['company'];?></td>
                    </tr>  
                    <tr>  
                        <td>職位</td>
                        <td><?=$u['title'];?></td>
                    </tr>  
                    <tr> 
                        <td>年資</td>
                        <td><?=$u['job_on'];?> ~<?=$u['job_out'];?></td>
                    </tr> 
                    <tr>   
                        <td>經歷</td>
                        <td><?=$u['exp'];?></td>
                    <tr>   
                    </table>
                    <hr>
                <?php
                }
                ?>
               
            </div>
        </div>

        <div class="row fadeIn wow">
            <div class="col-12 my-3">
                <h1 class="text-center text-info">履歷</h1>
                <hr class="bg-info">
            </div>
        </div>
        <div class="row resumes lightSpeedIn wow">
            <div class="col-12  my-3 text-info align-self-center">
            <table>
                <?php
                $table="aut";
                $rows=all($table,['sh'=>1]);
                foreach($rows as $u){
                ?>
                        <tr>
                            <td>&emsp;&emsp;<?=$u['aut'];?></td>
                        </tr>
                    </table>
                <?php
                }
                ?>
                    <table>
            </div>
        </div>

        <div class="row fadeIn wow">
            <div class="col-12 my-3">
                <h1 class="text-center text-info">技能</h1>
                <hr class="bg-info">
            </div>
        </div>
        <div class="row resumes lightSpeedIn wow">
            <div class="col-12  my-3 text-info align-self-center">
                <p>
                <table>
                <?php
                $table="skill";
                $rows=all($table,['sh'=>1]);
                foreach($rows as $u){      
                    ?>
                <tr>
                        <td style="width:150px;"><?=$u['sort'];?>&emsp;&emsp;</td>
                        <td><?=$u['depict'];?></td>
                        <td><?=$u['skill'];?></td>
                </tr> 
                <?php
                }
                ?>               
                </table>
                </p>
            </div>
        </div>
        <div class="container" id="content">
        <div class="row bounceIn wow">
            <div class="col-12 my-3">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                                <div class="carousel-item active">
                                <?php
                $table="file";
                $rows=all($table);
                foreach($rows as $u){
                ?>                         
                    
                        <td><img src="<?=$u['path'];?>" style="width:0px;height:150px;"></td>
                        
                <?php
                }
                ?>            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row fadeIn wow">
            <div class="col-12 my-3">
                <h1 class="text-center text-info">作品集</h1>
                <hr class="bg-info">
            </div>
        </div>
       
                <?php
                $table="file";
                $rows=all($table);
                foreach($rows as $u){
                ?>                         
                    <tr>
                        <td><img src="<?=$u['path'];?>" class="img-thumbnail" style="width:350px;height:300px;"></td>&emsp;
                        <td><?=$u['note'];?></td>
                    </tr>
                <?php
                }
                ?>            
                </table>
        </div>
        <div class="row fadeIn wow">
            <div class="col-12 my-3">
                <h1 class="text-center text-info">生活照</h1>
                <hr class="bg-info">
            </div>
        </div>
                <?php
             $table="image";
             $rows=all($table);
                foreach($rows as $u){
                ?>                         
                    
                      <div><img src="<?=$u['image'];?>" style="width:300px;height:200px;"> <?=$u['note'];?></div> 
        
                <?php
                }
                ?>
                
                <div id="D"><a href="#" class="badge badge-dark ">top</a></div>
    </div>
    <div class="container-fluid bg-primary text-white text-center" id="footer">
        <div class="row">
            <div class="col-12">
                <ul class="nav justify-content-center">
                <li class="nav-item">
                       聯絡資訊: tar:098758574<p>email:wendy0970@yahoo.com
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://www.facebook.com/profile.php?id=100002795194942">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                   
                </ul>
                <h5>&copy; <script>
                </script>最新更新日期2019/12/13</h5>
            </div>
        </div>
    </div>
<script src="./js/jquery-3.4.1.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/wow.min.js"></script>


</body>
</html>