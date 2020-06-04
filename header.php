<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login System</title>
</head>
<body>

  <header>
    <nav>
      <a href="#">
        HelloSystem
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Portfolio</a></li>
          <li><a href="">About me</a></li>
          <li><a href="">Contact</a></li>
        </ul>
      </a>
      <div class="">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/Email">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
        <form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </nav>
  </header>
