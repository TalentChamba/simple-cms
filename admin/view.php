<?php
include("./templates/header.php");
include("../connect.php");
?>

<div class="post w-100 bg-light p-4">
 <?php
  $id = $_GET["id"];
  if ($id) {
  $post = "SELECT * FROM posts WHERE id = $id";
  $result = mysqli_query($conn, $post);
  while ($row = mysqli_fetch_array($result)){
?>
<h1><?php echo $row['title']; ?></h1>
<p> <?php echo $row['date']; ?> </p>
<p><?php echo $row['content']; ?></p>

<?php
  }
  } else {
    echo "Post Not Found";
  }
 ?>
</div>

<?php
include("./templates/footer.php");
?>

