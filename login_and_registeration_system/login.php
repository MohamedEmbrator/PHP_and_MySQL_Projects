<?php
  include("includes/header.php");
  include("includes/nav.php"); ?>
  <h1>Login</h1>
  <form action="handlers/handle_login.php" method="POST">
      <?php if (isset($_SESSION["errors"])) { 
        foreach ($_SESSION["errors"] as $error) {
        ?>
        <div class="error"><?php
          echo $error;
        unset($_SESSION["errors"]);
        ?>
        </div>
        <?php }; };?>
    <input type="email" name="email" placeholder="Email" >
    <input type="password" name="password" placeholder="Password" >
    <input type="submit" value="Login" style="cursor: pointer;">
  </form>
  <?php include("includes/footer.php");?>
