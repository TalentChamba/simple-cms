<?php
include("../connect.php");
$id = $_GET['id'];

if($id){
 $sqlDelete = "DELETE from posts WHERE id = $id";
 $resultDelete = mysqli_query($conn, $sqlDelete);
 if($resultDelete){
    header("location: index.php");
 } else {
echo "post not deleted";
 }
} else {
    echo 'cant find ID';
}