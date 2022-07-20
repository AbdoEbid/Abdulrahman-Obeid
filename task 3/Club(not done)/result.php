<?php
session_start();
$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <h1 class="text-center text-success mt-5">CLUB</h1>
      <div class="card border-success mb-3 mt-5">
        <div class="card-header bg-transparent border-success"><?= "<strong> Subscriber </strong>" .  $_SESSION['username'] ?></div>
        <div class="card-body text-success">
          <table class="table table-success">
            <thead>
              <tr>
                <th scope="col">Subscriber</th>


              </tr>
            </thead>
            <tbody>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>