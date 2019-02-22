<?php
  require "header.php";
  include 'includes/dbh.inc.php';
?>

<div class="container">
  <form action="aalesund_ps.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <input type="text" name="subject" placeholder="Subject">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="content">Content</label>
    </div>
    <div class="col-75">
      <textarea type="text" name="content" placeholder="Write something..." style="height: 200px"></textarea>
    </div>
  </div>
    <div class="button-container">
      <button class="postButton" type="submit" name="submit">Write post</button>
    </div>
  </form>
</div>

  <?php
    $subject = $_POST['subject'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts_aalesund (subject, content) VALUES ('$subject', '$content');";
    $result = mysqli_query($conn, $sql);

    if (isset($_POST['submit'])){
      echo "<script>window.location='aalesund.php'</script>";
    }
  ?>

<?php
  require "footer.php";
?>
