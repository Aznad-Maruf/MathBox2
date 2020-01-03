<?php
  //echo "string";
  $connection = new mysqli('localhost', 'root', '', 'mathboxdb');



  // echo $equation;
  //
  // $sql = "INSERT INTO equations(Class,Name,Equation,Description) VALUES('$class','$name','$equation','$description');";

  if(isset($_POST['add'])){
    $equation = $_POST['equation'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $description = $_POST['description'];
    $sql = "INSERT INTO equations(Class,Name,Equation,Description) VALUES('$class','$name','$equation','$description');";
    $connection->query($sql) or die($connection->error);
    header("location: ../HTML/Equations.php");
  }

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM equations WHERE id='$id'";
    $connection->query($sql) or die($connection->error);
    header("location: ../HTML/Equations.php");
  }





 ?>
