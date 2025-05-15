<?php include "connection.php";  ?>
<?php 
$id=$_GET['id'];
$query="SELECT * FROM contact WHERE id=$id";
$data = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($data);
$name = $row['name'];
$email = $row['email'];
$massege = $row['massege'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update contact</title>
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg" />
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://kit.fontawesome.com/7b3b228058.js" crossorigin="anonymous"></script>
</head>
<style>

</style>

<body>
   
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Send us an email if you have any questions about billing or your Elegant Themes account</p>
        </div>
        <div class="container">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Bhavnagar Rajkot Road,<br>Chitra,<br>364004</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>9313373443</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>alpeshchudasama17@gmail.com</p>
                    </div>
                </div>

            </div>
            <div class="contactform">
                <form action="" method="POST">
                    <h2>Update message</h2>
                    <div class="inputBox">
                        <input type="text" name="Name" required="required" value = "<?php  echo $name ?>">
                        <span>Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Email" required="required" value = "<?php  echo $email ?>">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="massege" required="required"> <?php  echo $massege ?></textarea>
                        <span>Type your massege.....</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="contact" value="Update" id="alpeshchudasama17@gmail.com">
                    </div>
                </form>

            </div>
        </div>
    </section>
    
    
</body>
<?php
    if(isset($_POST['contact'])){
    $name = $_POST['Name'];
    $Email = $_POST['Email'];
    $massege = $_POST['massege'];

    
    $query ="UPDATE contact SET name='$name',email='$Email',massege='$massege' WHERE id = $id"  ;
    $data = mysqli_query($conn,$query);
    
    }
?>

</html>