<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $name = $_POST["name"];
  $loan = $_POST["loan"];
  $years = $_POST["years"];


  if ($years <= 3) {
    $interestPerYear = $loan * .1;
  } else  $interestPerYear = $loan * 0.15;

  $totalInterest = $interestPerYear * $years;
  $totalLoan = $loan + $totalInterest;
  $monthlyLone = $totalLoan / ($years * 12);
}
if (isset($_POST['submit'])) {
  $table = "<table class='table table-success table-striped mt-5'>
  <thead>
      <tr>
          <th scope='col'>User name</th>
          <th scope='col'>Interest rate</th>
          <th scope='col'>Total Loan</th>
          <th scope='col'>Monthly</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td scope='row'>" . $name . "</td>
          <td>" . $totalInterest . "</td>
          <td>" . $totalLoan . "</td>
          <td>" . $monthlyLone . "</td>
      </tr>
  </tbody>
  </table>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <form class="col-5 offset-3 " method="post">
        <h1 class="text-center text-success mt-5">Bank</h1>
        <div class="mb-3">
          <label for="Name" class="form-label">Your Name</label>
          <input type="text" name="name" class="form-control" id="Name" required>
          <?php
          $errors['nameRequired'] ?? " " ?>
        </div>
        <div class="mb-3">
          <label for="Loan" class="form-label">The Loan</label>
          <input type="number" class="form-control" id="Loan" name="loan" required>
        </div>
        <div class="mb-3">
          <label for="Years" class="form-label">Loan Years</label>
          <input type="number" class="form-control" id="Years" name="years" required>

        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>

      </form>
      <?php echo $table ?? ''; ?>
    </div>
  </div>

</body>

</html>