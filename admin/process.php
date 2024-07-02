<?php
 include("../connect.php");
//check if form is submitted
//  if($_SERVER['REQUEST_METHOD'] ==='POST'){
   if (isset($_POST['create'])){
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $summary = isset($_POST['summary']) ? trim($_POST['summary']) : '';
    $content = isset($_POST['content']) ? trim($_POST['content']) : '';
    $date = isset($_POST['date']) ? trim($_POST['date']) :  '';

    $sql ="INSERT INTO posts (title, summary, content, date) VALUES
    ('$title', '$summary', '$content', '$date')";
    $result = mysqli_query($conn, $sql);
   if($result){
      header("Location:index.php");
   } else
   {
      echo "Data was not inserted";
    }

 }


 //update

 if (isset($_POST['update'])){
   $title = isset($_POST['title']) ? trim($_POST['title']) : '';
   $summary = isset($_POST['summary']) ? trim($_POST['summary']) : '';
   $content = isset($_POST['content']) ? trim($_POST['content']) : '';
   $date = isset($_POST['date']) ? trim($_POST['date']) :  '';
   $id = $_POST['id'];
   $sqlUpdate = "UPDATE posts SET title ='$title',
   summary = '$summary', content ='$content' WHERE id = $id";
   $resultUpdate = mysqli_query($conn, $sqlUpdate);
   if($resultUpdate){
     header("location: index.php");
   } else {
      echo "failed to do an edit";
   }
 }
