<?php

$sin = "./images/weather_2.jpeg";


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <title>Assignment-3</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body style="background-image:url(<?php echo $sin ?>)">
  <div class="container">
    <h1>Weather Forcast</h1>

    <div class="search m-5">
      <form action="weather.php" method="GET">
        <div class="form-group">
          <label for="city">
            <h4>Enter City</h4>
          </label>
          <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required />
        </div>

        <button type="Enter" class="btn btn-primary">Search</button>
      </form>
    </div>
  </div>
  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>