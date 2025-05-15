<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true && !isset($_SESSION['username'])) {
    header("Location: ./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Membership</title>
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        background-color:A9A9A9;
        }

        header {
            padding: 20px;
            text-align: center;
            background-color: #fd0404;
            color: #fff;
        }

        h1 {
            margin: 0;
            font-weight: 500;
        }

        section {
            padding: 40px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .membership-option {
            border: 2px solid #fd0404;
            padding: 20px;
            margin-bottom: 40px;
            text-align: center;
            border-radius: 10px;
            box-shadow:0px 0px 20px #000000b8; padding:20px;
            background-color:#D3D3D3;
        }

        button {
        
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        footer {
            background-color: #fd0404;
            padding: 10px 20px;
            color: #fff;
            text-align: center;
        }

        .n {
            margin-left: -80%;
            margin-top: -2%;
        }
        .col{
            background-color:#A9A9A9;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="container col">
        <h2>Membership Options</h2>
        <div class="row">
            <div class="col-lg-4" >
                <div class="membership-option">
                    <h2>Basic</h2>
                    <p>Access to gym facilities</p>
                    <p>Price: &#8377;3000/month</p>
                    <a href="contact.php" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-option">
                    <h2>Professional</h2>
                    <p>Access to gym facilities</p>
                    <p>Access to group classes</p>
                    <p>Price: &#8377;5000/month</p>
                    <a href="contact.php" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-option">
                    <h2>Elite</h2>
                    <p>Access to gym facilities</p>
                    <p>Access to group classes</p>
                    <p>Personal trainer sessions</p>
                    <p>Price: &#8377;8000/month</p>
                    <a href="contact.php" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Gym Membership. All rights reserved.</p>
    </footer>

    <?php include 'footer.php'; ?>
</body>

</html>
