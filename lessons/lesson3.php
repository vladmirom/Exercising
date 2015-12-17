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
      <h2><a href="https://docs.google.com/document/d/1BTNpEZba4D0ap_UhvQvdfDvpRNksoKPgUSkKtBLivOA/edit">Lecture 3</a></h2>
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

    <section class="container">
      <h2>Exercise 2</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Напишите функцию рассчета скорости движения машины. На основании полученных данных: пройденный путь и время.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Дополнительно:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Введите в функцию еще один <b>необязательный</b> аргумент $unit, который <b>по умолчанию</b> будет иметь значение “km/h”.
            Если же этот аргумент получает значение “m/s”, то и функция должна вернуть результат в этих единицах измерения.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
          function car_speed($distance, $time) {
            $hours = $time / 60;
            $speed = $distance / $hours;
            return 'Если машине нужно ' . $time . ' минут, для того чтобы преодолеть ' . $distance . 'км, то ее скорость будет ' . $speed . 'км/ч.';
          }

          echo car_speed(100, 150) . '<br>';

          function car_speed_advanced($distance, $time, $unit = 'km/h') {
            $hours = $time / 60;
            $speed = $distance / $hours;

            if ($unit === 'km/h') {
              return 'Если машине нужно ' . $time . ' минут, для того чтобы преодолеть ' . $distance . 'км, то ее скорость будет ' . $speed . $unit;
            } elseif ($unit === 'm/s') {
              $meters = $distance * 1000;
              $seconds = $time * 60;
              $speed = $meters / $seconds;

              return 'Если машине нужно ' . $time . ' минут (' . $seconds . ' секунд), для того чтобы преодолеть ' . $distance . 'км (' . $meters . 'метров), то ее скорость будет ' . $speed . $unit;
            }
          }

          echo '<hr><p><b>Дополнительно</b></p>';
          echo car_speed_advanced(300, 160, 'm/s') . '<br>';

          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 3</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Игральным картам присвоены следующие порядковые номера в зависимости
            от их достоинства: "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14.
            Порядковые номера остальных карт соответствуют их названиям.
            Напишите функцию, которая принимает номер карты, а <b>возвращает</b> ее название.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Дополнительно:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <ol>
            <li>Для решения удобно воспользоваться оператором <b>switch</b>.</li>
            <li>Учтите случай когда введен неверный номер карты. Например, 20, 53 или строка текста.</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
            function cards ($card_number) {
              switch ($card_number) {

                case 2:
                  echo "Your card is 2";
                  break;

                case 3:
                  echo "Your card is 3";
                  break;

                case 4:
                  echo "Your card is 4";
                  break;

                case 5:
                  echo "Your card is 5";
                  break;

                case 6:
                  echo "Your card is 6";
                  break;

                case 7:
                  echo "Your card is 7";
                  break;

                case 8:
                  echo "Your card is 8";
                  break;

                case 9:
                  echo "Your card is 9";
                  break;

                case 10:
                  echo "Your card is 10";
                  break;

                case 11:
                  echo "Your card is Jack";
                  break;

                case 12:
                  echo "Your card is Queen";
                  break;

                case 13:
                  echo "Your card is King";
                  break;

                case 14:
                  echo "Your card is A";
                  break;

                case is_string($card_number) == true:
                  echo "You didn't enter the number. Please use numbers only, not letters.";
                  break;

                default:
                  echo "You didn't enter the valid number. Please enter the number between 2 and 14.";
              }
            }

            echo cards('') . '<br>';
            echo 'А тут вопрос, если это пустая строка, мне выводит дефолт, а не
            специальный кейс который для этого предназначен.';

          ?>
        </div>
      </div>
    </section>
  </body>
</html>
