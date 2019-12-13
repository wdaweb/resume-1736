<?php include_once "base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>個人資料後台編輯</title>
    <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Noto+Sans+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/all.min.css">
    <style>
#cover{
	width:100%;
	height:100%;
	position:fixed;
	z-index:5;
	background:rgba(51,51,51,0.4);
	top:0px;
	left:0px;
	overflow:auto;
}
#coverr{
	width:50%;
	min-width:300px;
	max-width:800px;
	height:80%;
	min-height:300px;
	position:absolute;
	z-index:5;
	background:#ffffff;
	top:0px;
	left:0px;
	right:0px;
	bottom:0px;
	margin:auto;
	overflow:auto;
}       
body{
    font-weight:bold;
    font-family: 'Noto Sans TC', sans-serif;
  
   
}
a{
    text-decoration:none;
        
} 
a:visited{
        color:black;
    }
    a:hover{
        color:white;
        text-shadow:2px 2px 4px #000000;
        font-size:1.3em;
    }
    a:active{
        color:#FFFFBB;
        text-shadow:2px 2px 7px #000000;
        font-size:1.3em;

    }
*{
   margin:0;
   box-sizing: border-box;
}
.BG{
    width:100%;
    height:100%;
    margin:0px;
}
.main{
    width:100%;
    height:160px;
    border-bottom:4px dashed #003377;
   

}
.top{
    width:60%;
    height:150px;
    background:white;
    position:relative;top:-90px;left:-20px;
    font-family: 'Love Ya Like A Sister', cursive;
  
    
}
.login{
    width:300px;
    height:150px;
    position:relative;top:-90%;left:90%;
}
.Bg{
    width:100%;
    height:800px;
    background:orange;
}
.meun{
    width:20%;
    height:100%;
    background:#DDDDDD;
    position:relative;
    padding:10px 100px;
    text-align:center;
    border-right:4px dashed #003377;
    font-size:2em;
    line-height:90px;
    
}
.bg{
    width:80%;
    height:100%;
    background:white;
    position:relative;
    top:-100%;left:20%;
}
.footer{
    width:100%;
    height:50px;
    border:4px dashed #003377;
    background:#0044BB;
    justify-content: baseline;
}
h1{
    font-size:5.5em;
}
.title{
    font-size:2em;
    padding:20px;
    border-bottom:10px solid #003377;
}
.content{
    padding:20px 50px;
    

}
.content_{
    font-size:1.5em;
    position:absolute;
    line-height:30px;
    overflow: auto;
    height:500px;
    width:90%;
    
}
input{
    background:none;
    border:none;
    height:40px;
    font-size:1.2em;
    font-weight:900;
}
.content_ td{
    border-bottom:2px solid gray;
}

td textarea{
    border:none;
    font-size:1em;
    width:400px;
    height:200px;
}

</style>
    <script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
</head>
<body>
<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
				onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
<iframe style="display:none;" name="back" id="back"></iframe>
<div class="BG">
    <div class="main">
        <div class="top">
        <svg version="1.1" id="åå±¤_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1334 750" style="" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#0000FF;stroke-width:4;stroke-miterlimit:10;}
	.st1{fill:url(#SVGID_1_);stroke:#0000FF;stroke-width:4;stroke-miterlimit:10;}
	.st2{font-family:'Algerian';}
	.st3{font-size:72px;}
</style>
<path class="st0 zacCXANs_0" d="M601.1,233.8c10.4-4.3,15.8-15.2,12-24.4c-1.5-3.5-4.1-6.3-7.3-8c0.1-2.5-0.4-5-1.4-7.5
	c-3.9-9.3-14.6-13.8-23.9-9.9c-2.2,0.9-4.1,2.2-5.7,3.7c-5.7-3.9-13.6-4.8-20.9-1.8c-5.1,2.1-9.1,5.9-11.4,10.3
	c-3.8-1-7.9-0.9-11.8,0.8c-9.3,3.9-13.8,14.6-9.9,23.9c0.6,1.5,1.4,2.9,2.4,4.1c-4.1,4.8-5.4,11.7-2.8,18c1.5,3.6,4.1,6.5,7.3,8.4"></path>
<path class="st0 zacCXANs_1" d="M527.7,251.4c4.6,2.7,10.3,3.3,15.6,1.1c3.6-1.5,6.5-4.1,8.3-7.3c5,6.4,14.7,8.6,23.5,4.9
	c7-2.9,11.7-8.7,12.9-15c4.1,0.9,8.8,0.5,13.2-1.3"></path>
<path class="st0 zacCXANs_2" d="M331.8,267c4.1,1.3,8.7,1.7,13.2,1c6.3-1,11.8-4.1,16-8.4c5.6,12,20,19.2,35.4,16.7c12.1-2,21.8-9.4,26.1-18.9
	c6.2,3,13.7,4.2,21.4,2.9c18.1-2.9,30.8-18.2,28.2-34.1c-1-6.1-4.1-11.5-8.6-15.5c1-3.9,1.3-8.1,0.6-12.4
	c-2.6-16.3-17.9-27.3-34.2-24.7c-3.8,0.6-7.3,1.9-10.4,3.8c-7.6-8.4-19.7-12.8-32.4-10.8c-8.9,1.4-16.6,5.9-22,12
	c-5.6-3.1-12.2-4.4-19-3.3c-16.3,2.6-27.3,17.9-24.7,34.2c0.4,2.6,1.2,5.1,2.2,7.4c-8.3,6.1-12.9,16.6-11.2,27.4
	c1,6.3,4.1,11.9,8.4,16"></path>
<path class="st0 zacCXANs_3" d="M320.8,260.4c3.1,3,6.9,5.3,11,6.6"></path>
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="242.637" y1="515.2854" x2="371.5946" y2="658.0859" gradientTransform="matrix(1 0 0 -1 0 750)">
	<stop offset="0" style="stop-color:#1B148A"></stop>
	<stop offset="0.5314" style="stop-color:#0000FF"></stop>
</linearGradient>
<path class="st1 zacCXANs_4" d="M218,248.4c9.2,5.4,20.8,6.6,31.4,2.2c7.3-3.1,13.1-8.3,16.8-14.7c10.1,12.9,29.6,17.4,47.5,10
	c14.1-5.8,23.5-17.6,26-30.3c8.4,1.8,17.7,1.1,26.6-2.6c21-8.7,31.9-30.8,24.2-49.2c-3-7.1-8.2-12.6-14.8-16.2
	c0.1-5-0.8-10.1-2.8-15.1c-7.8-18.9-29.5-27.8-48.3-19.9c-4.4,1.8-8.2,4.4-11.5,7.5c-11.6-7.9-27.4-9.8-42.1-3.6
	c-10.4,4.3-18.3,11.8-23,20.7c-7.6-2.1-16-1.7-23.9,1.5c-18.9,7.8-27.8,29.5-19.9,48.3c1.3,3,2.9,5.8,4.8,8.3
	c-8.2,9.8-10.8,23.7-5.6,36.3C206.4,238.9,211.7,244.7,218,248.4"></path>
<text transform="matrix(1 0 0 1 278.228 221.8599)" class="st2 st3">RESUME</text>
<style data-made-with="vivus-instant">.zacCXANs_0{stroke-dasharray:199 201;stroke-dashoffset:200;animation:zacCXANs_draw_0 7200ms ease-in-out 0ms infinite,zacCXANs_fade 7200ms linear 0ms infinite;}.zacCXANs_1{stroke-dasharray:88 90;stroke-dashoffset:89;animation:zacCXANs_draw_1 7200ms ease-in-out 0ms infinite,zacCXANs_fade 7200ms linear 0ms infinite;}.zacCXANs_2{stroke-dasharray:452 454;stroke-dashoffset:453;animation:zacCXANs_draw_2 7200ms ease-in-out 0ms infinite,zacCXANs_fade 7200ms linear 0ms infinite;}.zacCXANs_3{stroke-dasharray:13 15;stroke-dashoffset:14;animation:zacCXANs_draw_3 7200ms ease-in-out 0ms infinite,zacCXANs_fade 7200ms linear 0ms infinite;}.zacCXANs_4{stroke-dasharray:576 578;stroke-dashoffset:577;animation:zacCXANs_draw_4 7200ms ease-in-out 0ms infinite,zacCXANs_fade 7200ms linear 0ms infinite;}@keyframes zacCXANs_draw{100%{stroke-dashoffset:0;}}@keyframes zacCXANs_fade{0%{stroke-opacity:1;}94.44444444444444%{stroke-opacity:1;}100%{stroke-opacity:0;}}@keyframes zacCXANs_draw_0{11.11111111111111%{stroke-dashoffset: 200}46.94444444444444%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes zacCXANs_draw_1{12.569444444444445%{stroke-dashoffset: 89}48.40277777777778%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes zacCXANs_draw_2{14.027777777777779%{stroke-dashoffset: 453}49.861111111111114%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes zacCXANs_draw_3{15.48611111111111%{stroke-dashoffset: 14}51.31944444444444%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes zacCXANs_draw_4{16.944444444444446%{stroke-dashoffset: 577}52.77777777777778%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}</style></svg></div>
        <div class="login"> 
            
            <?php
                $table="photo";
                $rows=all($table,['sh'=>'1']);
                foreach($rows as $u){
                    ?>
            <img src="<?=$u['photo'];?>" style="width:120px;height:120px;border-radius:50%;">
            <?php
                }
                ?>
               <a href="index.php">登出</a>

        </div>
    </div>
    <div class="Bg">
        <div class="meun">
        <table>
            <tr>
                <td> <a href="?do=data">個人檔案</a></td>
            </tr>
            <tr>
                <td> <a href="?do=aut">自&emsp;&emsp;傳</a></td>
            </tr>
            <tr>
                <td> <a href="?do=exp">工作經歷</a></td>
            </tr>
            <tr>
                <td> <a href="?do=skill">技&emsp;&emsp;能</a></td>
            </tr>
            <tr>
                <td> <a href="?do=job">求職狀態</a></td>
            </tr>
            <tr>
                <td> <a href="?do=file">作品集管理</a></td>
            </tr>
            <tr>
                <td> <a href="?do=image">圖片管理</a></td>
            </tr>
            <tr>
                <td> <a href="?do=user">變更帳戶</a></td>
            </tr>
        </table>
        </div>
        <div class="bg">
                <?php
                $do=(!empty($_GET['do']))?$_GET['do']:"data";
                $path="./admin/".$do.".php";

                if(file_exists($path)){
                    include $path;
                }else{
                    include "./admin/data.php";
                }
                ?>
            </div>
        </div>
    </div>

</div>
    <div class="footer"></div>
</body>
</html>