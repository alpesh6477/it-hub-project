
<?php
include './connection.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE name='$username' AND password = '$password'";
    $data = mysqli_query($conn,$query);
    $userexists = mysqli_num_rows($data);
    if($userexists==1){
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$name;
        header("Location: ./index.php");
        exit;
    }
    else{
        echo "<script>alert('Email Or Password Invaild');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <style>
           *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins" , sans-serif;
}
body{
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background: url(../img/background.jpg.jpg) no-repeat; 
    background-size: cover;
    background-position: center; 
}
.n1{
    width: 550px;
    
    color: #f9f7f7;
    margin-top:15%;
    margin-bottom: 20%;
    border-radius: 20px;
    padding: 30px 40px;
}
.n1 h1{
    font-size: 36px;
    text-align: center;

}
.n1 .input-box{
    position: relative;
    width: 100%;
    height: 50px;

    background: transparent;
    backdrop-filter: blur(20px);
    margin: 30px 0;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 7px solid orangered;
    border-radius: 40px;
    font-size: 20px;
    color: #f7f4f3;
    padding: 20px 45px 20px 20px;
}

.input-box input::placeholder{
    color: #fff;
}
.input-box
i  {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;

    }
    .n1 .remember-forgot{
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;

    }
    .remember-forgot label input {
        accent-color: #fff;
        margin-right: 3px;

    }
    .remember-forgot a {
        color: #fff;
        text-decoration: none;
        font-weight: 700;

    }
    .remember-forgot a:hover{
        text-decoration: underline;
    }
    .n1 .n2{
        width: 100%;
        height: 45px;
        
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0,0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #fc0303;
        font-weight: 800;


    }
    .n1 .register-link{
        font-size: 14.5px;
        text-align: center;
        margin-top: 20px;

    }
    .register-link p a {
        color: #fff;
        text-decoration: none;
        font-weight: 700;
    }
    .register-link p a:hover{
        text-decoration: underline;
    }

@media screen and (max-width: 768px) {
  .n1 {
    width: 90%;
  }
}

@media screen and (max-width: 480px) {
  .n1 {
    width: 100%;
    padding: 20px;
  }
}
    
        
        
    </style>
</head>
<body >
    <div class="n1">
        <form method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required name="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box"><input type="password" placeholder="password" required name="password">
                <i class='bx bxs-lock-alt'></i></div>
            <div class="remember-forgot"><label for=""><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a></div>
            <button type="submit" class="n2" name="login">Login</button>
            <div class="register-link"><p>Don't have an account  <a href="register.php">Register</a></p></div>
            <div class="register-link"><p> <a href="admin_user.php"> Admin Login</a></p></div>
       
        </form>
    </div>
</body>
</html>