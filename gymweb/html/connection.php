<?php
$servername="localhost";
$username="root";
$password="";
$db_name="body_blast_gym";


$conn = mysqli_connect($servername,$username,$password,$db_name);
if($conn){
    // echo "ok";
    
}
else{
    echo "no";
}
?>