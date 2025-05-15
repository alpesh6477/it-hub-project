<?php include "../html/connection.php"; ?>
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
    <title>contact</title>
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg" />
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://kit.fontawesome.com/7b3b228058.js" crossorigin="anonymous"></script>
</head>
<style>

</style>

<body>
    <?php 
include 'header.php' 
    ?>
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
                    <h2>Send message</h2>
                    <div class="inputBox">
                        <input type="text" name="Name" required="required">
                        <span>Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="massege" required="required"></textarea>
                        <span>Type your massege.....</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="contact" value="Send" id="alpeshchudasama17@gmail.com">
                    </div>
                </form>

            </div>
        </div>
    </section>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14823.499491332468!2d72.09120979866756!3d21.74637613141512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f50fcc9f0a12b%3A0xc2d482936f6e8fb9!2sChitra%2C%20Bhavnagar%2C%20Gujarat%20364004!5e0!3m2!1sen!2sin!4v1706101619810!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    <?php  include 'footer.php'?>
</body>
<?php
    if(isset($_POST['contact'])){
    $name = $_POST['Name'];
    $Email = $_POST['Email'];
    $massege = $_POST['massege'];

    
    $query ="INSERT INTO contact(name,email,massege) VALUES('$name','$Email','$massege')" ;
    $data = mysqli_query($conn,$query);
    
    }
?>

</html>