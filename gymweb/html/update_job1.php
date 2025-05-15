<?php include "connection.php";  ?>
<?php 
$id=$_GET['id'];
$query="SELECT * FROM job1 WHERE id=$id";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($data);
$name = $row['name'];
$address = $row['address'];
$dob = $row['dob'];
$mobile = $row['mobile'];
$email = $row['email'];
$qualification = $row['qualification'];
$experience = $row['experience'];
$skill = $row['skill'];
$time = $row['time'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>update job1</title>
    <style>
          body{  font-family: 'Arial', sans-serif;
  
    
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

    <div class="container">
<h2>Update Application for a Job</h2>
        <form id="job-application-form" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required value = "<?php  echo $name ?>" >
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required value = "<?php  echo $address ?>" >
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required value = "<?php  echo $dob ?>" >
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" name="mobile" required value = "<?php  echo $mobile ?>" >
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value = "<?php  echo $email ?>" >
            </div>
            <div class="form-group">
                <label for="qualifications">Qualifications:</label>
                <textarea id="qualifications" name="qualifications" rows="4" required> <?php  echo $qualification ?></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Work Experience:</label>
                <textarea id="experience" name="experience" rows="4" required> <?php  echo $experience ?></textarea>
            </div>
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea id="skills" name="skills" rows="4" required><?php  echo $skill ?></textarea>
            </div>
            <div class="form-group">
                <label for="job-time">Desired Job Time:</label>
                <select id="job-time" name="job_time" required>
                    <option value="" hidden><?php  echo $time ?></option>
                    <option value="full-time">Full Time</option>
                    <option value="part-time">Part Time</option>
                    <option value="contract">Contract</option>
                </select>
            </div>
            <div class="form-group schedule">
                <label >status:</label>
                <select name="status" id="" class="form-select"><option value="selected">selected</option><option value="rejected">rejected</option></select>
                
            </div>
            <div class="form-group schedule">
                <label >Date:</label>
                <input type="date" id="date" name="date" >
                
            </div>
            <div class="form-group schedule">
                <label >Joining Date:</label>
                <input type="date" id="date" name="joining_date" >
                
            </div>

            <button type="submit"  name="Submit" class="apply-btn">Update Application</button>
        </form>
    </div>
    

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
        $status = $_POST['status'];
        $date = $_POST['date'];
        $joining_date = $_POST['joining_date'];
    
        
        $query ="UPDATE job1 SET name='$name',address='$address',dob='$dob',mobile='$mobile',email='$email',qualification='$qualifications',experience='$experience',skill='$skills',time='$job_time',status='$status' , date = '$date', joining_date = '$joining_date' WHERE id = $id" ;
        $data = mysqli_query($conn,$query);

        if ($data){
            header("Location:admin_job1.php");
    
        }
        else {
            echo  "data not update";
            
        }
        
        
        } 

    ?>
    
</body>
</html>