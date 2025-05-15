<?php 
include "connection.php";
$id = $_GET['id'];
$query1 ="DELETE FROM user WHERE id=$id";
$query2="DELETE FROM job1 WHERE id=$id";
$query3="DELETE FROM job2 WHERE id=$id";
$query4="DELETE FROM contact WHERE id=$id";
$query5="DELETE FROM admin WHERE id=$id";
$data1 = mysqli_query($conn,$query1);

$data2 = mysqli_query($conn,$query2);

$data3 = mysqli_query($conn,$query3);

$data4 = mysqli_query($conn,$query4);
$data5 = mysqli_query($conn,$query5);
if($data1){
    header("Location: admin_user.php");

}
else{
    echo "Data cannot Delete";
    
}
if($data2){
    header("Location: admin_job1.php");

}
else{
    echo "Data cannot Delete";
    
}
if($data3){
    header("Location: admin_job2.php");

}
else{
    echo "Data cannot Delete";
    
}
if($data4){
    header("Location: admin_contact.php");

}
else{
    echo "Data cannot Delete";
    
}
if($data5){
    header("Location: admin_admin_user.php");

}
else{
    echo "Data cannot Delete";
    
}
?>