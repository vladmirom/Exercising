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
      <h2>Exercise 1</h2>
      
      <div class="container">

        <?php //variables
        if (isset($_post['distance_km'])) {
          $distance_km = $_POST['distance_km'];
          $time_h = $_POST['time_h'];
          $speed_km = $distance_km / $time_h;

          echo 'Если автомобиль преодолевает ' . $distance_km . ' километров за ' . $time_h . ' часов,
           то скорость движения автомобиля составит ' . $speed_km . ' км/ч.';
        }

        if (isset($_post['distance_m'])) {
          $distance_m = $_POST['distance_m'];
          $time_s = $_POST['time_s'];
          $speed_m = $distance_m / $time_s;

          echo 'Если автомобиль преодолевает ' . $distance_m . ' метров за ' . $time_s . ' секунд,
           то скорость движения автомобиля составит ' . $speed_m . ' м/с.';
        }
        ?>

      </div>
    </section>

  </body>
</html>
