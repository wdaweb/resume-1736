<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        margin:0;
        box-sizing:border-box;
    }
   
    .BG{
        width:100%;
        height:350vh;
        background:gray;
    }
    .index{
        width:100%;
        height:1000px;
        background:blue;
        z-index:2;
    }
    .main{
        width:100%;
        height:100px;
        background:red;
       
    }
    .top{
        width:25%;
        height:100px;
        background:orange;
        display:inline block;
        position:relative;left:10%;
    }
    .login{
        width:100px;
        height:100px;
        background:black;
        display:inline block;
        position:relative;top:-100px;left:90%;
    }
    .photo{
        width:450px;
        height:450px;
        background:black;
        position:relative;top:60px;left:36%;
    }
    .say{
        width:100%;
        height:30%;
        background:black;
        position:relative;
        top:80px;
    
    }
    .skill{
        width:100%;
        height:300px;
        background:red;
    }
    .data{
        width:100%;
        height:750px;
        background:black;
    }
    .photo_1{
        width:300px;
        height:400px;
        background:white;
        position:relative;left:10%;
     
        display:inline-block;
    }
    .data_1{
        width:50%;
        height:500px;
        background:white;
        position:relative;left:20%;
        top:10%;
        display:inline-block;
    }
    .works{
        width:100%;
        height:1150px;
        background:blue;
    }
    .footer{
        width:100%;
        height:200px;
        background:black;
    }
    </style>
</head>
<body>
    <div class="BG">
        <div class="index">
            <div class="main">
                <div class="top"></div>
                <div class="login"></div>
            </div>
            <div class="photo"></div>
            <div class="say"></div>
        </div>
        <div class="skill"></div>
        <div class="data">
            <div class="photo_1"></div>
            <div class="data_1"></div>
        </div>
        <div class="works"></div>
        <div class="footer"></div>

    </div>
</body>
</html>