<?php 
session_start();
include ("conn.php");
$login_message = "";


if(isset($_POST['login'])){
    $nama = $_POST ["nama"];
    $pass = $_POST ["password"];

    $sql = "SELECT * FROM `users` WHERE nama = '$nama' AND password = '$pass'";

    $result = $conn->query($sql);

    if($result-> num_rows > 0){
        $data = $result->fetch_assoc();
        $_SESSION["nama"] = $data["nama"];
        $_SESSION["is_login"] = true;

        Header("Location: user.php");
    } else {
        $login_message = "Akaun tidak sah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: aliceblue;
        }
        .box{
            background-color: azure;
            width: 750px;
            height: 400px;
            margin: auto;
            margin-top: 80px;
            border-radius: 5px;
            border: 2px solid;
        }
        h1{
            text-align: center;
            padding: 20px;
        }
        .username{
            text-align: center;
        }
        .username input{
            width: 700px;
            height: 50px;
            border-radius: 3px;
        }
        .password{
            text-align: center;
        }
        .password input{
            width: 700px;
            height: 50px;
            border-radius: 3px;
        }
        h3{
            font-family: Arial, Helvetica, sans-serif;
        }
        .submit{
            margin-top: 20px;
            text-align: center;
        }
        .submit button{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            width: 700px;
            height: 50px;
            border-radius: 3px;;
        }
    </style>
</head>
<body>
    <?php 
    include ('conn.php')
    ?>
    <form action="" method="POST">
    <div class="box">
    <h1>LOGIN PAGE</h1>
    <div class="username">
    <h3>Username</h3>
    <input type="text" name="nama" placeholder="isikan nama" required>
    </div>    

    <div class="password">
    <h3>Password</h3>
    <input type="text" name="password" placeholder="isikan password" required>
    </div>

    <div class="submit">
        <button type="submit" class="btn btn-success" id="login" name="login">Log in</button>
    </div>
    </div>
    </form>
</body>
</html>