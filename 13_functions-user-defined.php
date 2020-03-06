<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Introduction to PHP</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&amp;subset=latin-ext" rel="stylesheet"> -->
</head>

<body>

  <div class="container">
    <h1>Up & Running with PHP</h1>
    <div class="code-content">
      <?php
        function say_hello($name) {
          echo "Say Hello to: {$name}<br/>";
        }
        say_hello("John");
        say_hello("Alvin");
        say_hello("John Doe");
        say_hello("The Great One!");

        function sum($num1,$num2) {
          echo $num1 * $num2 . "<br/>";
        }
        sum(2,3);
        sum(10,20);
        sum(100,300);
      ?>
    </div>
  </div>

</body>

</html>