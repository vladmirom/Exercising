<?php
//Вопросы Диме
//Как выставлять html в определенном месте? Например при валидации формы.
//Чтобы убрать "You are signed out!" при загрузке страницы, использовать сессии?
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lesson 5</title>

    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
  </head>
  <body>
    <section class="container">
      <h2><a href="https://docs.google.com/document/d/1qnC35YpI9qyvRtnLVKJhjjsaSFrZCJYHtj2MRRv7xYM/edit">Lecture 5</a></h2>
      <h2>Exercise 1</h2>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Задание:</h4>
        </div>
        <div class="col-xs-12 col-md-10">
          <p>Делаем сайт из 2 страниц: index, secret.</p>
          <p>На странице index по умолчанию должна выводиться логин форма.</p>
          <p>Так как базы нет, то логин делаем хардкодом - если username === ‘user’ и password === ‘123’</p>
          <p>Если логин детали верны - редиректим на страницу secret. В противном случае - вывести сообщение ‘Login Failed’</p>
          <p>На обоих страницах если юзер залогинен, долно выводиться приветственное сообщение с именем юзера.</p>
          <p>Добавляем третий файл - logout. В нем должна присутсвовать только логика.</p>
          <p>На страницах index, secret - добавить ссылку logout. После вылогинивания, юзера должно кидать на index.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-2">
          <h4>Решение:</h4>
        </div>
        <div class="col-xs-12 col-md-10">

          <?php
              if($_COOKIE['userIsLogedIn'] == 1 ){
                echo '<p class="text-success">Hello ' . $_COOKIE['user'] . '. You are in the system.</p>';
              } else {
                echo '<p class="text-danger">You are now signed out!</p>';
              }
          ?>

            <form class="form-horizontal" action="" method="post">
              <div class="input-group col-sm-3">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-user"></span>
                </span>
                <input type="text" name="username" class="form-control" placeholder="Username">
              </div>
             </br>
              <div class="input-group col-sm-3">
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-lock"></span>
                </span>
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
             </br>

               <?php //Sign-in and -out buttons
                   if($_COOKIE['userIsLogedIn'] == 1 ){
                     echo '<a href="logout.php" role="button" class="btn btn-danger">Sign out</a>';
                   } else {
                     echo '<button type="submit" class="btn btn-success">Sign in</button>';
                   }
               ?>
            </form>
        </div>
      </div>
    </section>

    <?php
      //Проверка форм

      //Функция для чистки значения формы
      function clean($value = "") {
          $value = trim($value); //убирает пробелы
          $value = stripslashes($value); //убирает экранирование
          $value = strip_tags($value); //убирает хтмл и пхп теги
          $value = htmlspecialchars($value); // преобразует специальные символы в хтмл

          return $value;
      }

      //Функция для проверки размера значения формы
      function check_length($value = "", $min, $max) {
          $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
          return !$result;
      }

      //Вытягиваем значения с формы
      isset($_POST['username']) ? $user = $_POST['username'] : $user = null; ;
      isset($_POST['password']) ? $password = $_POST['password'] : $password = null; ;

      //Прогон через функцию clean
      $user = clean($user);
      $password = clean($password);

      //Конец проверки
        if(!empty($user) && !empty($password)) {
          if(check_length($user, 3, 20) && check_length($password, 3, 20)){
            if($user === 'user' && $password === '123'){
              setcookie('userIsLogedIn', 1);
              setcookie('user', 'John');
              echo '<p class="text-success">Welcome ' . key($_COOKIE) . '. You are logined.</p>';
              header ("Location: secret.php");
              exit;
            } else {
              echo '<p class="text-danger">Password or login does not match. Please check your login details.</p>';
            }
          } else {
            echo '<p class="text-warning">Please, check the length of your details, it should not be less than 3 or more than 20 symbols.</p>';
          }
        }
    ?>

  </body>
</html>
