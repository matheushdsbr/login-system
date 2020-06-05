<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
  <title>Login System</title>
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Yo!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
      <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="form-inline justify-form" action="includes/logout.inc.php" method="post">
          <button class="btn btn-outline-success ml-sm-2" type="submit" name="logout-submit">Logout</button>
      </form></p>';
        }
        else {
          echo '<form class="form-inline justify-form" action="includes/login.inc.php" method="post">
          <div class="my-2">
            <input type="text" name="mailuid" placeholder="Usuario/Email" class="mr-2">
            <input type="password" name="pwd" placeholder="Password">
            <button class="btn btn-outline-success mx-sm-2" type="submit" name="login-submit">Login</button>
          </div>
        </form>
        <a href="signup.php" class="justify-link">Signup</a>';
        }
      ?>
    </nav>
  </header>
