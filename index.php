<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Simple Blog</title>
</head>
<body>
<header class="p-4 bg-dark">
    <h1 class="text-light"> Simple Blog </h1>
</header>
<div class="post-list mt-5">
<div class="container">
<?php
  include("connect.php");
 $sqlSelect = "SELECT * FROM posts";
 $resultSelect = mysqli_query($conn, $sqlSelect);
 while ($row = mysqli_fetch_assoc($resultSelect)){
 ?>

 <div class="row mb-4 p-5 bg-light">
    <div class="col-sm-2">
        <?php echo $row['date'] ?>
    </div>
    <div class="col-sm-2">
        <?php echo $row['title'] ?>
    </div>
    <div class="col-sm-5">
        <?php echo $row['content'] ?>
    </div>
    <div class="col-sm-3">
        <a href ="./admin/view.php?id=<?php echo $row['id']?>" class="btn btn-primary" >READ MORE</a>
    </div>
 </div>
 <?php
 }
?>
</div>
</div>
</body>
</html>