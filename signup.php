<?php
  require "header.php";
?>

<main>
  <div class="p-position my-2">
    <h1>Signup</h1>
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