<?php
  include("includes/header.php");
  include("includes/nav.php"); ?>
  
  <h1>Register</h1>
  <form action="handlers/handle_register.php" method="POST">
    <?php if (isset($_SESSION["errors"])) {
      foreach($_SESSION["errors"] as $error) {
        ?>
        <div class="error"><?php echo $error; ?></div>
        <?php }; 
        unset($_SESSION["errors"]);
      }?>
    <input type="text" name="user_name" placeholder="Username">
    <input type="email" name="email" placeholder="Email" >
    <input type="password" name="password" placeholder="Password" >
    <input type="password" name="confirm_password" placeholder="Confirm Password" >
    <input type="submit" value="Register" style="cursor: pointer;">
  </form>

  <?php include("includes/footer.php");?>
