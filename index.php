<?php
  require "header.php";
?>
  <?php
    if (!isset($_SESSION['id'])) {
      echo '<p style="font-size: 30px; text-align: center; padding: 10px;">Venligst logg-inn!</p>';
    }

    else  if (isset($_SESSION['id'])){
      echo '<p style="font-size: 30px; text-align: center; padding: 10px;">Velkommen!</p>';
    }
    ?>

    <div>
      <h1 style="font-size: 35px">Siste fra Ålesund!</h1>
    </div>

    <?php
      //last three posts from the aalesund database
      $sql = "SELECT * FROM posts_aalesund ORDER BY id DESC LIMIT 3;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <article class="forum">
              <h1 style="font-size: 20px"><?php echo $row['subject']; ?></h1>
              <p class="forumContent"><?php echo $row['content']; ?></p>
              <p class="forumDate" id="date"><?php echo $row['date']; ?></p>
            </article>
        <?php
        }
      }
    ?>

    <div style="padding: 10px">
      <h1 style="font-size: 35px">Siste fra Trondheim!</h1>
    </div>

    <?php
      //last three posts from the trondheim database
      $sql = "SELECT * FROM posts_trondheim ORDER BY id DESC LIMIT 3;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <article class="forum">
              <h1 style="font-size: 20px"><?php echo $row['subject']; ?></h1>
              <p class="forumContent"><?php echo $row['content']; ?></p>
              <p class="forumDate" id="date"><?php echo $row['date']; ?></p>
            </article>
        <?php
        }
      }
    ?>

    <div style="padding: 10px">
      <h1 style="font-size: 35px">Siste fra Gjøvik!</h1>
    </div>

    <?php
      //last three posts from the gjøvik database
      $sql = "SELECT * FROM posts_gjovik ORDER BY id DESC LIMIT 3;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <article class="forum">
              <h1 style="font-size: 20px"><?php echo $row['subject']; ?></h1>
              <p class="forumContent"><?php echo $row['content']; ?></p>
              <p class="forumDate" id="date"><?php echo $row['date']; ?></p>
            </article>
        <?php
        }
      }
    ?>

<?php
  require "footer.php";
?>
