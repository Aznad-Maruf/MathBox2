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
          <?php
            //echo "Main Section";
            $connection = new mysqli('localhost', 'root', '', 'MathBoxDb');
            $query = "SELECT * FROM BlogEntry ORDER BY Id Desc";
            $result = $connection->query($query) or die($connection->error);
          ?>

            <?php while ($row = $result->fetch_assoc()) { ?>
              <h2 class="font-weight-bold text-success"><?php echo $row['Title']; ?></h2>
              <p class="font-italic text-info">Category : <?php echo $row['Category']; ?></p>
              <p><?php echo $row['BlogText']; ?></p>
            <?php } ?>
        </div>



    </div>
    <!-- End of container -->


    <footer id="mainFooter">
      <p>Copyright &copy; 2019 Maruf Robin</p>
    </footer>
  </body>
</html>
