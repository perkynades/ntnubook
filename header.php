<?php
  session_start();
  require "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="master.css">
    <title></title>
  </head>
  <body>

    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="logo.jpg" alt="NTNUbook logo" height="25px" width="45px">
        </a>
        <ul>
          <li><a href="index.php">NTNUbook</a></li>
          <li><a href="aalesund.php">Ålesund</a></li>
          <li><a href="trondheim.php">Trondheim</a></li>
          <li><a href="gjovik.php">Gjøvik</a></li>
        </ul>
      </nav>

      <div class="header-login">

        <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>

        </div>
    </header>
