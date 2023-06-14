<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cater's profile</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="./css/style_profile.css"> -->
    <style>
      <?php include "css/style_profile.css" ?>
      nav {
        background-color: hsl(10, 92%, 75%, 0.7);
      }
      #logo {
        display: flex;
        position: relative;
        left: -25%;
        top: -5px;
      }
      .name {
        position: relative;
        top: 50%;
        left: -25%;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Hello,</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Categories
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Vegeterian</a></li>
                <li><a class="dropdown-item" href="#">Non-Veg</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
          <div id="logo">
            <img src="https://cdn.discordapp.com/attachments/1064123884569362488/1118458238569029742/icon.png" alt="" height="60" width="60" />
          </div>
          <div class="name"><h2>CatersCloud</h2></div>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-primary" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <section class="body">
      <div class="container-body">
        <div class="dp">
          <div class="profile-photo"><img
            src="https://thumbs.dreamstime.com/b/chef-woman-gesturing-ok-confident-sign-vector-illustration-116211561.jpg"
            height="350"
            width="350"
            alt=""
          /></div>
          <ul class="list-group">
            <div class="stars"><li class="list-group-item active" aria-current="true">Rating:</li>
            <div class="rating">
              <input type="radio" id="star5" name="rating" value="5">
              <label for="star5"></label>
              <input type="radio" id="star4" name="rating" value="4">
              <label for="star4"></label>
              <input type="radio" id="star3" name="rating" value="3">
              <label for="star3"></label>
              <input type="radio" id="star2" name="rating" value="2">
              <label for="star2"></label>
              <input type="radio" id="star1" name="rating" value="1">
              <label for="star1"></label>
            </div></div>
            
            <li class="list-group-item">Contack Info:    99XXXXX384</li>
            <li class="list-group-item">Email: username@gmail.com</li>
            <li class="list-group-item">Address: User catering,dwarka,New delhi</li>
            <li class="list-group-item">Chat With Cater:<button class="btn btn-outline-primary">Message Cater</button></li>
          </ul>
          <div class="reviews">
            <div class="review">
              <div class="review-header">
                <span class="review-name">John Doe</span>
                <div class="rating">
                  <input type="radio" id="star1-1" name="rating-1" value="1">
                  <label for="star1-1"></label>
                  <input type="radio" id="star1-2" name="rating-1" value="2">
                  <label for="star1-2"></label>
                  <input type="radio" id="star1-3" name="rating-1" value="3">
                  <label for="star1-3"></label>
                  <input type="radio" id="star1-4" name="rating-1" value="4">
                  <label for="star1-4"></label>
                  <input type="radio" id="star1-5" name="rating-1" value="5">
                  <label for="star1-5"></label>
                </div>
              </div>
              <p class="review-text">The food was absolutely delicious! I would give it 5 stars.</p>
            </div>
          
            <div class="review">
              <div class="review-header">
                <span class="review-name">Jane Smith</span>
                <div class="rating">
                  <input type="radio" id="star2-1" name="rating-2" value="1">
                  <label for="star2-1"></label>
                  <input type="radio" id="star2-2" name="rating-2" value="2">
                  <label for="star2-2"></label>
                  <input type="radio" id="star2-3" name="rating-2" value="3">
                  <label for="star2-3"></label>
                  <input type="radio" id="star2-4" name="rating-2" value="4">
                  <label for="star2-4"></label>
                  <input type="radio" id="star2-5" name="rating-2" value="5">
                  <label for="star2-5"></label>
                </div>
              </div>
              <p class="review-text">Amazing catering service. I rate it 4 stars.</p>
            </div>
          
            <div class="review">
              <div class="review-header">
                <span class="review-name">David Johnson</span>
                <div class="rating">
                  <input type="radio" id="star3-1" name="rating-3" value="1">
                  <label for="star3-1"></label>
                  <input type="radio" id="star3-2" name="rating-3" value="2">
                  <label for="star3-2"></label>
                  <input type="radio" id="star3-3" name="rating-3" value="3">
                  <label for="star3-3"></label>
                  <input type="radio" id="star3-4" name="rating-3" value="4">
                  <label for="star3-4"></label>
                  <input type="radio" id="star3-5" name="rating-3" value="5">
                  <label for="star3-5"></label>
                </div>
              </div>
              <p class="review-text">Highly recommended! The flavors were outstanding. 5 stars from me!</p>
            </div>
          
            <div class="review">
              <div class="review-header">
                <span class="review-name">Sarah Williams</span>
                <div class="rating">
                  <input type="radio" id="star4-1" name="rating-4" value="1">
                  <label for="star4-1"></label>
                  <input type="radio" id="star4-2" name="rating-4" value="2">
                  <label for="star4-2"></label>
                  <input type="radio" id="star4-3" name="rating-4" value="3">
                  <label for="star4-3"></label>
                  <input type="radio" id="star4-4" name="rating-4" value="4">
                  <label for="star4-4"></label>
                  <input type="radio" id="star4-5" name="rating-4" value="5">
                  <label for="star4-5"></label>
                </div>
              </div>
              <p class="review-text">The presentation and taste of the food were exceptional. 4 stars!</p>
            </div>
          
            <div class="review">
              <div class="review-header">
                <span class="review-name">Michael Brown</span>
                <div class="rating">
                  <input type="radio" id="star5-1" name="rating-5" value="1">
                  <label for="star5-1"></label>
                  <input type="radio" id="star5-2" name="rating-5" value="2">
                  <label for="star5-2"></label>
                  <input type="radio" id="star5-3" name="rating-5" value="3">
                  <label for="star5-3"></label>
                  <input type="radio" id="star5-4" name="rating-5" value="4">
                  <label for="star5-4"></label>
                  <input type="radio" id="star5-5" name="rating-5" value="5">
                  <label for="star5-5"></label>
                </div>
              </div>
              <p class="review-text">Delicious food and excellent service! 5 stars all the way.</p>
            </div>
          </div>
          
        </div>

        <div class="profile-content">
          <h1>Cater's name</h1>
          <p class="summary">
            Welcome to [Caterer's Name], where we bring the vibrant flavors of
            Indian cuisine to your special events and gatherings. With years of
            experience and a passion for creating memorable dining experiences,
            we are dedicated to delighting your taste buds and exceeding your
            expectations
          </p>
          <div class="speciality">
            <h5>Specilist in.</h5>
            <p>Indian Cuisine</p>
            <p>Fast Food</p>
            <p>Chinese</p>
          </div>
          <div class="menu">
            <h2>Menu</h2>
            <!-- <img
              src="./assets/WhatsApp Image 2023-06-13 at 17.28.32.jpg"
              height="500"
              width="770"
              alt=""
            /> -->
            <img
                    src="https://d3jmn01ri1fzgl.cloudfront.net/photoadking/webp_thumbnail/63ee170bcdae7_json_image_1676547851.webp" height="400"
                    class="d-block w-100 "
                    alt="..."
                  />
          </div>
          <h2>Our Previous Work:</h2>
          <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleCaptions"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="https://www.weddingbellcaterer.com/wp-content/uploads/2023/03/caterer-thakurpukur.jpg" height="400"
                    class="d-block w-100 "
                    alt="..."
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                      Some representative placeholder content for the first
                      slide.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="https://www.sloshout.com/blog/wp-content/uploads/House-Party-Caterers-in-Gurgaon-1.jpg" height="400"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>
                      Some representative placeholder content for the second
                      slide.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="https://5.imimg.com/data5/BJ/OC/BG/SELLER-37934803/fast-food-catering-services-500x500.jpg" height="400"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>
                      Some representative placeholder content for the third
                      slide.
                    </p>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
