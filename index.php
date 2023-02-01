<?php
$server = "127.0.0.1:3308";
$username = "root";
$password = "";
$database = "fmarks";

$conn = mysqli_connect($server, $username, $password, $database);

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $username = $_POST["username"];
    $password = $_POST["password"];  
    $sql = "Select * from Stu where username='$username' && password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true; 
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; 
        header("location: search.html");
    }  
    else{
        $showError = "Invalid Credentials";
    }
}  
?>
<html>
<head>
    
    <title>Login</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .back_video{
            position: fixed;
            right: 0;
            bottom: 0; 
            min-width: 100%; 
            min-height: 100%;
            z-index: -1;
            /* filter:opacity(80%); */
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
        .form1{
            padding: 20px;
            border: 10px solid rgb(210, 249, 249);
            margin-top: 50px;
            margin-left: 550px;
            align-items: center;
            position: relative;
            height: 400px;
            width:400px;
            background-color: bisque;
            border-radius: 30px;
        }
       a{
        text-decoration: none;
        color:black;
       }
 
    </style>
</head>
<body>
    <video autoplay muted loop class="back_video">
        <source src="img/educational background video.mp4" >
      </video>
      <div class="head" >
          Marks Prediction System
        </div>
        <div class="imag">
          <img src="img/edu.webp" alt="">
        </div>
        <div class="form1">
            <h3>Enter Your Credentials</h3>
        <form class="View" action="/final/index.php" method="POST"> 
            <div class="mb-3">
              <label for="exampleInputEmail" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <button type="submit" class="btn btn-info">Login</button>
            <button type="submit" class="btn btn-info"><a href="signup.php">Sign Up</a></button>
          </form>
        </div>


</body>
</html>