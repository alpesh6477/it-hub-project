<?php include "../html/connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if (!isset( $_SESSION['adminloggedin'])){
  header("Location:admin_login.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg" />
    <link rel="stylesheet" href="style2.css">
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;


    }

    .hero {
        width: 100%;
        min-height: 100vh;

        background: #353535;
        display: flex;
        align-items: center;
        justify-self: center;
        flex-direction: column;
        position: fixed;


    }

    .hero h1 {
        color: aliceblue;
        font-weight: 500;
        margin-bottom: 40px;

    }

    .signup-box {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        width: 90%;
        max-width: 800px;
        background: #fff;


    }

    .left-box {
        padding: 50px;
        background: #6b00d5;
        flex-basis: 50%;
        flex-grow: 1;
        color: #fff;

    }

    .right-box {
        padding: 50px;
        flex-basis: 50%;
        flex-grow: 1;
    }

    .input-box {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #fff;
        outline: none;
        color: #fff;
        font-size: 12px;
        background: transparent;


    }

    ::placeholder {
        color: #fff;
    }

    input[ type=checkbox] {
        margin-top: 30px;
    }

    .left-box label {
        font-size: 14px;

    }

    .left-box button {
        width: 100%;
        background: #fff;
        padding: 10px;
        border: 0;
        outline: none;
        font-size: 16px;
        margin-top: 20px;
        cursor: pointer;
        transition: background 0.5s;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .left-box button:hover {
        font-weight: 500;
        background: #000;
        color: #fff;

    }

    .left-box button span {
        display: inline-block;
        width: 0px;
        overflow: hidden;
        transition: width 0.5s;
    }

    .left-box button:hover span {
        width: 30px;
    }

    .right-box a {
        display: block;
        width: 100%;
        margin: 20px 0;
        min-width: 100px;
        color: #fff;
        font-size: 14px;
        padding: 15px 30px;
        text-decoration: none;

    }

    .right-box a i {
        font-size: 18px;
        margin-right: 10px;

    }

    .fb-link {
        background: #056eee;

    }

    .insta-link {
        background: #ee2a7b;
    }

    .g-link {
        background: #eb1d06;
    }

    .login-msg {
        color: #fff;
        margin-top: 30px;
        font-size: 15px;

    }

    .login-msg a {
        color: #ea4335;
        text-decoration: none;
    }
    </style>
    <script src="https://kit.fontawesome.com/7b3b228058.js" crossorigin="anonymous"></script>
</head>

<body>


    <div class="hero">
        <h1>Create an Account</h1>
        <div class="signup-box">
            <div class="left-box">
                <form action="" method="post">
                    <input type="text" name="username" placeholder=" Username " required class=" input-box">
                 
                    <input type="password" name="password" placeholder="Password" required class="input-box">

                    <input type="checkbox" id="terms">
                    <label for="terms"> I accept the terms & condition</label>
                    <button type="submit" name="signup"> SIGN UP <span>&#x27f6;</span></button>
                </form>
            </div>
            <div class="right-box">
                <a href="" class="fb-link"><i class="fa-brands fa-facebook"></i> Connect with Facebook</a>
                <a href="" class="insta-link"><i class="fa-brands fa-instagram"></i> Connect with Instagram</a>
                <a href="" class="g-link"><i class="fa-brands fa-google"></i>Connect with Google</a>
            </div>
        </div>
        <p class="login-msg"> I already have an account? <a href="login.php">Login Now</a></p>
    </div>
    <?php
    if(isset($_POST['signup'])){
    $name = $_POST['username'];
    
    $Password = $_POST['password'];
    
    
    $query ="INSERT INTO admin(username,password) VALUES('$name','$Password')" ;
    $data = mysqli_query($conn,$query);
    
    }
?>
</body>

</html>