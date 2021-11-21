<?php
include("header.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Briyani Delivery</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section class="about">
            <img src="images/brick.jpg">
            <div class="text-box">
                <h1>Eat Briyani Everyday!</h1> 
                <p>Briyani Delivery is a food delivery service that only specifies<br>in delivering Nasi Briyani from various Nasi Briyani restaurants in Penang.</p> 
                <a href="restaurant.php" class="hero-btn">Order Briyani Now!</a>
            </div>
        </section>
                
        <!<!-- Feedbacks --> 
        <section class="feedbacks">
            <h1>Reviews</h1>
            <p>Briyani Lover's Feedbacks</p>
            <div class="feedbacks-col">
                <img src="images/people1.jpg"> 
                <div>
                    <p>Fast Delivery from my favorite restaurant</p> 
                    <h3>Jalil Saad</h3>
                </div>
            </div>
            <div class="feedbacks-col">
                <img src="images/people2.jpg"> 
                <div>
                    <p>FREE DELIVERY!!!</p> 
                    <h3>Syed Sultan</h3>
                </div>
            </div>
            <div class="feedbacks-col">
                <img src="images/people3.jpg"> 
                <div>
                    <p>Penghantaran Mantap, Nasi Briyani Padu!!!</p> 
                    <h3>Omar Rashid</h3>
                </div>
            </div>
            <p><i>Feedback: briyanidelivery@gmail.com</i></p>
        </section>
        
        <!<!-- Call to Action -->      
        <section class="cta">
            <h1>Register Now!</h1>
            <br>
            <a href="userSignUp.html" class="hero-btn">CLICK HERE!</a>
        </section>
        
        <section class="gta">
            <h1>Restaurant Owner!</h1>
            <br>
            <a href="restaurantOwnerSignUp.html" class="hero-btn">CLICK HERE!</a>
        </section>
        
        <footer>
            <div class="footer-bottom">
                <p>copyright &copy 2021 Briyani Delivery</p>
            </div>
        </footer>
    </body>
</html>

