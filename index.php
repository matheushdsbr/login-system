<?php
  require "header.php";
?>

<main>
  <div class="p-position my-2">
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<p class="text-success">You are logged in!</p>';
      }
      else {
        echo '<p class="text-primary">You are logged out!</p>';
      }
    ?>
  </div>
</main>

<?php
  require "footer.php";
?>