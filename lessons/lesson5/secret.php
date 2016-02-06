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
     <?php
     //variables
     if($_COOKIE['userIsLogedIn'] == 1) {
       echo '<p class="text-success">Welcome ' . $_COOKIE['user'] . '. You are logined.</p>';
     } else {
       echo '<p class="text-danger">You are not logined.</p>';
     }
      ?>
      <a href="logout.php" role="button" class="btn btn-danger">Sign out</a>
   </body>
 </html>
