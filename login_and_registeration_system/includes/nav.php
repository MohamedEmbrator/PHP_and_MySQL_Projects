<header>
  <nav>
    <ul>
      <li><a href=".">Home</a></li>
      <?php if (!isset($_SESSION["auth"])) : ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <?php else: ?>
          <li><a href="profile.php">Profile</a></li>
          <?php endif; ?>
        </ul>
      </nav>
      <?php if (isset($_SESSION["auth"])) : ?>
      <a href="logout.php">Logout</a>
        <?php endif; ?>
</header>