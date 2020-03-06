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
        $fruits = ['Apple', 'Orange', 'Melon', 'Banana', 'Pear'];
        $my_name = 'Lawrence O. Caulker';

        echo count($fruits);
        echo '<br/>';
        echo strlen($my_name);
        echo '<br/>';
        $my_name2 = str_replace(' ', '', $my_name);
        echo strlen($my_name2);
        echo '<br/>';
        echo strtoupper($my_name);
        echo '<br/>';
        echo strtolower($my_name);
        echo '<br/>';

        $password = 'abcde';
        if (strlen($password) < 6) {
            echo 'Oops! Password is weak';
        } else {
            echo "You're good to go";
        }

      ?>
    </div>
  </div>

</body>

</html>