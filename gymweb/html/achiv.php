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
    <title> Achievements</title>
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
       
        }

       
        

        .main {
            width:100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center ;
            text-align: center;
            background-color:grey ;
            
        }

        .achievement-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow:0px 0px 20px #000000b8; padding:20px;
            padding: 20px;
            margin: 20px;
            max-width: 300px;
            text-align: center;
            
        }

        .achievement-card img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .achievement-card h3 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .achievement-card p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
        }

       
    </style>
</head>
<body>
   <?php include "header.php" ?>

    <div class="main">
        <div class="achievement-card">
            <img src="../img/istockphoto-1386867363-612x612.jpg" alt="Winner 1">
            <h3>Suhani Singh</h3>
            <p>Gold Medalist in Bodybuilding</p>
        </div>

        <div class="achievement-card">
            <img src="../img/pexels-anush-gorak-1229356.jpg" alt="Winner 2">
            <h3>Ankit Parmar</h3>
            <p>Featured in Fitness Magazine</p>
        </div>

        <!-- Add more achievement cards -->
        <div class="achievement-card">
            <img src="../img/download.jpg" alt="Winner 3">
            <h3>Virat Kohli</h3>
            <p>Best Personal Trainer Award</p>
        </div>

        <div class="achievement-card">
            <img src="../img/pexels-mikhail-nilov-6740301.jpg" alt="Winner 4">
            <h3>Sarah Williams</h3>
            <p>Winner of Regional CrossFit Competition</p>
        </div>

        <div class="achievement-card">
            <img src="../img/pexels-photo-2204179.webp" alt="Winner 5">
            <h3>sahil Shahu</h3>
            <p>Recipient of Fitness Innovator Award</p>
        </div>

        <div class="achievement-card">
            <img src="../img/pexels-photo-13756380.webp" alt="Winner 6">
            <h3>Rinku Shingh</h3>
            <p>Best Nutritionist of the Year</p>
        </div>

        <div class="achievement-card">
            <img src="../img/pexels-photo-10795063.webp" alt="Winner 7">
            <h3>Akaay Kohali</h3>
            <p>Winner of National Weightlifting Championship</p>
        </div>

        <div class="achievement-card">
            <img src="../img/pexels-photo-9839459.webp" alt="Winner 8">
            <h3>Khali </h3>
            <p>Featured in Yoga Journal for Exceptional Teaching</p>
        </div>

        <div class="achievement-card">
            <img src="../img/istockphoto-1427221641-612x612.jpg" alt="Winner 9">
            <h3>Shahrukh Khan</h3>
            <p>Winner of Ironman Triathlon</p>
        </div>

        <div class="achievement-card">
            <img src="../img/pexels-photo-5924567.webp" alt="Winner 10">
            <h3>Sani Shingh</h3>
            <p>Recipient of Fitness Motivator Award</p>
        </div>
    </div>

    <!-- Add more achievement cards for a total of 10 -->

   <?php include "footer.php" ?>
</body>
</html>
