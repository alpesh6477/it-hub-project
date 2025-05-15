<?php include "connection.php";  ?>
<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if (!isset( $_SESSION['adminloggedin'])){
  header("Location:admin_login.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin contact</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <!--FONT AWESOME-->
    <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
  ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
}

    
    .e{
      padding-left: 30px;
      padding-top: 20px;
      padding-bottom:25px;   
     background-color: #0A2558;
      color: white;
    }
    p{ padding-left: 30px;
color: #CCC; 
padding-bottom:
10px;
    }
    tr{
      font-family: Arial, Helvetica, sans-serif;
    }
.r{
  text-align: center;
  padding: 10px 10px;
}
table{
  border: 1px solid #ddd;
  background-color: #707070;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  
}
.ra{background: #0A2558;
  height: 595px;
}
p:hover{background: #081D45}
.v{
  text-decoration: none;
}
.vivek {
  margin-left:27px;

}

</style>
<body>

  <div class="row">
    <div class="col-lg-3 ra"  >
      <h2 class="e">My Admin</h2>
      <a class="v" href="admin_user.php"> <p>User</p>  </a>
 <a class="v" href="admin_contact.php"> <p>Contact Us</p></a>
 <a href="admin_job1.php" class="v"><p>job:Personal Trainer</p></a> 
 <a href="admin_job2.php" class="v">  <p>Job:Front Desk Receptionist</p></a>
 <a class="v" href="admin_admin_user.php"> <p>Admin</p>  </a>
 <a class="btn btn-danger vivek" href="admin_logout.php" > Log Out  </a>


</div>


<div class="col-lg-9">
          <h2 class="r"> Contact User</h2>
          <div class="search-bar" style="float:right; margin-right:15px;margin-bottom:15px;">
        <form class="search-form d-flex align-items-center" method="GET"  action="admin_contact1.php">
          <input  id="srchbar" type="text" name="query" placeholder="search" title="Enter search keyword" class="form-control">
            <button id="srchbtn" type="submit" class="btn btn-dark" style="padding:10px;margin-left:20px;width:120px;">Search</button>
        </form>
        </div>
            <table cellpadding="20" style="width: 100%;background: #0A2558;" class="table table-hover" >
                <tr class="table-dark">
                    <th style="padding: 20px;">id</th>
                    <th style="padding: 20px;">name</th>
                   
                    <th style="padding: 20px;">email</th>
                    <th style="padding: 20px;">massege</th>
                    <th style="padding: 20px;">Action-1</th>
                    <th style="padding: 20px;">Action-2</th>
                    




                    
                </tr>

    <?php
    $query = "SELECT * FROM contact";
    $data = mysqli_query($conn, $query);

    while($res = mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <td>".$res['id']."</td>
        <td>".$res['name']."</td>
        <td>".$res['email']."</td>
        <td>".$res['massege']."</td>

        
        <th><button  class = 'btn btn-dark'  > <a href='delete.php?id=".$res['id']."' style ='
        text-decoration: none;
      
        color: white;'> delete  </button></th></a>
        <th><a class = 'btn btn-dark' href='update_contact.php?id=".$res['id']."'>update</a></th>
<tr>";




    }
    ?>
            </table>
        </div>


    </div>