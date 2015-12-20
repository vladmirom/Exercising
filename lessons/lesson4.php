<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesson 3</title>

    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
  </head>
  <body>
    <section class="container">
      <h2><a href="https://docs.google.com/document/d/1__Rodwqn7ZLU3XaMTPO62ao8lheOGBrYLahLqUR82SY/edit">Lecture 4</a></h2>
      <h2>Exercise 1</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Напишите функцию для вычисления площади круга. S = π*r2.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!

            function circle($r) {
              //vars
              $pi = pi();
              $radius = $r * 2;

              //code
              $S = $radius * $pi;
              return $S;
            }

            $circleRadius = 10;
            echo '<p>Площадь круга будет равна: ' . circle($circleRadius) . ' при радиусе ' . $circleRadius . '.</p>';
          ?>
        </div>
      </div>
    </section>
  </body>
</html>
