<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-CatersCloud</Home-CatersCloud></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style_home.css">
</head>

<div class="container my-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Welcome to CatersCloud!</strong> You are logged in as
        <?php echo $_SESSION['username'] ?>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hello,
                <?php echo $_SESSION['username'] ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Vegeterian</a></li>
                            <li><a class="dropdown-item" href="#">Non-Veg</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/caterscloud/cater.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/caterscloud/offer.php">Offers and
                            Discounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/caterscloud/feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/caterscloud/order_place.php">Book
                            Caterer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: #E74646;"
                            href="/caterscloud/signout.php">SignOut</a>
                    </li>

                </ul>
                <div class="logobox" style="
    display: flex;
    align-items: center;
    flex-direction: row;
    justify-content: center; 
    ">
                    <div id="logo"> <img src="assets/icon.png" alt="" height="60" width="60"></div>
                    <div class="name">
                        <h2>CatersCloud</h2>
                    </div>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row main-row">
            <div class="col-9">
                <div class="col user-box">
                    <div class="row ">
                        <div class="col-2 user-dp"><img
                                src="https://cdn.discordapp.com/attachments/1118765612332748871/1118775687097110638/4hw4aqgs.png"
                                alt="user's image"></div>
                        <div class="col-9">
                            <div class="row">
                                <div class="user-name h2">Bittu Halwai</div>
                                <div class="user-intro lead">Bittu Halwai offers a delectable spread of authentic Indian
                                    dishes, infused with rich flavors and aromatic spices, to tantalize your taste buds
                                    and create a memorable dining experience.</div>
                            </div>
                            <div class="row h4">
                                <div class="col user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>

                            </div>
                            <div class="row"><a href="/caterscloud/profiles.php/" id="more" class="button"
                                    style="vertical-align:middle"><span>View More</span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col user-box">
                    <div class="row ">
                        <div class="col-2 user-dp"><img
                                src="https://cdn.discordapp.com/attachments/1118765612332748871/1118775689433317376/ljk38zlt.png"
                                alt="user's image"></div>
                        <div class="col-9">
                            <div class="row">
                                <div class="user-name h2">Aishwariya Gupta</div>
                                <div class="user-intro lead">Aishwariya Gupta Catering brings the exotic flavors of
                                    India to your special occasions, serving a wide range of traditional curries,
                                    biryanis, and tandoor specialties that will leave your guests craving for more.
                                </div>
                            </div>
                            <div class="row h4">
                                <div class="col user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>

                            </div>
                            <div class="row"><a id="more" class="button" style="vertical-align:middle"><span>View
                                        More</span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col user-box">
                    <div class="row ">
                        <div class="col-2 user-dp"><img
                                src="https://cdn.discordapp.com/attachments/1118765612332748871/1118775690142158949/wk3m8wmj.png"
                                alt="user's image"></div>
                        <div class="col-9">
                            <div class="row">
                                <div class="user-name h2">Raju A1 Cater</div>
                                <div class="user-intro lead">Raju A1 Cater prides itself on delivering a burst of
                                    flavors, with their diverse menu of Indian delicacies prepared with the perfect
                                    blend of spices, ensuring a delightful culinary journey for your event.</div>
                            </div>
                            <div class="row h4">
                                <div class="col user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>

                            </div>
                            <div class="row"><a id="more" class="button" style="vertical-align:middle"><span>View
                                        More</span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col user-box">
                    <div class="row ">
                        <div class="col-2 user-dp"><img
                                src="https://cdn.discordapp.com/attachments/1118765612332748871/1118775688749666335/gl7chy65.png"
                                alt="user's image"></div>
                        <div class="col-9">
                            <div class="row">
                                <div class="user-name h2">Rajesh khurana</div>
                                <div class="user-intro lead">Rajesh Khurana Caterers take pride in offering a majestic
                                    dining experience fit for kings and queens, presenting a royal spread of authentic
                                    Indian cuisine that showcases the rich culinary heritage of the country.</div>
                            </div>
                            <div class="row h4">
                                <div class="col user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>

                            </div>
                            <div class="row"><a id="more" class="button" style="vertical-align:middle"><span>View
                                        More</span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col user-box">
                    <div class="row ">
                        <div class="col-2 user-dp"><img
                                src="https://png.pngtree.com/png-vector/20220807/ourmid/pngtree-man-avatar-wearing-gray-suit-png-image_6102786.png"
                                alt="user's image"></div>
                        <div class="col-9">
                            <div class="row">
                                <div class="user-name h2">Ritwick Halwai</div>
                                <div class="user-intro lead">Ritwick Halwai brings the warmth and comfort of home-cooked
                                    Indian meals to your events, offering a wide range of traditional dishes that are
                                    prepared with love, care, and authentic Indian flavors.</div>
                            </div>
                            <div class="row h4">
                                <div class="col user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>

                            </div>
                            <div class="row"><a id="more" class="button" style="vertical-align:middle"><span>View
                                        More</span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col user-box">
                    <div class="row ">
                        <div class="col-2 user-dp"><img
                                src="https://png.pngtree.com/png-vector/20220807/ourmid/pngtree-man-avatar-wearing-gray-suit-png-image_6102786.png"
                                alt="user's image"></div>
                        <div class="col-9">
                            <div class="row">
                                <div class="user-name h2">Sushoban Joshi</div>
                                <div class="user-intro lead">Experience the lavishness of a royal banquet with Sushoban
                                    Joshi Catering, where every dish is meticulously prepared using the finest
                                    ingredients and secret family recipes, bringing a regal touch to your special
                                    events.</div>
                            </div>
                            <div class="row h4">
                                <div class="col user-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                </div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>
                                <div class="col user-tag">#biryani</div>

                            </div>
                            <div class="row"><a id="more" class="button" style="vertical-align:middle"><span>View
                                        More</span></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col side-bar">
                
            </div>
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary" style="width: 320px;">
                <a href="/"
                    class="d-flex align-items-center flex-shrink-0 p-3 link-body-emphasis text-decoration-none border-bottom">
                    <img src="icon2.png" height="40" width="40" alt="">
                    <span class="fs-5 fw-semibold">Filters</span>
                </a>
                <div class="list-group list-group-flush border-bottom scrollarea">
                    <a href="#" class="list-group-item list-group-item-action  py-3 lh-sm" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            <strong class="mb-1">Select budget</strong>
                            <small><button class="btn btn-primary">Apply</button></small>
                        </div>
                        <div class="col-10 mb-1 small"><button class="btn btn-outline-primary">5k-10k</button><button
                                class="btn btn-outline-primary">10k-20k</button><button
                                class="btn btn-outline-primary">20k+</button></div>
                    </a>
                    <div class="list-group list-group-flush border-bottom scrollarea">
                        <a href="#" class="list-group-item list-group-item-action  py-3 lh-sm" aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1">Select Distance</strong>
                                <small><button class="btn btn-primary">Apply</button></small>
                            </div>
                            <div class="col-10 mb-1 small"><button
                                    class="btn btn-outline-primary">Within 5km</button><button
                                    class="btn btn-outline-primary">Within 10km</button><button
                                    class="btn btn-outline-primary">10km+</button></div>
                        </a>
                        <div class="list-group list-group-flush border-bottom scrollarea">
                            <a href="#" class="list-group-item list-group-item-action  py-3 lh-sm" aria-current="true">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Select Numbers</strong>
                                    <small><button class="btn btn-primary">Apply</button></small>
                                </div>
                                <div class="col-10 mb-1 small"><button
                                        class="btn btn-outline-primary">50 People</button><button
                                        class="btn btn-outline-primary">50-100 People</button><button
                                        class="btn btn-outline-primary">100+</button></div>
                            </a>
                            <div class="list-group list-group-flush border-bottom scrollarea">
                                <a href="#" class="list-group-item list-group-item-action  py-3 lh-sm"
                                    aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">Event Type</strong>
                                        <small><button class="btn btn-primary">Apply</button></small>
                                    </div>
                                    <div class="col-10 mb-1 small"><button
                                            class="btn btn-outline-primary">Wedding</button><button
                                            class="btn btn-outline-primary">Party</button><button
                                            class="btn btn-outline-primary">Small Gathering</button></div>
                                </a>
                                <div class="list-group list-group-flush border-bottom scrollarea">
                                    <a href="#" class="list-group-item list-group-item-action  py-3 lh-sm"
                                        aria-current="true">
                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <strong class="mb-1">Specialty</strong>
                                            <small><button class="btn btn-primary">Apply</button></small>
                                        </div>
                                        <div class="col-10 mb-1 small"><button
                                                class="btn btn-outline-primary">Indian</button><button
                                                class="btn btn-outline-primary">Chinese</button><button
                                                class="btn btn-outline-primary">Others..</button></div>
                                    </a>

                                </div>

                            </div>
                        </div>

                        <section id="footer" class="footer">

                            <div class="box-container">
                        
                                
                                <div class="box">
                                    <h3>Contact Info</h3>
                                    <a href="#"> <i class="fas fa-phone"></i>+91 9999988888</a>
                                    <a href="#"> <i class="fas fa-phone"></i>+011 22224444</a>
                                    <a href="#"> <i class="fas fa-envelope"></i>CatersCloud@gmail.com </a>
                                    <a href="#"> <i class="fas fa-envelope"></i>BookYourCater@gmail.com </a>
                                    <a href="#"> <i class="fas fa-map-marker-alt"></i>Delhi, India</a>
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
                                    <h3>Follow us</h3>
                                    <a href="#"> <i class="fab fa-facebook-f"></i>Facebook</a>
                                    <a href="#"> <i class="fab fa-twitter"></i>Twitter</a>
                                    <a href="#"> <i class="fab fa-instagram"></i>Instagram</a>
                                    <a href="#"> <i class="fab fa-linkedin"></i>LinkedIn</a>
                                    <a href="#"> <i class="fab fa-pinterest"></i>Pinterest</a>
                                </div>
                                <div class="box">
                                    <h3>Quick Links</h3>
                                    <a href="#home"> <i class="fas fa-chevron-right"></i>Home</a>
                                    
                                    <a href="#WhatWeDo"> <i class="fas fa-chevron-right"></i>What We Do?</a>
                                    <a href="#OurServices"> <i class="fas fa-chevron-right"></i>Our Services</a>
                                    <a href="#WhyChooseUs"> <i class="fas fa-chevron-right"></i>Why Choose Us?</a>
                                </div>
                        
                            </div>
                        
                            <div class="credit"> Created by <span>Team CatersCloud</span></div>
                        
                        </section>



                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                            crossorigin="anonymous"></script>
</body>

</html>
