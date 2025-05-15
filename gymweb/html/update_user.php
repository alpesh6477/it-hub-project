<?php include "connection.php";  ?>
<?php 
$id=$_GET['id'];
$query="SELECT * FROM user WHERE id=$id";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($data);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
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
                    <input type="text" name="Username" placeholder=" Username " required class=" input-box" value = "<?php  echo $name ?>" >
                    <input type="email" name="Email" placeholder="Email" required class="input-box" value = "<?php  echo $email ?>">
                    <input type="password" name="Password" placeholder="Password" required class="input-box"value = "<?php  echo $password ?>">

                    <input type="password" name="Confirm_password" placeholder="Confirm_password " required
                        class="input-box"value = "<?php  echo $password ?>">
                   
                    <button type="submit" name="signup"> update<span>&#x27f6;</span></button>
                </form>
            </div>
           
        </div>
        
    </div>
    <?php
    if(isset($_POST['signup'])){
    $name = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Confirm_password = $_POST['Confirm_password'];
    
    $query ="UPDATE user SET name='$name',email='$Email',password='$Password' WHERE id=$id" ;
    $data = mysqli_query($conn,$query);
    if ($data){
        header("Location:admin_user.php");

    }
    else {
        echo  "data not update";
        
    }
    
    }
?>
</body>

</html>