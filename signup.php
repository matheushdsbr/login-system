<?php
  require "header.php";
?>

<main>
  <div class="p-position my-2">
    <h1>Signup</h1>
    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyfields") {
          echo '<p class="text-danger">Fill in all fields!</p>';
        }
        else if ($_GET["error"] == "invalidmailuid") {
          echo '<p class="text-danger">Invalid Username and E-mail!</p>';
        }
        else if ($_GET["error"] == "invaliduid") {
          echo '<p class="text-danger">Invalid Username!</p>';
        }
        else if ($_GET["error"] == "invalidmail") {
          echo '<p class="text-danger">Invalid E-mail!</p>';
        }
        else if ($_GET["error"] == "passwordcheck") {
          echo '<p class="text-danger">Your passwords do not match!</p>';
        }
        else if ($_GET["error"] == "usertaken") {
          echo '<p class="text-danger">Username is already taken!</p>';
        }
      }
      else if (isset($_GET["signup"])) {
        echo '<p class="text-success">Signup successful!</p>';
      }
    ?>
    <form class="p-position" action="includes/signup.inc.php" method="post">
      <input class="my-2" type="text" name="uid" placeholder="Username">
      <input class="my-2" type="text" name="mail" placeholder="Email">
      <input class="my-2" type="password" name="pwd" placeholder="Password">
      <input class="my-2" type="password" name="pwd-repeat" placeholder="Repeat Password">
      <button class="btn btn-outline-success" type="submit" name="signup-submit">Signup</button>
    </form>
  </div>
</main>

<?php
  require "footer.php";
?>