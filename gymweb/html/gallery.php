<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true && !isset($_SESSION['username'])) {
    header("Location: ./login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Gym Gallery</title>
	<style>

	</style>
	<link rel="stylesheet" href="../css/gellery.css">
	<!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg"/>


</head>
<body>
<?php include 'header.php' 
    ?>
	


<h1> Body Blast Gym Gallery</h1>

<di class="container" >
	<div class="box" style="box-shadow:none;">
		<img src="../img/10000.jpg" alt="blog-container"> <br>

	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/111111111.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/1222222.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/133333.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/144444.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/15555.jpg" alt="blog-img"> <br>
	
	</div><br>
	<div class="box" style="box-shadow:none;">
		<img src="../img/16.jpg" alt="blog-img"> <br>
		
	</div>
</di>
<li> </li>

		
<di class="container">
	<div class="box" style="box-shadow:none;">
		<img src="../img/10000.jpg" alt="blog-container"> <br>
		

	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/111111111.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/1222222.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/133333.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/144444.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/15555.jpg" alt="blog-img"> <br>
	
	</div><br>
	<div class="box" style="box-shadow:none;">
		<img src="../img/16.jpg" alt="blog-img"> <br>
		
	</div>
</di>
<li> </li>
<di class="container">
	<div class="box" style="box-shadow:none;">
		<img src="../img/10000.jpg" alt="blog-container"> <br>
		

	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/111111111.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/1222222.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/133333.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/144444.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/15555.jpg" alt="blog-img"> <br>
	
	</div><br>
	<div class="box" style="box-shadow:none;">
		<img src="../img/16.jpg" alt="blog-img"> <br>
		
	</div>
</di>
<li> </li>
<di class="container">
	<div class="box" style="box-shadow:none;">
		<img src="../img/10000.jpg" alt="blog-container"> <br>
		

	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/111111111.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/1222222.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/133333.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/144444.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/15555.jpg" alt="blog-img"> <br>
	
	</div><br>
	<div class="box" style="box-shadow:none;">
		<img src="../img/16.jpg" alt="blog-img"> <br>
		
	</div>
</di>
<li> </li>
<di class="container">
	<div class="box" style="box-shadow:none;">
		<img src="../img/10000.jpg" alt="blog-container"> <br>
		

	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/111111111.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/1222222.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/133333.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/144444.jpg" alt="blog-img"> <br>
		
	</div>
	<div class="box" style="box-shadow:none;">
		<img src="../img/15555.jpg" alt="blog-img"> <br>
	
	</div><br>
	<div class="box" style="box-shadow:none;">
		<img src="../img/16.jpg" alt="blog-img"> <br>
		
	</div>
</di>
<li> </li>
</div>
<?php 
include 'footer.php'
?>

</body>
</html>
