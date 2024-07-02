<?php
include("./templates/header.php");
include("../connect.php");
?>

<?php
$id = $_GET['id'];
$sqlEdit = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($conn, $sqlEdit);

?>

    <div class="create-form w-100 mx-auto p-4">
        <form action ="process.php" method ="post">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
     ?>

    <div class="form-field mb-4">
    <input type="text" name="title" value="<?php echo $row['date'] ?>">
    </div>
    <div class="form-field mb-4">
    <textarea name="summary" id="" cols="30" rows="10">
    <?php echo $row['summary'] ?>
    </textarea>
    </div>
    <div class="form-field mb-4">
    <textarea name="content" id="" cols="30" rows="10">
   <?php echo $row['content'] ?>
    </textarea>
    </div>
    <div class="hidden-input">
        <input type="hidden" name="date" value="<?php echo $row['date'] ?> ">
    </div>
    <div class="hidden-input">
        <input type="hidden" name="id" value="<?php echo $row['id'] ?> ">
    </div>
    <div class="form-field mb-4">
        <input type="submit" class="btn btn-primary" value="update" name="update">
    </div>
    <?php
    }
    ?>
    </form>
    </div>

    <?php
     include("./templates/footer.php");
    ?>

