
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
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
        $conn=mysqli_connect("127.0.0.1:3308","root","","fmarks");
        if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);

        }
        $sql="SELECT sno,username,password from Stu";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row=$result -> fetch_assoc()){
                echo "<tr><td>".$row["sno"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>";

            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>