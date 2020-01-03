<?php
  $connection = new mysqli('localhost', 'root', '', 'mathboxdb');
  if(isset($_POST['add'])){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $blogText = $_POST['blogText'];
    $sql = "INSERT INTO BlogEntry(Title,Category,BlogText) VALUES('$title','$category','$blogText');";
    $connection->query($sql) or die($connection->error);
    header("location: ../HTML/NewBlog.php");
  }

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM equations WHERE id='$id'";
    $connection->query($sql) or die($connection->error);
    header("location: ../HTML/Equations.php");
  }





 ?>
