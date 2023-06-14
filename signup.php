<?php
include 'partials/_dbconnect.php';
$showAlert = false;
$showError = false;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username Already Exists";
    }
    else{
        // $exists = false; 
        if(($password == $cpassword)){
          $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username','$hash',current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>CatersCloud-SignUp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <style>
    body {
      background-color: #FFE5CA;
    }

    .form-signin {
      height: 85vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .form-floating {
      width: 35vw;
    }

    .signin {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .svg {
      position: relative;
      top: -10px;
    }
  </style>
</head>

<?php
    if($showAlert){echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Account is now Created and you can login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($showError){echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>' . $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
?>
<div class="container">
  <h1><br>Please Signup to CatersCloud</h1>
  <form action="/caterscloud/signup.php" method = "post"><br><br><br>
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="30" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-6">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" maxlength="30" class="form-control" id="cpassword" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

</html>