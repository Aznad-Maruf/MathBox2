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


          <div class="form-group mb-2 text-center text-primary">
            <label for="">Create A New Blog Entry</label>
          </div>
          <hr>
          <form class="form" action="../PHP/newBlogProcess.php" method="post">
            <div class="form-group">
              <input type="text" name="title" placeholder="Enter Blog Title" class="form-control">
            </div>
            <div class="form-group">
              <select name="category" class="form-control">
                <option selected value="General">General</option>
                <option value="Geometry">Geometry</option>
                <option value="Algebra">Algebra</option>
                <option value="Calculus">Calculus</option>
                <option value="Physics">Physics</option>
              </select>
            </div>
            <div class="form-group">
              <textarea class="form-control rounded-0" name="blogText" rows="10" placeholder="Write your blog here..."></textarea>
            </div>

            <div class="form-group mb-2">
              <input type="submit" name="add" value="Add" class="btn btn-info btn-block" >
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End of container -->


    <footer id="mainFooter">
      <p>Copyright &copy; 2019 Maruf Robin</p>
    </footer>
  </body>
</html>
