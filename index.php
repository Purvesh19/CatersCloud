<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CatersCloud - Party at Your Place</title>
    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        header::before {
            background: url(https://www.lagunarestaurant.com/wp-content/uploads/2020/09/Why-choose-Laguna-for-Indian-catering-services-image.jpg;)no-repeat center center/cover;
            filter: blur(4px);
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;

        }
    </style>
</head>

<body>
    <header>
        <div id="home" class="nav-container">
            <nav class="navbar">
                <a href="" class="brand">
                    <img src="./assets/logo_nobg.png" class="logo" alt="brand logo">
                    <img src="./assets/CatersCloud.svg" class="name" alt="brand name">
                </a>
                <div class="navlinks">
                    <a href="#About">About Us</a>
                    <a href="#WhatWeDo">What We Do?</a>
                    <a href="#OurServices">Our Services</a>
                    <a href="#WhyChooseUs">Why Choose Us?</a>
                    <a href="#footer">Contact Us</a>
                </div>
            </nav>
        </div>
        <div class="container-top">

            <div class="heading btn">
                <span>Taste for all Occasions</span>
            </div>
            <form class="btn btn1 get-started">
                <div><a href="/caterscloud/login.php/" id="login" class="button" id="click" style="vertical-align:middle"><span>Log
                    In</span></a></div>

        <div><a href="/caterscloud/signup.php/" id="signup" class="button" id="click" style="vertical-align:middle"><span>Sign
                    Up</span></a></div>
    </header>
    </form>
    <script>$(function () {
            $('#click').click(function () {
                $("#email").prop('required', true);
            });
        });</script>
    <div class="btn btn2"><a href="#About" class="button about" style="vertical-align:middle">About Us</a></div>
    <div class="arrow">
        <div><span></span></div>
        <div><span></span></div>
    </div>
    </div>

    <div class="container" id="About">
        <div  id="WhatWeDo"  class="flex-1">
            <div class="image img-1">
                <img src="./assets/IMG-1.jpg" height="350" width="300">
            </div>
            <div class="image img-2">
                <img src="./assets/IMG-2.jpg" height="350" width="300" alt="">
            </div>
        </div>
        <div class="flex-2">
            <div class="tittle">
                <h1>What We Do?</h1>
            </div>
            <div class="explain">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus totam eum necessitatibus rerum
                    iure ipsam accusantium modi facilis iste nulla! Blanditiis repellat alias itaque fuga illum esse?
                    Excepturi quibusdam tenetur, temporibus sequi culpa voluptates corporis mollitia neque animi
                    voluptatum commodi ducimus vero. </p>
            </div>
            <div class=""><a class="modify-a button" href="#"><span>Book Now</span></a></div>
        </div>
    </div>
    <div id="OurServices" class="container-3" id="About">
        <div class="flex-4">
            <div class="tittle-3">
                <h1>Our Services</h1>
            </div>
            <div class="explain-3">
                <p>
                <ul>
                    <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </li>
                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </li>
                </ul>
                </p>
            </div>
            <div class=""><a class="modify-a-3 button" href="#"><span>Book Now</span></a></div>
        </div>
        <div class="flex-3">
            <div class="image img-1">
                <img src="./assets/IMG-1.jpg" height="350" width="300">
            </div>
            <div class="image img-2">
                <img src="./assets/IMG-2.jpg" height="350" width="300" alt="">
            </div>
        </div>

    </div>
    <div class="container" id="About">
        <div  id="WhyChooseUs" class="flex-1">
            <div class="image img-1">
                <img src="./assets/ezgif.com-crop (1).gif" height="350" width="300">

            </div>
            <div class="image img-2">
                <img src="./assets/ezgif.com-video-to-gif.gif" height="350" width="300" alt="">
            </div>
        </div>
        <div class="flex-2">
            <div class="tittle">
                <h1>Why Choose Us?</h1>
            </div>
            <div class="explain">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus totam eum necessitatibus rerum
                    iure ipsam accusantium modi facilis iste nulla! Blanditiis repellat alias itaque fuga illum esse?
                    Excepturi quibusdam tenetur, temporibus sequi culpa voluptates corporis mollitia neque animi
                    voluptatum commodi ducimus vero. </p>
            </div>
            <div class=""><a class="modify-a button" href="#"><span>Book Now</span></a></div>
        </div>
    </div>
</body>

<!-- footer section starts  -->

<section id="footer" class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i>Home</a>
            <a href="#login"> <i class="fas fa-chevron-right"></i>Login</a>
            <a href="#signup"> <i class="fas fa-chevron-right"></i>Signup</a>
            <a href="#WhatWeDo"> <i class="fas fa-chevron-right"></i>What We Do?</a>
            <a href="#OurServices"> <i class="fas fa-chevron-right"></i>Our Services</a>
            <a href="#WhyChooseUs"> <i class="fas fa-chevron-right"></i>Why Choose Us?</a>
        </div>

        <div class="box">
            <h3>Our Services</h3>
            <a href="#OurServices"> <i class="fas fa-chevron-right"></i>Lorem</a>
            <a href="#OurServices"> <i class="fas fa-chevron-right"></i>Lorem</a>
            <a href="#OurServices"> <i class="fas fa-chevron-right"></i>Lorem</a>
            <a href="#OurServices"> <i class="fas fa-chevron-right"></i>Lorem</a>
            <a href="#OurServices"> <i class="fas fa-chevron-right"></i>Lorem</a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i>+91 9999988888</a>
            <a href="#"> <i class="fas fa-phone"></i>+011 22224444</a>
            <a href="#"> <i class="fas fa-envelope"></i>CatersCloud@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i>BookYourCater@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Delhi, India</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i>LinkedIn</a>
            <a href="#"> <i class="fab fa-pinterest"></i>Pinterest</a>
        </div>

    </div>

    <div class="credit"> Created by <span>Team CatersCloud</span></div>

</section>

<!-- footer section ends -->

</html>