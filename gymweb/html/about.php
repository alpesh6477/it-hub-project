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
    <title>About</title>
    <link rel="stylesheet" href="../css/about.css">
    <!--fav-icon----------------------->
    <link rel="shortcut icon" href="../img/44.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    background-color: #f2f2f2;
}

.heading {
    width: 90%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    text-align: center;
    margin: 20px auto;
}

.heading h1 {
    font-size: 50px;
    color: black;
    margin-bottom: 25px;
    position: relative;
}

.heading h1::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 4px;
    display: block;
    margin: 0 auto;
    background-color: #4caf50;

}

.heading p {
    font-size: 18px;
    color: #666;
    margin-bottom: 35px;

}

.container {
    width: 90%;
    margin: 0 auto;
    padding: 10px 20px;


}

.about {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
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

.about-image:hover img {
    transform: scale(1.2);
}

.about-content {
    flex: 1;
}

.about-conten h2 {
    font-size: 23px;
    margin-bottom: 15px;
    color: #333;

}

.about-conten p {
    font-size: 18px;
    line-height: 1.5;
    color: #666;
}

.about-conten .read-more {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    font-size: 19px;
    text-decoration: none;
    border-radius: 25px;
    margin-top: 15px;
    transition: 0.3s ease;



}

.about-conten .read-more:hover {
    background-color: #3e8e41;
}

@media screen and(max-width:768px) {
    .heading {
        padding: 0px 20px;
    }

    .heading h1 {
        font-size: 36px;
    }

    .heading p {
        font-size: 17px;
        margin-bottom: 0px;


    }

    .container {
        padding: 0px;

    }

    .about {
        padding: 20px;
        flex-direction: column;

    }

    .about-image {
        margin-right: 0px;
        margin-bottom: 20px;

    }

    .about-conten p {
        padding: 0px;
        font-stretch: 16px;

    }

    .about-conten .read-more {
        font-size: 16px;
    }

}

/* Additional styles for all sections */
.section {
    padding: 50px 0;
}

/* Heading styles */
.section h2 {
    color: #333;
    font-size: 28px;
    margin-bottom: 20px;
}

/* Text content styles */
.section p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
}

/* Background colors for alternating sections */
.section:nth-child(even) {
    background-color: #fff;
}

/* Testimonials and Values section styles */
.testimonials .main,
.values .main,
.history-team .main,
.values-achievements .main,
.testimonials-partnerships .main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

/* Testimonials and Values card styles */
.testimonials .card,
.values .card,
.history-team .card,
.values-achievements .card,
.testimonials-partnerships .card {
    width: calc(45% - 20px);
    margin-bottom: 20px;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 8px;
}

.container-1 {
    width: 90%;
    margin: 0 auto;
    padding: 10px 20px;
}

.about-1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.about-image-1 {
    margin-right: 10px;
    margin-bottom: 20px;
}

.about-image-1 img {
    max-width: 100%;
    height: auto;
    display: block;
    transition: 0.5s ease;
}

.testimonial {
    background-color: #f9f9f9;
    border-left: 4px solid #333;
    padding: 15px;
    margin-bottom: 20px;
}

.testimonial p {
    color: #555;
    line-height: 1.6;
}

.testimonial .author {
    color: #333;
    font-weight: bold;
    margin-top: 10px;
}
.partner {
    border-bottom: 1px solid #ccc;
    padding: 15px 0;
    margin-bottom: 20px;
}

.partner img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.partner p {
    color: #555;
    text-align: center;
    margin-top: 10px;
}
.about-content p{
    text-align:justify;
}
.about-content ul{
    text-align:justify;

}
.testimonial p{
    text-align:justify;
}

</style>


</head>




<body>
    

    <?php include 'header.php'; ?>
    <div class="heading">
        <h1>About Us</h1>
        <p>At Body Blast Gym, we are dedicated to transforming lives through fitness. Established with the vision of providing a holistic fitness experience, our state-of-the-art facilities and expert trainers create an environment where individuals of all fitness levels can thrive. </p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="../img/1222222.jpg" alt="">
            </div>
            <div class="about-content">
                <h2>Introduction</h2>
                <p>Welcome to Body Blast Gym, where the pursuit of fitness meets the joy of community. At Body Blast, we're not just a gym; we're your fitness partner on the journey to a healthier, stronger, and happier you. Our mission is to provide a dynamic and supportive environment for individuals of all fitness levels. With top-notch facilities, experienced trainers, and a vibrant community, Body Blast Gym is your destination for achieving fitness excellence. Whether you're a fitness enthusiast or a beginner, join us at Body Blast Gym and experience the power of transformation. Your journey to a fitter, healthier lifestyle starts here.

                </p>

            </div>
        </section>
    </div>
    <div class="container">
        <section class="about">
        <div class="about-content">
            <h2>Mission :</h2>
                <p> Refers to the means of achieving the goal <br>is focused on the how <br>is to inform the gym members <br>is usually bigger than visio.
                </p>
                <h2> Vision:</h2>
                <p>Denotes the overarching goal that gym wants to achieve in the future <br>is the description of the why <br>is to motivate the gym members <br>is usually smaller..

                </p>

            </div>
            <div class="about-image">
                <img src="../img/gym1.jpg" alt="">
            </div>
           
        </section>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="../img/gym2.jpg" alt="">
            </div>
            <div class="about-content">
                <h2>History:</h2>
                <p>Established in 2024 , Body Blast Gym has been dedicated to helping individuals achieve their fitness goals for over 2024 years. Founded by Alpesh Chudasama, our gym started as a small fitness center with a vision to provide high-quality fitness facilities and personalized training programs.</p>

<p>Over the years, we have expanded our facilities, upgraded our equipment, and developed a team of experienced trainers and instructors to better serve our members. Our commitment to excellence and customer satisfaction has enabled us to grow into one of the most reputable fitness centers in Bhavnagar.</p>

<p>As we continue to evolve and adapt to the changing fitness landscape, we remain focused on our mission to empower individuals to lead healthier and more active lifestyles. We are grateful for the continued support of our members and look forward to many more years of helping people reach their fitness goals.</p>
</div>
            

            </div>
        </section>
    </div>
    <div class="container">
        <section class="about">
        <div class="about-content">
            <h2>Team:</h2>
            <h3>John Doe</h3>
            <p>Position: Head Trainer</p>
            <p>With over 10 years of experience in personal training, John is passionate about helping clients achieve their fitness goals through tailored workout programs and nutritional guidance.</p>
            <h3>Michael Johnson</h3>
            <p>Position: Gym Manager</p>
            <p>Michael oversees the day-to-day operations of the gym, ensuring a smooth and efficient experience for members and staff alike.</p>
            
            

            </div>
            <div class="about-image">
                <img src="../img/pexels-mikhail-nilov-6740301.jpg" alt="">
            </div>
           
        </section>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="../img/gym4.avif" alt="">
            </div>
            <div class="about-content">
                <h2>Values:</h2>
                <ul>
            <li><strong>Commitment to Excellence:</strong> We are dedicated to providing exceptional service and support to our members, helping them achieve their fitness goals.</li>
            <li><strong>Community:</strong> We foster a welcoming and inclusive community where individuals can connect, support each other, and thrive together.</li>
            <li><strong>Integrity:</strong> We operate with honesty, transparency, and integrity in all aspects of our business, building trust with our members and community.</li>
            <li><strong>Continuous Improvement:</strong> We are committed to constantly improving and evolving our offerings, facilities, and services to better meet the needs of our members.</li>
            <li><strong>Health and Wellness:</strong> We prioritize the health and well-being of our members, providing resources, guidance, and support to help them lead healthier and happier lives.</li>
        </ul>

            </div>
        </section>
    </div>
    <div class="container">
        <section class="about">
        <div class="about-content">
            <h2>Achievements:</h2>
            <ul>
            <li><strong>Best Gym Award:</strong> Received the "Best Gym in the City" award for three consecutive years, recognizing our dedication to excellence in fitness services.</li>
            <li><strong>Member Success Stories:</strong> Helped thousands of members achieve their fitness goals and transform their lives through our personalized training programs and support.</li>
            <li><strong>Community Impact:</strong> Contributed to the local community by organizing charity events, fitness workshops, and wellness programs, making a positive impact on people's lives.</li>
            <li><strong>Expansion and Growth:</strong> Expanded our facilities and services to accommodate the growing demand, providing more opportunities for individuals to lead healthier lifestyles.</li>
            <li><strong>Recognition and Media Coverage:</strong> Featured in prominent media outlets and publications for our innovative approach to fitness, garnering recognition and praise from industry experts and influencers.</li>
        </ul>


            </div>
            <div class="about-image">
                <img src="../img/gym5.avif" alt="">
            </div>
           
        </section>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="../img/gym2.jpg" alt="">
            </div>
            <div class="about-content">
                <h2>Client Testimonials:</h2>
                <div class="testimonial">
            <p>"I joined Body Blast Gym six months ago, and it has been an amazing journey. The trainers are incredibly supportive, and the atmosphere is motivating. I've seen significant improvements in my fitness level and overall well-being. Highly recommend!"</p>
            <p class="author">- John Doe</p>
        </div>
        <div class="testimonial">
            <p>"Body Blast Gym is more than just a gym; it's a community. The trainers genuinely care about your progress and go above and beyond to help you achieve your goals. I've made lifelong friends here and couldn't be happier with my decision to join."</p>
            <p class="author">- Jane Smith</p>
        </div>
        <div class="testimonial">
            <p>"I've been a member of Body Blast Gym for over two years now, and I can't imagine going anywhere else. The facilities are top-notch, and the variety of classes keeps things interesting. Plus, the staff is friendly and always willing to assist. It's truly a second home."</p>
            <p class="author">- Mark Johnson</p>
        </div>

            </div>
        </section>
    </div>
    <div class="container">
        <section class="about">
        <div class="about-content">
        <div class="partner">
            <img src="../img/gym1.jpg" alt="Partner 1" height="100px" width="100px">
            <p>Partner 1 description goes here</p>
        </div>
        <div class="partner">
            <img src="../img/gym1.jpg" alt="Partner 2"  height="100px" width="100px">
            <p>Partner 2 description goes here</p>
        </div>
        <div class="partner">
            <img src="../img/gym1.jpg" alt="Partner 3" height="100px" width="100px">
            <p>Partner 3 description goes here</p>
        </div>

            </div>
            <div class="about-image">
                <img src="../img/pexels-mikhail-nilov-6740301.jpg" alt="">
            </div>
           
        </section>
    </div>
   

    <?php include "footer.php" ?>

</body>

</html>
