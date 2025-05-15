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
    <!--title-------------------------->
    <title>Blog</title>
    <!--stylesheet--------------------->
    
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <!--poppins---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    *{
    margin: 0px;
    padding: 0px;
    font-family: ;
    box-sizing: border-box;
}
a{
    text-decoration: none;

}
ul{
    list-style: none;
}
body{
   margin: 0px;
   padding: 0px;
   font-family:; 
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
.blog-t.ext{
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
</style>

</head>
<body>
<?php include 'header.php' 
    ?>
    <!--===Blog-section========-->
    <section id="blog">
        <!--heading----------->
        <div class="blog-heading">
        <span>My Recent Posts</span>
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
<a href="#" class="blog-title"> What Has Happened of All of the fitness Ideas ?</a>
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
<a href="#" class="blog-title"> The Benefits of Cross-Training for Fitness ?
</a>
<p>Share success stories from members who have achieved their fitness goals through dedication and hard work. These stories can inspire others and create a sense of community among gym members.</p>
<a href="read.php"> Read More</a>           
</div>

        </div>
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/istockphoto-478921850-612x612.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>10/05/2024 / morning mood</span>
<a href="#" class="blog-title"> Fitness Challenges:
Fitness Technology:</a>
<p>Organize fitness challenges for your members and write about them on the blog. This could include challenges like a 30-day plank challenge, a step challenge, or a</p>
<a href="read.php"> Read More</a>           
</div>

        </div>

    </div>
    </section>
    
    

    <!--blog-container---->
    <div class="blog-container">
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog11.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>11/02/2023 / morning mood</span>
<a href="#" class="blog-title"> Listening to Your Body :</a>
<p>While guidelines and recommendations are helpful, it's essential to remember that nutrition is not one-size-fits-all. Listen to your body's cues and adjust your dietary choices accordingly. Pay attention to how different foods make you feel, both physically and mentally, and make adjustments as needed to support your unique needs and preferences.

Remember, achieving your fitness goals is not just about what you do in the gym – it's also about what you put on your plate. By prioritizing nutrient-rich foods, staying hydrated, and tuning into your body's signals, you'll be well-equipped to fuel your fitness journey and unlock your full potential.






</p>
<a href="read.php"> Read More</a>           
</div>

        </div>
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog22.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>15/01/2024 / morning mood</span>
<a href="#" class="blog-title"> Fuel for Performance :
</a>
<p>Just like a car needs fuel to run smoothly, your body requires the right nutrients to perform at its best. Whether you're hitting the weights, pounding the pavement, or mastering a new yoga pose, your muscles need a steady supply of energy to power through your workouts.

So, what should you be eating? Focus on incorporating complex carbohydrates like whole grains, fruits, and vegetables into your diet to provide sustained energy. Pair them with lean proteins such as chicken, fish, tofu, or legumes to support muscle repair and growth. And don't forget about healthy fats from sources like avocados, nuts, and olive oil to keep your joints lubricated and your hormones in balance.</p>
<a href="read.php"> Read More</a>           
</div>

        </div>
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog3.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>19/09/2024 / morning mood</span>
<a href="#" class="blog-title"> Recovery Nutrition :
</a>
<p>Recovery is just as important as the workout itself – if not more so. Proper nutrition post-workout plays a vital role in replenishing glycogen stores, repairing muscle tissue, and promoting recovery, helping you bounce back stronger and more resilient for your next sweat session.

After exercising, refuel with a combination of carbohydrates and protein to kickstart the recovery process. Opt for a balanced meal or snack containing sources like Greek yogurt with berries, a turkey and avocado sandwich on whole-grain bread, or a protein smoothie made with spinach, banana, and whey protein powder.

</p>
<a href="read.php"> Read More</a>           
</div>

        </div>

    </div>
</sectio>


    <!--blog-container---->
    <div class="blog-container">
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog44.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>20/05/2022 / morning mood</span>
<a href="#" class="blog-title"> Warm Up Properly :</a>
<p>Skipping your warm-up is a recipe for disaster – not only does it increase your risk of injury, but it also hinders your performance during your workout. Take the time to properly warm up your muscles and prepare your body for exercise. Start with five to ten minutes of light cardio, such as jogging on the treadmill or cycling, followed by dynamic stretches to loosen up your joints and improve flexibility.Think of your warm-up as the prelude to your main event – it prepares your body for the rigors of exercise by gradually increasing blood flow to your muscles, raising your heart rate, and lubricating your joints. A well-executed warm-up not only reduces the risk of injury but also enhances flexibility, mobility, and overall performance during your workout.</p>
<a href="read.php"> Read More</a>           
</div>

        </div>
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog55.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>29/07/2024 / morning mood</span>
<a href="#" class="blog-title"> Managing Stress and Enhancing Well-being :
</a>
<p>Exercise is a powerful tool for managing stress and improving overall well-being – and when combined with mindfulness, its benefits are amplified. By bringing awareness to the sensations of your body and the rhythm of your breath during exercise, you can create a sense of calm and presence that extends far beyond the gym walls.

Studies have shown that mindfulness practices such as meditation and deep breathing can reduce stress levels, enhance mood, and improve sleep quality – all of which are essential components of a healthy and balanced lifestyle. So, the next time you lace up your sneakers or roll out your yoga mat, take a moment to pause, breathe, and connect with the present moment.</p>
<a href="read.php"> Read More</a>           
</div>

        </div>
        <!--box-1--------->
        <div class="blog-box">
            <!--img---->
            <div class="blog-img">
                <img src="../img/blog66.jpg" alt="Blog">
            </div>
            <!--text---->
            <div class="blog-text">
                <span>16/02/2021 / morning mood</span>
<a href="#" class="blog-title"> Tuning Into Your Body:
</a>
<p>How often do you find yourself going through the motions during a workout, mindlessly counting reps or daydreaming about your to-do list? Mindfulness invites you to shift your focus inward and become more attuned to the sensations of your body in the present moment.

By tuning into your breath, noticing the subtle nuances of each movement, and listening to your body's signals, you can cultivate a deeper connection with yourself and enhance the effectiveness of your workouts. Whether you're practicing yoga, lifting weights, or going for a run, mindfulness allows you to harness the power of intention and purpose in every action you take.

</p>
<a href="read.php"> Read More</a>           
</div>

        </div>

    </div>
</sectio>
        </div>

    </div>
    <?php
    include 'footer.php' 
    ?>
    
</body>
</html>