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

    <section class="container">
      <h2>Exercise 4</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Напишите функцию возведения числа в степень. Стандартную функцию pow() использовать нельзя.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
            echo '<p>Trying <b>pow()</b> function here: </p>';
            echo pow(3, 5);
            echo '<hr>';

            echo '<p>Tried <b>**</b> operator that works starting from php 5.6.
            Seems that my php is lower and it is not working here. I used echo 3**5; </p>';
            echo '<hr>';

            echo 'Using function here: </p>';
            function exponent ($base, $exp) {
              if ( $exp == 1 ) { //выведет значение в степени 1
                return $base;
              } else {
                $base_main = $base * $base;
              }

              for ($i = 2; $i <= $exp; $i++) {
                $base_display = $base_main;
                $base_main = $base_main * $base;
              }
              return $base_display; //выведет только последнее значение
            }

            echo exponent(3, 5);

          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 5</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Напишите функцию для вывода таблицы умножения.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
          function multiplictation ($factor, $multiplicand) {
            echo '<table class="table-condensed"><thead><tr><h4>Multiplication table</h4></tr><tr class="success">';
            for ($i = 1; $i <= $factor; $i++) {
              echo '<tr>';
              for ($u = 1; $u <= $multiplicand; $u++) {
                echo '<td>' . ($i * $u) . '</td>';
              };
              echo '</tr>';
            }
            echo '</table>';
          }

          echo multiplictation (10, 10);
          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 6</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Написать функцию, которая подсчитывает сумму элементов одномерного массива.
            Например, такого array( 26, 2.35, "hello", 117, 89, 56, 75.08 )</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Дополнительно:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <ol>
            <li>Использовать встроенную функцию array_sum нельзя, по очевидным причинам.</li>
            <li>Функция должна <b>возвращать</b> результат, а <b>не выводить</b>.</li>
            <li>Если в функцию передали не массив, то вернуть текст - “Error: my function expects an array only”.</li>
            <li>Если какой-то из элементов массива, не integer и не float, то его суммировать не надо.
              Например 3-ий элемент массива содержит string “hello”, естественно мы его не можем просумировать.
              Поэтому пропускаем.</li>
            <li>посмотрите список функций на этой странице http://ua2.php.net/manual/en/ref.var.php
              Вас интересуют те, названия которых начинаются с “префикса” is_</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
          function summa ($array) {
            if ( is_array($array)) { //проверка, а массив ли это?
              $summ = 0;
              for ($i = 1; $i < count($array); $i++) { //идем по каждому элементу массива
                if ($array[$i] == is_float($array[$i]) || $array[$i] == is_int($array[$i]) ){ //проверяем тип элемента
                  $summ = $summ + $array[$i];
                }
              }
              return $summ; // возвращает суму всех чисел
            } else {
              return 'does not work';
            }
          }
          //Vars
          $myArray = array(26, 2.35, 'hello', 117, 89, 56, 75.08);
          $myString = 'Just for testing';

          echo 'Сумма всех чиcел массива: ' . summa ($myArray) . '.';
          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 7</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Напишите функцию, которая принимает одномерный массив следующего вида:</p>
          <code>array(<br>
                  'index.php'    => 'Home',<br>
                  'about.php'    => 'About Us',<br>
                  'folio.php'    => 'Portfolio',<br>
                  'blog.php'     => 'Blog',<br>
                  'contacts.php' => 'Contact Us',<br>
              );<br>
          </code>
          <p>а на выходе возвращает такой вот результат.</p>
          <code>
            &lt;ul&gt;<br>
                &lt;li&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="about.php"&gt;About Us&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="folio.php"&gt;Portfolio&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="blog.php"&gt;Blog&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="contacts.php"&gt;Contact Us&lt;/a&gt;&lt;/li&gt;<br>
            &lt;/ul&gt;<br>
          </code>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
            function navbar ($nav){
              echo '<ul>';
              foreach ($nav as $key => $value) {
                echo '<li>' . '<a href="' . $key . '">' . $value . '</a></li>';
              }
              echo '</ul>';
            }
            $naigation = array (
            'index.php'    => 'Home',
            'about.php'    => 'About Us',
            'folio.php'    => 'Portfolio',
            'blog.php'     => 'Blog',
            'contacts.php' => 'Contact Us',
            );
            navbar($naigation);
          ?>
        </div>
      </div>
    </section>


    <section class="container">
      <h2>Exercise 8</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Напишите функцию, которая принимает <b>двумерный массив</b> следующего вида</p>
          <code>array(<br>
                  array(<br>
                      'url' => 'index.php',<br>
                      'title' => 'Home',<br>
                  ),<br>
                  array(<br>
                      'url' => 'about.php',<br>
                      'title' => 'About Us',<br>
                  ),<br>
                  array(<br>
                      'url' => 'folio.php',<br>
                      'title' => 'Portfolio',<br>
                  ),<br>
                  array(<br>
                      'url' => 'blog.php',<br>
                      'title' => 'Blog',<br>
                  ),<br>
                  array(<br>
                      'url' => 'contacts.php',<br>
                      'title' => 'Contact Us',<br>
                  ),<br>
              );<br>
          </code>
          <p>а на выходе возвращает такой вот результат:</p>
          <code>
            &lt;ul&gt;<br>
                &lt;li&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="about.php"&gt;About Us&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="folio.php"&gt;Portfolio&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="blog.php"&gt;Blog&lt;/a&gt;&lt;/li&gt;<br>
                &lt;li&gt;&lt;a href="contacts.php"&gt;Contact Us&lt;/a&gt;&lt;/li&gt;<br>
            &lt;/ul&gt;<br>
          </code>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Комментарии к коду:</p>
          <ol>
            <li>Нужно приучать себя к тому, что в функции лучше не использовать
              <b>echo</b>, вместо него лучше использовать <b>return</b>. Но, важно также учитывать
              что <b>return</b> после себя заканчивает все действия. То есть, нужно использовать <b>return</b>
              в самом конце.</li>
            <li>Исходя из первого пункта, лучше всего написать переменную, в которую мы внесем всю раскладку,
              и в самом конце мы вернем только эту переменную. Хорошо использовать переменную <b>$o</b>,
              сокращенно <b>$output</b>. HTML раскладку можно красиво написать в виде древа расскладки,
              чтобы код воспринимался намного проще другим кодером. Ну и конечно используем <b>.=</b>,
              для того чтобы добавлять код по порядку.</li>
            <li>В <u>foreach</u>, нужно писать логические значения для <b>$key</b> и <b>$value</b>, чтобы избежать путаницы.
            То есть просто переименовать их на что-то более значимое и логическое.</li>
            <li><u>Самое интересное:</u> вывод разных значений с одного асоциативного массива.
              Вот простое решение: <b>$nav[$key]['url']</b>. То есть мы должны обозначить название ключа,
              а оператор выведет его значение.</li>
          </ol>
          <?php // Code Here!
            function navbar_advanced ($nav){
              // $o значит $outcome
              $o = '<ul>';
              foreach ( $nav as $key => $data) { //важно использовать логиеские значения, а не дефолтные
                $o .= '<li>';
                  $o .= '<a href="' . $nav[$key]['url'] . '">' . $nav[$key]['title'] . '</a>';
                $o .= '</li>';
              }
              $o .= '</ul>';
              return $o;
            }

            $navigation = array(
                          array(
                            'url' => 'index.php',
                            'title' => 'Home',
                          ),
                          array(
                            'url' => 'about.php',
                            'title' => 'About Us',
                          ),
                          array(
                            'url' => 'folio.php',
                            'title' => 'Portfolio',
                          ),
                          array(
                            'url' => 'blog.php',
                            'title' => 'Blog',
                          ),
                          array(
                            'url' => 'contacts.php',
                            'title' => 'Contact Us',
                          ),
                        );
            echo navbar_advanced($navigation);
          ?>
        </div>
      </div>
    </section>

  </body>
</html>
