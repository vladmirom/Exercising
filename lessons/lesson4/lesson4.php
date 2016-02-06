<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesson 4</title>

    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
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
          <p>Сделать форму для задания из лекции 1.  Для первой задачи сделать поля: путь, время.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">

          <form class="" action="" method="post">
            <p>Выберите формат растояние/время:</p>
            <?php
            $checked_km = isset($_POST['format']) && $_POST['format'] == 'kilometers' ? 'checked': '';
            $checked_m = isset($_POST['format']) && $_POST['format'] == 'meters' ? 'checked': '';
            ?>

            <input type="radio" name="format" value="kilometers" <?php echo $checked_km; ?>><span> км/ч</span>
            <br>
            <input type="radio" name="format" value="meters" <?php echo $checked_km; ?>><span> м/с</span>
            <br>
            <input type="submit" value="Submit">
          </form>

          <?php if (isset($_POST['format'])): ?>

            <?php if($_POST['format']=="kilometers") : ?>

              <form class="" action="forms.php" method="post">
                <p>Введите длинну пути в километрах</p>
                <input type="text" name="distance_km">
                <p>Введите время затраченое на преодоление пути в часах</p>
                <input type="text" name="time_h"><br><br>
                <input type="submit" value="Submit">
              </form>

            <?php else : ?>

              <form class="" action="forms.php" method="post">
                <p>Введите длинну пути в метрах</p>
                <input type="number" name="distance_m">
                <p>Введите время затраченое на преодоление пути в секундах</p>
                <input type="number" name="time_s"><br><br>
                <input type="submit" value="Submit">
              </form>

            <?php endif; ?>

          <?php endif; ?>


        </div>
      </div>
    </section>
    <section class="container">
        <h2>Exercise 2</h2>

        <div class="row">
          <div class="col-xs-12 col-md-2">
            <h4>Задание:</h4>
          </div>
          <div class="col-xs-12 col-md-10">
            <p>Сделать форму для задания из лекции 1.  Для второй задачи сделать поле для выбора карт.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-2">
            <h4>Решение:</h4>
          </div>
          <div class="col-xs-12 col-md-10">
            <form class="" action="cards.php" method="post">
              <p>Введите номер карты начиная с 2 и до 14. Номера от 1 до 10
              будут соответствовать номеру карты. 11 - валет, 12 - дама, 13 - король, 14 туз.</p>
              <input type="number" name="card">
              <input type="submit" value="Submit">
            </form>
          </div>

    </section>
  </body>
</html>
