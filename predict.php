<?php
if(isset($_GET["Fifth"],$_GET["Sixth"],$_GET["Seventh"],$_GET["Eighth"],$_GET["Ninth"]));
$var1 =  $_GET["Fifth"];
$var2 =  $_GET["Sixth"];
$var3 =  $_GET["Seventh"];
$var4 =  $_GET["Eighth"];
$var5 =  $_GET["Ninth"];
$command = escapeshellcmd("python dmw123.py  $var1 $var2 $var3 $var4 $var5");
$output = shell_exec($command);

?>  
<html>
<head>
    
    <title>Prediction</title>
   
    <style>
        body{ 
            background-image: url("img/education\ background.jpg");
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
            margin-top: 15px;
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
            /* position:relative; */
            font-size: 20px;
            margin-top: 30px; 
            margin-left:150px;
            margin-right: 50px;
            padding: 40px;
            border: 10px solid rgb(210, 249, 249);
            border-radius: 20px;
            height: 480px;
            width: 300px;
            background-color:bisque;           
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

        .row{
            margin-top: 300px; 
            /* margin-left:20px; */

            height: 60px;
            width:300;
            background-color:bisque;
            border: 10px solid rgb(210, 249, 249);
            border-radius: 10px;
        }
        .grade{ 
            display: flex;
            margin-top:2px;
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
      <div class= "grade">
      <form method="get" class="gradepred" action="predict.php">
        <h4>Enter the grade below</h4>
        <label for="std5">Student's Fifth standard Grades</label>&nbsp;
        <br>
        <input type="number" id="std5" name="Fifth" placeholder="fifth grade"><br><br>
        <label for="std6">Student's Sixth standard Grades</label>&nbsp;<br>
        <input type="number" id="std6" name="Sixth" placeholder=" Sixth grade"><br><br>
        <label for="std7">Student's Seventh standard Grades</label>&nbsp;<br>
        <input type="number" id="std7" name="Seventh" placeholder="Seventh grade"><br><br> 
        <label for="std8">Student's Eighth standard Grades</label>&nbsp;<br>
        <input type="number" id="std8" name="Eighth" placeholder="Eighth grade"><br><br>
        <label for="std9">Student's Ninth standard Grades</label>&nbsp;
        <br>
        <input type="number" id="std9" name="Ninth" placeholder="Ninth grade"><br> <br>
    <!--    <input style="align-item :center"; type="submit">-->
    <button class="btn">Predict Tenth grade</button> 
    </form> 
    <br>
    <div class="row"> 
        <h3>Your Tenth grade will be
            <?php 
            echo $output;
            ?>
        </h3>
    </div>
    
    </div>

    
</body>
</html>