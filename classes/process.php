<?php


//this file receives connection

class process extends databaseString {

//we processing the form
public $title;
public $summary;
public $content;
public $date;

public function __construct($title, $summary, $content, $date){

   $this->title = $title;
   $this->summary = $summary;
   $this->content = $content;
   $this->date = $date;

}

//process the query and add what it needs to do
public function process(){
$sqlCreate = "INSERT INTO posts (title, summary, content, date)
VALUES (:title, :summary, :content, :date)";
$queryStat = $this->connectionString()->prepare($sqlCreate);
$queryStat->bindParam(':title', $this->title);
$queryStat->bindParam(':summary', $this->summary);
$queryStat->bindParam(':content', $this->content);
$queryStat->bindParam(':date', $this->date);
$queryStat->execute();
header("location: ../index.php");

}



}


//  include("../connect.php");
// //check if form is submitted
// //  if($_SERVER['REQUEST_METHOD'] ==='POST'){
//    if (isset($_POST['create'])){
//     $title = isset($_POST['title']) ? trim($_POST['title']) : '';
//     $summary = isset($_POST['summary']) ? trim($_POST['summary']) : '';
//     $content = isset($_POST['content']) ? trim($_POST['content']) : '';
//     $date = isset($_POST['date']) ? trim($_POST['date']) :  '';

//     $sql ="INSERT INTO posts (title, summary, content, date) VALUES
//     ('$title', '$summary', '$content', '$date')";
//     $result = mysqli_query($conn, $sql);
//    if($result){
//       header("Location:index.php");
//    } else
//    {
//       echo "Data was not inserted";
//     }

//  }


//  //update

//  if (isset($_POST['update'])){
//    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
//    $summary = isset($_POST['summary']) ? trim($_POST['summary']) : '';
//    $content = isset($_POST['content']) ? trim($_POST['content']) : '';
//    $date = isset($_POST['date']) ? trim($_POST['date']) :  '';
//    $id = $_POST['id'];
//    $sqlUpdate = "UPDATE posts SET title ='$title',
//    summary = '$summary', content ='$content' WHERE id = $id";
//    $resultUpdate = mysqli_query($conn, $sqlUpdate);
//    if($resultUpdate){
//      header("location: index.php");
//    } else {
//       echo "failed to do an edit";
//    }
//  }
