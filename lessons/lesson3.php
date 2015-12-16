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
      <h2>Exercise 1</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Создать индексированный масив с 5 элементами (названия животных).
          С помощью цикла foreach() вывести все ключи и значения элементов массива.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
            $animal = array('dog', 'cat', 'fish', 'elephant', 'jaguar');

            foreach ($animal as $key => $value) {
              echo $key . '</br>';
            }
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
          <p>Выведите все элементы массива, из предыдущего задания, с помощью цикла for().</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
            for ( $i = 0; $i < count($animal); $i++ ) {
              echo $animal[$i] . '</br>';
            }
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
          <p>В массив из предыдущего задания добавьте животное “unicorn” У этого
            элемента должень быть ассоциативный ключ “fantasy_animal”.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
            $animal['fantasy_animal'] = 'unicorn';

             for ( $i = 0; $i < count($animal) - 1; $i++ ) {
               echo $animal[$i] . '</br>';
             }
             echo end($animal);

          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 3.1</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>С помощью foreach() выведите массив животных в виде ХТМЛ таблицы.
            В левой колонке должны быть ключи, в правой - названия животных
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
          echo '<table>';
            foreach ($animal as $key => $value) {
              echo '<tr>' . '<td style="padding: 5px; border: 2px solid black;">';
              echo $key . '</br>';
              echo '</td>' . '<td style="padding: 5px; border: 2px solid black;">';
              echo $value . '</br>';
              echo '</td>' . '</tr>';
            }
          echo '</table>';
          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 3.2</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>С помощью цикла for() заполните пустой массив числами от 1 до 50.
            После этого выведет на экран все числа из массива которые делятся на 3.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
            $arr = array ();
            for ( $i = 0; $i <= 50; $i++ ) {
              if ($i % 3 == 0) {
                echo $i . '</br>';
              }
            }
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
          <p>Нарисовать таблицу умножения с помощью for().</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!

          echo '<table><thead><tr>Multiplication table</tr><tr>';
          //Table head
            for ($i = 1; $i <= 10; $i++) {
              echo '<td style="padding: 5px; border-bottom: 1px solid black;">' . $i . '</td>';
            }
          echo '</tr></thead>';

          //Table body
          for ($i = 1; $i <= 10; $i++) {
            echo '<tr>';
            for ($u = 1; $u <= 10; $u++) {
              echo '<td style="padding: 5px;">' . ($i * $u) . '</td>';
            };
            echo '</tr>';
          }
          echo '</table>';

          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 3.2</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Вводится слово, выводится его перевертыш. Например, вводим "elephant" получаем "tnahpele".
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
          echo '<h4>Вариант 1</h4>';
          $fruits = str_split('apple');
          shuffle($fruits);

          for ($i = 0; $i < count($fruits); $i++) {
            echo $fruits[$i];
          }
          echo '<hr>';

          echo '<h4>Вариант 2</h4>';
          $fruits = array ('apple', 'peach', 'plum', 'apricot');

          for ($i = 0; $i < count($fruits); $i++) {
            echo str_shuffle($fruits[$i]) . '</br>';
          }
          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 6.1</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Ниже представлены четыре пароля, зашифрованных методом MD5. Необходимо их расшифровать перебором символов.
          N.B.: Пароли включают только английские буквы в нижней раскладке, а длина пароля не прывешает <b>одного</b> символа.</p>

          <p>
              0cc175b9c0f1b6a831c399e269772661<br>
              8ce4b16b22b58894aa86c421e8759df3<br>
              415290769594460e2e485922904f345d<br>
              fbade9e36a3f36d3d676c1b808451dd7<br>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
          $alphabet = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l',
          'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

          for ($i = 0; $i < count($alphabet); $i++) {
            $symbol = md5( $alphabet[$i] );

            if ($symbol == '0cc175b9c0f1b6a831c399e269772661') {
              echo $alphabet[$i] . '<br>';
            } elseif ($symbol == '8ce4b16b22b58894aa86c421e8759df3') {
                echo $alphabet[$i] . '<br>';
            } elseif ($symbol == '415290769594460e2e485922904f345d') {
                echo $alphabet[$i] . '<br>';
            } elseif ($symbol == 'fbade9e36a3f36d3d676c1b808451dd7') {
                echo $alphabet[$i] . '<br>';
            }
          }
          ?>
        </div>
      </div>
    </section>

    <section class="container">
      <h2>Exercise 6.2</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Ниже представлены четыре пароля, зашифрованных методом MD5. Необходимо их расшифровать перебором символов.
            N.B.: Пароли включают только английские буквы в нижней раскладке, а длина пароля не прывешает <b>четырёх</b> символов.</p>

          <p>
            ee11cbb19052e40b07aac0ca060c23ee</br>
            dd97813dd40be87559aaefed642c3fbb</br>
            8dbc672497bdc46f88e864bb1121232c</br>
            3e10f8c809242d3a0f94c18e7addb866</br>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <?php // Code Here!
          $alphabet = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l',
          'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');


            for ($i = 0; $i < count($alphabet); $i++) {
              $symbol =  $alphabet[$i] ;
              $password = md5($symbol);
              //echo $password . '<br>';

              for ($u = 0; $u < count($alphabet); $u++) {
                $symbol =  $alphabet[$i] . $alphabet[$u];
                $password = md5($symbol);
                //echo $password . '<br>';

                for ($a = 0; $a < count($alphabet); $a++) {
                  $symbol =  $alphabet[$i] . $alphabet[$u] . $alphabet[$a];
                  $password = md5($symbol);
                  //echo $password . '<br>';

                  for ($z = 0; $z < count($alphabet); $z++) {
                    $symbol =  $alphabet[$i] . $alphabet[$u] . $alphabet[$a] . $alphabet[$z];
                    $password = md5($symbol);
                    //echo $password . '<br>';

                    if ($password == 'ee11cbb19052e40b07aac0ca060c23ee') {
                        echo $symbol . '<br>';
                    } elseif ($password == 'dd97813dd40be87559aaefed642c3fbb') {
                        echo $symbol . '<br>';
                    } elseif ($password == '8dbc672497bdc46f88e864bb1121232c') {
                        echo $symbol . '<br>';
                    } elseif ($password == '3e10f8c809242d3a0f94c18e7addb866') {
                        echo $symbol . '<br>';
                    }
                  }
                }
              }
            }
          ?>
        </div>
      </div>
    </section>
  </body>
</html>
