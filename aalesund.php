<?php
  require "header.php";
  include 'includes/dbh.inc.php';
?>

  <div class="button-container">
    <form action="aalesund_ps.php">
      <button class="postButton" type="submit">Write post</button>
    </form>
  </div>

    <?php
      $sql = "SELECT * FROM posts_aalesund ORDER BY id DESC;";
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
