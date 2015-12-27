<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesson 4</title>

    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
  </head>
  <body>
    <section class="container">
      <h2><a href="http://vm.dev/exercising/lessons/lesson4/lesson4.php">Back</a></h2>
      <h2>Exercise 2</h2>
      <div class="container">

        <?php //variables
          $card = $_POST['card'];
        ?>

        <?php
          switch ($card) {
            case '2':
              echo 'Ваша карта двойка';
              break;

            case '3':
              echo 'Ваша карта тройка';
              break;

            case '4':
              echo 'Ваша карта четверка';
              break;

            case '5':
              echo 'Ваша карта пятерка';
              break;

            case '6':
              echo 'Ваша карта шестерка';
              break;

            case '7':
              echo 'Ваша карта семерка';
              break;

            case '8':
              echo 'Ваша карта восьмерка';
              break;

            case '9':
              echo 'Ваша карта девятка';
              break;

            case '10':
              echo 'Ваша карта десятка';
              break;

            case '11':
              echo 'Ваша карта валет';
              break;

            case '12':
              echo 'Ваша карта дама';
              break;

            case '13':
              echo 'Ваша карта король';
              break;

            case '14':
              echo 'Ваша карта туз';
              break;

            default:
              echo 'Вы не выбрали правильное число. Пожалуйста, выберите число от 2 до 14!';
              break;
          }
        ?>

      </div>
    </section>
  </body>
</html>
