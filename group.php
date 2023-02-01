<?php
if(isset($_GET["physics"],$_GET["chemistry"],$_GET["maths"],$_GET["biology"]));
$var1 =  $_GET["physics"];
$var2 =  $_GET["chemistry"];
$var3 =  $_GET["maths"];
$var4 =  $_GET["biology"]; 

$command = escapeshellcmd("python pcmb123.py  $var1 $var2 $var3 $var4");
$output = shell_exec($command);
?>


<html>
<head>
    <title>Group</title>
    <style>
         body{ 
            background-image: url("img/future.webp");
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
            margin-top: 50px;
            margin-left: 50px;
        }
        .imag{
            height:100px;
            width:100px;
        } 
        .head{
            /* align-items: center; */
            position: absolute;
            margin-left:250px;
            color: rgb(236, 236, 236);
            font-size: 60px;
            margin-top: 30px;
            font-weight: bolder;
            text-align: center;
        }
        .gradepred{
            font-size: 20px;
            margin-top: 50px; 
            margin-left: 380px;
            margin-right: 200px;
            padding: 40px;
            border: 10px solid rgb(210, 249, 249);
            border-radius: 20px;
            display: inline-block;
            height: 400px;
            width: 300px;
            background-color: bisque;

            /* text-align: center; */
        }
        form > input{
            font-size: 20px;
        }
        .d123{
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
        .row{
            margin-top: 0; 
            margin-left:383px; 
            padding: 10px;
            height: 100px; 
            width:355;
            background-color:bisque;
            border: 10px solid rgb(210, 249, 249);
            border-radius: 10px;
        }
        h3{
            color:green;
            font-size: 20px;
        }
        h4{
            color:green;
            font-size: 17px;
        }

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
    <form action="group.php" class="gradepred" method="get">
        <div class="d123">Enter the marks of below subjects</div>
        <br>
        <label for="std5">Physics Marks:</label>&nbsp;
        <br>
        <input type="number" placeholder="physics marks" name="physics"><br><br>
        <label for="std6">Chemistry Marks:</label>&nbsp;<br>
        <input type="number" placeholder=" chemistry marks" name="chemistry"><br><br>
        <label for="std7">Mathematics Marks:</label>&nbsp;<br>
        <input type=" number" placeholder="maths marks" name="maths"><br><br>

      <label for="std7">Biology Marks:</label>&nbsp;<br>
        <input type="number" placeholder="Biology marks" name="biology"><br><br>
        <br>
         <button class="btn">Submit</button>
    </form>
    <div class="row"> 
    <h3>Dear Student! </h3>
           <h4> <?php 
            echo $output; 
              ?>
            </h4>
      
</div>

    
</body>
</html>