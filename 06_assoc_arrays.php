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
        $student = [
          'first_name' => 'Lawrence',
          'last_name' => 'Caulker',
          'country_name' => 'USA'
        ];
        echo $student['first_name'] . " " . $student['last_name'];
      ?>
    </div>
  </div>

</body>

</html>