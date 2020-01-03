<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MathBox</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

    <header id="mainHeader">
      <div class="container">
        <h1>Math Box</h1>

        <nav id="navBar">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="NewBlog.php">Write Blog</a></li>
            <li><a href="VisitBlog.php">Visit Blog</a></li>
            <!-- <li class="dropdown">
               <a href="VisitBlog.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                Blog <span class="caret"></span>
              </a>
               <a href="#">Blog</a>

              <ul class="dropdown-menu">
                <li> <a href="NewBlog.php">New Blog</a></li>
              </ul>
            </li> -->
            <li><a href="ScientificCalculator.php">Calculator</a></li>
            <li><a href="Equations.php">Equations</a></li>
            <li><a href="About.php">About</a></li>
          </ul>
        </nav>

      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>Mathematics is the language of the Universe</h1>
      </div>
    </section>

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <?php
            //echo "Main Section";

            $equation = "";
            $name = "";
            $class = "";
            $description = "";
            $isEdit = false;
            $id = 0;

            $connection = new mysqli('localhost', 'root', '', 'MathBoxDb');
            $query = "SELECT * FROM Equations ORDER BY Class";
            $result = $connection->query($query) or die($connection->error);


            if(isset($_POST['Add'])){

              $connection = new mysqli('localhost', 'root', '', 'MathBoxDb');
              $query = "SELECT * FROM Equations ORDER BY Class";
              $result = $connection->query($query) or die($connection->error);

              $isEdit = false;
              $id = 0;
              $equation = $_POST['equation'];
              $name = $_POST['name'];
              $class = $_POST['class'];
              $description = $_POST['description'];
              $sql = "INSERT INTO equations(Class,Name,Equation,Description) VALUES('$class','$name','$equation','$description');";
              $connection->query($sql) or die($connection->error);
            }

            if(isset($_GET['delete'])){

              $connection = new mysqli('localhost', 'root', '', 'MathBoxDb');
              $query = "SELECT * FROM Equations ORDER BY Class";
              $result = $connection->query($query) or die($connection->error);

              $isEdit = false;
              $id = $_GET['delete'];
              $sql = "DELETE FROM equations WHERE id='$id'";
              $connection->query($sql) or die($connection->error);
            }

            if(isset($_POST['Update'])){

              $connection = new mysqli('localhost', 'root', '', 'MathBoxDb');
              $query = "SELECT * FROM Equations ORDER BY Class";
              $result = $connection->query($query) or die($connection->error);

              $equation = $_POST['equation'];
              $name = $_POST['name'];
              $class = $_POST['class'];
              $description = $_POST['description'];
              $id = $_POST['id'];
              $sql = "UPDATE Equations SET Equation = '$equation', Name = '$name', Class = '$class', Description = '$description' WHERE Id = '$id'";
              $connection->query($sql) or die($connection->error);

              $equation = "";
              $name = "";
              $class = "";
              $description = "";
              $isEdit = false;
              $id = 0;

            }

             if(isset($_GET['edit'])){

              $isEdit = true;
              $equation = "abc";
              $name = "";
              $class = "";
              $description = "";

              $connection = new mysqli('localhost', 'root', '', 'MathBoxDb');
              $query = "SELECT * FROM Equations ORDER BY Class";
              $result = $connection->query($query) or die($connection->error);

              $id = $_GET['edit'];
              $sql = "SELECT * FROM Equations where Id = '$id';";
              $result2 = $connection->query($sql);
              if(count($result2)==1){
                $row = $result2->fetch_assoc();
                $equation = $row['Equation'];
                $name = $row['Name'];
                $class = $row['Class'];
                $description = $row['Description'];
              }

            }

            else{
              $connection = new mysqli('localhost', 'root', '', 'MathBoxDb');
              $query = "SELECT * FROM Equations ORDER BY Class";
              $result = $connection->query($query) or die($connection->error);
            }

          ?>

          <table class="table">
            <thead>
              <tr>
                <th>Equation</th>
                <th>Name</th>
                <th>Class</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><?php echo $row['Equation']; ?></td>
                  <td><?php echo $row['Name']; ?></td>
                  <td><?php echo $row['Class']; ?></td>
                  <td><?php echo $row['Description']; ?></td>
                  <td>

                    <a href="Equations.php?edit=<?php echo $row['Id']; ?>" class="btn btn-info">Edit</a>

                    <a href="Equations.php?delete=<?php echo $row['Id']; ?>" class="btn btn-danger">Delete</a>

                  </td>
                </tr>
              <?php } ?>
            </tbody>

          </table>

          </div>
        </div>



        <div class="row">
          <div class="col-sm-12">
            <hr>
            <div class="form-group mb-2 text-center text-primary">
              <label for="">Enter New Equation</label>
            </div>

            <form class="form-inline" action="Equations.php" method="post">

              <input type="hidden" name="id" value="<?php echo $id; ?>">

              <div class="form-group mx-sm-3 mb-2">
                <input type="text" name="equation" value="<?php echo $equation; ?>" placeholder="Enter equation" class="form-control">
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <select name="class" class="form-control">
                  <option selected value="General">General</option>
                  <option value="Geometry">Geometry</option>
                  <option value="Algebra">Algebra</option>
                  <option value="Calculus">Calculus</option>
                  <option value="Physics">Physics</option>
                </select>
              </div>


              <div class="form-group mx-sm-3 mb-2">
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter equation name" class="form-control" >
              </div>
              <div class="form-group mx-sm-3 mb-2">
                <input type="text" name="description" value="<?php echo $description; ?>" placeholder="Enter Description" class="form-control">
              </div>

              <div class="form-group mb-2">
                <input type="submit" name="<?php if($isEdit) echo "Update"; else echo "Add";  ?>" value="<?php if($isEdit) echo "Update"; else echo "Add"; ?>" class="btn btn-info" >
              </div>

            </form>
          </div>
        </div>
        <!-- <form class="form-inline" action="../PHP/equationsProcess.php" method="post">



          <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="equation" value="<?php echo $equation; ?>" placeholder="Enter equation" class="form-control">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <select name="class" class="form-control">
              <option selected value="General">General</option>
              <option value="Geometry">Geometry</option>
              <option value="Algebra">Algebra</option>
              <option value="Calculus">Calculus</option>
              <option value="Physics">Physics</option>
            </select>
          </div>


          <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter equation name" class="form-control" >
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <input type="text" name="description" value="<?php echo $description; ?>" placeholder="Enter Description" class="form-control">
          </div>

          <div class="form-group mb-2">
            <input type="submit" name="add" value="Add" class="btn btn-info" >
          </div>

        </form> -->







    </div>
    <!-- End of container -->


    <footer id="mainFooter">
      <p>Copyright &copy; 2019 Maruf Robin</p>
    </footer>
  </body>
</html>
