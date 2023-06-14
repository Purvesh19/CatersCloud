<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catering Order Management</title>
  <style>
      <?php include "css/style_cater.css" ?>
    </style>
</head>
<body>
  <header>
    <img class="dp" src="https://thumbs.dreamstime.com/b/chef-woman-gesturing-ok-confident-sign-vector-illustration-116211561.jpg" height="60px" width="60px" alt="">
    <div class="user"><p class="">User <br> <?php echo $_SESSION['username'] ?> </p></div>
    <h1>Catering Order Management</h1>
    <ul class="button-container">
      <a href=""><li class="button"><span>Loyalty Program</span></li></a>
      <a href=""><li class="button"><span>Report <br> Food?</span></li></a>
    </ul>
  </header>

  <div class="container1">
    <h2>Order Requests</h2>
    <div class="sub-container1">
    <table id="order-table">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Event Date</th>
          <th>Event Type</th>
          <th>Status</th>
          <th class="action">Action</th>
        </tr>
      </thead>
      <tbody class="tbody-shift">
        <tr>
          <td>001</td>
          <td>John Doe</td>
          <td>2023-06-15</td>
          <td>Wedding</td>
          <td>Pending</td>
          <td class="btn-inline">
            <button class="button"><span>Accept</span></button>
            <button class="button reject"><span>Reject</span></button>
          </td>
        </tr>
        <tr>
          <td>002</td>
          <td>Jane Smith</td>
          <td>2023-07-01</td>
          <td>Corporate Event</td>
          <td>Pending</td>
          <td class="btn-inline">
            <button class="button"><span>Accept</span></button>
            <button class="button reject"><span>Reject</span></button>
          </td>
        </tr>
        <tr>
          <td>003</td>
          <td>Jane Smith</td>
          <td>2023-07-01</td>
          <td>Corporate Event</td>
          <td>Pending</td>
          <td class="btn-inline">
            <button class="button"><span>Accept</span></button>
            <button class="button reject"><span>Reject</span></button>
          </td>
        </tr>
        <tr>
          <td>004</td>
          <td>Jane Smith</td>
          <td>2023-07-01</td>
          <td>Corporate Event</td>
          <td>Pending</td>
          <td class="btn-inline">
            <button class="button"><span>Accept</span></button>
            <button class="button reject"><span>Reject</span></button>
          </td>
        </tr>
        <tr>
          <td>005</td>
          <td>Jane Smith</td>
          <td>2023-07-01</td>
          <td>Corporate Event</td>
          <td>Pending</td>
          <td class="btn-inline">
            <button class="button"><span>Accept</span></button>
            <button class="button reject"><span>Reject</span></button>
          </td>
        </tr>
        <tr>
          <td>006</td>
          <td>Jane Smith</td>
          <td>2023-07-01</td>
          <td>Corporate Event</td>
          <td>Pending</td>
          <td class="btn-inline">
            <button class="button"><span>Accept</span></button>
            <button class="button reject"><span>Reject</span></button>
          </td>
        </tr>
        <!-- Add more order rows as needed -->
      </tbody>
    </table>
</div>
  </div>

</body>
</html>
