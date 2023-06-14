<!DOCTYPE html>
<html>
<head>
  <title>Catering Order Page</title>
  <link rel="stylesheet" href="./css/order_place.css">
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
    <style>
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
<body >
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hello,User</a>
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
          <img src="./assets/icon.png" alt="" height="60" width="60" />
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
  <div class="back"></div>
  <div class=" tag tag-1"><h1>Taste For,</h1></div>
  <div class="tag tag-2"><h1>All Occasions</h1></div>
      
  <div class="container-1">
    <h1>Place Order</h1>
    <form id="orderForm">
      <div class="form-group">
        <label for="name"></label>
        <input type="text" id="name" name="name" required placeholder="Your Name:">
      </div>
      <div class="form-group">
        <label for="email"></label>
        <input type="text" id="email" name="email" required placeholder="Email Address:">
      </div>
      <div class="form-group">
        <label for="phone"></label>
        <input type="text" id="phone" name="phone" required placeholder="Phone Number:">
      </div>
      <div class="form-group">
        <label for="event"></label>
        <input type="text" id="event" name="event" required placeholder="Event Type:">
      </div>
      <div class="form-group">
        <label for="guests"></label>
        <input type="text" id="guests" name="guests" required placeholder="Number of Guests:">
      </div>
      <div class="form-group" >
        <label for="message" ></label>
        <textarea id="message" name="message" placeholder="Address"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit Order" class="btn-1" style="border-radius: 20px;">
      </div>
    </form>
  </div>
  
  

  
</body>
</html>
