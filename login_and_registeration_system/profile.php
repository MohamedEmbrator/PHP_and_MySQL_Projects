<?php
  include("includes/header.php");
  include("includes/nav.php"); ?>
  
  <h1>Profile</h1>
    <div class="container">
    <h1>Profile</h1>
    <h3 class="profile">Name : <?php echo $_SESSION["auth"][0]; ?></h3>
    <h4 class="profile">Email : <?php echo $_SESSION["auth"][1]; ?></h4>
  <?php include("includes/footer.php");?>
