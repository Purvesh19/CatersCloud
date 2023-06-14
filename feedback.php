<!DOCTYPE html>
<html>
  

<head>
  <meta charset="UTF-8">
  <title>Feedback Page</title>
  
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
    <?php include "css/feedback.css" ?>
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
      <a class="navbar-brand" href="#">Hello,<?php echo $_SESSION['username'] ?></a>
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

  <section class="container1">
    <header>
      <h1 class="animate__animated animate__bounceIn">Feedback</h1>
      <!-- <p class="feedback-text">We value your opinion</p> -->
    </header>

    <form id="feedbackForm" action="#" method="POST">
      <label for="feedback">Feedback:</label>
      <textarea id="feedback" name="feedback" required></textarea>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2023 Your Catering Company. All rights reserved.</p>
  </footer>
</body>

</html>
