<?php
include("./templates/header.php");
include("../connect.php");
?>

<div class="post-list w-100 p-5">
<table class="table tabled-borderded">
<thead>
<tr>
<th>Publication Date</th>
<th>Title</th>
<th>Article</th>
<th>Action</th>
</tr>
</thead>
<tbody>

    <?php

     $sqlSelect = "SELECT * FROM posts";
     $result = mysqli_query($conn, $sqlSelect);
     while ($row = mysqli_fetch_assoc($result)) {
       ?>
    <tr>
    <td><?php echo $row['date']?></td>
    <td><?php echo $row['title']?></td>
    <td><?php echo $row['summary']?></td>
    <td>
      <a class="btn btn-sm btn-info" href="view.php?id=<?php echo $row['id']?>">
        View
      </a>
      <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $row['id']?>">
        Edit
      </a>
      <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $row['id']?>">
        Delete
      </a>
    </td>
    </tr>
    <?php
    }
    ?>
</tbody>
</table>
</div>



<?php
include("./templates/footer.php"); ?>