<?php include "../html/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <title>job 2</title>
    <style>
          body{  font-family: 'Arial', sans-serif;
        
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
    .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
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
<h2>Apply for a Job</h2>
        <form id="job-application-form" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="qualifications">Qualifications:</label>
                <textarea id="qualifications" name="qualifications" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Work Experience:</label>
                <textarea id="experience" name="experience" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea id="skills" name="skills" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="job-time">Desired Job Time:</label>
                <select id="job-time" name="job_time" required>
                    <option value="">Select</option>
                    <option value="full-time">Full Time</option>
                    <option value="part-time">Part Time</option>
                    <option value="contract">Contract</option>
                </select>
            </div>
            <input type="text" name ="time" hidden>
            <input type="text" name ="date" hidden>
            <input type="text" name ="status" hidden>
            <input type="text" name ="join_date" hidden>
            <button type="submit"  name="Submit" class="apply-btn">Submit Application</button>
        </form>
    </div>
    <?php include "footer.php"?>

    <?php 
    if(isset($_POST['Submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $qualifications = $_POST['qualifications'];
        $experience = $_POST['experience'];

        $skills = $_POST['skills'];
        $job_time = $_POST['job_time'];
    
        
        $query ="INSERT INTO job2(name,address,dob,mobile,email,qualification,experience,skill,time) VALUES('$name','$address','$dob','$mobile','$email','$qualifications','$experience','$skills','$job_time')" ;
        $data = mysqli_query($conn,$query);
        
        } 
    ?>
    
</body>
</html>