<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true && !isset($_SESSION['username'])) {
    header("Location: ./login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <style>
        body{
            overflow-x:hidden;
        }
        .carousel-item img {
         max-height: 700px; /* Adjust as needed */
         width: auto; /* Maintain aspect ratio */
         margin: auto; /* Center the images horizontally */
      }
        .whatsapp {
            bottom: 0;
            right: 0;
            position: fixed;
            z-index: 1000; /* Ensure it's above other content */
        }
        
        
       
       
        
       
        

        .main {
            width:100%;
           
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
            transition:all 0.5s ease;
            
        }
        .achievement-card:hover{
            scale:1.1;
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
.section-2 h2{
   background-color: #fff;
}

/*--blog-------------------------------*/
#blog{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 40px;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    
    
}
.blog-heading{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.blog-heading span{
    color: #fcfafa;
    font-size: 30px;
}
.blog-heading h3{
    font-size: 40px;
    color: #2b2b2b;
    font-weight: 600;
}
.blog-container{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 0px;
    flex-wrap: wrap;

}
.blog-box{
    width: 350px;
    background-color: #ffffff;
    border: 1px solid #ececec;
    margin: 20px;
    box-shadow:10px 10px 10px #000000b8; padding:20px;
}
.blog-img{
    width: 100%;
    height: auto;
   
}


.blog-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
   
}
.blog-text{
    padding: 30px;
    display: flex;
    flex-direction: column;


}
.blog-text span{
    font-size: 0.9rem;


}
.blog-text .blog-title{
    font-size: 1.3rem;
    font-weight: 500;
    color: #272727;



}
.blog-text .blog-title:hover{
    color: #f33c3c;
    transition: all ease 0.3s;
}
.blog-text p{
    color: #9b9b9b;
    font-size: 0.9rem;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 20px 0px;


}
.blog-text a{
    color: #0f0f0f;

}
.blog-text a:hover{
    color: #f33c3c;
    transition: all ease 0.3s;

}
@media(max-width:1250px){
    .blog-box{
        width: 300px;
    }

}
@media(max-width:1100px){
    .blog-box{
        width: 70%;
    }
}
@media(max-width:550px){
    .blog-box{
        margin: 20px 10px;
        width: 100%;
    }
    #blog{
        padding: 20px;

    }
}
.section-4{
   background-color:grey;
}

.carousel-inner > .item{
   max-height:400px;
}
 
   
.main_1{
    font-size: 40px;
    color: #2b2b2b;
    font-weight: 600;
    padding-top:15px;
} 
.slider_img1{
    padding-right:520px;
    font-size:35px;
    font-weight: 600; 
    color:yellow;
} 
.slider_img3{
    font-size: 32px;
    font-weight:600;
    color:red;
} 
.slider_img2{
    font-size:32px;
    font-weight:600;
    padding-bottom:550px;
    padding-left:200px;
    color:white;
}  
.container-col{
    background-color:#949494;
  
    padding-bottom:50px;

}
.container-col h1 {
   
    padding-top:20px;
    padding-bottom:20px;
    font-size: 40px;
    color: #2b2b2b;
    font-weight: 600;

}
.section-6 {
            background-color: black; /* Change to desired background color */
            padding: 50px 0; /* Adjust padding as needed */
        }

        /* Style for section-border */
        .section-border {
            border: 1px solid red; /* Add border for section */
            border-radius: 10px; /* Add border radius for section */
            overflow: hidden; /* Hide overflowing content */
        }

        /* Style for section-background */
        .section-background {
            background-color: black; /* Change to desired background color */
            padding: 20px; /* Add padding for inner content */
        }

        /* Style for content */
        

        /* Style for columns */
        

        /* Additional styling for headings */
        .col-lg-6 h3 {
            font-size: 30px; /* Adjust font size as needed */
            color: white; /* Change to desired color */
        font-weight:600;
    }
    .col-lg-6 p{
        color:white;
    }
    .section-7 .content{
        background-color:black;
    }
    .section-7{
        padding-bottom:10px;
        background-color:black;
    }
    .achiv_p {
        padding-bottom:148px;
    }
    .membership-option {
            border: 2px solid #fd0404;
            padding: 20px;
            margin-bottom: 40px;
            text-align: center;
            border-radius: 10px;
            box-shadow:0px 0px 20px #000000b8; padding:20px;
            background-color:#D3D3D3;
        }
        .container1 {
    width: 100%;
    margin: 0 auto;
    padding: 10px 20px;
    background-color:#D3D3D3;


}

.about {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background-color:#D3D3D3;
}

.about-image {
    flex: 1;
    margin-right: 40px;
    overflow: hidden;


}

.about-image img {
    max-width: 100%;
    height:350px;
    display: block;
    transition: 0.5s ease;

}
.about-content {
    flex: 1;
}

.about-conten h2 {
    font-size: 23px;
    margin-bottom: 15px;
    color: #333;

}
    </style>

    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg"/>

    <title>Body Blast Gym</title>
</head>
<body>

<?php 
include 'header.php'; // Assuming you have a header file
?>

<div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=919313373443&text=website%20visitor" target="_blank">
        <img src="../img/555.webp" alt="WhatsApp" height="50px" width="50px">
    </a>
</div>
<section class="section-1">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../img/pexels-anush-gorak-1229356.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="slider_img1">"MAKE IT A HABIT, NOT A RESOLUTION "</h5>
                
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/222.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="slider_img2">"Be Stronger Than Your Excuses."</h5>
               
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/oppo.html.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="slider_img3 ">"Fitness is like a relationship; you can't cheat and expect it to work"</h5>
                
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</section>
<section class="section-2">

<div class="main">
  <h1 class="main_1">Achievement</h1>
  <br>
  <div class="container">
   <div class="row"> <div class="col-lg-3"><div class="achievement-card">
            <img src="../img/pexels-photo-5924567.webp" alt="Winner 1">
            <h3>raju shingh</h3>
            <p>Gold Medalist in Bodybuilding</p>
        </div>
</div>
  <div class="col-lg-3" > <div class="achievement-card">
            <img src="../img/pexels-photo-10795063.webp." alt="Winner 2">
            <h3>Rajpal Yadav</h3>
            <p class="achiv_p">Featured in Fitness Magazine</p>
        </div></div>
  <div class="col-lg-3"> <div class="achievement-card">
            <img src="../img/istockphoto-1386831673-612x612.jpg" alt="Winner 3">
            <h3>Yadav Khan</h3>
            <p  class="achiv_p">Best Personal Trainer Award</p>
        </div></div>
  <div class="col-lg-3"><div class="achievement-card">
            <img src="../img/pexels-photo-1552101.webp" alt="Winner 4">
            <h3>vinith singh</h3>
            <p>Winner of Regional CrossFit</p>
        </div>
    </div></div></div>
        
       

       </div>

        

   
    </section>
   
    <section class="section-4">
      <!--===Blog-section========-->
    <section id="blog">
        <!--heading----------->
        <div class="blog-heading">
        
        <h3>My Blog</h3>
    </div>




    <!--blog-container---->
    <div class="blog-container">
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog1.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>22/01/2024 / morning mood</span>
 What Has Happened of All of the fitness Ideas ?
<p>A website where a health and wellness expert provides advice and information about nutrition, mental health, sports, exercise, general health, and more</p>
<a href="read.php"> Read More</a>           
</div>

        </div>
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog2.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>12/03/2024 / morning mood</span>
                The Benefits of Cross-Training for Fitness ?
<p> Share success stories from members who have achieved their fitness goals through dedication and hard work. These stories can inspire others and create a sense of community among gym members.</p>
<a href="read.php"> Read More</a>           
</div>

        </div>
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/8888.webp" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>10/05/2024 / morning mood</span>
                Fitness Challenges: <br>
                Fitness Technology:  
<p> Organize fitness challenges for your members and write about them on the blog. This could include challenges like a 30-day plank challenge, a step challenge, or a weight loss challenge. Share participants' progress and success stories to inspire others.

</p>
<a href="read.php"> Read More</a>           
</div>

        </div>

    </div>
    </section>
    
    <!--blog-container---->
    

        </div>
        <!--box-1--------->
        

        </div>
        <!--box-1--------->
        

    </div>

    </section>
    <section class="section-5">
      <section class="container-col">
        <h1 align="center">Membership Options</h1>
        <div class="row text-center">
            <div class="col-lg-4" >
                <div class="membership-option">
                    <h2>Basic</h2>
                    <p>Access to gym facilities</p>
                    <p>Price: &#8377;3000/month</p>
                    <a href="contact.php" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-option">
                    <h2>Professional</h2>
                    <p>Access to gym facilities</p>
                    <p>Access to group classes</p>
                    <p>Price: &#8377;5000/month</p>
                    <a href="contact.php" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="membership-option">
                    <h2>Elite</h2>
                    <p>Access to gym facilities</p>
                    <p>Access to group classes</p>
                    <p>Personal trainer sessions</p>
                    <p>Price: &#8377;8000/month</p>
                    <a href="contact.php" class="btn btn-dark">Buy Now</a>
                    
                </div>
            </div>
        </div>
    </section>

    

    </section>
    <div class="container1">
        <section class="about">
            <div class="about-image">
                <img src="../img/1222222.jpg" alt="">
            </div>
            <div class="about-content">
                <h2>Introduction</h2>
                <p>Welcome to Body Blast Gym, where the pursuit of fitness meets the joy of community. At Body Blast, we're not just a gym; we're your fitness partner on the journey to a healthier, stronger, and happier you. Our mission is to provide a dynamic and supportive environment for individuals of all fitness levels. With top-notch facilities, experienced trainers, and a vibrant community, Body Blast Gym is your destination for achieving fitness excellence. Whether you're a fitness enthusiast or a beginner, join us at Body Blast Gym and experience the power.......
                   <br> <br> <a href="about.php" class="btn btn-dark">About Us</a>

                </p>

            </div>
        </section>
    </div>
    <section class="section-6">
        <h2 style="color:white; font-family:'times New Roman' font-weight:1100px" class="text-center" >Our Branches</h2>
        <div class="container">
            <div class="section-border">
                <div class="section-background">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>BHAVANAGAR</h3>
                                <p>&#9733; &#9733; &#9733; &#9733;&#9733; <br>  Chitra<br> 364004</p>
                            </div>
                            <div class="col-lg-6">
                                <h3>RAJKOT</h3>
                                <p>&#9733; &#9733; &#9733; &#9733;&#9733; <br> 150 fit Road  <br> 303152</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-7">
        <div class="content">
            <div class="row">
                <div class="col-lg-2"> <img src="../img/aaaa.jpg" alt="" height="100%" width="100%"></div>
                <div class="col-lg-2"> <img src="../img/bbbb.jpg" alt="" height="100%" width="100%"></div>
                <div class="col-lg-2"> <img src="../img/ccccc.jpg" alt="" height="100%" width="100%"></div>
                <div class="col-lg-2"> <img src="../img/eeeeee.jpg" alt="" height="100%" width="100%"></div>
                <div class="col-lg-2"> <img src="../img/fffff.jpg" alt="" height="100%" width="100%"></div>
                <div class="col-lg-2"> <img src="../img/ddddd.jpg" alt="" height="100%" width="100%"></div>
            </div>
        </div>
    </div>

<?php 
include 'footer.php';?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
