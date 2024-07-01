<?php
include("./templates/header.php");
?>


    <div class="create-form w-100 mx-auto p-4">
        <form action ="process.php" method ="post">
    <div class="form-field mb-4">
    <input type="text" name="title">
    </div>
    <div class="form-field mb-4">
    <textarea name="summary" id="" cols="30" rows="10" placeholder="summary">
        Enter Summary
    </textarea>
    </div>
    <div class="form-field mb-4">
    <textarea name="content" id="" cols="30" rows="10">
       Enter Post:
    </textarea>
    </div>
    <div class="hidden-input">
        <input type="hidden" name="date" value="<?php date("Y/m/d"); ?> ">
    </div>
    <div class="form-field mb-4">
        <input type="submit" class="btn btn-primary" value="submit" name="create">
    </div>
    </form>
    </div>

    <?php
     include("./templates/footer.php");
    ?>

