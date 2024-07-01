<?php

//check if form is submitted
 if($_SERVER['REQUEST_METHOD'] ==='POST'){
    include("../connect.php");
    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $summary = isset($_POST['summary']) ? trim($_POST['summary']) : '';
    $content = isset($_POST['content']) ? trim($_POST['content']) : '';
    $date = isset($_POST['date']) ? trim($_POST['date']) :  '';

    $sql ="INSERT INTO posts (title, summary, content, date) VALUES
    ('$title', '$summary', '$content', '$date')";
    $result = mysqli_query($conn, $sql);

 }
