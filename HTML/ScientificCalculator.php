<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MathBox</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <script>
      //function that display value
      function dis(val)
      {
        document.getElementById("result").value+=val
      }

      //function that evaluates the digit and return result
      function solve()
      {
        let x = document.getElementById("result").value
        let y = eval(x)
        document.getElementById("result").value = y
      }

      //function that clear the display
      function clr()
      {
        document.getElementById("result").value = ""
      }
    </script>

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


        <div class="form-group mb-2 text-center text-primary">
          <h2>Basic Calculator</h2>
        </div>
        <hr>

<table class="table table-dark">
<tbody>

  <tr>
    <td colspan="3"><input type="text" id="result" class="input-group"/></td>
    <!-- <td colspan="3" id="result">0</td> -->
    <!-- clr() function will call clr to clear all value -->
    <!-- <td><input type="button" value="c" onclick="clr()"/> </td> -->
    <td  value="c" onclick="clr()"  class="text-center">C</td>
  </tr>

  <tr>
    <td  value="1" onclick="dis('1')" class="text-center">1</td>
    <td  value="2" onclick="dis('2')" class="text-center">2</td>
    <td  value="3" onclick="dis('3')" class="text-center">3</td>
    <td  value="/" onclick="dis('/')" class="text-center">/</td>
  </tr>

  <tr>
    <td  value="4" onclick="dis('4')" class="text-center">4</td>
    <td  value="5" onclick="dis('5')" class="text-center">5</td>
    <td  value="6" onclick="dis('6')" class="text-center">6</td>
    <td  value="-" onclick="dis('-')" class="text-center">-</td>
  </tr>

  <tr>
    <td  value="7" onclick="dis('7')" class="text-center">7</td>
    <td  value="8" onclick="dis('8')" class="text-center">8</td>
    <td  value="9" onclick="dis('9')" class="text-center">9</td>
    <td  value="+" onclick="dis('+')" class="text-center">+</td>
  </tr>

  <tr>
    <td  value="." onclick="dis('.')" class="text-center">.</td>
    <td  value="0" onclick="dis('0')" class="text-center">0</td>
    <td  value="=" onclick="solve()" class="text-center">=</td>
    <td  value="*" onclick="dis('*')" class="text-center">*</td>
  </tr>

</tbody>
</table>

        </div>

        <div class=" dropdown">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Action
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
        </div>

    </div>
    <!-- End of container -->


    <footer id="mainFooter">
      <p>Copyright &copy; 2019 Maruf Robin</p>
    </footer>
  </body>
</html>
