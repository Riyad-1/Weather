<?php
require_once ("WeatherDetails.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Weather Forecast</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <span class="navbar-brand text-white">Manchester Weather Forecast</span>
  </nav>

  <div class="container mt-3">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Provider Name</th>
          <th scope="col">Today's High (C/F)</th>
          <th scope="col">Today's Low (C/F)</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $weatherDetails1->getCurrentWeather("Manchester")->getProviderName()?></td>
          <td><?php echo $weatherDetails1->getCurrentWeather("Manchester")->getHigh().' C / '.(($weatherDetails1->getCurrentWeather("Manchester")->getHigh()*9/5)+32).' F';?></td>
          <td><?php echo $weatherDetails1->getCurrentWeather("Manchester")->getLow().' C / '.(($weatherDetails1->getCurrentWeather("Manchester")->getLow()*9/5)+32).' F'?></td>
          <td><?php echo $weatherDetails1->getCurrentWeather("Manchester")->getSummary()?></td>
        </tr>
        <tr>
          <td><?php echo $weatherDetails2->getCurrentWeather("Manchester")->getProviderName()?></td>
          <td><?php echo $weatherDetails2->getCurrentWeather("Manchester")->getHigh().' C / '.(($weatherDetails2->getCurrentWeather("Manchester")->getHigh()*9/5)+32).' F';?></td>
          <td><?php echo $weatherDetails2->getCurrentWeather("Manchester")->getLow().' C / '.(($weatherDetails2->getCurrentWeather("Manchester")->getLow()*9/5)+32).' F'?></td>
          <td><?php echo $weatherDetails2->getCurrentWeather("Manchester")->getSummary()?></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>