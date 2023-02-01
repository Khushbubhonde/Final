<?php
if(isset($_GET["roll"])); 
$var1 =  $_GET["roll"];
$command = escapeshellcmd("python stu_data.py  $var1");
$output = shell_exec($command);
?>
<head>
    <title>Student Information</title>
    <style>
        body{ 
            background-image: url("img/text.jpg"); 
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover; 
            z-index: -1;  
        }
        img{  
            height:100px;
            width:100px;
            filter: invert(1);
            border-radius: 50px;
            position: relative;
            align-items: center;
            margin-top: 20px;
            margin-left: 700px;
        }
        .imag{
            height:100px;
            width:100px;
        } 
        .head{
            align-items: center;
            position: relative;
            color: rgb(236, 236, 236);
            font-size: 60px;
            margin-top: 30px;
            font-weight: bolder;
            text-align: center;
        }
        table{
            border: 5px solid white;
            color: purple; 
            font-weight: bold;
            background-color: bisque;
            margin-left: 560px;
            height:250px;
            width:400px;
            margin-top: 100px;
        }
        th{
            text-align: center;
        }
        td{
            text-align: center;
        }
        .btn{
            background-color: #00bfdf;
            border: 2px solid white;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            padding: 5px;
            color: white;
            height: 50px;
            width:250px;
        }
        .btn:hover{
            background-color: orangered;
            cursor: pointer;
        }

        .logout{
            margin-top: 0;
            margin-left: 1200px;
            display: flex;
            
        }
        .bt1{
            background-color: #00bfdf;
            height: 50px;
            width:110px;
            border-radius: 15px;
            border: 2px solid white;
        }
        a{
            font-size: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .bt1:hover{
            background-color: orangered;
        }
        #bt2{
            margin-left:10px;
        }
        .data{
            background-color: aliceblue;
            height: 200px;
            width:500px;
            align-items: center;
            margin-left: 460px;
            padding: 50px;
            border: 5px solid #00bfdf;
            border-radius: 10px;
        }
        h4{
            font-size: 30px;
        }
        form > label{
            font-size: 20px;
        }
        form > input{
            font-size: 20px;
        }
        .btn{
            background-color: #00bfdf;
            border: 2px solid white;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            padding: 5px;
            color: white;
            height: 50px;
            width:250px;
        }
        .btn:hover{
            background-color: orangered;
            cursor: pointer;
        }
        h3{
            color: black;
            border-radius: 10px;
            font-size: 25px;
            font-weight: bold;
            padding-top: 10px;
            padding-left: 10px ;
            /* padding-bottom: 10px; */
            background-color: aliceblue;
            height: 40px;
            width:1100px;
            margin-left: 250px;
            border: 5px solid #00bfdf;
        }
        /* .row{
            /* background-color: #00bfdf; */
            /* border: 5px solid #00bfdf;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            padding-left: 10px ;
            padding-bottom: 10px;
            background-color: aliceblue;
            height: 60px;
            width:1000px;
            margin-left: 250px; */

        /* } */ 
    </style>
</head>
<body>
<div class="head" >
        Marks Prediction System
      </div>
      <div class="imag">
        <img src="img/edu.webp" alt="">
      </div>
      <div class="logout">
        <button class="bt1"><a href="search.html">Back</a></button>
          <button class="bt1" id="bt2" ><a href="index.php">Logout</a></button>
        </div>
        <form action="stud_info.php" method="get" class="data" >
            <h4>Search the student by his/her Roll no</h4>
            <label for="std5">Roll No:</label>&nbsp;
                <input type="number" id="std5" name="roll" placeholder="Roll No">
                <br>
                <br>
                <br>
                <button class="btn">Search</button>
            </form>
            <div class="row"> 
                <br>
        <h3>
            <?php 
            echo $output;
            ?>
        </h3>
    </div>
</body>
</html>