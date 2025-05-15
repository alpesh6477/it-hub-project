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
  <title>career page</title>
  <link rel="shortcut icon" href="../img/44.jpg"/>
   <!-- Add Font Awesome CSS -->
  <style>
    body{  font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
    
    }
    .container{
      max-width: 800px;
      margin: 20px;
      padding:20px;
    
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            box-sizing: border-box;
    }
    h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .job {
            border-bottom: 1px solid #ccc;
            padding: 15px 0;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .job img {
            width: 100px;
            height: auto;
            margin-right: 20px;
            border-radius: 5px;
        }

        .job-content {
            flex: 1;
            box-shadow:0px 0px 20px #000000b8; padding:20px;
        }

        .job h2 {
            color: black;
            margin-bottom: 10px;
        }

        .job p {
            
            margin-bottom: 10px;
        }

        .requirements {
            margin-bottom: 10px;
        }

        .requirements ul {
            list-style-type: disc;
            margin-left: 20px;
            color: #777;
        }
        .btn-1{
          background-color: #333;
            color:white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-1 a{
          color:white;
        }
        .btn-1:hover {
            background-color: #555;
        }
        @media screen and (max-width:800px) {
          .container {
                padding: 10px;
            }
          
        }
    </style>
</head>
<body>
  <?php include "header.php" ?>
  <div class="container">
    <h1>Career at body blast gym </h1>
    <div class="job">
      
      <div class="job-content">
        <h2>Personal Trainer</h2>
        <p>We are currently seeking a certified personal trainer to join our team.</p>
        <div class="requirements">
          <p>Requirements</p>
          <ul>
          <li>Certified personal training qualification</li>
                        <li>Experience working with clients of all fitness levels</li>
                        <li>Excellent communication skills</li>
                    </ul>

          </ul>
          <a href="form1.php"> <button class="btn-1">Apply Now </button></a>
        </div>
      </div>

    </div>
    <div class="job">
      
      <div class="job-content">
      <h2>Front Desk Receptionist</h2>
                <p>We are looking for a friendly and organized individual to join our front desk team.</p>
                <div class="requirements">
                    <p>Requirements:</p>
                    <ul>
                        <li>Excellent customer service skills</li>
                        <li>Ability to multitask in a fast-paced environment</li>
                        <li>Basic computer proficiency</li>
                    </ul>
                    <a href="form2.php">   <button class="btn-1"> Apply Now </button></a>
        </div>
      </div>

    </div>
  </div>
  <?php  include "footer.php" ?>
</body>
</html>